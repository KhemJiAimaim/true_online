<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\TravelSim;

class TravelController extends Controller
{
    public function travel_sim() {
        $cates = $this->getCategory();
        $travel_sim = TravelSim::where('recommended', true)->where('display', true)->where('delete_status', false)->OrderBy('priority')->get();

        // dd($cate);
        return view("frontend.pages.travel_sim.home_travel_sim", compact('cates', 'travel_sim'));
    }
    public function travel_sim_byCategory(Request $request) {
        $cates = $this->getCategory();
        $path = $request->path(); 
        $category = $cates->firstWhere('cate_redirect', $path);
        // dd($category);
        $travel_sim = TravelSim::where('travel_cate_id', $category->id)->where('display', true)->where('delete_status', false)->OrderBy('priority')->get();
        return view("frontend.pages.travel_sim.travel_sim_category", compact('cates','category', 'travel_sim'));
    }
    
    public function travel_sim_buy($id) {
        $travel_sim = TravelSim::where('id', $id)->where('display', true)->where('delete_status', false)->first();
        return view("frontend.pages.travel_sim.buy_sim", compact('travel_sim'));
    }

    private function getCategory() {
        $cate_fiber = Category::where('cate_parent_id', 6)
            ->where('cate_status_display', true)
            ->orderBy('cate_priority', 'ASC')
            ->get();
        return $cate_fiber;
    }
}