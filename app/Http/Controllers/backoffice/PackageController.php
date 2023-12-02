<?php

namespace App\Http\Controllers\backoffice;

use App\Models\PackageCategory;
use App\Models\PackageProduct;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PackageController extends BaseController
{
    /* Package Category */
    public function packageCateData(Request $request)
    {
        try {
            $packageCates = $this->getPackageCateAll();

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'get package cate success',
                'packages' => $packageCates,
                'maxPriority' => PackageCategory::where('delete_status', 0)->max('priority'),
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 501);
        }
    }

    public function createPackageCate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'string|required',
            'priority' => 'numeric|required',
            'pin' => 'boolean|required',
            'display' => 'boolean|required',
        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {

            $this->updatePriority("package_categories", $request->priority);

            PackageCategory::create($request->all());

            $packageCates = $this->getPackageCateAll();

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'package cate created successfully',
                'packageCates' => $packageCates,
                'maxPriority' => PackageCategory::where('delete_status', 0)->max('priority'),
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 501);
        }
    }

    public function updatePackageCate(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'string|required',
            'priority' => 'numeric|required',
        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {
            DB::beginTransaction();

            $this->updatePriority("package_categories", $request->priority);

            $cateUpdate = PackageCategory::findOrFail($id);
            $data = $request->only(['title', 'priority']);
            $cateUpdate->update($data);

            $packageCates = $this->getPackageCateAll();

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'package cate has been updated successfully',
                'newUpdated' => $cateUpdate,
                'packageCates' => $packageCates,
                'maxPriority' => PackageCategory::where('delete_status', 0)->max('priority'),
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

    public function updatePinCate(Request $request, $id)
    {
        try {

            $cate = PackageCategory::findOrFail($id);
            $cate->update($request->only(['pin']));

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Pin cate has been updated successfully',
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

    public function deletePackageCate(Request $request, $id)
    {
        try {

            $cate = PackageCategory::findOrFail($id);
            $cate->update(['delete_status' => 1]);

            $packageCates = $this->getPackageCateAll();

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Package cate has been deleted successfully',
                'packageCates' => $packageCates,
                'maxPriority' => PackageCategory::where('delete_status', 0)->max('priority'),
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

            $cate = PackageCategory::findOrFail($id);
            $cate->update($request->only(['display']));

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Display cate has been updated successfully',
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

    /* Package Product */
    public function packageIndex(Request $request)
    {
        try {

            $packageCates = $this->getPackageCateAll();
            $packages = $this->getPackageProductAll();

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'get package product success',
                'data' => [
                    'packages' => $packages,
                    'packageCates' => $packageCates,
                ],
                // 'maxPriority' => PackageCategory::where('delete_status', 0)->max('priority'),
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 501);
        }
    }

    public function createpackageProduct(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'string|required',
            'details' => 'string|nullable',
            'details_content' => 'string|nullable',
            'package_code' => 'string|required',
            'package_type' => 'string|required',
            'type' => 'string|required',

            'package_cate_id' => 'numeric|required',
            'price' => 'numeric|required',
            'total_price' => 'numeric|required',
            'vat' => 'numeric|required',
            'lifetime' => 'numeric|required',
            'recommended' => 'boolean|required',
            'display' => 'boolean|required',
        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {

            PackageProduct::create($request->all());

            $packages = $this->getPackageProductAll();

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Create package product success',
                'packages' => $packages,
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 501);
        }
    }

    public function updateDisplayProduct(Request $request, $id)
    {
        try {

            $cate = PackageProduct::findOrFail($id);
            $cate->update($request->only(['display']));

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Display Product has been updated successfully',
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

    public function updateRecommendedProduct(Request $request, $id)
    {
        try {

            $cate = PackageProduct::findOrFail($id);
            $cate->update($request->only(['recommended']));

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Recommended Product has been updated successfully',
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

    public function updatePackageProduct(Request $request, $id)
    {
        try {

            $product = PackageProduct::findOrFail($id);

            $data = $request->except(['id', 'created_at', 'updated_at', 'th', 'display']);

            $product->update($data);

            $packages = $this->getPackageProductAll();

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Package product has been updated successfully',
                'packages' => $packages,
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 500);
        }
    }

    public function deletePackageProduct(Request $request, $id)
    {
        try {

            $product = PackageProduct::findOrFail($id);
            $product->update(['delete_status' => 1]);

            $packages = $this->getPackageProductAll();

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Package product has been deleted successfully',
                'packages' => $packages,
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 500);
        }
    }


    //////////////////////////////// Private Function /////////////////////////////////////
    private function getPackageCateAll()
    {
        $data = PackageCategory::where('delete_status', 0)
            ->orderBy('updated_at', 'DESC')
            ->orderBy('priority', 'ASC')
            ->get();

        return $data;
    }
    private function getPackageProductAll()
    {
        $data = PackageProduct::where(['delete_status' => 0])
            ->orderBy('updated_at', 'DESC')
            ->orderBy('total_price', 'ASC')
            ->get();

        return $data;
    }
}
