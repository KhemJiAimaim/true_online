<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\FiberProduct;
use App\Models\Post;

class FiberController extends Controller
{
    public function homePage()
    {   
        $cate_fiber = Category::where('cate_parent_id', 2)
            ->orderBy('cate_priority', 'ASC')
            ->get();
        $fiber_products = FiberProduct::all();
        return view("frontend.pages.internet_fiber.fiber_home",compact('cate_fiber', 'fiber_products'));
    }

    public function true_dtac($cate_url)
    {
        // $cate_fiber = Category::select('id')->where('cate_url', $cate_url)->first();
        // $fiber_products = FiberProduct::where('fiber_cate_id', $cate_fiber->id)->orderBy('priority')->get();
        $fiber_products = FiberProduct::join('categories', 'fiber_products.fiber_cate_id', '=', 'categories.id')
        ->select('fiber_products.*')
        ->where('categories.cate_url', $cate_url)
        ->orderBy('fiber_products.priority')
        ->get();
        return view("frontend.pages.internet_fiber.true_dtac", compact( 'fiber_products'));
    }

    public function detail_true_dtac($id)
    {
        $fiber_products = FiberProduct::find($id);

        
        $benefit_ids = explode(',', $fiber_products->benefit_ids);
        $posts = Post::select('title','thumbnail_link')->whereIn('id', $benefit_ids)->get();

        $privilege_ids = explode(',', $fiber_products->privilege_ids);
        $privilege = Post::select('title','thumbnail_link')->whereIn('id', $privilege_ids)->get();
 
        return view("frontend.pages.internet_fiber.detail_true_dtac", compact('fiber_products','posts', 'privilege'));
    }

    public function form_true_dtac()
    {
        return view("frontend.pages.internet_fiber.form_true_dtac");
    }

    public function fiber_guarantee()
    {
        return view("frontend.pages.internet_fiber.home_fiber_guarantee");
    }

    public function detail_fiber_guarantee()
    {
        return view("frontend.pages.internet_fiber.detail_guarantee");
    }

    public function fiber_router()
    {
        return view("frontend.pages.internet_fiber.router_fiber");
    }

    public function detail_fiber_router()
    {
        return view("frontend.pages.internet_fiber.detail_router");
    }

    public function sme_fiber()
    {
        return view("frontend.pages.internet_fiber.SME_fiber");
    }

    public function detail_sme_fiber()
    {
        return view("frontend.pages.internet_fiber.detail_SME");
    }

    public function internet_basic()
    {
        return view("frontend.pages.internet_fiber.internet_basic");
    }

    public function detail_internet_basic()
    {
        return view("frontend.pages.internet_fiber.detail_internet_basic");
    }

    public function true_visions()
    {
        return view("frontend.pages.internet_fiber.true_visions");
    }

    public function detail_true_visions()
    {
        return view("frontend.pages.internet_fiber.detail_true_visions");
    }

    public function internet_games()
    {
        return view("frontend.pages.internet_fiber.internet_game");
    }

    public function detail_internet_game()
    {
        return view("frontend.pages.internet_fiber.detail_internet_game");
    }
}