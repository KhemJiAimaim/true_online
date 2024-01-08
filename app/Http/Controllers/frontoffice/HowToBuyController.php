<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class HowToBuyController extends Controller
{
    //
    public function howtobuyPage($cate) {
        $cate_id = Category::select('id')->where('cate_keyword', $cate)->first();
        $post = Post::where('category', 'LIKE', '%' . $cate_id->id . '%')->first();
        // dd($post);
        return view('frontend.pages.howtobuy_product.howtobuy_article', compact('post'));
    }
}