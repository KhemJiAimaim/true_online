<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\FiberProduct;
use App\Models\Post;

class FiberController extends Controller
{
    // หน้ารวมสินค้า Fiber
    public function homePage()
    {   
        $cate_fiber = $this->get_fiberProduct();
        $fiber_products = FiberProduct::where('display', true)
            ->where('delete_status', false)
            ->orderBy('priority', 'ASC')
            ->get();
        $post_benefits = Post::select('id','title','thumbnail_link')->where('category', 'LIKE', '%8%')
            ->where('status_display', true)
            ->orderBy('priority')
            ->get();
            // dd($fiber_products);
        return view("frontend.pages.internet_fiber.fiber_home",compact('cate_fiber', 'fiber_products','post_benefits'));
    }

    // สินค้า Fiber เฉพาะหมวดหมู่
    public function true_dtac($cate_url)
    {
        $cate_fiber = $this->get_fiberProduct();

        $current_cate = [];
        foreach($cate_fiber as $cate){
            if($cate->cate_url == $cate_url){
                $current_cate['keyword'] = $cate->cate_keyword;
                $current_cate['description'] = $cate->cate_description;
                break;
            }
        }

        $fiber_products = FiberProduct::join('categories', 'fiber_products.fiber_cate_id', '=', 'categories.id')
            ->select('fiber_products.*')
            ->where('categories.cate_url', $cate_url)
            ->where('delete_status', false)
            ->orderBy('fiber_products.priority')
            ->get();

        $post_benefits = Post::select('id','title','thumbnail_link')->where('category', 'LIKE', '%8%')
            ->where('status_display', true)
            ->orderBy('priority')
            ->get();
        return view("frontend.pages.internet_fiber.true_dtac", compact( 'fiber_products','current_cate','cate_fiber','post_benefits'));
    }

    // Function get Fiber
    public function get_fiberProduct() {
        $cate_fiber = Category::where('cate_parent_id', 2)
            ->where('cate_status_display', true)
            ->orderBy('cate_priority', 'ASC')
            ->get();
        return $cate_fiber;
    }

    // รายละเอียดสินค้า Fiber
    public function detail_true_dtac($id)
    {
        $fiber_products = FiberProduct::join('categories', 'fiber_products.fiber_cate_id', '=', 'categories.id')
            ->select('fiber_products.*', 'categories.cate_keyword','categories.cate_description')
            ->where('fiber_products.id', $id)
            ->where('delete_status', false)
            ->orderBy('fiber_products.priority')
            ->first();
        
        $benefit_ids = explode(',', $fiber_products->benefit_ids);
        $posts = Post::select('title','thumbnail_link')->whereIn('id', $benefit_ids)->get();

        $privilege_ids = explode(',', $fiber_products->privilege_ids);
        $privilege = Post::select('title','thumbnail_link','content')->whereIn('id', $privilege_ids)->get();
 
        return view("frontend.pages.internet_fiber.detail_true_dtac", compact('fiber_products','posts', 'privilege'));
    }

    public function form_true_dtac($id)
    {
        $product = FiberProduct::find($id);
        return view("frontend.pages.internet_fiber.form_true_dtac", compact('product'));
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