<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class DeliveryController extends Controller
{
    //
    public function dalivery($search = null) {
        // dd($search);
        if ($search) {
            $orders = Order::where('order_status', 'pending')
                ->where(function ($query) use ($search) {
                    $query->where('firstname', 'LIKE', "%$search%")
                        ->orWhere('lastname', 'LIKE', "%$search%")
                        ->orWhere('phone_number', 'LIKE', "%$search%");
                })
                ->paginate(2); // กำหนดจำนวนรายการต่อหน้าที่ต้องการแสดง
        } else {
            $orders = Order::where('order_status', 'pending')->paginate(2);
        }
    
        return view('frontend.pages.delivery_status_order.delivery_status', compact('orders'));
    }
}
