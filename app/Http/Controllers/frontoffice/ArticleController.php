<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;


class ArticleController extends Controller
{
    public function articlePage($cate) {
        $cate_id = Category::select('id')->where('cate_keyword', $cate)->first();
        $post = Post::where('category', 'LIKE', '%' . $cate_id->id . '%')->first();
        return view('frontend.pages.article_product.article', compact('post'));
    }
}
