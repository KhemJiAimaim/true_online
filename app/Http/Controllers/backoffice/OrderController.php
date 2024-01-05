<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\BerproductMonthly;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\PrepaidSim;
use App\Models\TravelSim;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends BaseController
{
    public function index(Request $request)
    {
        try {
            $orders = Order::with('orderItems')->orderBy('created_at', 'DESC')->get();

            if ($orders) {
                foreach ($orders as $order) {
                    $item = $order->orderItems;
                    $productArr = [];

                    if ($item) {
                        foreach ($item as $i) {
                            $type = $i->type_id;
                            $product = null;

                            if ($type === 3) {
                                $product = BerproductMonthly::where('product_id', $i->product_id)->get();
                                if ($product) {
                                    $product[0]->id = $product[0]->product_id;
                                    $product[0]->title = $product[0]->product_phone;
                                    $product[0]->price = $product[0]->product_price;
                                    $product[0]->details = $product[0]->product_comment;
                                }
                            } else if ($type === 4) {
                                $product = PrepaidSim::where('id', $i->product_id)->get();
                            } else if ($type === 6) {
                                $product = TravelSim::where('id', $i->product_id)->get();
                            }

                            $cate = Category::where('id', $type)->first();
                            $product[0]->item_id = $i->id;
                            $product[0]->cate_name = $cate->cate_title;
                            $product[0]->type_id = $type;
                            $product[0]->discount = $i->discount;
                            $product[0]->quantity = $i->quantity;

                            $productArr[] = $product[0];
                        }
                    }

                    $order->product_items = $productArr;
                }
            }

            return response([
                'message' => 'ok',
                'status' => true,
                'orders' => $orders,
                'order_pending' => Order::where('order_status', 'pending')->count(),
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 500);
        }
    }

    public function shippingData(Request $request)
    {
        try {

            $adminAccount = $this->getAuthUser();
            $shippingData = Order::where('order_status', 'success')->orderBy('updated_at', 'DESC')->get();

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Get shipping data success.',
                'shippingData' => $shippingData,
                'order_pending' => Order::where('order_status', 'pending')->count(),
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'server error',
                'status' => false,
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 501);
        }
    }

    public function updateOrderAdmin(Request $request, $order_id)
    {

        try {
            $adminAccount = $this->getAuthUser();
            $product_items = $request->product_items;
            $order = Order::where('id', $order_id)->first();

            if (!$order) {
                return response([
                    'message' => 'error',
                    'status' => false,
                    'description' => 'Order not found!'
                ], 404);
            }

            if ($request->itemDelete) {
                OrderItem::whereIn('id', $request->itemDelete)->delete();
            }

            if ($product_items) {
                foreach ($product_items as $key => $item) {
                    OrderItem::where(['order_id' => $order_id, 'id' => $item['item_id']])->update([
                        'quantity' => $item['quantity']
                    ]);

                    if ($item['type_id'] === 3) {
                        BerproductMonthly::where('product_id', $item['product_id'])->update([
                            'product_sold' => $request->order_status === "success" ? 'yes' : 'no',
                        ]);
                    }

                    if ($request->order_status !== $order->order_status) {
                        if ($request->order_status === "success") {
                            if ($item['type_id'] === 4) {
                                $prepaidSim = PrepaidSim::where('id', $item['id'])->update([
                                    'quantity_sold' => $item['quantity_sold']
                                ]);
                            }

                            if ($item['type_id'] === 6) {
                                $travelSim = TravelSim::where('id', $item['id'])->update([
                                    'quantity_sold' => $item['quantity_sold']
                                ]);
                            }
                        } else if ($request->order_status === "pending") {
                            if ($item['type_id'] === 4) {
                                $prepaidSim = PrepaidSim::where('id', $item['id'])->first();
                                $sold = $prepaidSim->quantity_sold;
                                $prepaidSim->quantity_sold = $sold >= (int)$item['quantity_sold'] ? ($sold - (int)$item['quantity_sold']) : 0;
                                $prepaidSim->save();
                            }

                            if ($item['type_id'] === 6) {
                                $travelSim = TravelSim::where('id', $item['id'])->first();
                                $sold = $travelSim->quantity_sold;
                                $travelSim->quantity_sold = $sold >= (int)$item['quantity_sold'] ? ($sold - (int)$item['quantity_sold']) : 0;
                                $travelSim->save();
                            }
                        }
                    }
                }
            }

            $order->order_status = $request->order_status;
            $order->tracking_number = $request->tracking_number;
            $order->order_carrier = $request->order_carrier;
            $order->update_by = $adminAccount->account_id; // เก็บ ID Admin ที่ Update
            $order->total_price = $request->total_price_update;
            $order->save();

            $updated = Order::where('id', $order_id)->with('orderItems')->first();

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Update order success.',
                'updated' => $updated,
            ], 201);
        } catch (Exception $e) {
            return response([
                'message' => 'server error',
                'status' => false,
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 501);
        }
    }


    public function deleteOrder($order_id)
    {
        try {

            $adminAccount = $this->getAuthUser();

            Order::where('id', $order_id)->delete();
            OrderItem::where('order_id', $order_id)->delete();

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Order has been deleted successfully.',
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'server error',
                'status' => false,
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 501);
        }
    }
}
