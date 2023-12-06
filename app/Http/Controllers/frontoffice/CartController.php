<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function cartproduct_page(Request $request) {
        // dd($request->all());
        // if($request->inpu)
        return view('frontend.pages.cart_order.cart_product');
    }
}
