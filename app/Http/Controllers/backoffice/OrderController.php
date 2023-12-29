<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\BerproductMonthly;
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

                    if ($item) {
                        foreach ($item as $i) {
                            $type = $i->type_id;
                            $product = null;

                            if ($type === 3) {
                                $product = BerproductMonthly::where('product_id', $i->product_id)->get();
                            } else if ($type === 4) {
                                $product = PrepaidSim::where('id', $i->product_id)->get();
                            } else if ($type === 6) {
                                $product = TravelSim::where('id', $i->product_id)->get();
                            }

                            $i->product_details = $product;
                        }
                    }
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
