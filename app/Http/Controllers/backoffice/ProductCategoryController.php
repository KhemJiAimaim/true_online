<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function fiberCate(Request $request) {
        try {

            $fiberCate = Category::where(['cate_level' => 1, 'cate_parent_id' => 2])->get();

            return response([
                'message' => 'ok',
                'data' => $fiberCate,
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
