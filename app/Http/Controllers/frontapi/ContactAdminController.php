<?php

namespace App\Http\Controllers\frontapi;

use App\Http\Controllers\Controller;
use App\Models\MailInbox;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ContactAdminController extends Controller
{
    public function sendFormFiber(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fiber_id' => 'numeric|required',
            'phone_number' => 'string|required',
            'firstname' => 'string|required',
            'lastname' => 'string|required',
            'address' => 'string|required',
            'province' => 'string|required',
            'district' => 'string|required',
            'lat_lng' => 'string|required',
            'subdistrict' => 'string|required',
            'zip_code' => 'string|required',
            'line_id' => 'string|nullable',
            // 'email' => 'string|required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid params',
                'errorMessage' => $validator->errors()
            ], 422);
        }

        $params = $request->all();

        try {
            DB::beginTransaction();

            MailInbox::create([
                'type_id' => 1,
                'fiber_id' => $params['fiber_id'],
                'move_id' => null,
                'move_option' => null,
                'phone_move' => null,
                'firstname' => $params['firstname'],
                'lastname' => $params['lastname'],
                'phone_number' => $params['phone_number'],
                'line_id' => $params['line_id'],
                'address' => $params['address'],
                'province' => $params['province'],
                'district' => $params['district'],
                'subdistrict' => $params['subdistrict'],
                'zip_code' => $params['zip_code'],
                'lat_lng' => $params['lat_lng'],
                // 'email' => $params['email'],
            ]);

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

    public function sendFormMove(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'move_id' => 'numeric|required',
            'phone_number' => 'string|required',
            'phone_move' => 'string|required',
            'email' => 'string|required',
            'firstname' => 'string|required',
            'lastname' => 'string|required',
            'move_option' => 'string|nullable',
            'line_id' => 'string|nullable',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid params',
                'errorMessage' => $validator->errors()
            ], 422);
        }

        $params = $request->all();

        try {
            DB::beginTransaction();

            MailInbox::create([
                'type_id' => 2,
                'fiber_id' => null,
                'email' => $params['email'],
                'move_id' => $params['move_id'],
                'move_option' => $params['move_option'],
                'firstname' => $params['firstname'],
                'lastname' => $params['lastname'],
                'phone_number' => $params['phone_number'],
                'phone_move' => $params['phone_move'],
                'line_id' => $params['line_id'],
            ]);

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Send form move successfully',
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
