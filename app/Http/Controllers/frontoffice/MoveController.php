<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MoveCategory;
use App\Models\MoveProduct;
use App\Models\Post;

class MoveController extends Controller
{
    //
    public function move() {
        $data_category = $this->getCategoryMove();
        $move_product = MoveProduct::where('recommended', true)
            ->where('display', true)
            ->where('delete_status', false)->get();
            
        $posts = Post::select('id','title','thumbnail_link')->where('category', 'LIKE', '%8%')
            ->where('status_display', true)
            ->orderBy('priority')
            ->get();
            // dd($post_benefits);
        return view('frontend.pages.move_company.home_move', compact('data_category', 'move_product', 'posts'));
    }
    
    public function category_move($id) {
        $data_category = $this->getCategoryMove($id);
        $move_product = MoveProduct::find($id)->where('move_cate_id', $id)
            ->where('display', true)
            ->where('delete_status', false)->get();
        return view('frontend.pages.move_company.move_by_category',compact('data_category', 'move_product'));
    }

    public function move_together() {
        return view('frontend.pages.move_company.5GTogether');
    }

    public function moveSupersmart() {
        return view('frontend.pages.move_company.5GSuperSmart');
    }

    public function movenow() {
        return view('frontend.pages.move_company.movenow');
    }

    public function formMove() {
        return view('frontend.pages.move_company.Formmove');
    }


    private function getCategoryMove($id = null) {
        $move_cate = MoveCategory::where('display', true)->where('delete_status', false)->OrderBy('priority')->get();
        $data_cate['move_cate'] = $move_cate;
        $data_cate['cate_id'] = $id = ($id != '')?$id: "";
        return $data_cate;
    }
}