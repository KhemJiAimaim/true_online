<?php

namespace App\Http\Controllers\backoffice;

use App\Exports\BerproductMonthlyExport;
use App\Http\Controllers\Controller;
use App\Imports\BerMonthlyImportClass;
use App\Models\BerproductCategory;
use App\Models\BerproductMonthly;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function excelImportBer(Request $request)
    {

        $file = $request->file('excel_file');   // รับไฟล์จาก request

        try {
            // delete old data before new up load
            BerproductMonthly::truncate();

            // method import new ber
            Excel::import(new BerMonthlyImportClass, $file);

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
        $reesultCate = BerproductCategory::where('bercate_id', '!=', 0)
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

    public function updateProductTotal()
    {
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
