<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\BookingSetting;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookingController extends BaseController
{
    public function index(Request $req) {
        try {
            $orders = Booking::where('status', '!=', 'deleted')->orderBy('time_booking','DESC')->get()->all();
            $bookingSetting = BookingSetting::orderBy('created_at', 'DESC')->first();
            $settings = [
                'available_time' => ($bookingSetting)?substr($bookingSetting->available_time, 1, -1):"",
                'disable_by_date' => ($bookingSetting)?substr($bookingSetting->disable_by_date, 1, -1):"",
                'disable_by_day' => ($bookingSetting)?substr($bookingSetting->disable_by_day, 1, -1):"",
                'special_holiday' => ($bookingSetting)?substr($bookingSetting->special_holiday, 1, -1):"",
                'people_number' => ($bookingSetting)?$bookingSetting->people_number:1,
            ];
            return response([
                'message' => 'ok',
                'data' => $orders,
                'setting' => $settings
            ]);
        } catch(Exception $e) {
            return response([
                'message' => 'error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 501);
        }
    }

    public function bookingApprove(Request $req) {
        $this->getAuthUser();
        $params = $req->all();
        try {
            $checkLangs = explode(",",  $params['id']);
            $orders = Booking::whereIn('id', $checkLangs)->update([
                'status' => 'confirm'
            ]);
            return response([
                'message' => 'ok',
            ]);
        } catch(Exception $e) {
            return response([
                'message' => 'error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 501);
        }
    }

    public function bookingDelete($id) {
        $this->getAuthUser();
        try {
            $checkLangs = explode(",", $id);
            $orders = Booking::whereIn('id', $checkLangs)->update([
                'status' => 'deleted'
            ]);
            return response([
                'message' => 'ok',
            ]);
        } catch(Exception $e) {
            return response([
                'message' => 'error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 501);
        }
    }

    public function createBookingSetting (Request $req){
        $this->getAuthUser();
        $params = $req->all();
        // $validator = Validator::make($req->all(), [
        // ]);
        // if($validator->fails()) {
        //     return $this->sendErrorValidators('Invalid params', $validator->errors());
        // }
        try {
            $bookingSetting = new BookingSetting();
            $bookingSetting->people_number = $params['people_number'];
            $bookingSetting->available_time = $params['available_time'];
            $bookingSetting->disable_by_date = $params['disable_by_date'];
            $bookingSetting->disable_by_day = $params['disable_by_day'];
            $bookingSetting->special_holiday = $params['special_holiday'];
            $bookingSetting->save();
            return response([
                'message' => 'ok',
                'description' => 'success'
            ], 201);
        }  catch (Exception $e) {
            return response([
                'message' => 'error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 501);
        }
    }
}
