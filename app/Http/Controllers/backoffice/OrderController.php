<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\BerproductMonthly;
use App\Models\Category;
use App\Models\Order;
use App\Models\PrepaidSim;
use App\Models\TravelSim;
use Exception;
use Illuminate\Http\Request;

class OrderController extends Controller
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
}
