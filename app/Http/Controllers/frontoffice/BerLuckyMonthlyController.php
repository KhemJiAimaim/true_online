<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerLuckyMonthlyController extends Controller
{
    //
    public function get_product_all() {
        return view('frontend.pages.ber_lucky_monthly.product_all');
    }

    public function detailber_page($tel) {
        return view('frontend.pages.ber_lucky_monthly.detail_ber', compact('tel'));
    }

    public function fortune_page($tel) {

        return view('frontend.pages.ber_lucky_monthly.fortune_ber', compact('tel'));
    }
}
