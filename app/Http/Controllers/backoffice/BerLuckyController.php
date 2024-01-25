<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\BerproductCategory;
use App\Models\BerproductMonthly;
use App\Models\BerluckyPackage;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cache;

class BerLuckyController extends BaseController
{
    /* Cate */
    public function index(Request $request)
    {

        $bercates = $this->getBerluckyCateAll();

        return response([
            'message' => 'ok',
            'status' => true,
            'description' => 'Get Lucky cate success',
            'data' => [
                'cates' => $bercates,
                // 'berproduct' => $berproduct,
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

            $this->generateCateByLuckyCate();

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

            $luckyCate = BerproductCategory::where('bercate_id', $id)->first();
            $luckyChange = false;

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

            if ($luckyCate->priority != $params['priority']) {
                $this->updatePriority("berproduct_categories", $params['priority']);
            }


            DB::table('berproduct_categories')->updateOrInsert($conditions, $values);

            if ($luckyCate->bercate_needful != $params['bercate_needful'] || $luckyCate->bercate_needless != $params['bercate_needless']) {
                $luckyChange = true;
                $this->generateCateByLuckyCate();
            }


            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Berlucky cate has been updated successfully',
                'luckyChange' => $luckyChange,
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

    public function updateRecCate(Request $request, $id)
    {
        dd($id);
        try {

            $cate = BerproductCategory::where('bercate_id', $id)->update($request->only(['recommended']));

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'update recommended cate successfully',
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
        // cache()->flush();
        // session()->forget('berlucky_products');

        $isCached = filter_var($request->iscached, FILTER_VALIDATE_BOOLEAN);;
        $bercates = $this->getBerluckyCateAll();
        $packages = $this->getLuckyPackage();
        $products = [];

        if (!$isCached) {
            $products =  $this->getBerluckyProductAll();
        }

        return response([
            'isCached' => $isCached,
            'message' => 'ok',
            'status' => true,
            'description' => 'Get Lucky ber success',
            'data' => [
                'products' => $products,
                'cates' => $bercates,
                'packages' => $packages,
            ]
        ], 200);
    }

    public function createBerlucky(Request $request)
    {
        $this->getAuthUser();

        $validator = Validator::make($request->all(), [
            'product_price' => 'numeric|required',
            'product_sumber' => 'numeric|required',
            'product_discount' => 'numeric|nullable',
            'product_phone' => 'string|required',
            'product_comment' => 'string|nullable',
            'product_package' => 'numeric|nullable',
            'default_cate' => 'string|nullable',
            'product_pin' => 'string|required',
            'monthly_status' => 'string|required',

        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {
            DB::beginTransaction();

            $generated = $this->generateBer($request->all());

            $newProduct = BerproductMonthly::create([
                'product_phone' => $request->product_phone,
                'product_price' => $request->product_price,
                'product_sumber' => $request->product_sumber,
                'default_cate' => $request->default_cate,
                'product_comment' => $request->product_comment,
                'product_discount' => $request->product_discount,
                'product_package' => $request->product_package,
                'product_display' => $request->product_display,
                'product_pin' => $request->product_pin,
                'monthly_status' => $request->monthly_status,

                'product_category' => $generated['product_category'],
                'product_grade' => $generated['product_grade'],
                'product_improve' => $generated['product_improve'],
                'product_new' => 'yes',
            ]);

            // generate product_category
            $this->getProductByCategory($newProduct);
            // $products = $this->getBerluckyProductAll();

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Berlucky has been created successfully',
                'newProduct' => $newProduct,
                'generated' => $generated,
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

    public function updateBerlucky(Request $request, $id)
    {
        $this->getAuthUser();

        $validator = Validator::make($request->all(), [
            'product_id' => 'numeric|required',
            'product_price' => 'numeric|required',
            'product_sumber' => 'numeric|required',
            'product_discount' => 'numeric|nullable',
            'product_package' => 'numeric|nullable',
            'product_phone' => 'string|required',
            'product_comment' => 'string|nullable',
            'default_cate' => 'string|nullable',

        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {
            DB::beginTransaction();

            $generated = $this->generateBer($request->all());

            BerproductMonthly::where('product_id', $id)->update([
                'product_phone' => $request->product_phone,
                'product_price' => $request->product_price,
                'default_cate' => $request->default_cate,
                'product_sumber' => $request->product_sumber,
                'product_comment' => $request->product_comment,
                'product_discount' => $request->product_discount,
                'product_package' => $request->product_package,

                'product_category' => $generated['product_category'],
                'product_grade' => $generated['product_grade'],
                'product_improve' => $generated['product_improve'],
            ]);

            $updated = BerproductMonthly::where('product_id', $id)
                ->orWhere('product_phone', $request->product_phone)
                ->first();

            // generate product_category
            $this->getProductByCategory($updated);

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Berlucky has been updated successfully',
                'newData' => $updated
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

    public function updateMonthlyStatus(Request $request, $id)
    {
        try {

            $product = BerproductMonthly::where('product_id', $id)->update([
                'monthly_status' => $request->monthly_status ? 'yes' : 'no'
            ]);

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'update monthly status successfully',
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

            $product = BerproductMonthly::where('product_id', $id)->delete();

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

    /* Lucky Package */
    public function packageIndex(Request $request)
    {
        $packages = BerluckyPackage::where('delete_status', 0)
            ->orderBy('updated_at', 'DESC')
            ->orderBy('priority', 'ASC')
            ->get();

        $benefits = $this->getBenefits();
        $privileges = $this->getPrivileges();

        return response([
            'message' => 'ok',
            'status' => true,
            'description' => 'Get Lucky packages success',
            'data' => [
                'packages' => $packages,
                'benefits' => $benefits,
                'privileges' => $privileges,
                'maxPriority' => BerluckyPackage::max('priority'),
            ]
        ], 200);
    }

    public function createPackage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'string|required',
            'price_per_month' => 'numeric|required',
            'call_credit' => 'numeric|required',
            'internet_volume' => 'string|nullable',
            'internet_speed' => 'string|nullable',
            'priority' => 'numeric|required',
            'benefit_ids' => 'string|nullable',
            'display' => 'nullable',

        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {
            DB::beginTransaction();

            $this->updatePriority("berlucky_packages", $request->priority);

            BerluckyPackage::create($request->only([
                'title',
                'price_per_month',
                'internet_volume',
                'call_credit',
                'internet_speed',
                'priority',
                'benefit_ids',
                'display'
            ]));

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Berlucky package has been created successflully',
            ], 201);
        } catch (Exception $e) {
            DB::rollBack();
            return response([
                'message' => 'error',
                'status' => false,
                'description' => $e->getMessage()
            ], 500);
        }
    }


    public function updatePackage(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'title' => 'string|required',
            'price_per_month' => 'numeric|required',
            'call_credit' => 'numeric|required',
            'internet_volume' => 'string|nullable',
            'internet_speed' => 'string|nullable',
            'priority' => 'numeric|required',
            'benefit_ids' => 'string|nullable',
            'display' => 'nullable',

        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {
            DB::beginTransaction();

            $package = BerluckyPackage::find($id);

            if (!$package) {
                return response([
                    'message' => 'error',
                    'status' => false,
                    'description' => 'Package not found!'
                ], 404);
            }

            $this->updatePriority("berlucky_packages", $request->priority);

            $package->update([
                'title' => $request->title,
                'price_per_month' => $request->price_per_month,
                'internet_speed' => $request->internet_speed,
                'internet_volume' => $request->internet_volume,
                'call_credit' => $request->call_credit,
                'benefit_ids' => $request->benefit_ids,
                'display' => $request->display,
                'priority' => $request->priority,
                'updated_at' => now(),
            ]);


            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Berlucky package has been updated successflully',
            ], 200);
        } catch (Exception $e) {
            DB::rollBack();
            return response([
                'message' => 'error',
                'status' => false,
                'description' => $e->getMessage()
            ], 500);
        }
    }

    public function deletePackage(Request $request, $id)
    {
        try {

            $product = BerluckyPackage::findOrFail($id);
            $product->update(['delete_status' => 1]);

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Berlucky package has been deleted successfully',
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
        $data = BerproductMonthly::orderBy('updated_at', 'DESC')->get();

        return $data;

        // $dataCached = Cache::remember('berluckyCache', 60, function () {
        //     return BerproductMonthly::orderBy('updated_at', 'DESC')->get();

        // });

        // return $dataCached;
    }
}
