<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\FiberProduct;
use App\Models\Post;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class FiberController extends BaseController
{
    // Fiber
    public function fiberData(Request $request)
    {
        try {

            $fiberCate = Category::where(['cate_level' => 1, 'cate_parent_id' => 2])->get();
            $fiberProduct = $this->getFiberProduct();

            $benefits = $this->getBenefits();
            $privileges = $this->getPrivileges();

            return response([
                'message' => 'ok',
                'status' => true,
                'data' => [
                    'fiberCate' => $fiberCate,
                    'fiberProduct' => $fiberProduct,
                    'benefits' => $benefits,
                    'privileges' => $privileges,
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

    public function createFiberProduct(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'duration' => 'required',
            'title' => 'string|required',
            'fiber_cate_id' => 'numeric|required',
            'download_speed' => 'numeric|required',
            'upload_speed' => 'numeric|required',
            'price_per_month' => 'numeric|required',
            'priority' => 'numeric|required',

            'details' => 'string|nullable',
            'more_details' => 'string|nullable',
            'benefit_ids' => 'string|nullable',
            'privilege_ids' => 'string|nullable',
            'special_price' => 'numeric|nullable',
            'special_details' => 'string|nullable',
            'display' => 'nullable',
            'fixed_ip' => 'nullable',
        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {
            DB::beginTransaction();

            $this->updatePriority("fiber_products", $request->priority);

            FiberProduct::create($request->all());

            $fiberProduct = $this->getFiberProduct();

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Fiber product has been created successflully',
                'fiberProduct' => $fiberProduct,
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

    public function updateFiberProduct(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'duration' => 'required',
            'title' => 'string|required',
            'fiber_cate_id' => 'numeric|required',
            'download_speed' => 'numeric|required',
            'upload_speed' => 'numeric|required',
            'price_per_month' => 'numeric|required',
            'priority' => 'numeric|required',

            'details' => 'string|nullable',
            'more_details' => 'string|nullable',
            'benefit_ids' => 'string|nullable',
            'privilege_ids' => 'string|nullable',
            'special_price' => 'numeric|nullable',
            'special_details' => 'string|nullable',
            'display' => 'nullable',
            'fixed_ip' => 'nullable',
        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {
            DB::beginTransaction();

            $product = FiberProduct::find($request->id);

            if (!$product) {
                return response([
                    'message' => 'error',
                    'status' => false,
                    'description' => 'Product not found!'
                ], 404);
            }

            if ($product->priority != $request->priority) {
                $this->updatePriority("fiber_products", $request->priority);
            }

            $product->update([
                'title' => $request->title,
                'price_per_month' => $request->price_per_month,
                'duration' => $request->duration,
                'fiber_cate_id' => $request->fiber_cate_id,
                'download_speed' => $request->download_speed,
                'upload_speed' => $request->upload_speed,
                'upload_speed' => $request->upload_speed,
                'details' => $request->details,
                'more_details' => $request->more_details,
                'benefit_ids' => $request->benefit_ids,
                'privilege_ids' => $request->privilege_ids,
                'special_price' => $request->special_price,
                'special_details' => $request->special_details,
                'display' => $request->display,
                'priority' => $request->priority,
                'fixed_ip' => $request->fixed_ip,

                'updated_at' => now(),
            ]);

            $fiberProduct = $this->getFiberProduct();

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Fiber product has been updated successflully',
                'newData' => $product,
                'fiberProduct' => $fiberProduct,
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

    public function deleteFiberProduct(Request $request)
    {
        try {
            DB::beginTransaction();

            $product = FiberProduct::where('id', $request->id)->first();

            if (!$product) {
                return response([
                    'message' => 'error',
                    'status' => false,
                    'description' => 'Prouduct Not Found!'
                ], 404);
            }

            $product->update(['delete_status' => 1]);

            $fiberProduct = $this->getFiberProduct();

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Fiber product has been deleted successflully',
                'fiberProduct' => $fiberProduct,
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

    public function uploadTermsPDF(Request $request)
    {
        try {
            $files = $request->allFiles();

            /* Upload PDF */
            $fileName = "termsfiber";
            $newFolder = "upload/terms/";
            $filePathName = $newFolder . $fileName . '.pdf';
            if (file_exists($filePathName)) {
                unlink($filePathName);
            }
            $imgSrc = $this->uploadImage($newFolder, $files['upload'], "", "", $fileName);

            return response([
                "uploaded" => 1,
                "fileName" => $fileName,
                "url" => config('app.url') . "/" .  $imgSrc
            ], 201);
        } catch (Exception $e) {
            return response([
                "message" => "error",
                "uploaded" =>  0,
                "error" =>  [
                    "message" =>  $e->getMessage()
                ]
            ], 501);
        }
    }


    /* Private function */
    private function getFiberProduct()
    {
        $fiberProduct = FiberProduct::join('categories AS c', 'c.id', 'fiber_products.fiber_cate_id')
            ->select('fiber_products.*', 'c.cate_title')
            ->where('delete_status', 0)
            ->orderBy('fiber_products.updated_at', 'DESC')
            ->orderBy('priority', 'ASC')
            ->get();

        return $fiberProduct;
    }
}
