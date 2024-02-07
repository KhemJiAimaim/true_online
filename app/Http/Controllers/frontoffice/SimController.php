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

        $css_btnMonth = false;
        $css_btnPaysim = false;
        if($type == "dtac") {
            $package_product = PackageProduct::where('display', true)->where('delete_status', false)->where('type', 'dtac')->get();
            $cate_package = PackageCategory::where(['display' => true, 'delete_status' => false, 'cate_type' => 'dtac'])->OrderBy('priority')->get();

            $css_btnMonth = true;
        } else if ($type == "true") {
            $package_product = PackageProduct::where('display', true)->where('delete_status', false)->where('type', 'true')->get();
            $cate_package = PackageCategory::where(['display' => true, 'delete_status' => false, 'cate_type' => 'true'])->OrderBy('priority')->get();

            $css_btnPaysim = true;
        } else {
            $package_product = PackageProduct::where('display', true)->where('delete_status', false)->get();
            $cate_package = PackageCategory::where(['display' => true, 'delete_status' => false])->OrderBy('priority')->get();
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
                DB::raw("(SELECT id FROM prepaid_sims WHERE prepaid_sims.prepaid_cate_id = prepaid_categories.id AND display = true AND delete_status = false ORDER BY price ASC LIMIT 1) as prepaid_sim_id"),
                DB::raw("(SELECT MIN(price) FROM prepaid_sims WHERE prepaid_sims.prepaid_cate_id = prepaid_categories.id AND display = true AND delete_status = false) as price"),
                DB::raw("(SELECT network_name FROM prepaid_netwoeks WHERE prepaid_categories.networks_id = prepaid_netwoeks.id) as network_name"),
                DB::raw("(SELECT thumbnail FROM prepaid_netwoeks WHERE prepaid_categories.networks_id = prepaid_netwoeks.id) as network_thumbnail")
            )
            ->where('display', true)
            ->where('delete_status', false)
            ->orderBy('priority')
            ->get();
    }
}
