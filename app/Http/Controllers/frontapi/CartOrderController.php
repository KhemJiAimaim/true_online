<?php

namespace App\Http\Controllers\frontapi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Order;
use App\Models\OrderItem;
use Carbon\Carbon;
use Exception;

class CartOrderController extends Controller
{
    //
    public function confirmOrder(Request $request) {
        $validator = Validator::make($request->all(), [
            'firstname' => 'string|required',
            'lastname' => 'string|required',
            'phone_number' => 'string|required',
            'email' => 'string|required',
            'district' => 'string|required',
            'subdistrict' => 'string|required',
            'province' => 'string|required',
            'zip_code' => 'string|required',
            'address' => 'string|required',
            'total_price' => 'numeric|required',
            'shipping_cost' => 'numeric|required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid params',
                'errorMessage' => $validator->errors()
            ], 422);
        }

        $params = $request->all();
        // dd($params);

        try {
            DB::beginTransaction();

            $newOrder = Order::create([
                'firstname' => $params['firstname'],
                'lastname' => $params['lastname'],
                'phone_number' => $params['phone_number'],
                'email' => $params['email'],
                'district' => $params['district'],
                'subdistrict' => $params['subdistrict'],
                'province' => $params['province'],
                'zip_code' => $params['zip_code'],
                'address' => $params['address'],
                'order_status' => "pending",
                'order_date' => Carbon::now(),
                'total_price' => $params['total_price'],
                'shipping_cost' => $params['shipping_cost'],
            ]);

            $newOrder->update(['order_number' => "TRUEONLINE-" . $newOrder->id]);

            $this->saveOrderitem($params, $newOrder->id);

            Session::flush();

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Send form fiber successfully',
            ], 201);
        } catch (Exception $e) {
            DB::rollBack();
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 501);
        }

    }

    public function saveOrderitem($params, $id_order) {
        
        $orderItems = [];
        // dd($params);

        if($params['bermonthly'] > 0){
            foreach ($params['bermonthly'] as $bermonthly) {
                $orderItems[] = [
                    'order_id' => $id_order,
                    'type_id' => $bermonthly['type_cate'],
                    'travel_option' => null,
                    'product_cate_id' => null,
                    'product_id' => $bermonthly['product_id'],
                    'product_price' => $bermonthly['product_price'],
                    'discount' => $bermonthly['product_discount'],
                    'quantity' => 1,
                ];
            }
        }

        if($params['prepaid_sim'] > 0){
            foreach ($params['prepaid_sim'] as $prepaid) {
                $orderItems[] = [
                    'order_id' => $id_order,
                    'type_id' => 4,
                    'travel_option' => null,
                    'product_cate_id' => $prepaid['prepaid_cate_id']['id'],
                    'product_id' => $prepaid['id'],
                    'product_price' => $prepaid['price'],
                    'discount' => 0,
                    'quantity' => $prepaid['quantity'],
                ];
            }
        }

        if($params['travel_sim'] > 0){
            foreach ($params['travel_sim'] as $travel_sim) {
                $orderItems[] = [
                    'order_id' => $id_order,
                    'type_id' => 6,
                    'travel_option' => $travel_sim['option'],
                    'product_cate_id' => null,
                    'product_id' => $travel_sim['id'],
                    'product_price' => $travel_sim['price'],
                    'discount' => 0,
                    'quantity' => $travel_sim['quantity'],
                ];
            }
        }
        try {
            DB::beginTransaction();
            
            OrderItem::insert($orderItems);

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Send form fiber successfully',
            ], 201);
        } catch (Exception $e) {
            DB::rollBack();
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 501);
        }

    }
}
