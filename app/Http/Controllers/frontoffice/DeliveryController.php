<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class DeliveryController extends Controller
{
    //
    public function dalivery($search = null) {
        if ($search) {
            $orders = Order::where('order_status', 'pending')
                ->where(function ($query) use ($search) {
                    $query->where('firstname', 'LIKE', "%$search%")
                        ->orWhere('lastname', 'LIKE', "%$search%")
                        ->orWhere('tracking_number', 'LIKE', "%$search%")
                        ->orWhere('phone_number', 'LIKE', "%$search%");
                })
                ->paginate(10);
        } else {
            $orders = Order::where('order_status', 'success')->paginate(10);
        }
    
        return view('frontend.pages.delivery_status_order.delivery_status', compact('orders'));
    }
}
