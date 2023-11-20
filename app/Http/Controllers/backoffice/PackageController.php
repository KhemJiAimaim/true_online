<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\PackageCategory;
use Exception;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function packageCateData(Request $request)
    {
        try {
            $packageCates = PackageCategory::where('delete_status', 0)
                ->orderBy('updated_at', 'DESC')
                ->orderBy('priority', 'ASC')
                ->get();

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'get package cate success',
                'packages' => $packageCates
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
