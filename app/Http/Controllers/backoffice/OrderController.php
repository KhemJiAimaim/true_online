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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use stdClass;
class OrderController extends BaseController
{
    public function index(Request $request)
    {
        try {
            $orders = Order::with('orderItems')->orderBy('created_at', 'DESC')->get();
            $berluckyPhone = [];

            $orders->each(function ($order) use (&$berluckyPhone) {
                $phoneArr = $order->orderItems->filter(function ($item) {
                    return $item->type_id === 3;
                })->pluck('product_name')->toArray();

                $berluckyPhone = array_merge($berluckyPhone, $phoneArr);
            });

            $berlucky = BerproductMonthly::whereIn('product_phone', $berluckyPhone)->get();
            $travelsims = TravelSim::get();
            $prepaidsims = PrepaidSim::get();
            $cates = Category::whereIn('id', [3, 4, 6])->get();

            if ($orders) {
                foreach ($orders as $order) {
                    $item = $order->orderItems;
                    $productArr = [];

                    if ($item) {
                        foreach ($item as $i) {
                            $type = $i->type_id;
                            $product = null;

                            if ($type === 3) {
                                $product = $berlucky->filter(function ($ber) use ($i) {
                                    return $ber->product_phone === $i->product_name;
                                })->first();

                                if ($product) {
                                    $product->id = $product->product_id;
                                    $product->title = $product->product_phone;
                                    $product->details = $product->product_comment;
                                } else {
                                    $product->id = $i->product_id;
                                    $product->title = $i->product_name;
                                    $product->details = "";
                                }
                            } else if ($type === 4) {
                                $product = $prepaidsims->filter(function ($sim) use ($i) {
                                    return $sim->id === $i->product_id;
                                })->first();
                            } else if ($type === 6) {
                                $product = $travelsims->filter(function ($sim) use ($i) {
                                    return $sim->id === $i->product_id;
                                })->first();
                            }

                            $cate = $cates->filter(function ($sim) use ($type) {
                                return $sim->id === $type;
                            })->first();

                            $product->amount = $product->quantity;
                            $product->item_id = $i->id;
                            $product->cate_name = $cate->cate_title;
                            $product->type_id = $type;
                            $product->discount = $i->discount;
                            $product->quantity = $i->quantity;
                            $product->price = $i->product_price;

                            $productArr[] = $product;
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

    public function orderPending(Request $request)
    {
        try {
            return response([
                'message' => 'ok',
                'status' => true,
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

    public function createOrderAdmin(Request $request)
    {

        try {
            DB::beginTransaction();

            $adminAccount = $this->getAuthUser();
            $params = $request->all();

            $newOrder = Order::create([
                'firstname' => $params['name'],
                'lastname' => "",
                'email' => $params['email'],
                'phone_number' => $params['phone'],
                'zip_code' => $params['zipcode'],
                'district' => $params['district'],
                'subdistrict' => $params['subdistrict'],
                'province' => $params['province'],
                'address' => $params['address'],
                'tracking_number' => $params['tracking_number'],
                'order_carrier' => $params['order_carrier'],
                'total_price' => $params['total_price'],
                'shipping_cost' => $params['shipping_cost'] || 0,
                'order_status' => $params['order_status'],
                'update_by' => $adminAccount->account_id, // เก็บ ID Admin ที่ Update
            ]);

            $newOrder->update([
                'order_number' => 'TRUEONLINE-' . $newOrder->id,
            ]);

            $product_values = [];
            if ($params['product_items']) {
                foreach ($params['product_items'] as $item) {
                    $value = [
                        'order_id' => $newOrder->id,
                        'type_id' => $item["type_id"],
                        'product_cate_id' => $item["product_cate_id"],
                        'product_id' => $item["product_id"],
                        'product_name' => $item["title"],
                        'product_price' => $item["product_price"],
                        'quantity' => $item["quantity"],
                        'discount' => $item["discount"],
                        'thumbnail' => $item["thumbnail"],

                    ];

                    $product_values[] = $value;

                    if ($newOrder->order_status === "success") {
                        if ($item['type_id'] === 3) {
                            BerproductMonthly::where('product_id', $item['product_id'])->update([
                                'product_sold' => $request->order_status === "success" ? 'yes' : 'no',
                            ]);
                        } else if ($item['type_id'] === 4) {
                            PrepaidSim::where('id', $item['product_id'])
                                ->increment('quantity_sold', $item['quantity'])
                                ->decrement('quantity', $item['quantity']);
                        } else if ($item['type_id'] === 6) {
                            TravelSim::where('id', $item['product_id'])
                                ->increment('quantity_sold', $item['quantity'])
                                ->decrement('quantity', $item['quantity']);
                        }
                    }
                }
            }

            OrderItem::insert($product_values);

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Create order success.',
                'newOrder' => $newOrder,
            ], 201);
        } catch (Exception $e) {
            DB::rollBack();
            return response([
                'message' => 'server error',
                'status' => false,
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 501);
        }
    }

    public function getProductData(Request $request)
    {
        try {

            $berlucky = BerproductMonthly::where('product_sold', 'no')->orderBy('product_price', 'ASC')->get();
            $travelsim = TravelSim::where('quantity', '>', 0)->orderBy('price', 'ASC')->get();
            $prepaidsim = PrepaidSim::where('quantity', '>', 0)->orderBy('price', 'ASC')->get();

            if ($berlucky) {
                foreach ($berlucky as $ber) {
                    $ber->id = $ber->product_id;
                    $ber->title = $ber->product_phone;
                    $ber->price = $ber->product_price;
                    $ber->discount = $ber->product_discount;
                    $ber->p_cate_id = NULL;
                }
            }

            if ($travelsim) {
                foreach ($travelsim as $ber) {
                    $ber->amount = $ber->quantity;
                    $ber->title = $ber->title . " " . $ber->price;
                    $ber->p_cate_id = $ber->travel_cate_id;
                    $ber->discount = 0;
                }
            }

            if ($prepaidsim) {
                foreach ($prepaidsim as $ber) {
                    $ber->amount = $ber->quantity;
                    $ber->title = $ber->title . " " . $ber->price;
                    $ber->p_cate_id = $ber->prepaid_cate_id;
                    $ber->discount = 0;
                }
            }

            return response([
                'message' => 'ok',
                'status' => true,
                'productData' => [
                    'berlucky' => $berlucky,
                    'travelsim' => $travelsim,
                    'prepaidsim' => $prepaidsim,
                ],
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
            DB::beginTransaction();

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
                        BerproductMonthly::where('product_phone', $item['product_phone'])->update([
                            'product_sold' => $request->order_status === "success" ? 'yes' : 'no',
                        ]);
                    }

                    if ($request->order_status !== $order->order_status) {
                        if ($request->order_status === "success") {
                            if ($item['type_id'] === 4) {
                                PrepaidSim::where('id', $item['id'])->update([
                                    'quantity_sold' => DB::raw('quantity_sold + ' . (int)$item['quantity']),
                                    'quantity' => DB::raw('quantity - ' . (int)$item['quantity']),
                                ]);

                                $prepaidSim = PrepaidSim::find($item['id']);

                                if ($prepaidSim->quantity < 0) {
                                    $prepaidSim->quantity = 0;
                                    $prepaidSim->save();
                                }
                            }

                            if ($item['type_id'] === 6) {
                                TravelSim::where('id', $item['id'])->update([
                                    'quantity_sold' => DB::raw('quantity_sold + ' . (int)$item['quantity']),
                                    'quantity' => DB::raw('quantity - ' . (int)$item['quantity']),
                                ]);

                                $travelSim = TravelSim::find($item['id']);

                                if ($travelSim->quantity < 0) {
                                    $travelSim->quantity = 0;
                                    $travelSim->save();
                                }
                            }
                        } else if ($request->order_status === "pending") {
                            if ($item['type_id'] === 4) {
                                $prepaidSim = PrepaidSim::where('id', $item['id'])->first();
                                // $sold = $prepaidSim->quantity_sold;
                                // $prepaidSim->quantity_sold = $sold >= (int)$item['quantity_sold'] ? ($sold - (int)$item['quantity_sold']) : 0;
                                $prepaidSim->quantity_sold -= (int)$item['quantity'];
                                $prepaidSim->quantity += (int)$item['quantity'];
                                $prepaidSim->save();
                            }

                            if ($item['type_id'] === 6) {
                                $travelSim = TravelSim::where('id', $item['id'])->first();
                                // $sold = $travelSim->quantity_sold;
                                // $travelSim->quantity_sold = $sold >= (int)$item['quantity_sold'] ? ($sold - (int)$item['quantity_sold']) : 0;
                                $travelSim->quantity_sold -= (int)$item['quantity'];
                                $travelSim->quantity += (int)$item['quantity'];
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

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Update order success.',
                'updated' => $updated,
            ], 201);
        } catch (Exception $e) {
            DB::rollBack();
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
            DB::beginTransaction();

            $adminAccount = $this->getAuthUser();

            $order = Order::where('id', $order_id)->with("orderItems")->first();

            if ($order->order_status === "success") {
                foreach ($order->orderItems as $item) {
                    if ($item->type_id === 3) {
                        BerproductMonthly::where('product_phone', $item->product_name)->update([
                            'product_sold' => 'no',
                        ]);
                    } else if ($item->type_id === 4) {
                        PrepaidSim::where('id', $item->product_id)->update([
                            'quantity_sold' => DB::raw('quantity_sold - ' . (int)$item->quantity),
                            'quantity' => DB::raw('quantity + ' . (int)$item->quantity),
                        ]);
                    } else if ($item->type_id === 6) {
                        TravelSim::where('id', $item->product_id)->update([
                            'quantity_sold' => DB::raw('quantity_sold - ' . (int)$item->quantity),
                            'quantity' => DB::raw('quantity + ' . (int)$item->quantity),
                        ]);
                    }

                    PrepaidSim::where('id', $item->product_id)
                        ->where('quantity_sold', '<', 0)
                        ->update(['quantity_sold' => 0]);
                    TravelSim::where('id', $item->product_id)
                        ->where('quantity_sold', '<', 0)
                        ->update(['quantity_sold' => 0]);
                }
            }

            Order::where('id', $order_id)->delete();
            OrderItem::where('order_id', $order_id)->delete();

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Order has been deleted successfully.',
            ], 200);
        } catch (Exception $e) {
            DB::rollBack();
            return response([
                'message' => 'server error',
                'status' => false,
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 501);
        }
    }
}
