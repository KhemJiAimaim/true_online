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
            
        $posts = $this->getPostBenefits();
            // dd($post_benefits);
        return view('frontend.pages.move_company.home_move', compact('data_category', 'move_product', 'posts'));
    }
    
    public function category_move($cate_id) {
        $data_category = $this->getCategoryMove($cate_id);
        $move_product = MoveProduct::where('move_cate_id', $cate_id)
            ->where('display', true)
            ->where('delete_status', false)->get();
        $posts = $this->getPostBenefits();
        return view('frontend.pages.move_company.move_by_category',compact('data_category', 'move_product', 'posts'));
    }

    public function move_together() {
        return view('frontend.pages.move_company.5GTogether');
    }

    public function moveSupersmart() {
        return view('frontend.pages.move_company.5GSuperSmart');
    }

    public function movenow($cateId, $id) {

        $moveRelates = MoveProduct::where('move_cate_id', $cateId)
            ->where('display', true)
            ->where('delete_status', false)->get();

        $move_product = $moveRelates->firstWhere('id', $id);
        // $benefit_ids = explode(',', $move_product->benefit_ids);
        $posts = $this->getPostBenefits();
        // dd($benefit_ids);
        return view('frontend.pages.move_company.movedetail',compact('moveRelates', 'move_product', 'posts'));
    }

    public function formMove(Request $request, $id) {
        $pass_data['id'] = $id; 
        if($request->input('opt') && $request->input('opt') != '') {
            $pass_data['option'] = $request->input('opt');
        }

        return view('frontend.pages.move_company.Formmove', compact('pass_data'));
    }


    private function getCategoryMove($id = null) {
        $move_cate = MoveCategory::where('display', true)->where('delete_status', false)->OrderBy('priority')->get();
        $data_cate['move_cate'] = $move_cate;
        $data_cate['cate_id'] = $id = ($id != '')?$id: "";
        return $data_cate;
    }

    private function getPostBenefits() {
        $posts = Post::select('id','title','thumbnail_link')->where('category', 'LIKE', '%8%')
            ->where('status_display', true)
            ->orderBy('priority')
            ->get();
        return $posts;
    }
    


    public function getTermContent($id_move) {
        $termcontent = MoveProduct::select('terms_content')->where('id',$id_move)->first();
        return response()->json([
            'status' => 'success',
            'data' => $termcontent,
        ], 200);
    }
}