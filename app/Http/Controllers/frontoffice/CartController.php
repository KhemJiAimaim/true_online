<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    //
    public function cartproduct_page(Request $request) {
        // dd($request->all());
        // if($request->inpu)
        return view('frontend.pages.cart_order.cart_product');
    }

    public function addproduct_to_cart(Request $request, $id) {
        $typeProduct = $request->input('type_product');
        $cartList = Session::get('cart_list', []);
    
        // ตรวจสอบว่ามี index สำหรับ type_product หรือไม่
        if (!isset($cartList[$typeProduct])) {
            $cartList[$typeProduct] = [];
        }
    
        // เพิ่ม $id เข้าไปใน index ของ type_product นั้น
        array_push($cartList[$typeProduct], $id);
    
        // อัปเดต session ด้วยข้อมูลใหม่
        Session::put('cart_list', $cartList);
    
        return response()->json([
            'status' => 'success',
            'data' => $cartList
        ], 200);
    }
}
