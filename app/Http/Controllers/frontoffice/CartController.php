<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Arr;
use App\Models\BerproductMonthly;
use App\Models\PrepaidCategory;
use App\Models\PrepaidSim;
use App\Models\TravelSim;

class CartController extends Controller
{
    //
    public function cartproduct_page(Request $request) {
        $cartList = Session::get('cart_list', []);
        // dd($cartList);
        $berMonthlys = [];
        $prepaid_cate = [];
        $travelSims = [];

        foreach($cartList as $list){
            if (isset($list[3])) {
                $id = array_column($list[3], 'id');
                $berMonthlys = BerproductMonthly::whereIn('product_id', $id)->get();
            } 

            if (isset($list[4])){
                $id_cate = array_column($list[4], 'id');
                $prepaid_id = array_column($list[4], 'prepaid_id');

                $prepaid_cate = PrepaidCategory::select('*')
                    ->whereIn('id', $id_cate)
                    ->where('display', true)
                    ->where('delete_status', false)
                    ->orderBy('priority')
                    ->get();
                $prepaidSims = PrepaidSim::whereIn('id', $prepaid_id)
                    ->where('display', true)
                    ->where('delete_status', false)
                    ->get();

                foreach($prepaid_cate as $prepaid) {
                    $id = $prepaid->id;
                    $matchingItem = collect($list[4])->firstWhere('id', $id);
                    if ($matchingItem) {
                        $prepaid->quantity = $matchingItem['quantity'];
                        foreach($prepaidSims as $item) {
                            if($matchingItem['prepaid_id'] == $item->id){
                                $prepaid->prepaid_sim = $item;
                            }
                        }
                    }
                }
                // dd($prepaid_cate);
            }

            if (isset($list[6])){
                $id = array_column($list[6], 'id');
                $travelSims = TravelSim::whereIn('id', $id)->get();
                foreach ($travelSims as $travelSim) {
                    $id = $travelSim->id;
                
                    // ค้นหาข้อมูลที่ตรงกับ $id ใน $list[6]
                    $matchingItem = collect($list[6])->firstWhere('id', $id);
                
                    if ($matchingItem) {
                        $travelSim->option = $matchingItem['option'];
                        $travelSim->quantity = $matchingItem['quantity'];
                    }
                }

            }
        }
        
        return view('frontend.pages.cart_order.cart_product', compact('berMonthlys','prepaid_cate','travelSims'));
    }

    public function addproduct_to_cart(Request $request, $id) {
        $typeProduct = $request->input('type_product');
        $quantity = ($request->input('quantity')) ? $request->input('quantity') : 1;
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
                $cartList['amount'] = isset($cartList['amount']) ? $cartList['amount'] + $quantity : 1;
                Session::put('cart_list', $cartList);
            }
    
            return response()->json([
                'status' => 'success',
                'data' => $cartList
            ], 200);
        } 
        
        // เพิ่ม $id เข้าไปใน index ของ type_product นั้น
        if ($typeProduct == 3) {
            $cartList['items'][$typeProduct][] = [
                'id' => $id,
                'quantity' => 1,
            ];
        } else if ($typeProduct == 4) {
            $cartList['items'][$typeProduct][] = [
                'id' => $id,
                'quantity' => $quantity,
                'prepaid_id' => $request->input('data_prepaid'),
            ];
        } else if ($typeProduct == 6) {
            $option = ($request->input('option'))?$request->input('option'):0;
            $cartList['items'][$typeProduct][] = [
                'id' => $id,
                'quantity' => 1,
                'option' => $option,
            ];
        }
    
        $cartList['amount'] = isset($cartList['amount']) ? $cartList['amount'] + $quantity : $quantity;
        Session::put('cart_list', $cartList);
    
        return response()->json([
            'status' => 'success',
            'data' => $cartList
        ], 200);
    }
    
    public function removeItem(Request $request) {
        $data_id = $request->input('data_id');
        $data_type = $request->input('data_type');
        $cartList = Session::get('cart_list', []);
        // dd($cartList);

        foreach ($cartList['items'][$data_type] as $index => &$type) {
            // ถ้าเจอ data_id ที่ต้องการลบ
            if ($type['id'] === $data_id) {
                // ลบ item ที่ต้องการ
                $cartList['amount'] -= $type['quantity'];
                unset($cartList['items'][$data_type][$index]);
        
                // ถ้าหลังจากลบ item แล้วไม่มี item อยู่แล้ว
                if (empty($cartList['items'][$data_type])) {
                    // ลบ data_type ทั้งหมดออก
                    unset($cartList['items'][$data_type]);
                }
        
                // ออกจากลูปเมื่อเจอ item และทำการลบ
                break;
            }
        }
        // dd($cartList['items'][$data_type]);
        // วนลูป items ใน cartList
        Session::put('cart_list', $cartList);

        return response()->json([
            'status' => 'success',
            'message' => 'item has remove successfully'
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
