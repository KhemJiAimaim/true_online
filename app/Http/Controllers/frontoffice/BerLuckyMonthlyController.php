<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berpredict_prophecy;
use App\Models\Berpredict_sum;
use Illuminate\Support\Facades\DB;

class BerLuckyMonthlyController extends Controller
{
    //
    public function get_product_all() {
        return view('frontend.pages.bermonthly_lucky.product_all');
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

            $prophecies = Berpredict_prophecy::whereIn('prophecy_numb', [$pos[1], $pos[2], $pos[3], $pos[4], $pos[5], $pos[6]])
            ->orderByRaw(DB::raw("FIELD(prophecy_numb, '" . implode("','", $pos) . "')"))
            ->get();
        } else {
            $prophecies = [];
        }
        return $prophecies;
    }

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
        }

        return [
            'happy' => $this->formatScore($happy_percet),
            'sad' => $this->formatScore($sad_percet),
            'empty' => $this->formatScore($empty_percet),
            'total_score' => $this->formatScore($total_percet),
        ];
    }

    // ดึงข้อมูลผลรวมเบอร์
    public function get_data_sumber($tel) {
        $telArray = str_split($tel);
        $telArray = array_map('intval', $telArray);
        $sum = array_sum($telArray); 

        $data_sum = Berpredict_sum::where('predict_sum', $sum)->first();
        return $data_sum;
    }

    // แปลง percent เป็น score เต็ม 1000
    public function formatScore($score) {
        $formatdata = round((($score / 6) * 1000) / 100);
        return $formatdata;
    }

    
}
