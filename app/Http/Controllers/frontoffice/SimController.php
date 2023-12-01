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
        $cate_package = PackageCategory::where('display', true)->where('delete_status', false)->OrderBy('priority')->get();

        $css_btnMonth = "bg-[#4f4f4f] hover:bg-[#666] hover:text-white";
        $css_btnPaysim = "bg-[#4f4f4f] hover:bg-[#666] hover:text-white";
        if($type == "month") {
            $package_product = PackageProduct::where('display', true)->where('delete_status', false)->where('type', 'รายเดือน')->get();
            $css_btnMonth = "bg-gradient-to-r from-[#ED4312] to-[#F6911D] hover:bg-gradient-to-br active";
        } else if ($type == "paysim") {
            $package_product = PackageProduct::where('display', true)->where('delete_status', false)->where('type', 'เติมเงิน')->get();
            $css_btnPaysim = "bg-gradient-to-r from-[#ED4312] to-[#F6911D] hover:bg-gradient-to-br active";
        } else {
            $package_product = PackageProduct::where('display', true)->where('delete_status', false)->get();
        }
        return view("frontend.pages.prepaid_sim.package", compact('cate_package', 'package_product', 'css_btnMonth','css_btnPaysim'));
    }
    public function buy_package($id) {
        $product = PackageProduct::find($id)->where('display', true)->where('delete_status', false)->first();
        return view("frontend.pages.prepaid_sim.buy_package",compact('product'));
    }
}