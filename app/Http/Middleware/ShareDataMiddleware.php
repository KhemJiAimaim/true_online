<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use App\Models\Category;
use App\Models\AdSlide;

class ShareDataMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $query_main_cate = Category::where('id', "!=", 1)->where('is_menu', true)->where('is_topside', true)->where('cate_parent_id', 0)->where('cate_status_display', true)->OrderBy('cate_priority')->get();
        $main_cate['id_main'] = $query_main_cate->pluck('id')->toArray();
        $query_sub_cate = Category::whereIn('cate_parent_id', $main_cate['id_main'])->where('is_menu', true)->where('is_topside', true)->where('cate_status_display', true)->OrderBy('cate_priority')->get();
        // dd($query_sub_cate);
        $slide_image = AdSlide::where('ad_type', 1)->where('ad_position_id', 2)->where('is_footer', false)->where('ad_status_display', true)->OrderBy('ad_priority')->get();

        $amount = 0; 
        $cartList = Session::get('cart_list', []);
        if($cartList){
            $amount = $cartList['amount'];
        }

        // dd($slide_image);
        // Sharing is caring
        View::share('main_cate', $query_main_cate);
        View::share('sub_cate', $query_sub_cate);
        View::share('slide_image', $slide_image);
        View::share('amount', $amount);

        return $next($request);
    }
}
