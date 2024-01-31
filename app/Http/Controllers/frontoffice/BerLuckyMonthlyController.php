<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\BerproductMonthly;
use App\Models\Bernetwork;
use App\Models\BerpredictProphecy;
use App\Models\BerpredictSum;
use App\Models\BerproductGrade;
use App\Models\BerproductCategory;
use App\Models\BerpredictNumbcate;
use App\Models\Post;


use Maatwebsite\Excel\Facades\Excel;
use App\Imports\BerMonthlyImportClass;
use App\Exports\BerproductMonthlyExport;
use App\Models\BerluckyPackage;
use App\Models\BerproductAlover;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Calculation\Statistical\Distributions\F;

class BerLuckyMonthlyController extends Controller
{

    public function get_product_all(Request $request)
    {
        $getpost = $this->product_prepare_variable($request->all());

        $sql_sort = null;
        if (isset($getpost['need_sort'])) {
            if ($getpost['need_sort'] == "RAND") {
                $sql_sort .= " ORDER BY RAND(),product_sumber DESC ";
            } else {
                $sql_sort .= " ORDER BY product_price " . $getpost['need_sort'] . ",product_sumber DESC ";
            }
        } else {
            $sql_sort .= " ORDER BY product_pin DESC,product_price DESC,product_sumber DESC ";
        }

        // Set the current page from the request or default to 1
        $current_page = request('page', 1);
        $current_page = (filter_var($current_page, FILTER_SANITIZE_NUMBER_INT) == "") ? 1 : $current_page;
        // Set the number of items per page
        $perPage = 60;

        // Calculate the offset based on the current page and items per page
        $offset = ($current_page - 1) * $perPage;
        $limit = null;
        $sql = "SELECT *,(SELECT thumbnail FROM bernetworks WHERE berproduct_monthlies.product_network = bernetworks.network_name AND berproduct_monthlies.monthly_status = bernetworks.monthly) as thumbnail, MID(product_phone, 4, 7) AS pp
                    FROM berproduct_monthlies 
                    WHERE product_sold = :value $getpost[sql]
                    HAVING product_display = :display $getpost[sql2]
                    $sql_sort
                    $limit
                ";
        // dd($sql);
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
        $data_paginate = [
            "current_page" => $current_page,
            "total_page" => $total_page,
            "onLastPage" => $onLastPage,

        ];

        $berproduct_cates = BerproductCategory::where('bercate_display', 1)
            ->orderBy('priority')
            ->get();
        $berpredict_numbcate = BerpredictNumbcate::where('numbcate_display', 1)
            ->where('numbcate_pin', 1)
            ->orderBy('numbcate_priority')
            ->get();
				$packages = BerluckyPackage::where('display', true)->where('delete_status', false)->OrderBy('priority')->get();
				$networks = Bernetwork::where('display', 'yes')->get();
        $sumbers = BerpredictSum::where('predict_pin', 'yes')->get();
				// dd($berproducts);

        return view('frontend.pages.bermonthly_lucky.product_all', compact('berproducts', 'sumbers', 'networks', 'berproduct_cates', 'packages', 'data_paginate', 'berpredict_numbcate', 'totalCount'));
    }

    public function product_prepare_variable($request)
    {
        $sql = "";  #WHERE
        $sql2 =  ""; #HAVING

        if (isset($request['sim']) && $request['sim'] == "month") {
            $sql .= " AND `monthly_status` = 'yes' ";
        } else if (isset($request['sim']) && $request['sim'] == "paysim") {
            $sql .= " AND `monthly_status` = 'no' ";
        }

        $check = [];
        if (isset($request['pos1']) || isset($request['pos2']) || isset($request['pos3']) ||  isset($request['pos4']) ||  isset($request['pos5']) ||  isset($request['pos6']) ||  isset($request['pos7']) ||  isset($request['pos8']) ||  isset($request['pos9'])) {
            $pos1 = (isset($request['pos1']) && $request['pos1'] != '') ?  filter_var($request['pos1'], FILTER_SANITIZE_NUMBER_INT) : '_';
            $pos2 = (isset($request['pos2']) && $request['pos2'] != '') ?  filter_var($request['pos2'], FILTER_SANITIZE_NUMBER_INT) : '_';
            $pos3 = (isset($request['pos3']) && $request['pos3'] != '') ?  filter_var($request['pos3'], FILTER_SANITIZE_NUMBER_INT) : '_';
            $pos4 = (isset($request['pos4']) && $request['pos4'] != '') ?  filter_var($request['pos4'], FILTER_SANITIZE_NUMBER_INT) : '_';
            $pos5 = (isset($request['pos5']) && $request['pos5'] != '') ?  filter_var($request['pos5'], FILTER_SANITIZE_NUMBER_INT) : '_';
            $pos6 = (isset($request['pos6']) && $request['pos6'] != '') ?  filter_var($request['pos6'], FILTER_SANITIZE_NUMBER_INT) : '_';
            $pos7 = (isset($request['pos7']) && $request['pos7'] != '') ?  filter_var($request['pos7'], FILTER_SANITIZE_NUMBER_INT) : '_';
            $pos8 = (isset($request['pos8']) && $request['pos8'] != '') ?  filter_var($request['pos8'], FILTER_SANITIZE_NUMBER_INT) : '_';
            $pos9 = (isset($request['pos9']) && $request['pos9'] != '') ?  filter_var($request['pos9'], FILTER_SANITIZE_NUMBER_INT) : '_';
            $check['position'] = ' AND( product_phone LIKE "%0' . $pos1 . '' . $pos2 . '' . $pos3 . '' . $pos4 . '%' . $pos5 . '' . $pos6 . '' . $pos7 . '' . $pos8 . '' . $pos9 . '%") ';
            $sql .= $check['position'];
        }

        if (isset($request['package']) && filter_var($request['package'], FILTER_SANITIZE_NUMBER_INT) !== "") {
            $package = filter_var($request['package'], FILTER_SANITIZE_NUMBER_INT);
            $sql .= " AND FIND_IN_SET($package, product_package) > 0 ";
						// dd($sql);
        }


        if (isset($request['sum']) && filter_var($request['sum'], FILTER_SANITIZE_NUMBER_INT) !== "") {
            $sum = filter_var($request['sum'], FILTER_SANITIZE_NUMBER_INT);
            $sql .= " AND `product_sumber` = $sum ";
        }

        if (isset($request['sort'])) {
            $request['sort'] = strtoupper($request['sort']);
            if ($request['sort'] == "ASC" || $request['sort'] == "DESC" || $request['sort'] == "RAND") {
                $check['need_sort'] = $request['sort'];
            }
        }

        if (isset($request['fav'])) {
            $check['fav'] = (strpos($request['fav'], "*")) ? explode("*", $request['fav']) : explode(",", $request['fav']);
            if (!empty($check['fav'])) {
                foreach ($check['fav'] as $favv) {
                    $favv = FILTER_VAR($favv, FILTER_SANITIZE_NUMBER_INT);
                    if ($favv == "") continue;
                    $sql .= ' AND product_phone LIKE "%' . $favv . '%" ';
                }
            }
        }

        if (isset($request['min']) && FILTER_VAR($request['min'], FILTER_SANITIZE_NUMBER_INT) !== "") {
            $min = FILTER_VAR($request['min'], FILTER_SANITIZE_NUMBER_INT);
            $sql .= " AND `product_price` >= $min ";
        }

        if (isset($request['max']) && FILTER_VAR($request['max'], FILTER_SANITIZE_NUMBER_INT) !== "") {
            $max = FILTER_VAR($request['max'], FILTER_SANITIZE_NUMBER_INT);
            $sql .= " AND `product_price` <= $max ";
        }

        if (!empty($request['like'])) {
            $check['like'] = explode(',', $request['like']);
            $beforelike = filter_var($check['like'][0], FILTER_SANITIZE_NUMBER_INT);
            if ($beforelike != "") {
                foreach ($check['like'] as $key => $val) {
                    $val = filter_var($val, FILTER_SANITIZE_NUMBER_INT);
                    if ($val == "") {
                        continue;
                    }
                    $sql2 .= ($key == 0) ? " AND( " : " AND ";
                    $sql2 .= "pp LIKE '%" . $val . "%' ";
                }
                $sql2 .= " )";
            }
        }

        if (isset($request['dislike'])) {
            $check['dislike'] = explode(',', $request['dislike']);
            $beforeDislike = filter_var($check['dislike'][0], FILTER_SANITIZE_NUMBER_INT);
            if ($beforeDislike != "") {
                foreach ($check['dislike'] as $key => $val) {
                    $val = filter_var($val, FILTER_SANITIZE_NUMBER_INT);
                    if ($val == "") {
                        continue;
                    }
                    $sql2 .= ($key == 0) ? " AND( " : " AND ";
                    $sql2 .= "pp NOT LIKE '%" . $val . "%' ";
                }
                $sql2 .= " )";
            }
        }

        if (!empty($request['improve'])) {
            $check['improve'] = explode(',', $request['improve']);
            if (!empty($check['improve'])) {
                foreach ($check['improve']  as $key => $val) {
                    $val = filter_var($val, FILTER_SANITIZE_NUMBER_INT);
                    if ($val == "") {
                        continue;
                    }
                    $sql .= " AND product_improve LIKE '%," . $val . ",%' ";
                }
            }
        }

        $cate_val = null;
        if (isset($request['cate']) && $request['cate'] != 1) {
            $cate = filter_var($request['cate'], FILTER_SANITIZE_NUMBER_INT);
            $sql .=  " AND( product_category LIKE '%," . $cate . ",%' ) ";
        }

        if (isset($request['pin']) && $request['pin'] == "yes") {
            $sql .= " AND product_pin = 'yes' ";
        }

        if (!empty($request['auspicious'])) {
            $check['auspicious'] = explode(',', $request['auspicious']);
            $auspicious = $check['auspicious'];
            foreach ($auspicious as $key => $val) {
                $val = filter_var($val, FILTER_SANITIZE_NUMBER_INT);
                if ($cate_val == $val || $val == "") {
                    continue;
                }
                $sql .= ($key == 0 && !isset($cate_val)) ? " AND( " : " OR ";
                $sql .= " product_category LIKE '%," . $val . ",%' ";
            }
            $sql .= " ) ";
        }

        $getpost = $check;
        $getpost['sql'] = $sql;
        $getpost['sql2'] = $sql2;
        return $getpost;
    }

