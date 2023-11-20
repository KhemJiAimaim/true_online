<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\BerproductMonthly;
use App\Models\BerpredictProphecy;
use App\Models\BerpredictSum;
use App\Models\BerproductGrade;
use App\Models\BerproductCategory;
use App\Models\BerpredictNumbcate;


use Maatwebsite\Excel\Facades\Excel;
use App\Imports\BerMonthlyImportClass;
use App\Exports\BerproductMonthlyExport;
use Maatwebsite\Excel\Concerns\ToModel;

class BerLuckyMonthlyController extends Controller
{
    //
    public function get_product_all(Request $request) {
        $getpost = $this->product_prepare_variable($request->all());

        $sql_sort = null;
        if(isset($getpost['need_sort'])) {
            if($getpost['need_sort'] == "RAND"){
                $sql_sort .= " ORDER BY RAND(),product_sumber DESC ";
            } else {
                $sql_sort .= " ORDER BY product_price ".$getpost['need_sort'].",product_sumber DESC ";
            }
        } else {
            $sql_sort .= " ORDER BY product_pin DESC,product_price DESC,product_sumber DESC ";
        }

        // Set the current page from the request or default to 1
        $current_page = request('page', 1);
 
        // Set the number of items per page
        $perPage = 60;

        // Calculate the offset based on the current page and items per page
        $offset = ($current_page - 1) * $perPage;

        $limit = null;
        $sql = "SELECT *, MID(product_phone, 4, 7) AS pp
                    FROM berproduct_monthlies 
                    WHERE product_sold = :value $getpost[sql]
                    HAVING product_display = :display $getpost[sql2]
                    $sql_sort
                    $limit
                ";
        $totalCount = DB::select($sql, [
            'value' => 'no',
            'display' => 'yes',
        ]);  // query ข้อมูลเบอร์ทั้งหมด

        $sql .= " LIMIT :limit OFFSET :offset ";
        $berproducts = DB::select($sql, [
            'value' => 'no',
            'display' => 'yes',
            'limit' => $perPage,
            'offset' => $offset,
        ]); // query ข้อมูลเบอร์ต่อหน้า
        
        $total_page = ceil(count($totalCount) / $perPage);
        $berTotal = count($berproducts);
        $onLastPage = $berTotal < $perPage; // เช็คว่าหน้าสุดท้ายมั้ย true or false
        // dd($offset);
        $data_paginate = [
            "current_page" => $current_page,
            "total_page" => $total_page,
            "onLastPage" => $onLastPage, 

        ];
        $berproduct_cates = BerproductCategory::where('bercate_display', 1)
        ->where('bercate_pin', 1)
        ->orderBy('priority')
        ->get();
        
        // dd($berproduct_cates);
        $berpredict_numbcate = BerpredictNumbcate::where('numbcate_display', 1)
            ->where('numbcate_pin', 1)
            ->orderBy('numbcate_priority')
            ->get();
            
        // dd($totalCount);
        $sumbers = BerpredictSum::where('predict_pin', 'yes')->get();
        return view('frontend.pages.bermonthly_lucky.product_all', compact('berproducts', 'sumbers', 'berproduct_cates', 'data_paginate', 'berpredict_numbcate', 'totalCount'));
    }

