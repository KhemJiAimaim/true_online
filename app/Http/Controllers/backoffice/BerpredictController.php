<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\BerpredictNumbcate;
use App\Models\BerpredictProphecy;
use App\Models\BerpredictSum;
use App\Models\BerproductGrade;
use App\Models\BerproductMonthly;
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

            if ($numbcate->numbcate_priority != $params['numbcate_priority']) {
                // update priority
                $duplicatePriority = DB::table('berpredict_numbcates')
                    ->where('numbcate_priority', '=', $params['numbcate_priority'])
                    ->first();

                if ($duplicatePriority) {
                    DB::table('berpredict_numbcates')
                        ->where('numbcate_priority', '>=', $params['numbcate_priority'])
                        ->increment('numbcate_priority', 1);
                }
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

            $this->updateImproveCate();

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

    /* Predict Grade */
    public function gradeIndex()
    {
        $predictGrades = BerproductGrade::orderBy('grade_priority', 'ASC')->get();

        return response([
            'message' => 'ok',
            'status' => true,
            'description' => 'Get predict grade success',
            'data' => [
                'predictGrades' => $predictGrades,
                'maxPriority' => BerproductGrade::max('grade_priority'),
            ]
        ], 200);
    }

    public function updatePredictGrade(Request $request, $id)
    {
        $this->getAuthUser();
        $params = $request->all();

        $validator = Validator::make($request->all(), [
            'grade_id' => 'numeric|required',
            'grade_name' => 'string|required',
            'grade_description' => 'string|nullable',
            'grade_max' => 'numeric|required',
            'grade_min' => 'numeric|required',

        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {
            DB::beginTransaction();

            $conditions  = ['grade_id' => $params['grade_id']];
            $values = [
                "grade_id" => $params['grade_id'],
                "grade_name" => $params['grade_name'],
                "grade_description" => $params['grade_description'],
                "grade_max" => $params['grade_max'],
                "grade_min" => $params['grade_min'],
            ];

            DB::table('berproduct_grades')->updateOrInsert($conditions, $values);

            $this->generateAllGrade();

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Predict grade has been updated successfully',
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

    /* Predict Ber */
    public function berIndex()
    {
        $predictBer = BerpredictProphecy::orderBy('prophecy_numb', 'ASC')->get();

        return response([
            'message' => 'ok',
            'status' => true,
            'description' => 'Get predict ber success',
            'data' => [
                'predictBer' => $predictBer,
            ]
        ], 200);
    }

    public function updatePredictBer(Request $request, $id)
    {
        $this->getAuthUser();
        $params = $request->all();

        $validator = Validator::make($request->all(), [
            'prophecy_id' => 'numeric|required',
            'prophecy_name' => 'string|required',
            'prophecy_numb' => 'string|required',
            'prophecy_desc' => 'string|required',
            'prophecy_color' => 'string|required',
            'prophecy_percent' => 'numeric|required',

        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {
            DB::beginTransaction();

            $prophecyUpdate = BerpredictProphecy::where('prophecy_id', $id)->first();

            $conditions  = ['prophecy_id' => $params['prophecy_id']];
            $values = [
                "prophecy_id" => $params['prophecy_id'],
                "prophecy_name" => $params['prophecy_name'],
                "prophecy_numb" => $params['prophecy_numb'],
                "prophecy_desc" => $params['prophecy_desc'],
                "prophecy_color" => $params['prophecy_color'],
                "prophecy_percent" => $params['prophecy_percent'],
            ];

            DB::table('berpredict_prophecies')->updateOrInsert($conditions, $values);

            if ($prophecyUpdate->prophecy_percent != $params['prophecy_percent']) {
                $this->generateAllGrade();
            }

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Predict ber has been updated successfully',
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

    /* Predict Sum Ber */
    public function sumberIndex()
    {
        $sumbers = BerpredictSum::orderBy('predict_id', 'ASC')->get();

        return response([
            'message' => 'ok',
            'status' => true,
            'description' => 'Get predict sum ber success',
            'data' => [
                'sumbers' => $sumbers,
            ]
        ], 200);
    }

    public function updatePredictSumber(Request $request, $id)
    {
        $this->getAuthUser();
        $params = $request->all();

        $validator = Validator::make($request->all(), [
            'predict_id' => 'numeric|required',
            'predict_sum' => 'numeric|required',
            'predict_name' => 'string|required',
            'predict_description' => 'string|required',

        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {
            DB::beginTransaction();

            $conditions  = ['predict_id' => $params['predict_id']];
            $values = [
                "predict_id" => $params['predict_id'],
                "predict_name" => $params['predict_name'],
                "predict_sum" => $params['predict_sum'],
                "predict_description" => $params['predict_description'],
            ];

            DB::table('berpredict_sums')->updateOrInsert($conditions, $values);

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Predict sum ber has been updated successfully',
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

    public function updatePinSumber(Request $request, $id)
    {
        try {

            $product = BerpredictSum::where('predict_id', $id)->update([
                'predict_pin' => $request->predict_pin ? 'yes' : 'no'
            ]);

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'update pin sum ber successfully',
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









    /* Private function */
    private function updateImproveCate()
    {
        $predictArr = array();
        $numbcates = DB::select("SELECT * FROM berpredict_numbcates ORDER BY numbcate_id ASC");
        if (!empty($numbcates)) {
            foreach ($numbcates as $nnn) {
                if (!isset($predictArr[$nnn->numbcate_id]['id'])) {
                    $predictArr[$nnn->numbcate_id]['id'] = $nnn->numbcate_id;
                    $predictArr[$nnn->numbcate_id]['numbcate_id'] = $nnn->numbcate_id;
                    $predictArr[$nnn->numbcate_id]['wanted'] = explode(",", $nnn->numbcate_want);
                    $predictArr[$nnn->numbcate_id]['unwanted'] = explode(",", $nnn->numbcate_unwant);
                }
            }
        }

        // return response([ 'predictArr' => $predictArr ]);

        $berluckyAll = BerproductMonthly::where('product_sold', 'no')->get();

        if ($berluckyAll) {
            foreach ($berluckyAll as $ber) {
                $pp = substr($ber->product_phone, 3, 10);
                $improve = ",";

                foreach ($predictArr as $predVal) {
                    $founded = "";
                    $wanted = $predVal['wanted'];
                    $unwanted = $predVal['unwanted'];
                    if (!empty($unwanted)) {
                        foreach ($unwanted as $unw) {
                            if ($unw == "") continue;
                            $founded = stripos($pp, $unw);
                            if ($founded) break;
                        }
                    }
                    if (!empty($wanted) && $founded == "") {
                        foreach ($wanted as $wan) {
                            if ($wan == "") continue;
                            $required = stripos($pp, $wan);
                            if ($required) {
                                $improve .= $predVal['id'] . ",";
                                break;
                            }
                        }
                    }
                }

                DB::table('berproduct_monthlies')
                    ->where('product_id', $ber->product_id)
                    ->update(['product_improve' => $improve]);
            }
        }
    }

    private function generateAllGrade()
    {
        $berluckyAll = BerproductMonthly::where('product_sold', 'no')->get();

        if ($berluckyAll) {
            foreach ($berluckyAll as $ber) {
                $sub_tel = substr($ber->product_phone, 3, 7);
                if (strlen($sub_tel) == 7) {
                    $pos[1] = substr($sub_tel, 0, 2);
                    $pos[2] = substr($sub_tel, 1, 2);
                    $pos[3] = substr($sub_tel, 2, 2);
                    $pos[4] = substr($sub_tel, 3, 2);
                    $pos[5] = substr($sub_tel, 4, 2);
                    $pos[6] = substr($sub_tel, 5, 2);

                    $prophecies = DB::select("
                            SELECT * FROM `berpredict_prophecies` WHERE `prophecy_numb` = $pos[1] UNION ALL
                            SELECT * FROM `berpredict_prophecies` WHERE `prophecy_numb` = $pos[2] UNION ALL
                            SELECT * FROM `berpredict_prophecies` WHERE `prophecy_numb` = $pos[3] UNION ALL
                            SELECT * FROM `berpredict_prophecies` WHERE `prophecy_numb` = $pos[4] UNION ALL
                            SELECT * FROM `berpredict_prophecies` WHERE `prophecy_numb` = $pos[5] UNION ALL
                            SELECT * FROM `berpredict_prophecies` WHERE `prophecy_numb` = $pos[6] ");
                }
                $total_percet = 0;
                foreach ($prophecies as $prophe) {
                    $total_percet += $prophe->prophecy_percent;
                }
                $total_score =  (($total_percet / 6) * 1000) / 100; // แปลงเปอร์เซ็น ให้เป็นคะแนนให้เต็ม 1000

                if ($total_percet > 0) {
                    $grade = BerproductGrade::where('grade_display', 'yes')
                        ->where('grade_min', '<=', $total_score)
                        ->where('grade_max', '>=', $total_score)
                        ->orderBy('grade_max', 'desc')
                        ->first();
                } else {
                    $grade = new \stdClass();
                    $grade->grade_name = 'F';
                }

                DB::table('berproduct_monthlies')
                    ->where('product_id', $ber->product_id)
                    ->update(['product_grade' => $grade->grade_name]);
            }
        }
    }
}
