<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use App\Models\BerproductMonthly;
use Illuminate\Http\Request;
use App\Models\Order;

class DeliveryController extends Controller
{
    //
    public function dalivery($search = null) {
        if ($search) {
            $orders = Order::where('order_status', 'success')
                ->where(function ($query) use ($search) {
                    $query->where('firstname', 'LIKE', "%$search%")
                        ->orWhere('lastname', 'LIKE', "%$search%")
                        ->orWhere('tracking_number', 'LIKE', "%$search%");
                })
                ->orWhereHas('orderItems', function ($query) use ($search) {
                    $query->where('product_name', 'LIKE', "%$search%");
                })
                ->paginate(10);
                
        } else {
            $orders = Order::where('order_status', 'success')->with("orderItems")->paginate(10);
            // foreach($orders as $order){
            //    foreach($order->orderItems as $item){
            //     if($item['type_id'] === 3){
            //         $berlucky = BerproductMonthly::where('product_id' , $item['product_id'])->first();
            //         $item->product_detail=$berlucky;
            //     }
            //    }
            // }

        }

        return view('frontend.pages.delivery_status_order.delivery_status', compact('orders'));
    }
}
