<?php

namespace App\Http\Controllers\frontapi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Mail\SendOrderDetail;
use Illuminate\Support\Facades\Mail;
use App\Models\Order;
use App\Models\OrderItem;
use Carbon\Carbon;
use App\Models\BerproductMonthly;
use App\Models\PrepaidSim;
use App\Models\TravelSim;
use App\Models\WebInfo;
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

            $newOrder->update(['order_number' => "SIMNETUNLIMITED-" . $newOrder->id]);

            $itemList = $this->saveOrderitem($params, $newOrder->id);

            $this->sendOrderMail($newOrder, $itemList);

            Session::flush();

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'ref_order' => $newOrder->id,
                'item_list' => $itemList
                // 'description' => 'Send form fiber successfully',
            ], 201);
        } catch (Exception $e) {
            DB::rollBack();
            // dd($e->getMessage());
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 501);
        }

    }

    public function saveOrderitem($params, $id_order) {

        $orderItems = [];
        $itemList = [];

        if($params['bermonthly'] > 0){
            foreach ($params['bermonthly'] as $bermonthly) {
                $ber = BerproductMonthly::select('*')
                    ->selectSub(function ($query) {
                        $query->select('details')
                            ->from('berlucky_packages')
                            ->whereColumn('berproduct_monthlies.product_package', 'berlucky_packages.id');
                    }, 'detail')
                    ->selectSub(function ($query) {
                        $query->select('thumbnail')
                            ->from('bernetworks')
                            ->whereColumn('berproduct_monthlies.product_network', '=', 'bernetworks.network_name')
                            ->whereColumn('berproduct_monthlies.monthly_status', '=', 'bernetworks.monthly');
                    }, 'thumbnail')
                    ->where('product_id', $bermonthly['product_id'])->first();
          
                $orderItems[] = [
                    'order_id' => $id_order,
                    'type_id' => $bermonthly['type_cate'],
                    'travel_option' => null,
                    'product_cate_id' => null,
                    'product_name' => $ber->product_phone,
                    'product_id' => $bermonthly['product_id'],
                    'thumbnail' => $ber->thumbnail,
                    'product_price' => $bermonthly['product_price'],
                    'discount' => $bermonthly['product_discount'],
                    'quantity' => 1,
                ];

                $itemList[] = [
                    "detail" => $ber->product_phone ." ". $ber->detail,
                ];
            }
        }
     
        if($params['prepaid_sim'] > 0){
            foreach ($params['prepaid_sim'] as $prepaid) {
                $prepaidsim = PrepaidSim::where('id', $prepaid['id'])->first();
                $orderItems[] = [
                    'order_id' => $id_order,
                    'type_id' => 4,
                    'travel_option' => null,
                    'product_cate_id' => $prepaid['prepaid_cate_id']['id'],
                    'product_name' => $prepaidsim->title,
                    'product_id' => $prepaid['id'],
                    'product_price' => $prepaid['price'],
                    'thumbnail' => $prepaidsim->thumbnail_link,
                    'discount' => 0,
                    'quantity' => $prepaid['quantity'],
                ];

                $itemList[] = [
                    "detail" => "ซิมเทพเติมเงิน แพ็กเกจ ".$prepaidsim->title,
                ];
            }
        }

        if($params['travel_sim'] > 0){
            foreach ($params['travel_sim'] as $travel_sim) {
                $travelsim = TravelSim::where('id', $travel_sim['id'])->first();
               
                $orderItems[] = [
                    'order_id' => $id_order,
                    'type_id' => 6,
                    'travel_option' => $travel_sim['option'],
                    'product_cate_id' => null,
                    'product_name' => $travelsim->title,
                    'product_id' => $travel_sim['id'],
                    'product_price' => $travel_sim['price'],
                    'thumbnail' => $travelsim->thumbnail_link,
                    'discount' => 0,
                    'quantity' => $travel_sim['quantity'],
                ];

                $itemList[] = [
                    "detail" => "ซิมท่องเที่ยว แพ็กเกจ".$travelsim->title,
                ];
            }
        }
  
        try {
            DB::beginTransaction();
            
            OrderItem::insert($orderItems);
            
            DB::commit();

            return $itemList;
            // return response([
            //     'message' => 'ok',
            //     'status' => true,
            //     'description' => 'save orderItem successfully',
            // ], 201);
        } catch (Exception $e) {
            DB::rollBack();
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 501);
        }

    }

    public function sendOrderMail($newOrder, $itemList) {
        $webMail = WebInfo::where('info_type', 2)->where('info_param', 'email')->first();
        $recipients = [
            $newOrder->email,
            $webMail->info_value
        ];
        Mail::to($recipients)->send(new SendOrderDetail($newOrder, $itemList));
    }
}
