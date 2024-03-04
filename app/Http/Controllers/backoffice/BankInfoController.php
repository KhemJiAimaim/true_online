<?php

namespace App\Http\Controllers\backoffice;


use App\Models\BankInfo;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BankInfoController extends BaseController
{
    public function index()
    {
        $data =  BankInfo::all();

        return response()->json([
            'message' => 'ok',
            'status' => true,
            'bankinfo' => $data,
            'maxPriority' => BankInfo::max('priority'),
        ], 200);
    }

    public function createBankInfo(Request $request)
    {
        $this->getAuthUser();
        $files = $request->allFiles();
        $params = $request->all();

        $validator = Validator::make($request->all(), [
            'bank_name' => 'string|required',
            'bank_account' => 'string|nullable',
            'bank_number' => 'string|nullable',
            'display' => 'numeric|required',
            'priority' => 'numeric|required',
        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {
            DB::beginTransaction();

            $newFolder = "upload/" . date('Y') . "/" . date('m') . "/" . date('d') . "/";

            /* Upload Thumbnail */
            $thumbnail = (isset($files['thumbnail'])) ? $this->uploadImage($newFolder, $files['thumbnail'], "", "", $params['bank_image']) : "";

            $this->updatePriorityWODelete("bank_infos", $params['priority']);

            $created = BankInfo::create([
                "bank_name" => $params['bank_name'],
                "bank_account" => $params['bank_account'],
                "bank_number" => $params['bank_number'],
                "bank_image" => $thumbnail,

                "priority" => $params['priority'],
                "display" => boolval($params['display']),
            ]);

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Bank Information has been created successfully',
            ], 200);
        } catch (Exception $e) {
            DB::rollBack();
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 501);
        }
    }

    public function updateBankInfo(Request $request, $id)
    {
        $this->getAuthUser();
        $files = $request->allFiles();
        $params = $request->all();

        $validator = Validator::make($request->all(), [
            'bank_name' => 'string|required',
            'bank_account' => 'string|nullable',
            'bank_number' => 'string|nullable',
            'display' => 'numeric|required',
            'priority' => 'numeric|required',
        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {
            DB::beginTransaction();

            $bankUpdate = BankInfo::findOrFail($id);

            /* Upload Thumbnail */
            $newFolder = "upload/" . date('Y') . "/" . date('m') . "/" . date('d') . "/";
            $thumbnail = (isset($files['thumbnail'])) ? $this->uploadImage($newFolder, $files['thumbnail'], "", "", $params['bank_image']) : $params['bank_image'];

            $conditions  = ['id' => $params['id']];
            $values = [
                'id' => $params['id'],
                "bank_name" => $params['bank_name'],
                "bank_account" => $params['bank_account'],
                "bank_number" => $params['bank_number'],
                "bank_image" => $thumbnail,
                "priority" => $params['priority'],
                "display" => $params['display'],
                "updated_at" => date('Y-m-d H:i:s')
            ];
            if ($bankUpdate->priority != $params['priority']) {
                $this->updatePriority("prepaid_categories", $params['priority']);
            }

            DB::table('bank_infos')->updateOrInsert($conditions, $values);

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Bank Information has been updated successfully',
            ], 200);
        } catch (Exception $e) {
            DB::rollBack();
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 501);
        }
    }

    public function deleteBankInfo($id)
    {
        try {

            BankInfo::where('id', $id)->delete();

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Bank Information has been deleted successfully',
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 500);
        }
    }
}
