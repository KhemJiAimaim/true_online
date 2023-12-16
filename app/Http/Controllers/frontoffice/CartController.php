<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Arr;
use App\Models\BerproductMonthly;
use App\Models\TravelSim;

class CartController extends Controller
{
    //
    public function cartproduct_page(Request $request) {
        $cartList = Session::get('cart_list', []);
        // dd($cartList['items']);
        // $data = array();
        // foreach($cartList['items'] as $item) {
        //     // dd($item);
        //     $data['index'] = $item;
        // }
        // foreach ($cartList['items'] as $typeProduct => $items) {
        //     // ทำสิ่งที่คุณต้องการกับ $typeProduct และ $items ที่ได้
        //     // $typeProduct คือ index ของ type_product
        //     // dd($items);
        //     // $items คือ array ที่มี 'items', 'amount' เป็น key
        //     $itemsArray[$typeProduct] = $items; // เข้าถึง array 'items'
            
        //     // ทำสิ่งที่คุณต้องการกับ $itemsArray
        //     // เช่น แยกต่าง index 6 กับ 3
        // }
        $berMonthlys = [];
        $prepaid_sim = [];
        $travelSims = [];

        foreach($cartList as $list){
            if (isset($list[3])) {
                $id = array_column($list[3], 'id');
                $berMonthlys = BerproductMonthly::whereIn('product_id', $id)->get();
            } 

            if (isset($list[4])){
                $id = array_column($list[4], 'id');
                // dd($id);
                // dd($list[4]);
                $prepaid_sim = $list[4];
            }

            if (isset($list[6])){
                $id = array_column($list[6], 'id');
                $travelSims = TravelSim::whereIn('id', $id)->get();
                foreach ($travelSims as $travelSim) {
                    $id = $travelSim->id;
                
                    // ค้นหาข้อมูลที่ตรงกับ $id ใน $list[6]
                    $matchingItem = collect($list[6])->firstWhere('id', $id);
                
                    // ถ้ามีข้อมูลที่ตรงกัน
                    if ($matchingItem) {
                        // เพิ่มข้อมูลใน $list[6] เข้ากับ $travelSim
                        $travelSim->option = $matchingItem['option'];
                        $travelSim->quantity = $matchingItem['quantity'];
                    }
                }

            }
        }
        
            
        // dd($prepaid_sim);
        return view('frontend.pages.cart_order.cart_product', compact('berMonthlys','prepaid_sim','travelSims'));
    }

    public function addproduct_to_cart(Request $request, $id) {
        $typeProduct = $request->input('type_product');
        $cartList = Session::get('cart_list', []);
        
        // ตรวจสอบว่ามี index สำหรับ type_product หรือไม่
        if (!isset($cartList['items'][$typeProduct])) {
            $cartList['items'][$typeProduct] = [];
        }
        
        // ตรวจสอบว่า $id นี้มีอยู่ใน items หรือไม่
        $existingProductKey = array_search($id, array_column($cartList['items'][$typeProduct], 'id'));
        
        if ($existingProductKey !== false) {
            // กรณีที่ $id นี้มีอยู่แล้ว
            if ($typeProduct != 3) {
                // เพิ่มจำนวนสินค้าใน type_product นั้น
                $cartList['items'][$typeProduct][$existingProductKey]['quantity'] += 1;
    
                // เพิ่ม amount ทั้งหมด
                $cartList['amount'] = isset($cartList['amount']) ? $cartList['amount'] + 1 : 1;
    
                // อัปเดต session ด้วยข้อมูลใหม่
                Session::put('cart_list', $cartList);
            }
    
            return response()->json([
                'status' => 'success',
                'data' => $cartList
            ], 200);
        } 
        
        // เพิ่ม $id เข้าไปใน index ของ type_product นั้น
        $cartList['items'][$typeProduct][] = [
            'id' => $id,
            'quantity' => 1,
            'option' => 0,
        ];
    
        // เพิ่มจำนวนสินค้าใน type_product นั้น
        $cartList['amount'] = isset($cartList['amount']) ? $cartList['amount'] + 1 : 1;
    
        // อัปเดต session ด้วยข้อมูลใหม่
        Session::put('cart_list', $cartList);
    
        return response()->json([
            'status' => 'success',
            'data' => $cartList
        ], 200);
    }
    

    public function clearCart(Request $request) {
        // ลบข้อมูล session ทั้งหมด
        $request->session()->flush();
    
        // หรือถ้าคุณต้องการลบเฉพาะ key ที่กำหนด
        // $request->session()->forget('cart_list');
    
        return response()->json([
            'status' => 'success',
            'message' => 'Cart cleared successfully'
        ], 200);
    }

    
}
