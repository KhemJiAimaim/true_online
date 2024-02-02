<?php

namespace App\Http\Controllers\backoffice;

use App\Exports\BerproductMonthlyExport;
use App\Http\Controllers\Controller;
use App\Imports\BerMonthlyImportClass;
use App\Models\BerproductCategory;
use App\Models\BerproductMonthly;
use App\Models\BerpredictSum;
use App\Models\BerproductGrade;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function excelImportBer(Request $request)
    {

        // $file = $request->file('excel_file');   // รับไฟล์จาก request

        $file = $request->file('excel_file');   // รับไฟล์จาก request
        $rawexcelData = Excel::toArray([], $file);
        $excelData = $rawexcelData[0]; // เข้าถึงอาร์เรย์ข้อมูลในชั้นลึกที่ 0
        $excelData = array_slice($excelData, 1); // ตัดแถวแรกที่ไม่ต้องการออก

        $list_ber = array();
        /* ดึงข้อมูล PredictCate Want & Unwant comment */
        $this->getPredictWantUnwantArr();

        $predictSum = BerpredictSum::all();

        foreach ($excelData as $row) {
            // เตรียมข้อมูล
            $pp = substr($row[0], 3, 10);
            $improve = $this->getProductByCategoryPredict($pp);
            $grade = ($row[10] == "") ? $this->generate_grade($row[0]) : $row[10];

            if ($row[1] == "" || $row[1] == 0) {
                $telArray = str_split($row[0]);
                $telArray = array_map('intval', $telArray);
                $sum = array_sum($telArray);
            } else {
                $sum = $row[1];
            }

            if($row[8]) {
                $comment = $predictSum->firstWhere('predict_sum', $sum)->predict_name;
            } else {
                $comment = $row[8];
            }

            $list_ber[] = [
                'product_phone' => $row[0],
                'product_sumber' => $sum,
                'product_price' => $row[2],
                'product_network' =>  $row[3] = ($row[3] == 1) ? 'TRUE' : $row[3],
                'product_category' => ',' . $row[4] . ',',
                'product_improve' => $improve,
                'product_pin' => $row[5] = ($row[5] == "") ? "no" : $row[5],
                'product_sold' => $row[6] = ($row[6] == "") ? "no" : $row[6],
                'product_new' => $row[7] = ($row[7] == "") ? "no" : $row[7],
                'product_comment' => $comment,
                'product_package' => $row[9],
                'product_discount' => $row[11] = ($row[11] == "") ? 0 : $row[11],
                'product_grade' => $grade,
                'default_cate' => $row[4],
                'product_display' => "yes",
                'monthly_status' => $row[12] = ($row[12] == "") ? "no" : $row[12],
            ];
        }	

        try {
            // delete old data before new up load
            BerproductMonthly::truncate();

            foreach (array_chunk($list_ber, 1000) as $chunk) {
                BerproductMonthly::insert($chunk);
            }

            // method import new ber
            // Excel::import(new BerMonthlyImportClass, $file);

            // generate product_category
            $this->getProductByCategory();

            return response()->json([
                'message' => 'ok',
                'status' => true,
                'description' => 'upload data successfully'
            ], 201);
        } catch (Exception $e) {
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 500);
        }
    }

    public function excelExportBer()
    {
        try {

            return Excel::download(new BerproductMonthlyExport, 'exportproduct.xlsx');

        } catch (Exception $e) {
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 500);
        }
    }


    /* Private function */
    private function getProductByCategory()
    {
        $reesultCate = BerproductCategory::where('bercate_id', '!=', 1)
            ->where('status', '=', true)
            ->orderBy('priority', 'ASC')
            ->get();

        foreach ($reesultCate as $cateVal) {
            $bercate = array();
            $sqlProd = array();
            $bercate[$cateVal['bercate_id']]['cate_id']  = $cateVal['bercate_id'];
            $sqlProd[$cateVal['bercate_id']]  = "";
            $sqlProd[$cateVal['bercate_id']]  .= 'SELECT  product_id,product_sold,product_phone,MID(product_phone,4, 10) as pp
														 FROM berproduct_monthlies HAVING product_sold NOT LIKE "%y%" AND ';
            $sqlProd[$cateVal['bercate_id']]  .= '(';
            $needfulArr = explode(',', $cateVal['bercate_needful']);
            foreach ($needfulArr as $nfKey => $nfVal) {
                $bercate[$cateVal['bercate_id']]['needful'][$nfKey]  = $nfVal;
                if ($nfKey != 0) {
                    $sqlProd[$cateVal['bercate_id']] .= ' OR ';
                }
                $sqlProd[$cateVal['bercate_id']]  .= ' pp LIKE "%' . $nfVal . '%" ';
            }
            $needlessArr = explode(',', $cateVal['bercate_needless']);
            if ($needlessArr[0] != '') {
                $sqlProd[$cateVal['bercate_id']]  .= ') AND (';
                foreach ($needlessArr as $nlKey => $nlVal) {
                    $bercate[$cateVal['bercate_id']]['needless'][$nlKey]  = $nlVal;
                    /* sql select product needless  */
                    if ($nlKey != 0) {
                        $sqlProd[$cateVal['bercate_id']]  .= ' AND ';
                    }
                    $sqlProd[$cateVal['bercate_id']]  .= ' pp NOT LIKE "%' . $nlVal . '%" ';
                }
            }
            $sqlProd[$cateVal['bercate_id']]  .= ')';
            $resultSlcUpdate = DB::select($sqlProd[$cateVal['bercate_id']]);
            $cateIdUpdate  =  '' . $cateVal['bercate_id'] . ',';

            $valIdIn = "";
            foreach ($resultSlcUpdate as $keySlc => $valSlc) {
                if ($keySlc != 0) {
                    $valIdIn .= ',';
                }
                $valIdIn .= $valSlc->product_id;
            }
            if ($valIdIn != "") {
                DB::update("
                    UPDATE `berproduct_monthlies`
                    SET product_category = CONCAT(product_category, :category_to_append)
                    WHERE product_id IN ( " . $valIdIn . " )
                    AND product_category NOT LIKE :category_condition
                ", [
                    'category_to_append' => $cateIdUpdate,
                    'category_condition' => "%" . $cateIdUpdate . "%"
                ]);
            }
        }

        $this->updateProductTotal();
    }

    public function getPredictWantUnwantArr()
    {
        global $predictArr;
        $numbcates = DB::select("SELECT * FROM berpredict_numbcates ORDER BY numbcate_id ASC");
        if (!empty($numbcates)) {
            $predictArr = array();
            foreach ($numbcates as $nnn) {
                if (!isset($predictArr[$nnn->numbcate_id]['id'])) {
                    $predictArr[$nnn->numbcate_id]['id'] = $nnn->numbcate_id;
                    $predictArr[$nnn->numbcate_id]['numbcate_id'] = $nnn->numbcate_id;
                    $predictArr[$nnn->numbcate_id]['wanted'] = explode(",", $nnn->numbcate_want);
                    $predictArr[$nnn->numbcate_id]['unwanted'] = explode(",", $nnn->numbcate_unwant);
                }
            }
        }
    }

    public static function getProductByCategoryPredict($pp)
    {
        global $predictArr;
        if (isset($pp)) {
            $improve = ",";
            foreach ($predictArr as $predVal) {
                $founded = "";
                $wanted = $predVal['wanted'];
                $unwanted = $predVal['unwanted'];
                if (!empty($unwanted)) {
                    foreach ($unwanted as $unw) {
                        if ($unw == "") continue;
                        $founded = strpos($pp, $unw);
                        if ($founded) break;
                    }
                }
                if (!empty($wanted) && $founded == "") {
                    foreach ($wanted as $wan) {
                        if ($wan == "") continue;
                        $required = strpos($pp, $wan);
                        if ($required) {
                            $improve .= $predVal['id'] . ",";
                            break;
                        }
                    }
                }
            }
        }
        return $improve;
    }

    public function generate_grade($tel)
    {
        $sub_tel = substr($tel, 3, 7);
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

        return $grade->grade_name;
    }

    public function updateProductTotal() {
        // อัปเดตค่าสำหรับ default_cate_id
        DB::table('berproduct_categories')
            ->where('bercate_id', 1)
            ->update([
                'bercate_total' => DB::table('berproduct_monthlies')
                    ->where('product_sold', '!=', 'yes')
                    ->count()
            ]);
        // ดึงข้อมูลทุก cate_id
        $cates = DB::table('berproduct_categories')
            ->where('bercate_id', '!=', 1)
            ->pluck('bercate_id');
    
        foreach ($cates as $cate_id) {
            // อัปเดตค่าสำหรับแต่ละ cate_id
            DB::table('berproduct_categories')
                ->where('bercate_id', $cate_id)
                ->update([
                    'bercate_total' => DB::table('berproduct_monthlies')
                        ->whereRaw('FIND_IN_SET(?, product_category) > 0', [$cate_id])
                        ->where('product_sold', '!=', 'yes')
                        ->count()
                ]);
        }
    
    }
}
