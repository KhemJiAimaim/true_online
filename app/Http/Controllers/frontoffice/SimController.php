<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\PackageCategory;
use App\Models\PackageProduct;
use App\Models\PrepaidCategory;
use App\Models\PrepaidSim;

class SimController extends Controller
{
    public function prepaid_sim() {
        $cates = Category::where('cate_parent_id', 4)->where('cate_status_display', true)->OrderBy('cate_priority')->get();
        $prepaid_cate = $this->getPrepaid_product();
        $package = PackageProduct::where('recommended', true)->where('display', true)->where('delete_status', false)->take(4)->get();
        // dd($cate);
        return view("frontend.pages.prepaid_sim.home_sim", compact('package', 'prepaid_cate', 'cates'));
    }

    public function sim_includ() {
        
        $prepaid_cate = $this->getPrepaid_product();
        return view("frontend.pages.prepaid_sim.sim_includ", compact('prepaid_cate'));
    }
    
    public function buy_sim($id) {
        $prepaid_cate = PrepaidCategory::where('id',$id)->where('display', true)->where('delete_status', false)->first();
        $prepaid_sim = PrepaidSim::where('prepaid_cate_id', $prepaid_cate->id)->where('display', true)->where('delete_status', false)->OrderBy('priority')->get();
        return view("frontend.pages.prepaid_sim.buy_sim", compact('prepaid_cate','prepaid_sim'));
    }

    
    public function package($type = null) {
        $cate_package = PackageCategory::where('display', true)->where('delete_status', false)->OrderBy('priority')->get();

        $css_btnMonth = false;
        $css_btnPaysim = false;
        if($type == "month") {
            $package_product = PackageProduct::where('display', true)->where('delete_status', false)->where('type', 'รายเดือน')->get();
            $css_btnMonth = true;
        } else if ($type == "paysim") {
            $package_product = PackageProduct::where('display', true)->where('delete_status', false)->where('type', 'เติมเงิน')->get();
            $css_btnPaysim = true;
        } else {
            $package_product = PackageProduct::where('display', true)->where('delete_status', false)->get();
        }
        return view("frontend.pages.prepaid_sim.package", compact('cate_package', 'package_product', 'css_btnMonth','css_btnPaysim'));
    }
    public function buy_package($id) {
        $product = PackageProduct::where('id', $id)->where('display', true)->where('delete_status', false)->first();
        // dd($product);
        return view("frontend.pages.prepaid_sim.buy_package",compact('product'));
    }


    public function getPrepaid_product() {
        return PrepaidCategory::select('*', 
            DB::raw("(SELECT MIN(price) FROM prepaid_sims WHERE prepaid_sims.prepaid_cate_id = prepaid_categories.id AND display = true AND delete_status = false) as price"))
            ->where('display', true)
            ->where('delete_status', false)
            ->orderBy('priority')
            ->get();
        
    }
}