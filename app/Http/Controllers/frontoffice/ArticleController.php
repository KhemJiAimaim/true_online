<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class ArticleController extends Controller
{
    public function articleHome() {
       
        $post_all = Post::where('category', 'LIKE', '%38%')
            ->where('pin', false)
            ->where('status_display', true)
            ->orderBy('priority', 'DESC')
            ->paginate(10);
        return view('frontend.pages.article.article', compact('post_all'));
    }

    public function articleDetail($cate) {
        $cate_id = Category::select('id')->where('cate_keyword', $cate)->first();
        $post = Post::where('category', 'LIKE', '%' . $cate_id->id . '%')->first();

        return view('frontend.pages.article.article-detail', compact('post'));
    }
}
