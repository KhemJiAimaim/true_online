<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BerproductMonthly;
use App\Models\BerpredictProphecy;
use App\Models\BerpredictSum;
use App\Models\BerproductGrade;
use Illuminate\Support\Facades\DB;

class BerLuckyMonthlyController extends Controller
{
    //
    public function get_product_all() {
            $berproducts = BerproductMonthly::where('product_display', 'yes')->get();
        return view('frontend.pages.bermonthly_lucky.product_all', compact('berproducts'));
    }

    public function detailber_page($tel) {
        $data_sumber = $this->get_data_sumber($tel);
        $data_fortune = $this->fortune_tel($tel);
        $score = $this->getscore_fortune($data_fortune);

        return view('frontend.pages.bermonthly_lucky.detail_ber', compact('tel', 'data_sumber', 'data_fortune', 'score'));
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

    
}
