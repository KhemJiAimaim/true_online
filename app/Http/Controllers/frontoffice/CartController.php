<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
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
        $prepaidSims = [];
        $travelSims = [];

        foreach($cartList as $list){
            if (isset($list[3])) {
                $id = array_column($list[3], 'id');
                $berMonthlys = BerproductMonthly::whereIn('product_id', $id)
                ->select('*', DB::raw('3 as type_cate'))
                ->get();
            } 

            if (isset($list[4])){
                $prepaid_id = array_column($list[4], 'id');
                // $prepaid_id = array_column($list[4], 'prepaid_id');
                
                $prepaidSims = PrepaidSim::whereIn('id', $prepaid_id)
                    ->where('display', true)
                    ->where('delete_status', false)
                    ->get();

                foreach($prepaidSims as $sim) {
                    $id = $sim->id;
                    $prepaid_cate = PrepaidCategory::select('*')
                        ->where('id', $sim->prepaid_cate_id)
                        ->where('display', true)
                        ->where('delete_status', false)
                        ->orderBy('priority')
                        ->first();
                    $matchingItem = collect($list[4])->firstWhere('id', $id);
                    if ($matchingItem) {
                        $sim->quantity = $matchingItem['quantity'];
                        $sim->prepaid_cate_id = $prepaid_cate;
                    }
                } 
            }

            if (isset($list[6])){
                $ids = array_column($list[6], 'id');

                foreach ($ids as $id) {
                    $sim = TravelSim::find($id);
                
                    if ($sim) {
                        // หากพบ TravelSim จาก id
                        $data_matching = current(array_filter($list[6], function ($item) use ($id) {
                            return $item['id'] == $id;
                        }));
                
                        // dd($data_matching);
                        if ($data_matching) {
                            // นำข้อมูลจาก $data_matching ไปกำหนดค่าให้ $sim
                            $sim->option = $data_matching['option'];
                            $sim->quantity = $data_matching['quantity'];
                
                            // เพิ่ม $sim เข้าไปใน $travelSims
                            $travelSims[] = $sim;
                        }
                    }
                }
                // dd($travelSims);


            }
        }

        $provinces = $this->getProvinceData();
        $districts = $this->getDistrictData();
        $subdistricts = $this->getSubDistrictData();
        
        return view('frontend.pages.cart_order.cart_product', compact('berMonthlys','prepaidSims','travelSims', 'provinces', 'districts', 'subdistricts'));
    }

    public function addproduct_to_cart(Request $request, $id) {
        // dd($request->all());
        $typeProduct = $request->input('type_product');
        $quantity = ($request->input('quantity')) ? $request->input('quantity') : 1;
        $option = ($request->input('option'))?$request->input('option'):0;
        $cartList = Session::get('cart_list', []);
        
        // ตรวจสอบว่ามี index สำหรับ type_product หรือไม่
        if (!isset($cartList['items'][$typeProduct])) {
            $cartList['items'][$typeProduct] = [];
        }
        
        // ตรวจสอบว่า $id นี้มีอยู่ใน items หรือไม่
        $existingProductKey = array_search($id, array_column($cartList['items'][$typeProduct], 'id'));
        // dd($existingProductKey);
        if ($existingProductKey !== false) {
            // กรณีที่ $id นี้มีอยู่แล้ว
            if ($typeProduct == 4) {
                // dd($cartList['items'][$typeProduct][$existingProductKey]['id'] == $id);
                if ($cartList['items'][$typeProduct][$existingProductKey]['id'] == $id) {
                    // เพิ่มจำนวนสินค้าใน type_product นั้น
                    $cartList['items'][$typeProduct][$existingProductKey]['quantity'] += 1;
                } 
                // else {
                //     $cartList['items'][$typeProduct][] = [
                //         'id' => $id,
                //         'quantity' => $quantity,
                //         'prepaid_id' => $request->input('data_prepaid'),
                //     ];
                // }

                // เพิ่ม amount ทั้งหมด
                $cartList['amount'] = isset($cartList['amount']) ? $cartList['amount'] + $quantity : 1;
                Session::put('cart_list', $cartList);
            } else if($typeProduct == 6) {
                // เพิ่มจำนวนสินค้าใน type_product นั้น
                // dd($cartList['items'][$typeProduct][$existingProductKey]);
                if($cartList['items'][$typeProduct][$existingProductKey]['option'] == $option) {
                    $cartList['items'][$typeProduct][$existingProductKey]['quantity'] += 1;
                } else {
                    $cartList['items'][$typeProduct][] = [
                        'id' => $id,
                        'quantity' => 1,
                        'option' => $option,
                    ];
                }
    
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
            ];
        } else if ($typeProduct == 6) {
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
