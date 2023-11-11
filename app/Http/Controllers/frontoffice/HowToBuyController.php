<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HowToBuyController extends Controller
{
    //
    public function howtobuyPage($cate) {
        return view('frontend.pages.howtobuy_product.howtobuy_article', compact('cate'));
    }
}