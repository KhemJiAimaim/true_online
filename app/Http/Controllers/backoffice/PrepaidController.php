<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\PrepaidCategory;
use App\Models\PrepaidSim;
use Exception;
use Illuminate\Http\Request;

class PrepaidController extends Controller
{
    // Cate
    public function cateIndex(Request $request)
    {
        $cates = $this->getPrepaidCateAll();

        return response([
            'message' => 'ok',
            'status' => true,
            'description' => 'Get Prepaid cate success',
            'cates' => $cates,
            'maxPriority' => PrepaidCategory::where('delete_status', 0)->max('priority'),

        ], 200);
    }

    public function updatePinCate(Request $request, $id)
    {
        try {

            $cate = PrepaidCategory::findOrFail($id);
            $cate->update($request->only(['recommended']));

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'update pin cate successfully',
                'updated' => $cate,
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 500);
        }
    }

    public function updateDisplayCate(Request $request, $id)
    {
        try {

            $cate = PrepaidCategory::findOrFail($id);
            $cate->update($request->only(['display']));

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'update display cate successfully',
                'updated' => $cate,
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 500);
        }
    }

    public function deletePrepaidCate(Request $request, $id)
    {
        try {

            $product = PrepaidCategory::findOrFail($id);
            $product->update(['delete_status' => 1]);

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Prepaid cate has been deleted successfully',
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 500);
        }
    }











    public function simIndex(Request $request)
    {
        $sim = $this->getPrepaidSimAll();

        return response([
            'message' => 'ok',
            'status' => true,
            'description' => 'Get Prepaid sim success',
            'sim' => $sim
        ], 200);
    }






    /* Private Function */
    private function getPrepaidCateAll()
    {
        $data = PrepaidCategory::where('delete_status', 0)
            ->orderBy('updated_at', 'DESC')
            ->orderBy('priority', 'ASC')
            ->get();

        return $data;
    }

    private function getPrepaidSimAll()
    {
        $data = PrepaidSim::where('delete_status', 0)
            ->orderBy('updated_at', 'DESC')
            ->orderBy('priority', 'ASC')
            ->get();

        return $data;
    }
}
