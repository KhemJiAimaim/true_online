<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerLuckyMonthlyController extends Controller
{
    //
    public function get_product_all() {
        return view('frontend.pages.bermonthly_lucky.product_all');
    }

    public function detailber_page($tel) {
        
        return view('frontend.pages.bermonthly_lucky.detail_ber', compact('tel'));
    }

    public function fortune_page($tel) {
        $data_fortune = self::fortune_tel($tel);
        return view('frontend.pages.bermonthly_lucky.fortune_ber', compact('tel'));
    }

    public function cartproduct_page($ber_id) {
        return view('frontend.pages.bermonthly_lucky.cart_product', compact('ber_id'));
    }

    // ทำนายเบอร์โทร
    public function fortune_tel($tel) {
        return $tel;
    }
}
