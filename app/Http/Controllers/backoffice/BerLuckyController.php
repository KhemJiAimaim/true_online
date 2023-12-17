<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\BerproductCategory;
use App\Models\BerproductMonthly;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BerLuckyController extends BaseController
{
    /* Cate */
    public function index(Request $request)
    {

        $bercates = $this->getBerluckyCateAll();
        $berproduct = $this->getBerluckyProductAll();

        if ($bercates) {
            foreach ($bercates as $cate) {
                $products = array();
                foreach ($berproduct as $product) {
                    $cate_ids = explode(',', $product->default_cate);
                    if (in_array($cate->bercate_id, $cate_ids)) {
                        $products[] = $product;
                    }
                }
                $cate->products = $products;
            }
        }

        return response([
            'message' => 'ok',
            'status' => true,
            'description' => 'Get Lucky cate success',
            'data' => [
                'cates' => $bercates,
                'berproduct' => $berproduct,
                'maxPriority' => BerproductCategory::max('priority'),
            ]
        ], 200);
    }

    public function createBerluckyCate(Request $request)
    {
        $this->getAuthUser();
        $files = $request->allFiles();
        $params = $request->all();

        $validator = Validator::make($request->all(), [
            'bercate_title' => 'string|required',
            'bercate_name' => 'string|required',
            'bercate_needful' => 'string|nullable',
            'bercate_needless' => 'string|nullable',
            'bercate_pin' => 'numeric|required',
            'bercate_display' => 'numeric|required',
            'priority' => 'numeric|required',

        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {
            DB::beginTransaction();

            /* Upload Thumbnail */
            $newFolder = "upload/" . date('Y') . "/" . date('m') . "/" . date('d') . "/";
            $thumbnail = (isset($files['thumbnail'])) ? $this->uploadImage($newFolder, $files['thumbnail'], "", "", time()) : "";

            $this->updatePriority("berproduct_categories", $params['priority']);

            $data = [
                "bercate_title" => $params['bercate_title'],
                "bercate_name" => $params['bercate_name'],
                "bercate_needful" => $params['bercate_needful'],
                "bercate_needless" => $params['bercate_needless'],
                "bercate_pin" => $params['bercate_pin'],
                "bercate_display" => $params['bercate_display'],
                "thumbnail" => $thumbnail,
                "priority" => $params['priority'],
            ];

            BerproductCategory::create($data);

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Berlucky cate has been created successfully',
            ], 200);
        } catch (Exception $e) {
            DB::rollBack();
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 501);
        }
    }

    public function updateBerluckyCate(Request $request, $id)
    {
        $this->getAuthUser();
        $files = $request->allFiles();
        $params = $request->all();

        $validator = Validator::make($request->all(), [
            'bercate_id' => 'numeric|required',
            'bercate_title' => 'string|required',
            'bercate_name' => 'string|required',
            'thumbnail_link' => 'string|nullable',
            'bercate_needful' => 'string|nullable',
            'bercate_needless' => 'string|nullable',
            'priority' => 'numeric|required',

        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {
            DB::beginTransaction();

            /* Upload Thumbnail */
            $newFolder = "upload/" . date('Y') . "/" . date('m') . "/" . date('d') . "/";
            $thumbnail = (isset($files['thumbnail'])) ? $this->uploadImage($newFolder, $files['thumbnail'], "", "", time()) : $params['thumbnail_link'];

            $conditions  = ['bercate_id' => $params['bercate_id']];
            $values = [
                'bercate_id' => $params['bercate_id'],
                "bercate_title" => $params['bercate_title'],
                "bercate_name" => $params['bercate_name'],
                "bercate_needful" => $params['bercate_needful'],
                "bercate_needless" => $params['bercate_needless'],
                "thumbnail" => $thumbnail,
                "priority" => $params['priority'],

                "updated_at" => date('Y-m-d H:i:s')
            ];

            $this->updatePriority("berproduct_categories", $params['priority']);

            DB::table('berproduct_categories')->updateOrInsert($conditions, $values);

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Berlucky cate has been updated successfully',
            ], 200);
        } catch (Exception $e) {
            DB::rollBack();
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 501);
        }
    }

    public function updateStatusCate(Request $request, $id)
    {
        try {

            $cate = BerproductCategory::where('bercate_id', $id)->update($request->only(['status']));

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

    public function updatePinCate(Request $request, $id)
    {
        try {

            $cate = BerproductCategory::where('bercate_id', $id)->update($request->only(['bercate_pin']));

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

            $cate = BerproductCategory::where('bercate_id', $id)->update($request->only(['bercate_display']));

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

    public function deleteBerluckyCate(Request $request, $id)
    {
        try {

            $product = BerproductCategory::where('bercate_id', $id)->update(['delete_status' => 1]);

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Berlucky cate has been deleted successfully',
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 500);
        }
    }

    /* Product */
    public function productIndex(Request $request)
    {
        $bercates = $this->getBerluckyCateAll();
        $benefits = $this->getBenefits();
        $products = $this->getBerluckyProductAll();

        foreach ($products as $product) {
            $default_cate = explode(",", $product->default_cate);
            $product->default_cate = $default_cate;
        }

        return response([
            'message' => 'ok',
            'status' => true,
            'description' => 'Get Lucky ber success',
            'data' => [
                'products' => $products,
                'cates' => $bercates,
                'benefits' => $benefits,
            ]
        ], 200);
    }

    public function updateBerlucky(Request $request, $id)
    {
        $this->getAuthUser();

        $validator = Validator::make($request->all(), [
            'product_id' => 'numeric|required',
            'product_price' => 'numeric|required',
            'product_discount' => 'numeric|nullable',
            'product_phone' => 'string|required',
            'product_comment' => 'string|nullable',
            'product_package' => 'string|nullable',

        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {
            DB::beginTransaction();

            BerproductMonthly::where('product_id', $id)->update([
                'product_phone' => $request->product_phone,
                'product_price' => $request->product_price,
                'product_comment' => $request->product_comment,
                'product_discount' => $request->product_discount,
                'product_package' => $request->product_package,
            ]);

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Berlucky has been updated successfully',
            ], 200);
        } catch (Exception $e) {
            DB::rollBack();
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 501);
        }
    }

    public function updateSoldProduct(Request $request, $id)
    {
        try {

            $product = BerproductMonthly::where('product_id', $id)->update([
                'product_sold' => $request->product_sold ? 'yes' : 'no'
            ]);

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'update product sold successfully',
                'updated' => $product,
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 500);
        }
    }

    public function updatePinProduct(Request $request, $id)
    {
        try {

            $product = BerproductMonthly::where('product_id', $id)->update([
                'product_pin' => $request->product_pin ? 'yes' : 'no'
            ]);

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'update pin product successfully',
                'updated' => $product,
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 500);
        }
    }

    public function updateDisplayProduct(Request $request, $id)
    {
        try {

            $product = BerproductMonthly::where('product_id', $id)->update([
                'product_display' => $request->product_display ? 'yes' : 'no'
            ]);

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'update display product successfully',
                'updated' => $product,
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 500);
        }
    }

    public function deleteBerlucky(Request $request, $id)
    {
        try {

            $product = BerproductMonthly::where('product_id', $id)->update(['delete_status' => 1]);

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Berlucky has been deleted successfully',
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 500);
        }
    }





    /* Private Function */
    private function getBerluckyCateAll()
    {
        $data = BerproductCategory::where('delete_status', 0)
            ->orderBy('updated_at', 'DESC')
            ->orderBy('priority', 'ASC')
            ->get();

        return $data;
    }

    private function getBerluckyProductAll()
    {
        $data = BerproductMonthly::where('delete_status', 0)
            ->orderBy('updated_at', 'DESC')
            ->get();

        return $data;
    }
}