    public function detailber_page($tel)
    {
        $berproduct = BerproductMonthly::where('product_phone', $tel)->first();
        $benefits = [];
        if ($berproduct->monthly_status === "yes") {
					$package = BerluckyPackage::find($berproduct->product_package);
					if ($package) {
						$benefit_ids = explode(',', $package->benefit_ids);
						$benefits = Post::whereIn('id', $benefit_ids)
								->where('category', 'LIKE', '%,8,%')
								->where('status_display', 1)
								->get();
					}
        }

        $condition_detail = Post::where('category', 'LIKE', '%32%')->orWhere('slug', 'ck_เงื่อนไขเบอร์มงคล')->first();
        $data_sumber = $this->get_data_sumber($tel);
        $data_fortune = $this->fortune_tel($tel);
        $score = $this->getscore_fortune($data_fortune);

        return view('frontend.pages.bermonthly_lucky.detail_ber', compact('berproduct', 'benefits', 'data_sumber', 'data_fortune', 'score', 'condition_detail'));
    }

    public function fortune_page($tel)
    {
        $data_sumber = $this->get_data_sumber($tel);
        $data_fortune = $this->fortune_tel($tel);
        $score = $this->getscore_fortune($data_fortune);

        return view('frontend.pages.bermonthly_lucky.fortune_ber', compact('tel', 'data_sumber', 'data_fortune', 'score'));
    }

