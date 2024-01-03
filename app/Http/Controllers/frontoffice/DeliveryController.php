<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    //
    public function dalivery(){
        return view('frontend.pages.delivery_status_order.delivery_status');
    }
}
