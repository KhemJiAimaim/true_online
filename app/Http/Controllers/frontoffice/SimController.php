<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PackageCategory;
use App\Models\PackageProduct;

class SimController extends Controller
{
    public function prepaid_sim() {
        return view("frontend.pages.prepaid_sim.home_sim");
    }
    public function buy_sim() {
        return view("frontend.pages.prepaid_sim.buy_sim");
    }
    public function sim_includ() {
        return view("frontend.pages.prepaid_sim.sim_includ");
    }
    public function package($type = null) {
        // dd($type);
        $cate_package = PackageCategory::where('display', true)->OrderBy('priority')->get();
        $package_product = PackageProduct::where('display', true)->get();
        return view("frontend.pages.prepaid_sim.package", compact('cate_package', 'package_product'));
    }
    public function buy_package($id) {
        $product = PackageProduct::find($id)->where('display', true)->first();
        return view("frontend.pages.prepaid_sim.buy_package",compact('product'));
    }}