    public function product_prepare_variable($request) {
   
        $sql = "";  #WHERE
        $sql2 =  ""; #HAVING

        if(isset($request['sim']) && $request['sim'] == "month") {
            $sql .= " AND `monthly_status` = 'yes' ";
        } else if(isset($request['sim']) && $request['sim'] == "paysim") {
            $sql .= " AND `monthly_status` = 'no' ";
        }

        $check = [];
        if(isset($request['pos1']) || isset($request['pos2']) || isset($request['pos3']) ||  isset($request['pos4']) ||  isset($request['pos5']) ||  isset($request['pos6']) ||  isset($request['pos7']) ||  isset($request['pos8']) ||  isset($request['pos9']) ){
            $pos1 = (isset($request['pos1']) && $request['pos1'] != '')?  $request['pos1'] : '_';
            $pos2 = (isset($request['pos2']) && $request['pos2'] != '')?  $request['pos2'] : '_';
            $pos3 = (isset($request['pos3']) && $request['pos3'] != '')?  $request['pos3'] : '_';
            $pos4 = (isset($request['pos4']) && $request['pos4'] != '')?  $request['pos4'] : '_';
            $pos5 = (isset($request['pos5']) && $request['pos5'] != '')?  $request['pos5'] : '_';
            $pos6 = (isset($request['pos6']) && $request['pos6'] != '')?  $request['pos6'] : '_';
            $pos7 = (isset($request['pos7']) && $request['pos7'] != '')?  $request['pos7'] : '_';
            $pos8 = (isset($request['pos8']) && $request['pos8'] != '')?  $request['pos8'] : '_';
            $pos9 = (isset($request['pos9']) && $request['pos9'] != '')?  $request['pos9'] : '_';
            $check['position'] = ' AND( product_phone LIKE "%0'.$pos1.''.$pos2.''.$pos3.''.$pos4.'%'.$pos5.''.$pos6.''.$pos7.''.$pos8.''.$pos9.'%") ';
            $sql .= $check['position'];
        }
        
        
        if(isset($request['sum']) && $request['sum'] !== ""){
            $sql .= " AND `product_sumber` = $request[sum] ";
        }
        
        if(isset($request['sort'])){
            $request['sort'] = strtoupper($request['sort']);
            if($request['sort'] == "ASC" || $request['sort'] == "DESC" || $request['sort'] == "RAND"){
                $check['need_sort'] = $request['sort'];
            }
        }

        if(isset($request['fav'])){
            $check['fav'] = (strpos($request['fav'],"*"))?explode("*",$request['fav']): explode(",",$request['fav']); 
            if(!empty($check['fav'])){
                foreach($check['fav'] as $favv){
                    $favv = FILTER_VAR($favv,FILTER_SANITIZE_NUMBER_INT);
                    if($favv=="") continue;
                    $sql .= ' AND product_phone LIKE "%'.$favv.'%" ';
                }
            }
        }
        
        if(isset($request['min']) && $request['min'] !== ""){
            $min = FILTER_VAR($request['min'],FILTER_SANITIZE_NUMBER_INT);
            $sql .= " AND `product_price` >= $min ";
        }

        if(isset($request['max']) && $request['max'] !== ""){
            $max = FILTER_VAR($request['max'],FILTER_SANITIZE_NUMBER_INT);
            $sql .= " AND `product_price` <= $max ";
        }

        if(!empty($request['like'])){
            $check['like'] = explode(',', $request['like']);
            $beforelike = filter_var($check['like'][0],FILTER_SANITIZE_NUMBER_INT);
            if($beforelike != ""){
                foreach($check['like'] as $key => $val){
                $val = filter_var($val,FILTER_SANITIZE_NUMBER_INT);
                if($val == ""){ continue; }
                $sql2 .= ($key == 0)? " AND( ":" AND ";
                $sql2 .= "pp LIKE '%".$val."%' ";
                }
                $sql2 .=" )";
            }
        }

        if(isset($request['dislike'])){
            $check['dislike'] = explode(',', $request['dislike']);
            $beforeDislike = filter_var($check['dislike'][0],FILTER_SANITIZE_NUMBER_INT);
            if($beforeDislike != ""){
              foreach($check['dislike'] as $key => $val){
                $val = filter_var($val,FILTER_SANITIZE_NUMBER_INT);
                if($val == ""){ continue; }
                $sql2 .= ($key == 0)? " AND( ":" AND ";
                $sql2 .= "pp NOT LIKE '%".$val."%' ";
              }
              $sql2 .=" )"; 
            }
        }

        if(!empty($request['improve'])){
            $check['improve'] = explode(',', $request['improve']);
            if(!empty($check['improve'])){
              foreach($check['improve']  as $key =>$val){ 
                if($val == ""){ continue; }
                $sql .= " AND product_improve LIKE '%,".$val.",%' ";
              }
            }
        }

        // dd($sql);
        $cate_val = null;
        if(isset($request['cate']) && $request['cate'] != 0){
            $sql .=  " AND( product_category LIKE '%,".$request['cate'].",%' ) ";
        }

        if(!empty($request['auspicious'])){
            $check['auspicious'] = explode(',', $request['auspicious']);
            $auspicious = $check['auspicious'];
            foreach($auspicious as $key => $val){
              $val = filter_var($val,FILTER_SANITIZE_NUMBER_INT);
              if($cate_val == $val || $val ==""){ continue; }
              $sql .= ($key == 0 && !isset($cate_val))? " AND( ":" OR ";
              $sql .= " product_category LIKE '%,".$val.",%' ";
            }
            $sql .= " ) ";
        }
        // dd($sql);

        $getpost = $check;
        $getpost['sql'] = $sql;
        $getpost['sql2'] = $sql2;
        return $getpost;
    }

