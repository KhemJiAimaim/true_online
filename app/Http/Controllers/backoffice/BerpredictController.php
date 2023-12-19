<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\BerpredictNumbcate;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BerpredictController extends BaseController
{
    /* Predict Number Cate */
    public function numbCateIndex()
    {
        $predictCates = BerpredictNumbcate::orderBy('updated_at', 'DESC')
            ->orderBy('numbcate_priority', 'ASC')
            ->get();

        return response([
            'message' => 'ok',
            'status' => true,
            'description' => 'Get Lucky cate success',
            'data' => [
                'predictCates' => $predictCates,
                'maxPriority' => BerpredictNumbcate::max('numbcate_priority'),
            ]
        ], 200);
    }

    public function createPredictNumbCate(Request $request)
    {
        $this->getAuthUser();
        $files = $request->allFiles();
        $params = $request->all();

        $validator = Validator::make($request->all(), [
            'numbcate_title' => 'string|required',
            'numbcate_name' => 'string|required',
            'numbcate_want' => 'string|nullable',
            'numbcate_unwant' => 'string|nullable',
            'numbcate_display' => 'numeric|required',
            'numbcate_priority' => 'numeric|required',

        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {
            DB::beginTransaction();

            /* Upload Thumbnail */
            $newFolder = "upload/" . date('Y') . "/" . date('m') . "/" . date('d') . "/";
            $thumbnail = (isset($files['thumbnail'])) ? $this->uploadImage($newFolder, $files['thumbnail'], "", "", time()) : "";

            // update priority
            $duplicatePriority = DB::table('berpredict_numbcates')
            ->where('numbcate_priority', '=', $params['numbcate_priority'])
            ->first();

            if ($duplicatePriority) {
                DB::table('berpredict_numbcates')
                ->where('numbcate_priority', '>=', $params['numbcate_priority'])
                ->increment('numbcate_priority', 1);
            }

            $values = [
                "numbcate_title" => $params['numbcate_title'],
                "numbcate_name" => $params['numbcate_name'],
                "numbcate_want" => $params['numbcate_want'],
                "numbcate_unwant" => $params['numbcate_unwant'],
                "thumbnail" => $thumbnail,
                "numbcate_priority" => $params['numbcate_priority'],
            ];


            BerpredictNumbcate::create($values);

            $this->updateImproveCate();

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Predict number cate has been created successfully',
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

    public function updatePredictNumbCate(Request $request, $id)
    {
        $this->getAuthUser();
        $files = $request->allFiles();
        $params = $request->all();

        $validator = Validator::make($request->all(), [
            'numbcate_id' => 'numeric|required',
            'numbcate_title' => 'string|required',
            'numbcate_name' => 'string|required',
            'thumbnail_link' => 'string|nullable',
            'numbcate_want' => 'string|nullable',
            'numbcate_unwant' => 'string|nullable',
            'numbcate_priority' => 'numeric|required',

        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {
            DB::beginTransaction();

            $numbcate = BerpredictNumbcate::where('numbcate_id', $id)->first();
            $change = false;

            /* Upload Thumbnail */
            $newFolder = "upload/" . date('Y') . "/" . date('m') . "/" . date('d') . "/";
            $thumbnail = (isset($files['thumbnail'])) ? $this->uploadImage($newFolder, $files['thumbnail'], "", "", time()) : $params['thumbnail_link'];

            $conditions  = ['numbcate_id' => $params['numbcate_id']];
            $values = [
                'numbcate_id' => $params['numbcate_id'],
                "numbcate_title" => $params['numbcate_title'],
                "numbcate_name" => $params['numbcate_name'],
                "numbcate_want" => $params['numbcate_want'],
                "numbcate_unwant" => $params['numbcate_unwant'],
                "thumbnail" => $thumbnail,
                "numbcate_priority" => $params['numbcate_priority'],

                "updated_at" => date('Y-m-d H:i:s')
            ];

            // update priority
            $duplicatePriority = DB::table('berpredict_numbcates')
                ->where('numbcate_priority', '=', $params['numbcate_priority'])
                ->first();

            if ($duplicatePriority) {
                DB::table('berpredict_numbcates')
                    ->where('numbcate_priority', '>=', $params['numbcate_priority'])
                    ->increment('numbcate_priority', 1);
            }

            DB::table('berpredict_numbcates')->updateOrInsert($conditions, $values);

            if ($numbcate->numbcate_want != $params['numbcate_want'] || $numbcate->numbcate_unwant != $params['numbcate_unwant']) {
                $change = true;
                $this->updateImproveCate();
            }

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Predict number cate has been updated successfully',
                'change' => $change,
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

    public function updateDisplayNumbCate(Request $request, $id)
    {
        try {

            $product = BerpredictNumbcate::where('numbcate_id', $id)->update([
                'numbcate_display' => $request->numbcate_display ? 'yes' : 'no'
            ]);

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'update display numbcate successfully',
                'updated' => $product,
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 500);
        }
    }

    public function deletePredictNumbCate(Request $request, $id)
    {
        try {

            $product = BerpredictNumbcate::where('numbcate_id', $id)->delete();

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Predict numb cate has been deleted successfully',
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 500);
        }
    }










    /* Private function */
    private function updateImproveCate() {

    }
}