    // ทำนายเบอร์โทร
    public function fortune_tel($tel)
    {
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
    public function get_data_sumber($tel)
    {
        $telArray = str_split($tel);
        $telArray = array_map('intval', $telArray);
        $sum = array_sum($telArray);

        $data_sum = BerpredictSum::where('predict_sum', $sum)->first();
        return $data_sum;
    }

    // คำนวณคะแนนและเกรดเพื่อแสดงกราฟ
    public function getscore_fortune($data_fortune)
    {
        $happy_percet = 0;
        $sad_percet = 0;
        $empty_percet = 0;
        $total_percet = 0;

        if (count($data_fortune) > 0) {
            foreach ($data_fortune as $data) {
                $total_percet += $data->prophecy_percent;
                if ($data->prophecy_percent > 0) {
                    $happy_percet += $data->prophecy_percent;
                } else if ($data->prophecy_percent < 0) {
                    $sad_percet += $data->prophecy_percent;
                }
            }

            $empty_percet = 600 - $total_percet;
        }

        $total = $this->formatScore($total_percet);

        if ($total > 0) {
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
    public function formatScore($score)
    {
        $formatdata = round((($score / 6) * 1000) / 100);
        return $formatdata;
    }

    public function form_test_import()
    {
        return view('frontend.pages.bermonthly_lucky.form_test_import');
    }

    public function import_by_excel(Request $request)
    {

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
					$grade = ($row[9] == "") ? $this->generate_grade($row[0]) : $row[9];

					if ($row[1] == "") {
							$telArray = str_split($row[0]);
							$telArray = array_map('intval', $telArray);
							$sum = array_sum($telArray);
					} else {
							$sum = $row[1];
					}

					if($row[8] == "") {
						$comment = $predictSum->firstWhere('predict_sum', $sum)->predict_name;
					} else {
						$comment = $row[8];
					}
					
					$list_ber[] = [
						'product_phone' => $row[0],
            'product_sumber' => $sum,
            'product_network' =>  $row[2] = ($row[2] = true || $row[2] = 1) ? 'TRUE' : $row[2],
            'product_price' => $row[3],
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

				// delete old data before new up load
        BerproductMonthly::truncate();

				foreach (array_chunk($list_ber, 1000) as $chunk) {
					BerproductMonthly::insert($chunk);
				}
		
        // method import new ber
        // Excel::import(new BerMonthlyImportClass, $file);

        // generate product_category
        $this->getProductByCategory();

        //จัดหมวดหมู่ตามสูตร หมวดเบอร์คู่รัก และ หมวดเบอร์ห่าม - xxyy #automatic
        // $this->getProductByCategoryBySet();

        return response()->json([
            'status' => 'success',
            'message' => 'upload data successfully'
        ], 201);
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



    private function getProductByCategory()
    {
        $reesultCate = BerproductCategory::where('bercate_id', '!=', 1)
            ->where('status', '=', true)
            ->orderBy('priority', 'ASC')
            ->get();
					// dd($reesultCate);

        foreach ($reesultCate as $cateVal) {
            // DB::table('berproduct_monthlies')
            // ->where('product_category', 'like', '%,' . $cateVal['bercate_id'] . ',%')
            // ->where('default_cate', 'not like', '%,' . $cateVal['bercate_id'] . ',%')
            // ->update([
            //     'product_category' => DB::raw("replace(product_category, '," . $cateVal['bercate_id'] . ",' , ',')")
            // ]);

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
    }

    public function getProductByCategoryBySet() {
			$allBer = DB::select('SELECT product_id,product_pin,product_category,product_discount,product_comment,product_package,product_phone,product_sumber,product_price,product_sold,product_grade,monthly_status
													,MID(product_phone,2, 9) as nn 
													,MID(product_phone,4, 7) as pp 
													,MID(product_phone,7, 4) as ff 
			FROM berproduct_monthlies WHERE  product_category  NOT LIKE "%,0,%" AND product_sold NOT LIKE "%y%" ORDER BY product_id ASC ');
			// dd($allBer);

			$approve_arr = DB::select('SELECT * FROM berproduct_category_approves WHERE func_display = "yes"');
			if (!empty($approve_arr)) {
				$approve = array();
				foreach ($approve_arr as $val) {
						$val = json_decode(json_encode($val), true);
						$approve["c" . $val['func_id']]['id'] = $val['func_id'];
						$approve["c" . $val['func_id']]['cate_id'] = $val['func_cate_id'];
				}
			}

			/* ********* section 1 แปลงข้อมูลเข้าแต่ละ function ************ */  
			$var_case = $this->prepare_Byset_variable_condition($allBer,$approve); 
		
			/* ********** section 2 ส่วนของการกรองข้อมูลออก ***************** */ 
			$case = $this->prepare_Byset_filter_condition($var_case,$approve);  

			// dd($case);
			/* ********** section 3 ส่วนของการบันทึกข้อมูล ****************** */
			$res['ins'] = $this->insert_Byset_category($case,$approve);
			// dd($res['ins']);
    }

    public function prepare_Byset_variable_condition($allBer,$approve) {
        #(getProductByCategoryBySet)
		#product_id ไว้เก็บไอดีนำไปใช้อัพเดทข้อมูล product_id IN (..,..)
		$product_id = '';
		#set array 
		# x = เลขที่เหมือนกัน
		$condition1 = array(); #case1 = xxxxxx1 | xxxxxx2 หลักสุดท้ายอะไรก็ได้  
		$condition2 = array(); #case2 = 1xxxxxx | 2xxxxxx หลักที่ 1 อะไรก็ได้ 
		$condition3 = array(); #case3 = 12xxxxx | 21xxxxx สองหลักแรก! เลขเหมือนกันสลับตำแหน่ง 
		$condition4 = array(); #case4 = xxxxx21 | xxxxx12 สองหลักหลัง! เลขเหมือนกันสลับตำแหน่ง 
		$condition5 = array(); #case5 = xxxxxxx | xxxxxxx 7หลักหลังเหมือนกันทุกตำแหน่ง 
		$condition6 = array(); #case6 = xxx1212 เบอร์ xyxy
		$condition7 = array(); #case7 = xxx1122 เบอร์ xxyy
		$condition8 = array(); #case8 = 123x123 เบอร์ห่าม
		$condition9 = array(); #case9 = xxxx111 เบอร์ตอง
		$condition10 = array(); #case10 = xxx1111 เบอร์โฟร 
		$condition11 = array(); #case11 = 
		#จัดข้อมูลเข้าหมวดหมู่
        #แต่ละหมวดหมู่จะจับข้อมูลที่ตรงกันตามเงื่อนไขไว้รวมกลุ่มกัน
		foreach($allBer as $keys => $vals){  
			// dd($vals);
			#case1 
        if(isset($approve['c1'])){
                $con1 = substr($vals->nn,0,-1);

				if(!empty($condition1[$con1])){  
					$len1 = count($condition1[$con1]); 
				}else{ 
					$len1  = 0;
				} 
				$condition1[$con1][$len1]['id'] = $vals->product_id;
				$condition1[$con1][$len1]['price'] = $vals->product_price;
				$condition1[$con1][$len1]['numb'] = $vals->product_phone;  
				$condition1[$con1][$len1]['sumber'] = $vals->product_sumber; 
				$condition1[$con1][$len1]['comment'] = $vals->product_comment;   
				$condition1[$con1][$len1]['package'] = $vals->product_package;   
                $condition1[$con1][$len1]['discount'] = $vals->product_discount;   
				$condition1[$con1][$len1]['grade'] = $vals->product_grade;  
				$condition1[$con1][$len1]['p_price'] = $vals->product_price;  
				$condition1[$con1][$len1]['monthly'] = $vals->monthly_status;  	
				$condition1[$con1][$len1]['pp'] = $vals->nn;   
				$condition1[$con1][$len1]['value'] = $con1;
			} 
			#case2 
			if(isset($approve['c2'])){   
                $con2 = substr($vals->nn,2,1);  
                $setA = substr($vals->nn,0,2);  
                $setB = substr($vals->nn,3);  
                $setResc = $setA.$setB;
				if(!empty($condition2[$setResc])){  
					$len2 = count($condition2[$setResc]); 
				}else{
					$len2  = 0;
				}
				$condition2[$setResc][$len2]['id'] = $vals->product_id;
				$condition2[$setResc][$len2]['price'] = $vals->product_price;
				$condition2[$setResc][$len2]['numb'] = $vals->product_phone;  
				$condition2[$setResc][$len2]['sumber'] = $vals->product_sumber;  
				$condition2[$setResc][$len2]['comment'] = $vals->product_comment;   
				$condition2[$setResc][$len2]['package'] = $vals->product_package;   
                $condition2[$setResc][$len2]['discount'] = $vals->product_discount; 
				$condition2[$setResc][$len2]['grade'] = $vals->product_grade;  
				$condition2[$setResc][$len2]['p_price'] = $vals->product_price;
				$condition2[$setResc][$len2]['monthly'] = $vals->monthly_status;  
				$condition2[$setResc][$len2]['pp'] = $setResc;
                $condition2[$setResc][$len2]['value'] = $con2; 
			}
			#case3 
			if(isset($approve['c3'])){
                $con3 = substr($vals->nn,2,2); 
                $setA = substr($vals->nn,0,2);  
                $setB = substr($vals->nn,4);  

				if(!empty($condition3[$con3])){  
					$len3 = count($condition3[$con3]); 
				}else{
					$len3  = 0;
						}
						if(substr($con3,0,1) != substr($con3,1,1)){
							$condition3[$con3][$len3]['id'] = $vals->product_id;
							$condition3[$con3][$len3]['price'] = $vals->product_price;
							$condition3[$con3][$len3]['numb'] = $vals->product_phone; 
							$condition3[$con3][$len3]['sumber'] = $vals->product_sumber; 
							$condition3[$con3][$len3]['comment'] = $vals->product_comment;   
							$condition3[$con3][$len3]['package'] = $vals->product_package;   
							// $condition3[$con3][$len3]['network'] = $vals->product_network;   
							$condition3[$con3][$len3]['discount'] = $vals->product_discount;
							$condition3[$con3][$len3]['grade'] = $vals->product_grade;   
							$condition3[$con3][$len3]['p_price'] = $vals->product_price;  
							$condition3[$con3][$len3]['monthly'] = $vals->monthly_status;  
							$condition3[$con3][$len3]['pp'] = $setA.$setB;   
							$condition3[$con3][$len3]['value'] = $con3; 
						}
			}
			#case4
			if(isset($approve['c4'])){ 
				$con4 = substr($vals->nn,0,-2);
				if(!empty($condition4[$con4])){  
					$len4 = count($condition4[$con4]); 
				}else{
					$len4  = 0;
				}
				$condition4[$con4][$len4]['id'] = $vals->product_id;
				$condition4[$con4][$len4]['price'] = $vals->product_price;
				$condition4[$con4][$len4]['numb'] = $vals->product_phone;  
				$condition4[$con4][$len4]['sumber'] = $vals->product_sumber; 
				$condition4[$con4][$len4]['comment'] = $vals->product_comment;   
				$condition4[$con4][$len4]['package'] = $vals->product_package;   
                // $condition4[$con4][$len4]['network'] = $vals->product_network;   
                $condition4[$con4][$len4]['discount'] = $vals->product_discount;
				$condition4[$con4][$len4]['grade'] = $vals->product_grade;  
				$condition4[$con4][$len4]['p_price'] = $vals->product_price;  
				$condition4[$con4][$len4]['monthly'] = $vals->monthly_status;  
				$condition4[$con4][$len4]['pp'] = $vals->nn;  
				$condition4[$con4][$len4]['value'] = $con4; 
      }
            
			#case5 
			if(isset($approve['c5'])){
				$con5 = $vals->pp;  
				if(!empty($condition5[$con5])){
					$len5 = count($condition5[$con5]); 
				}else{
					$len5  = 0;
				}
				$condition5[$con5][$len5]['id'] = $vals->product_id;
				$condition5[$con5][$len5]['price'] = $vals->product_price;
				$condition5[$con5][$len5]['numb'] = $vals->product_phone;  
				$condition5[$con5][$len5]['pp'] = $vals->pp;  
				$condition5[$con5][$len5]['sumber'] = $vals->product_sumber; 
				$condition5[$con5][$len5]['comment'] = $vals->product_comment;   
				$condition5[$con5][$len5]['package'] = $vals->product_package;   
                // $condition5[$con5][$len5]['network'] = $vals->product_network; 
                $condition5[$con5][$len5]['discount'] = $vals->product_discount;  
				$condition5[$con5][$len5]['grade'] = $vals->product_grade;  
				$condition5[$con5][$len5]['p_price'] = $vals->product_price;  
				$condition5[$con5][$len5]['monthly'] = $vals->monthly_status;  
				$condition5[$con5][$len5]['value'] = $con5;  
			}
			#case6  
			if(isset($approve['c6'])){
				$numbKey6 = array();
				$numChk6 = array();   
				$limit6 = 3;    
				$position6 = -4;  
				for($i=0; $i < $limit6 ;$i++){ 
					$round =  $position6 + $i; 
					$numb = substr($vals->ff,$round,2); 
					$numbKey6[$i] = $numb;   
				}  
				
				if(substr($numbKey6[0],0,1) != substr($numbKey6[0],1,1)   &&  substr($numbKey6[2],0,1) != substr($numbKey6[2],1,1)  ){
					if($numbKey6[0] == $numbKey6[2] ){
						$numChk6['value'] =  $numbKey6[0].$numbKey6[2];

					} 
				} 
				// if(substr($numbKey6[1],0,1) != substr($numbKey6[1],1,1)   &&  substr($numbKey6[3],0,1) != substr($numbKey6[3],1,1)  ){
				// 	if($numbKey6[1] == $numbKey6[3]){
				// 		$numChk6['value'] =  $numbKey6[1].$numbKey6[3];
				// 		}
				//  }
				// if(substr($numbKey6[2],0,1) != substr($numbKey6[2],1,1)   &&  substr($numbKey6[4],0,1) != substr($numbKey6[4],1,1)  ){
				// 	if($numbKey6[2] == $numbKey6[4]){
				// 		$numChk6['value'] =  $numbKey6[2].$numbKey6[4];
				// 		}
				//  }
	
				// if(substr($numbKey6[3],0,1) != substr($numbKey6[3],1,1)   &&  substr($numbKey6[5],0,1) != substr($numbKey6[5],1,1)  ){
				// 	if($numbKey6[3] == $numbKey6[5]){
				// 		$numChk6['value'] =  $numbKey6[3].$numbKey6[5];
				// 		}
				//  } 
				if(!empty($numChk6)){  
					$numChk6['numb'] =  $vals->product_phone;
					$numChk6['pp'] =  $vals->ff;
					$numChk6['id'] =  $vals->product_id;  
					$numChk6['monthly'] =  $vals->monthly_status;    
					$condition6[$vals->product_id][$vals->ff]  = $numChk6;  
					$product_id .= $vals->product_id.',';
				}   
			} 
          
			#case7 
			if(isset($approve['c7'])){
				$numChk10 = array(); 
				$numbKey7 = array();
				$numChk7 = array();   
				$limit7 = 3;    
				$position7 = -4;  
				for($i=0; $i < $limit7 ;$i++){ 
						$round =  $position7 + $i; 
						$numb = substr($vals->ff,$round,2); 
						$numbKey7[$i] = $numb;    
				}  
				
				#ถ้าชุดเลขตำแหน่งแรกกับตำแหน่งที่สองเหมือนกัน ทั้งฝั่งซ้ายและขวาจะเกิดเบอร์ xxyy
				#ถ้าเลขที่อยู่คู่ระหว่างกันตรงกัน จะเชื่อมโยงเลขเท่ากับเบอร์โฟร์ เช่น [9(9)-> 9 == 9 <-(9)9] == 9999 จะเกิดเบอร์โฟร์
				if(substr($numbKey7[0],0,1) == substr($numbKey7[0],1,1)   &&  substr($numbKey7[2],0,1) == substr($numbKey7[2],1,1)  ){ 
					if(substr($numbKey7[0],1,1) != substr($numbKey7[2],0,1)){
                        $numChk7['value'] =  $numbKey7[0].$numbKey7[2]; 
					}  
                } 
                
				// #เงื่อนไขนี้เข้าข่ายของฟังก์ชั่น case10 เบอร์โฟร์
				// if(substr($numbKey7[1],0,1) == substr($numbKey7[1],1,1)   &&  substr($numbKey7[3],0,1) == substr($numbKey7[3],1,1)  ){
				// 	if(substr($numbKey7[1],1,1) == substr($numbKey7[3],0,1)){
				// 		$numChk10['value'] =  $numbKey7[1].$numbKey7[3];  
				// 	} else {
				// 		$numChk7['value'] =  $numbKey7[1].$numbKey7[3];  
				// 	}  
				// }
				// if(substr($numbKey7[2],0,1) == substr($numbKey7[2],1,1)   &&  substr($numbKey7[4],0,1) == substr($numbKey7[4],1,1)  ){ 
				// 	if(substr($numbKey7[2],1,1) == substr($numbKey7[4],0,1)){
				// 		$numChk10['value'] =  $numbKey7[2].$numbKey7[4];  
				// 	} else {
				// 		$numChk7['value'] =  $numbKey7[2].$numbKey7[4];  
				// 	} 
				// } 
				// if(substr($numbKey7[3],0,1) == substr($numbKey7[3],1,1)   &&  substr($numbKey7[5],0,1) == substr($numbKey7[5],1,1)  ){
				// 	if(substr($numbKey7[3],1,1) == substr($numbKey7[5],0,1)){
				// 		$numChk10['value'] =  $numbKey7[3].$numbKey7[5];  
				// 	} else {
				// 		$numChk7['value'] =  $numbKey7[3].$numbKey7[5];  
				// 	}  
				// }   
		
				if(!empty($numChk7)){
					$numChk7['numb'] =  $vals->product_phone;
					$numChk7['pp'] =  $vals->ff;
					$numChk7['id'] =  $vals->product_id;   
					$numChk7['monthly'] =  $vals->monthly_status;   
					$condition7[$vals->product_id][$vals->ff]  = $numChk7;  
					$product_id .= $vals->product_id.','; 
                } 
                // else if(!empty($numChk10)) {  
				// 	$numChk10['numb'] =  $vals['product_phone'];
				// 	$numChk10['pp'] =  $vals['ff'];
				// 	$numChk10['id'] =  $vals['product_id'];   
				// 	$condition10[$vals['product_id']][$vals['ff']]  = $numChk10;  
				// 	$product_id .= $vals['product_id'].','; 
				// } 
				
			} 
			#case8  
			if(isset($approve['c8'])){
				$numbKey8 = array();
				$numChk8 = array();   
				$limit8 = 5;    
				$position8 = -7;  
				for($i=0; $i < $limit8 ;$i++){ 
						$round =  $position8 + $i; 
						$numb = substr($vals->pp,$round,3); 
						$numbKey8[$i] = $numb;  
				}  
				if( $numbKey8[0] == $numbKey8[3] ){  		$numChk8['value'] =  $numbKey8[0].$numbKey8[0]; 
				}else if( $numbKey8[0] == $numbKey8[4]){  	$numChk8['value'] =  $numbKey8[4].$numbKey8[4]; 
				}else if($numbKey8[1] == $numbKey8[4]){  	$numChk8['value'] =  $numbKey8[1].$numbKey8[1]; 
				}else if($numbKey8[3] == $numbKey8[0]){ 	$numChk8['value'] =  $numbKey8[3].$numbKey8[3];
				} 
				if(!empty($numChk8)){  
					$numChk8['numb'] =  $vals->product_phone;
					$numChk8['pp'] =  $vals->pp;
					$numChk8['id'] =  $vals->product_id;  
					$numChk8['monthly'] =  $vals->monthly_status;  
					$condition8[$vals->product_id][$vals->pp]  = $numChk8;  
					$product_id .= $vals->product_id.',';
				}  
			} 
			#case9
			// if(isset($approve['c9'])){
			// 	$numbKey9 = array();
			// 	$numChk9 = array();   
			// 	$limit9 = 7;    
			// 	$position9 = -7;  
			// 	for($i=0; $i < $limit9 ;$i++){ 
			// 			$round =  $position9 + $i; 
			// 			$numb = substr($vals['pp'],$round,1); 
			// 			$numbKey9[$i] = $numb;   
			// 	}   
			// 	if( $numbKey9[0]  ==  $numbKey9[1] && $numbKey9[1] == $numbKey9[2] ){ 
			// 		$numChk9['value'] =  $numbKey9[0].$numbKey9[1].$numbKey9[2]; 
			// 	}
			// 	if( $numbKey9[1]  ==  $numbKey9[2] && $numbKey9[2] == $numbKey9[3] ){ 
			// 		$numChk9['value'] =  $numbKey9[1].$numbKey9[2].$numbKey9[3]; 
			// 	}
			// 	if( $numbKey9[2]  ==  $numbKey9[3] && $numbKey9[3] == $numbKey9[4] ){ 
			// 		$numChk9['value'] =  $numbKey9[2].$numbKey9[3].$numbKey9[4]; 
			// 	} 
			// 	if( $numbKey9[3]  ==  $numbKey9[4] && $numbKey9[4] == $numbKey9[5] ){ 
			// 		$numChk9['value'] =  $numbKey9[3].$numbKey9[4].$numbKey9[5]; 
			// 	}
			// 	if( $numbKey9[4]  ==  $numbKey9[5] && $numbKey9[5] == $numbKey9[6] ){ 
			// 		$numChk9['value'] =  $numbKey9[4].$numbKey9[5].$numbKey9[6]; 
			// 	} 
			// 	if(!empty($numChk9)){  
			// 		$numChk9['numb'] =  $vals['product_phone'];
			// 		$numChk9['pp'] =  $vals['pp'];
			// 		$numChk9['id'] =  $vals['product_id'];  
			// 		$condition9[$vals['product_id']][$vals['pp']]  = $numChk9;  
			// 		$product_id .= $vals['product_id'].',';
			// 	}
            // }  
            #case11
            #xxx1221
			if(isset($approve['c11'])){
				$numbKey11 = array();
				$numChk11 = array();   
				$limit11 = 7;    
				$position11 = -7;  
				for($i=0; $i < $limit11 ;$i++){ 
						$round =  $position11 + $i; 
						$numb = substr($vals->pp,$round,1); 
						$numbKey11[$i] = $numb;   
				}

				// if( $numbKey11[0]  ==  $numbKey11[3] && $numbKey11[1] == $numbKey11[2] ){ 
				// 	$numChk11['value'] =  $numbKey11[0].$numbKey11[1].$numbKey11[2].$numbKey11[3]; 
				// }
				// if( $numbKey11[1]  ==  $numbKey11[4] && $numbKey11[2] == $numbKey11[3] ){ 
				// 	$numChk11['value'] =  $numbKey11[1].$numbKey11[2].$numbKey11[3].$numbKey11[4]; 
				// }
				// if( $numbKey11[2]  ==  $numbKey11[5] && $numbKey11[3] == $numbKey11[4] ){ 
				// 	$numChk11['value'] =  $numbKey11[2].$numbKey11[3].$numbKey11[4].$numbKey11[5]; 
				// } 
				if( $numbKey11[3]  ==  $numbKey11[6] && $numbKey11[4] == $numbKey11[5] ){ 
					$numChk11['value'] =  $numbKey11[3].$numbKey11[4].$numbKey11[5].$numbKey11[6]; 
				}
			
				if(!empty($numChk11)){  
					$numChk11['numb'] =  $vals->product_phone;
					$numChk11['pp'] =  $vals->pp;
					$numChk11['id'] =  $vals->product_id;  
					$numChk11['monthly'] =  $vals->monthly_status;  
					$condition11[$vals->product_id][$vals->pp ] = $numChk11;  
					$product_id .= $vals->product_id.',';
                    
				}
			}   
        }   
     
	    #ส่งค่ากลับ
	    $ret['condition1'] = $condition1;
	    $ret['condition2'] = $condition2;
	    $ret['condition3'] = $condition3;
	    $ret['condition4'] = $condition4;
	    $ret['condition5'] = $condition5;
	    $ret['condition6'] = $condition6;
	    $ret['condition7'] = $condition7;
	    $ret['condition8'] = $condition8;
	    // $ret['condition9'] = $condition9;
      // $ret['condition10']= $condition10;   
      $ret['condition11']= $condition11; 
	    $ret['product_id'] = $product_id;  
		
 	  	return $ret;
    }

    public function prepare_Byset_filter_condition($case,$approve) {
		// dd($case);
		#(getProductByCategoryBySet)
		#case1 
		if(isset($approve['c1']) && !empty($case['condition1'])){ 
			#ลูปลบกลุ่มข้อมูลที่มีไม่ถึง 2 เบอร์
			$resultCase1 = array();  
				foreach($case['condition1'] as $index => $valz ){  
					$len = count($valz); 
					if($len  < 2){ 	
						unset($case['condition1'][$index]);
					}else{  
						#จัดกลุ่มตามราคา
						$price = 0;
						foreach($valz as $key => $value){  
							if($value['price'] >  $price){
								$price =  $value['price'];
							} 
						} 
						foreach($valz as $key => $value){   
							$case['condition1'][$index][$key]['price'] = $price;    
						}   
					} 
				} 
				$ret['resultCase1'] = $case['condition1'];  
		}   
		
		#case2 
		if(isset($approve['c2']) && !empty($case['condition2'])){

            #ลูปลบกลุ่มข้อมูลที่มีไม่ถึง 2 เบอร์  
            $resultCase2 = array(); 
			foreach($case['condition2'] as $index => $valz ){ 
                if(count($case['condition2'][$index]) < 2){
                    unset($case['condition2'][$index]); 
                }else{
                    $setPrice = 0;
					foreach($valz as $key => $value){  
					  if($value['price'] >  $setPrice){
						  $setPrice  =  $value['price'];
					  } 
					} 
					foreach($valz as $key => $value){  
					  $case['condition2'][$index][$key]['price'] = $setPrice;    
					}   
                }
            }
            $ret['resultCase2'] = $case['condition2']; 

           
        }

     
		#case3 
		if(isset($approve['c3']) && !empty($case['condition3'])){ 
			#part1 #ลูปลบกลุ่มข้อมูลที่มีไม่ถึง 2 เบอร์
            $resultCase3 = array(); 
			foreach($case['condition3'] as $index => $valz ){    
				$len = count($valz); 
				if($len  < 2){  
					unset($case['condition3'][$index]);
				}else{  
					$price = 0;
					foreach($valz as $key => $value){  
						if($value['price'] >  $price){
							$price =  $value['price'];
						} 
					} 
					foreach($valz as $key => $value){  
						$case['condition3'][$index][$key]['dprice'] = $price;    
					}   
				}  
			}   
             
			#part2 #กรองข้อมูล 2 หลักด้านหน้า
			foreach($case['condition3'] as $keys => $valp){   
				foreach($valp as $key => $gg){  
					$lastKey = $key -1; 
					$value['st'] = substr($gg['value'],0,1);
					$value['nd'] = substr($gg['value'],1,1); 
                    $resc = $value['nd'].''.$value['st']; 
                    $resultCase3[$gg['pp']][$keys]['id'] = $gg['id'];
                    $resultCase3[$gg['pp']][$keys]['numb'] = $gg['numb'];
                    $resultCase3[$gg['pp']][$keys]['sumber'] = $gg['sumber']; 
                    $resultCase3[$gg['pp']][$keys]['comment'] = $gg['comment']; 
                    $resultCase3[$gg['pp']][$keys]['package'] = $gg['package']; 
                    // $resultCase3[$gg['pp']][$keys]['network'] = $gg['network']; 
                    $resultCase3[$gg['pp']][$keys]['discount'] = $gg['discount']; 
                    $resultCase3[$gg['pp']][$keys]['grade'] = $gg['grade'];   
                    $resultCase3[$gg['pp']][$keys]['p_price'] = $gg['p_price'];   
                    $resultCase3[$gg['pp']][$keys]['value'] = $gg['value'];
                    $resultCase3[$gg['pp']][$keys]['price'] = $gg['dprice']; 
                    $resultCase3[$gg['pp']][$keys]['monthly'] = $gg['monthly']; 
                    $resultCase3[$gg['pp']][$keys]['pp'] = $gg['pp']; 
                    $resultCase3[$gg['pp']][$keys]['flip'] = $resc; 
				}   
             }  
             foreach($resultCase3 as $key => $valp){
                 if(count($resultCase3[$key]) > 1){
                     foreach($valp as $find){  
                        if(!isset($resultCase3[$key][$find['flip']])){
                            unset($resultCase3[$key]);
                        }
                     }
                 }else{
                    unset($resultCase3[$key]);
                 }
             }
             $ret['resultCase3'] = $resultCase3; 
        }


        #case4 
            if(isset($approve['c4']) && !empty($case['condition4'])){ 
                #ลูปลบกลุ่มข้อมูลที่มีไม่ถึง 2 เบอร์
                $resultCase4 = array();
                foreach($case['condition4'] as $index => $valz ){   
                $len = count($valz); 
                if($len  < 2){
                    unset($case['condition4'][$index]);
                } 
        } 
    
                foreach($case['condition4'] as $keys => $valp){    
                    foreach($valp as $key => $gg){ 
                    $rescArr= array();
                    $lastKey = $key -1; 
                    $value['st'] = substr($gg['pp'],7,1);
                    $value['nd'] = substr($gg['pp'],8,1); 
                    $resc =  $gg['value'].$value['nd'].$value['st'];  
                    $rescArr[] = substr($gg['pp'],7,1);
                    $rescArr[] = substr($gg['pp'],8,1); 
                    sort($rescArr);
                    $sort =  $rescArr[0].$rescArr[1];   
                        foreach($case['condition4'][$gg['value']] as $index => $aa ){   
                        if($gg['id'] != $aa['id']){   
                            if( $aa['pp'] == $resc ){    
                                $oldSort = $sort;  
                                $resultCase4[$gg['value']][$sort][$key]['id'] = $gg['id'];
                                $resultCase4[$gg['value']][$sort][$key]['numb'] = $gg['numb'];   
                                $resultCase4[$gg['value']][$sort][$key]['sumber'] = $gg['sumber']; 
                                $resultCase4[$gg['value']][$sort][$key]['comment'] = $gg['comment']; 
                                $resultCase4[$gg['value']][$sort][$key]['package'] = $gg['package']; 
                                $resultCase4[$gg['value']][$sort][$key]['discount'] = $gg['discount']; 
                                // $resultCase4[$gg['value']][$sort][$key]['network'] = $gg['network']; 
                                $resultCase4[$gg['value']][$sort][$key]['grade'] = $gg['grade']; 
                                $resultCase4[$gg['value']][$sort][$key]['p_price'] = $gg['p_price']; 
                                $resultCase4[$gg['value']][$sort][$key]['value'] = $gg['value'].$sort;  
                                $resultCase4[$gg['value']][$sort][$key]['pp'] = $gg['pp']; 
                                $resultCase4[$gg['value']][$sort][$key]['flip'] = $resc; 
                                $resultCase4[$gg['value']][$sort][$key]['port'] = $sort;  
                                $resultCase4[$gg['value']][$sort][$key]['oldPrice'] = $aa['price']; 
                                $resultCase4[$gg['value']][$sort][$key]['monthly'] = $gg['monthly']; 
                            }   
                        } 
                        }   
            }
        
                if(!empty($resultCase4[$gg['value']][$sort])){
                    if(count($resultCase4[$gg['value']][$sort]) < 2){  
                        unset($resultCase4[$gg['value']][$sort]);
                    }  
            } 
        } 
       
        foreach($resultCase4 as $index => $value){
            foreach($value as $key => $val){  
                $price = 0;  
                foreach($resultCase4[$index][$key] as $keyPrice => $var){ 
                    if($var['oldPrice'] >  $price){
                        $price =  $var['oldPrice'];
                    }   
                }   
                foreach($resultCase4[$index][$key] as $keyId => $var){  
                    $resultCase4[$index][$key][$keyId]['price'] =  $price;
                } 
            } 
        }
        $ret['resultCase4'] = $resultCase4;
        }
    
		#case5 
		if(isset($approve['c5']) && !empty($case['condition5'])){ 
			#ลูปลบกลุ่มข้อมูลที่มีไม่ถึง 2 เบอร์
			$resultCase5 = array(); 
			foreach($case['condition5'] as $index => $valz ){ 
				$len = count($valz);    
				if($len  < 2){    
					unset($case['condition5'][$index]);
				} else {  
					$price = 0;
					foreach($valz as $key => $value){  
						if($value['price'] >  $price){
							$price =  $value['price'];
						} 
					} 
					foreach($valz as $key => $value){  
						$case['condition5'][$index][$key]['price'] = $price;    
					}   
				}
			}  
			foreach($case['condition5'] as $keys => $valp){   
				foreach($valp as $key => $gg){  
					$lastKey = $key -1;  
					$resc =  $gg['value']; 
					foreach($case['condition5'][$gg['value']] as $index => $aa ){   
						if($aa['pp'] == $resc && $gg['id'] != $aa['id'] ){
							$resultCase5[$gg['value']][$key]['id'] = $gg['id']; 
							$resultCase5[$gg['value']][$key]['numb'] = $gg['numb'];    
							$resultCase5[$gg['value']][$key]['price'] = $gg['price'];
							$resultCase5[$gg['value']][$key]['sumber'] = $gg['sumber']; 
							$resultCase5[$gg['value']][$key]['comment'] = $gg['comment']; 
							$resultCase5[$gg['value']][$key]['package'] = $gg['package']; 
                            // $resultCase5[$gg['value']][$key]['network'] = $gg['network']; 
                            $resultCase5[$gg['value']][$key]['discount'] = $gg['discount']; 
							$resultCase5[$gg['value']][$key]['grade'] = $gg['grade'];  
							$resultCase5[$gg['value']][$key]['p_price'] = $gg['p_price'];  
							$resultCase5[$gg['value']][$key]['val'] = $gg['value'];  
							$resultCase5[$gg['value']][$key]['pp'] = $gg['pp'];   
							$resultCase5[$gg['value']][$key]['value'] = $gg['pp'];  
							$resultCase5[$gg['value']][$key]['monthly'] = $gg['monthly'];  
						} 
					}  
				}  
				if(!empty($resultCase5[$gg['value']])){
					if(count($resultCase5[$gg['value']]) < 2){  
						unset($resultCase5[$keys]); 
					} 
				}  	
			}
            $ret['resultCase5'] = $case['condition5'];
		}
		// dd($case);
		#case6
		if(isset($approve['c6']) && !empty($case['condition6'])){  
			$ret['resultCase6'] = $case['condition6'];
		}

		#case7
		if(isset($approve['c7']) && !empty($case['condition7'])){  
			$ret['resultCase7'] = $case['condition7'];
		}

		#case8
		if(isset($approve['c8']) && !empty($case['condition8'])){  
			$ret['resultCase8'] = $case['condition8'];
		}

		// #case9
		// if(isset($approve['c9']) && !empty($case['condition9'])){  
		// 	$ret['resultCase9'] = $case['condition9'];
		// }

		// #case10
		// if(isset($approve['c10']) && !empty($case['condition10'])){  
		// 	$ret['resultCase10'] = $case['condition10'];
        // }

        #case11
		if(isset($approve['c11']) && !empty($case['condition11'])){  
			$ret['resultCase11'] = $case['condition11'];
		}
		 
		return $ret;
    }

    public function insert_Byset_category($case,$approve) {
			// dd($case);
			#(getProductByCategoryBySet)
			#part1 category id = 3 
			$idArr_1 = array(); 
			$category = 3; 
			#case1
			if(isset($approve['c1']) && !empty($case['resultCase1'])){ 
				foreach($case['resultCase1'] as $keys => $vals){
					$ii= 0; 
					foreach( $vals as $cc => $kk){ 
						if(!isset($idArr_1[$kk['id']])){ $idArr_1[$kk['id']] = $kk['id']; }  
						$func_id = 1;
						$group = $kk['value'];
						$sort_by = 0;
						$priority = $ii; 
						$price =  $kk['price'];
						$id = $kk['id']; 
						$number = $kk['numb']; 
						$sumber = $kk['sumber']; 
                        $comment = $kk['comment'];   
                        $package = $kk['package'];   
                        $discount = $kk['discount'];   
						// $network = $kk['network'];   
						$grade = $kk['grade'];  
						$monthly = $kk['monthly'];  
						$p_price = $kk['p_price'];  

						$listBer[] = array( 'category' => $category,
											'func_id' => ($func_id),
											'lover_group' => ($group),
											'sort' => ($sort_by),
											'love_priority' =>($priority),
											'group_price' =>($price),
											'product_id' => ($id),
											'product_phone' => ($number),
											'product_sumber' => ($sumber),
                                            'product_comment' => ($comment),
                                            'product_package' => ($package),
                                            'product_discount' => ($discount),
											// 'product_network' => ($network),
											'product_grade' => ($grade),
											'product_price' => ($p_price),
											'monthly_status' => ($monthly),
											'status' => 'auto' );   
						$ii++;
					} 
				}
			}

			#case2
			if(isset($approve['c2'])  && !empty($case['resultCase2'])){ 
				foreach($case['resultCase2'] as $keys => $vals){ 
					$ii= 0;
					foreach( $vals as $cc => $kk){ 
						if(!isset($idArr_1[$kk['id']])){ $idArr_1[$kk['id']] = $kk['id']; } 
						$func_id = 2;
						$group = $kk['pp'];
						$sort_by = 0;
						$priority = $ii;
						$price =  $kk['price'];
						$id = $kk['id']; 
						$number = $kk['numb']; 
						$sumber = $kk['sumber']; 
                        $comment = $kk['comment']; 
												$package = $kk['package'];    
                        $discount = $kk['discount'];  
						// $network = $kk['network'];   
						$grade = $kk['grade'];  
						$monthly = $kk['monthly'];  
						$p_price = $kk['p_price'];  
						$listBer[] = array( 'category' => $category,
											'func_id' => ($func_id),
											'lover_group' => ($group),
											'sort' => ($sort_by),
											'love_priority' =>($priority),
											'group_price' =>($price),
											'product_id' => ($id),
											'product_phone' => ($number),
											'product_sumber' => ($sumber),
                                            'product_comment' => ($comment),
																						'product_package' => ($package),
                                            'product_discount' => ($discount),
											// 'product_network' => ($network),
											'product_grade' => ($grade), 
											'product_price' => ($p_price),
											'monthly_status' => ($monthly),
											'status' => 'auto' );   
						$ii++;
					} 
				}
			}
			#case3
			if(isset($approve['c3'])  && !empty($case['resultCase3'])){ 
				foreach($case['resultCase3'] as $keys => $vals){ 
					$ii= 0;
					foreach( $vals as $cc => $kk){ 
						if(!isset($idArr_1[$kk['id']])){ $idArr_1[$kk['id']] = $kk['id']; }  
						$func_id = 3;
						$group = $kk['pp']; 
						$sort_by = 0;
						$priority = $ii;
						$price =  $kk['price'];
						$id = $kk['id']; 
						$number = $kk['numb']; 
						$sumber = $kk['sumber']; 
                        $comment = $kk['comment']; 
												$package = $kk['package'];    
                        $discount = $kk['discount']; 
						// $network = $kk['network'];   
						$grade = $kk['grade'];  
						$p_price = $kk['p_price'];  
						$monthly = $kk['monthly'];  
							 
						$listBer[] = array( 'category' => $category,
											'func_id' => ($func_id),
											'lover_group' => ($group),
											'sort' => ($sort_by),
											'love_priority' =>($priority),
											'group_price' =>($price),
											'product_id' => ($id),
											'product_phone' => ($number),
											'product_sumber' => ($sumber),
                                            'product_comment' => ($comment),
																						'product_package' => ($package),
                                            'product_discount' => ($discount),
											// 'product_network' => ($network),
											'product_grade' => ($grade),
											'product_price' => ($p_price),
											'monthly_status' => ($monthly),
											'status' => 'auto' );   
						$ii++;
					} 
				}
			}
      #case4
			if(isset($approve['c4'])  && !empty($case['resultCase4'])){ 
				foreach($case['resultCase4'] as $keys => $vals){  
					foreach( $vals as $cc => $kk){ 
						foreach( $kk as $tt => $mm){
							if(!isset($idArr_1[$mm['id']])){ $idArr_1[$mm['id']] = $mm['id']; } 
							$func_id = 4;
							$group = $mm['value'];
							$sort_by = $mm['port'];
							$priority = 0;
							$price = $mm['price'];
							$number = $mm['numb']; 
							$sumber = $mm['sumber']; 
                            $comment = $mm['comment'];   
                            $package = $mm['package'];   
                            $discount = $mm['discount']; 
							// $network = $mm['network'];   
							$grade = $mm['grade'];  
							$p_price = $mm['p_price'];   
							$monthly = $mm['monthly'];   
							$listBer[] = array( 'category' => $category,
													'func_id' => ($func_id),
												'lover_group' => ($group),
												'sort' => ($sort_by),
												'love_priority' =>($priority),
												'group_price' =>($price),
												'product_id' => ($id),
												'product_phone' => ($number),
												'product_sumber' => ($sumber),
                                                'product_comment' => ($comment),
                                                'product_package' => ($package),
                                                'product_discount' => ($discount),
												// 'product_network' => ($network),
												'product_grade' => ($grade),
												'product_price' => ($p_price),
												'monthly_status' => ($monthly),
												'status' => 'auto' );   
							$ii++;
						}
					} 
				} 
			}
			#case5
			if(isset($approve['c5'])  && !empty($case['resultCase5'])){ 
				foreach($case['resultCase5'] as $keys => $vals){ 
					$ii= 0;
					foreach( $vals as $cc => $kk){ 
						if(!isset($idArr_1[$kk['id']])){ $idArr_1[$kk['id']] = $kk['id']; } 
						$func_id = 5;
						$group = $kk['value'];
						$sort_by = 0;
						$priority = $ii;
						$price = $kk['price'];
						$number = $kk['numb']; 
						$sumber = $kk['sumber']; 
                        $comment = $kk['comment'];  
                        $package = $kk['package'];  
                        $discount = $kk['discount'];    
						// $network = $kk['network'];   
						$grade = $kk['grade'];  
						$p_price = $kk['p_price'];  
						$monthly = $kk['monthly'];  
						$listBer[] = array( 'category' => $category,
											'func_id' => ($func_id),
											'lover_group' => ($group),
											'sort' => ($sort_by),
											'love_priority' =>($priority),
											'group_price' =>($price),
											'product_id' => ($id),
											'product_phone' => ($number),
											'product_sumber' => ($sumber),
                                            'product_comment' => ($comment),
                                            'product_package' => ($package),
                                            'product_discount' => ($discount),
											// 'product_network' => ($network),
											'product_grade' => ($grade),
											'product_price' => ($p_price),
											'monthly_status' => ($monthly),
											'status' => 'auto');   
						$ii++;
					} 
				}
			}   
			#insert category 3 
			if(!empty($idArr_1)){ 
				$idIn =''; 
				foreach($idArr_1 as $vals){  $idIn .= $vals.','; } 
				$idIn = substr($idIn,0,-1); 
				// dd($idIn);
				$table = "berproduct_monthlies";
				$set = "CONCAT(product_category, '3,')";
				// $where = "product_id IN ($idIn)";

				$ret['cate3'] = DB::table($table)
					->whereIn('product_id', explode(',', $idIn))
					->update(['product_category' => DB::raw($set)]);
				// dd($listBer);

				// delete old data before new up load
        BerproductAlover::truncate();

				$ret['lover3'] = DB::table('berproduct_alovers')->insert($listBer);
				// dd($ret['lover3']);
				// $idArr_1 = array_unique($idArr_1);
				// $table = "berproduct_category";
				// $set = "bercate_total =  :cate_id ";
				// $where = "bercate_id = 3 ";
				// $value = array( ":cate_id" => count($idArr_1) ); 
				// $ret['count3'] = self::$dbcon->update_prepare($table, $set, $where,$value); 
		 	}  

			#part category id = 4
			$idArr2 = array();  
			$category = 4;
			#case6 
			if(isset($approve['c6'])  && !empty($case['resultCase6'])){ 
				foreach($case['resultCase6'] as $keys => $vals){ 
					$ii= 0;
					foreach( $vals as $cc => $kk){ 
						if(!isset($idArr2[$kk['id']])){ $idArr2[$kk['id']] = $kk['id'];  }   
						$func_id = 6;
						$group = $kk['value'];
						$sort_by = $kk['id'];
						$priority = $ii;
						$number = $kk['numb']; 
						$monthly = $kk['monthly']; 
						$listBer2[] = array('category' => ($category),
											'func_id' => ($func_id),
											'lover_group' => ($group),
											'sort' => ($sort_by),
											'love_priority' =>($priority),
											'product_phone' => ($number),
											'monthly_status' => ($monthly),
											'status' => 'auto' );   
						$ii++;
					} 
				}	
			}
			#case7
			if(isset($approve['c7'])  && !empty($case['resultCase7'])){ 
				foreach($case['resultCase7'] as $keys => $vals){ 
					$ii= 0;
					foreach( $vals as $cc => $kk){ 
						if(!isset($idArr2[$kk['id']])){
							$idArr2[$kk['id']] = $kk['id']; 
						}   
						$func_id = 7;
						$group = $kk['value'];
						$sort_by = $kk['id'];
						$priority = $ii;
						$number = $kk['numb']; 
						$monthly = $kk['monthly']; 
						$listBer2[] = array('category' => ($category),
											'func_id' => ($func_id),
											'lover_group' => ($group),
											'sort' => ($sort_by),
											'love_priority' =>($priority),
											'product_phone' => ($number),
											'monthly_status' => ($monthly),
											'status' => 'auto' );   
						$ii++;
					} 
				} 
			}
			#case8
			if(isset($approve['c8'])  && !empty($case['resultCase8'])){ 
				foreach($case['resultCase8'] as $keys => $vals){ 
					$ii= 0;
					foreach( $vals as $cc => $kk){ 
						if(!isset($idArr2[$kk['id']])){
							$idArr2[$kk['id']] = $kk['id']; 
						}  
						$category = 4;
						$func_id = 8;
						$group = $kk['value'];
						$sort_by = $kk['id'];
						$priority = $ii;
						$number = $kk['numb']; 
						$monthly = $kk['monthly']; 
						$listBer2[] = array('category' => ($category), 
											'func_id' => ($func_id),
											'lover_group' => ($group),
											'sort' => ($sort_by),
											'love_priority' =>($priority),
											'product_phone' => ($number),
											'monthly_status' => ($monthly),
											'status' => 'auto' );   
						$ii++;
					} 
				} 
			}
			#case9
			if(isset($approve['c9'])  && !empty($case['resultCase9'])){  
				foreach($case['resultCase9'] as $keys => $vals){ 
					$ii = 0;
					foreach( $vals as $cc => $kk){ 
						if(!isset($idArr2[$kk['id']])){ $idArr2[$kk['id']] = $kk['id'];  }   
						$func_id = 9;
						$group = $kk['value'];
						$sort_by = $kk['id'];
						$priority = $ii;
						$number = $kk['numb']; 
						$listBer2[] = array('category' => ($category), 
											'func_id' => ($func_id),
											'lover_group' => ($group),
											'sort' => ($sort_by),
											'love_priority' =>($priority),
											'product_phone' => ($number),
											'status' => 'auto' );   
						$ii++;
					} 
				}
			}
			// #case10
			// if(isset($approve['c10'])  && !empty($case['resultCase10'])){ 
			// 	foreach($case['resultCase10'] as $keys => $vals){ 
			// 		$ii= 0;
			// 		foreach( $vals as $cc => $kk){ 
			// 			if(!isset($idArr2[$kk['id']])){
			// 				$idArr2[$kk['id']] = $kk['id']; 
			// 			}   
			// 			$func_id = 10;
			// 			$group = $kk['value'];
			// 			$sort_by = $kk['id'];
			// 			$priority = $ii;
			// 			$number = $kk['numb']; 
			// 			$listBer2[] = array('category' => ($category),
			// 								'func_id' => ($func_id),
			// 								'lover_group' => ($group),
			// 								'sort' => ($sort_by),
			// 								'love_priority' =>($priority),
			// 								'product_phone' => ($number),
			// 								'status' => 'auto' );   
			// 			$ii++;
			// 		} 
			// 	} 
            // }
						// dd($case);

			// #case11
			if(isset($approve['c11'])  && !empty($case['resultCase11'])){  
				foreach($case['resultCase11'] as $keys => $vals){ 
					$ii = 0;
					foreach( $vals as $cc => $kk){ 
						if(!isset($idArr2[$kk['id']])){ $idArr2[$kk['id']] = $kk['id'];  }   
						$func_id = 11;
						$group = $kk['value'];
						$sort_by = $kk['id'];
						$priority = $ii;
						$number = $kk['numb']; 
						$monthly = $kk['monthly']; 
						$listBer2[] = array('category' => ($category), 
											'func_id' => ($func_id),
											'lover_group' => ($group),
											'sort' => ($sort_by),
											'love_priority' =>($priority),
											'product_phone' => ($number),
											'monthly_status' => ($monthly),
											'status' => 'auto' );   
						$ii++;
					} 
				}
			}
			
			if(!empty($idArr2)){ 
				$idIn2 = '';
				foreach($idArr2 as $vals){ 
					$idIn2 .= $vals.',';
				}  
				// $idIn2 = substr($idIn2,0,-1); 
				// $table = "berproduct";
				// $set = "product_category = CONCAT(product_category,:cate_id )";
				// $where = "product_id IN (".$idIn2.")";
				// $value = array(
				// 	":cate_id" => ',4,' 
				// ); 
				$idArr2 = array_unique($idArr2); 

				$idIn2 = substr($idIn2,0,-1); 
				$table = "berproduct_monthlies";
				$set = "CONCAT(product_category, '4,')";
				// $where = "product_id IN ($idIn2)";

				$ret['cate4'] = DB::table($table)
					->whereIn('product_id', explode(',', $idIn2))
					->update(['product_category' => DB::raw($set)]);
				$ret['lover4'] = DB::table('berproduct_alovers')->insert($listBer2);
				// dd($ret['cate4']);
				// $ret['lover4'] = self::$dbcon->multiInsert('berproduct_alover',$listBer2); 
				// $table = "berproduct_category";
				// $set = "bercate_total =  :cate_id ";
				// $where = "bercate_id = 4 ";
				// $value = array(
				// 	":cate_id" => count($idArr2)
				// ); 
				// $ret['count4'] = self::$dbcon->update_prepare($table, $set, $where,$value); 
			}

		return $ret;
    }

    public function export_excel()
    {
        return Excel::download(new BerproductMonthlyExport, 'exportproduct.xlsx');
    }
}
