<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\FiberProduct;
use App\Models\Post;
use Exception;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function fiberData(Request $request)
    {
        try {

            $fiberCate = Category::where(['cate_level' => 1, 'cate_parent_id' => 2])->get();
            $fiberProduct = FiberProduct::join('categories AS c', 'c.id', 'fiber_products.fiber_cate_id')
                            ->select('fiber_products.*', 'c.cate_title')
                            ->get();

            $benefits = Post::where('category', 'LIKE', '%'. '8,' . '%')
                        ->where(['status_display' => 1])
                        ->orderBY('priority', 'ASC')
                        ->get();

            return response([
                'message' => 'ok',
                'status' => true,
                'data' => [
                    'fiberCate' => $fiberCate,
                    'fiberProduct' => $fiberProduct,
                    'benefits' => $benefits,
                ],
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 501);
        }
    }
}
