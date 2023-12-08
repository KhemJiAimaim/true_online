<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class TravelController extends Controller
{
    public function travel_sim() {
        $cates = $this->getCategory();
        // dd($cate);
        return view("frontend.pages.travel_sim.home_travel_sim", compact('cates'));
    }
    public function travel_sim_byCategory(Request $request) {
        $path = $request->path(); 
        $cates = $this->getCategory();
        return view("frontend.pages.travel_sim.travel_sim_category", compact('cates'));
    }
    // public function travel_sim_visiting() {
    //     $cates = $this->getCategory();
    //     return view("frontend.pages.travel_sim.thai_visiting", compact('cates'));
    // }
    
    public function travel_sim_buy() {
        return view("frontend.pages.travel_sim.buy_sim");
    }

    private function getCategory() {
        $cate_fiber = Category::where('cate_parent_id', 6)
            ->where('cate_status_display', true)
            ->orderBy('cate_priority', 'ASC')
            ->get();
        return $cate_fiber;
    }
}