    public function detailber_page($tel) {
        $berproduct = BerproductMonthly::where('product_phone', $tel)->first();
        $data_sumber = $this->get_data_sumber($tel);
        $data_fortune = $this->fortune_tel($tel);
        $score = $this->getscore_fortune($data_fortune);

        return view('frontend.pages.bermonthly_lucky.detail_ber', compact('berproduct', 'data_sumber', 'data_fortune', 'score'));
    }

    public function fortune_page($tel) {
        $data_sumber = $this->get_data_sumber($tel);
        $data_fortune = $this->fortune_tel($tel);
        $score = $this->getscore_fortune($data_fortune);

        return view('frontend.pages.bermonthly_lucky.fortune_ber', compact('tel', 'data_sumber', 'data_fortune', 'score'));
    }

    public function cartproduct_page($ber_id) {
        return view('frontend.pages.bermonthly_lucky.cart_product', compact('ber_id'));
    }

    // ทำนายเบอร์โทร
    public function fortune_tel($tel) {
        $sub_tel = substr($tel, 3, 7);
        if (strlen($sub_tel) == 7) {
            $pos[1] = substr($sub_tel, 0, 2);
            $pos[2] = substr($sub_tel, 1, 2);
            $pos[3] = substr($sub_tel, 2, 2);
            $pos[4] = substr($sub_tel, 3, 2);
            $pos[5] = substr($sub_tel, 4, 2);
            $pos[6] = substr($sub_tel, 5, 2);

            // $prophecies = BerpredictProphecy::whereIn('prophecy_numb', [$pos[1], $pos[2], $pos[3], $pos[4], $pos[5], $pos[6]])
            // ->orderByRaw(DB::raw("FIELD(prophecy_numb, '" . implode("','", $pos) . "')"))
            // ->get();
            $prophecies = DB::select("
                    SELECT * FROM `berpredict_prophecies` WHERE `prophecy_numb` = $pos[1] UNION ALL 
                    SELECT * FROM `berpredict_prophecies` WHERE `prophecy_numb` = $pos[2] UNION ALL 
                    SELECT * FROM `berpredict_prophecies` WHERE `prophecy_numb` = $pos[3] UNION ALL 
                    SELECT * FROM `berpredict_prophecies` WHERE `prophecy_numb` = $pos[4] UNION ALL 
                    SELECT * FROM `berpredict_prophecies` WHERE `prophecy_numb` = $pos[5] UNION ALL 
                    SELECT * FROM `berpredict_prophecies` WHERE `prophecy_numb` = $pos[6] ");
            // dd($prophecies);
        } else {
            $prophecies = [];
        }
        return $prophecies;
    }

    // ดึงข้อมูลผลรวมเบอร์
    public function get_data_sumber($tel) {
        $telArray = str_split($tel);
        $telArray = array_map('intval', $telArray);
        $sum = array_sum($telArray); 

        $data_sum = BerpredictSum::where('predict_sum', $sum)->first();
        return $data_sum;
    }

    // คำนวณคะแนนและเกรดเพื่อแสดงกราฟ
    public function getscore_fortune($data_fortune) {
        $happy_percet = 0;
        $sad_percet = 0;
        $empty_percet = 0;
        $total_percet = 0;

        if(count($data_fortune) > 0) {
            foreach ($data_fortune as $data) {
                $total_percet += $data->prophecy_percent;
                if($data->prophecy_percent > 0) {
                    $happy_percet += $data->prophecy_percent;
                } else if ($data->prophecy_percent < 0) {
                    $sad_percet += $data->prophecy_percent;
                }
            }
            
            $empty_percet = 600 - $total_percet;
        }

        $total = $this->formatScore($total_percet);

        if($total > 0) {
            $grade = BerproductGrade::where('grade_display', 'yes')
                ->where('grade_min', '<=', $total)
                ->where('grade_max', '>=', $total)
                ->orderBy('grade_max', 'desc')
                ->first();
        } else {
            $grade = new \stdClass();
            $grade->grade_name = 'F';
        }
        
        return [
            'happy' => $this->formatScore($happy_percet),
            'sad' => $this->formatScore($sad_percet),
            'empty' => $this->formatScore($empty_percet),
            'total_score' => $total,
            'grade' => $grade
        ];
    }

    // แปลง percent เป็น score เต็ม 1000
    public function formatScore($score) {
        $formatdata = round((($score / 6) * 1000) / 100);
        return $formatdata;
    }

    public function form_test_import() {
        return view('frontend.pages.bermonthly_lucky.form_test_import');
    }

    public function import_by_excel(Request $request) {
        
        $file = $request->file('excel_file');   // รับไฟล์จาก request

        // เอาไว้ debug ดูข้อมูลในไฟล์ excel 
        // ข้อมูลไม่ควรเกิน 100 row 
        // $importedData = Excel::toArray(new class implements ToModel {
        //     public function model(array $row)
        //     {
        //         return new BerproductMonthly([
        //             'product_phone' => $row[8], // A1
        //             'price' => $row[9], // B1
        //             'network' => $row[10], // C1
        //             'sold' => $row[11], // D1
        //             'new' => $row[12], // E1
        //             'comment' => $row[13], // F1
        //             'discount' => $row[14], // G1
        //             'monthly' => $row[15], // H1
        //         ]);
        //     }
        // }, $file);
        // dd($importedData);

        // delete old data before new up load
        BerproductMonthly::truncate();

        // method import new ber 
        Excel::import(new BerMonthlyImportClass, $file);

        $this->getProductByCategory();

        return response()->json([
            'status' => 'success',
            'message' => 'upload data successfully'
        ] ,201);

    }

    private function getProductByCategory() {
        $reesultCate = BerproductCategory::where('bercate_id', '!=', 0)
            ->where('status', '=', true)
            ->orderBy('priority', 'ASC')
            ->get();
        // dd($reesultCate);
        foreach($reesultCate as $cateVal) {
            // DB::table('berproduct_monthlies')
            // ->where('product_category', 'like', '%,' . $cateVal['bercate_id'] . ',%')
            // ->where('default_cate', 'not like', '%,' . $cateVal['bercate_id'] . ',%')
            // ->update([
            //     'product_category' => DB::raw("replace(product_category, '," . $cateVal['bercate_id'] . ",' , ',')")
            // ]);
            
            $bercate = array();
            $sqlProd = array();
            $bercate[$cateVal['bercate_id']]['cate_id']  = $cateVal['bercate_id'];
            $sqlProd[$cateVal['bercate_id']]  ="";
            $sqlProd[$cateVal['bercate_id']]  .= 'SELECT  product_id,product_sold,product_phone,MID(product_phone,4, 10) as pp 
														 FROM berproduct_monthlies HAVING product_sold NOT LIKE "%y%" AND ';
                                                        $sqlProd[$cateVal['bercate_id']]  .='(';  
            $needfulArr = explode(',',$cateVal['bercate_needful']); 
            foreach($needfulArr as $nfKey => $nfVal){ 
                $bercate[$cateVal['bercate_id']]['needful'][$nfKey]  = $nfVal;	 
                if($nfKey != 0){	
                    $sqlProd[$cateVal['bercate_id']] .=' OR '; 
                    }						
                $sqlProd[$cateVal['bercate_id']]  .=' pp LIKE "%'.$nfVal.'%" ';	
            }
            $needlessArr = explode(',',$cateVal['bercate_needless']);
            if($needlessArr[0] != ''){ 
                $sqlProd[$cateVal['bercate_id']]  .=') AND (';
                foreach($needlessArr as $nlKey => $nlVal){				 
                    $bercate[$cateVal['bercate_id']]['needless'][$nlKey]  = $nlVal;
                    /* sql select product needless  */
                    if($nlKey != 0){	$sqlProd[$cateVal['bercate_id']]  .=' AND '; }
                    $sqlProd[$cateVal['bercate_id']]  .=' pp NOT LIKE "%'.$nlVal.'%" ';	
                }	
            }
            $sqlProd[$cateVal['bercate_id']]  .= ')';
            $resultSlcUpdate = DB::select($sqlProd[$cateVal['bercate_id']]);
            $cateIdUpdate  =  ''.$cateVal['bercate_id'].','; 

            $valIdIn = "";
            foreach($resultSlcUpdate as $keySlc => $valSlc){	
                if($keySlc != 0 ){  $valIdIn .= ',';	}
                $valIdIn .= $valSlc->product_id;		
            }   
            if($valIdIn != ""){
                DB::update("
                    UPDATE `berproduct_monthlies` 
                    SET product_category = CONCAT(product_category, :category_to_append)
                    WHERE product_id IN ( ".$valIdIn." ) 
                    AND product_category NOT LIKE :category_condition
                ", [
                    'category_to_append' => $cateIdUpdate,
                    'category_condition' => "%".$cateIdUpdate."%"
                ]);
            }
        }
    }

    public function export_excel() {
        return Excel::download(new BerproductMonthlyExport, 'exportproduct.xlsx');
    }

}
