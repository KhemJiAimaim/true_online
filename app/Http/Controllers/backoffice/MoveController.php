<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\MoveCategory;
use App\Models\MoveImages;
use App\Models\MoveProduct;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class MoveController extends BaseController
{
    // Move Category
    public function moveCateIndex(Request $request)
    {
        try {

            $moveCates = $this->getMoveCateAll();


            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'get move cate success',
                'moveCates' => $moveCates,
                'maxPriority' => MoveCategory::where('delete_status', 0)->max('priority'),
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 501);
        }
    }

    public function createMoveCate(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'string|required',
            'priority' => 'numeric|required',
            'details' => 'string|nullable',
            'description' => 'string|nullable',
        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {
            DB::beginTransaction();

            $this->updatePriority("move_categories", $request->priority);

            $data = $request->only(['title', 'priority', 'details', 'description']);

            MoveCategory::create($data);

            $moveCates = $this->getMoveCateAll();

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Move cate has been created successfully',
                'moveCates' => $moveCates,
                'maxPriority' => MoveCategory::where('delete_status', 0)->max('priority'),
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

            $cate = MoveCategory::findOrFail($id);
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

    public function updateDisplayCate(Request $request, $id)
    {
        try {

            $cate = MoveCategory::findOrFail($id);
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

    public function updateMoveCate(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'string|required',
            'priority' => 'numeric|required',
            'details' => 'string|nullable',
            'description' => 'string|nullable',
        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {
            DB::beginTransaction();

            $this->updatePriority("move_categories", $request->priority);

            $cateUpdate = MoveCategory::findOrFail($id);
            $data = $request->only(['title', 'priority', 'details', 'description']);
            $cateUpdate->update($data);

            $moveCates = $this->getMoveCateAll();

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Move cate has been updated successfully',
                'newUpdated' => $cateUpdate,
                'moveCates' => $moveCates,
                'maxPriority' => MoveCategory::where('delete_status', 0)->max('priority'),
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

    public function deleteMoveCate(Request $request, $id)
    {
        try {

            $cate = MoveCategory::findOrFail($id);
            $cate->update(['delete_status' => 1]);

            $moveCates = $this->getMoveCateAll();

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Move cate has been deleted successfully',
                'moveCates' => $moveCates,
                'maxPriority' => MoveCategory::where('delete_status', 0)->max('priority'),
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 500);
        }
    }

    // Move Product
    public function moveProductIndex(Request $request)
    {
        try {

            $moveCates = $this->getMoveCateAll();
            $moveProducts = $this->getMoveProductAll();
            $benefits = $this->getBenefits();

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'get move cate success',
                'data' => [
                    'moveCates' => $moveCates,
                    'moveProducts' => $moveProducts,
                    'benefits' => $benefits,
                ],
                'maxPriority' => MoveCategory::where('delete_status', 0)->max('priority'),
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 501);
        }
    }

    public function updateRecProduct(Request $request, $id)
    {
        try {

            $product = MoveProduct::findOrFail($id);
            $product->update($request->only(['recommended']));

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'update recommend successfully',
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

            $product = MoveProduct::findOrFail($id);
            $product->update($request->only(['display']));

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'update display successfully',
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

    public function updateMoveProduct(Request $request, $id)
    {
        $this->getAuthUser();
        $files = $request->allFiles();
        $params = $request->all();

        $validator = Validator::make($request->all(), [
            'title' => 'string|required',
            'details' => 'string|nullable',
            'call_minutes' => 'string|required',
            'internet_volume' => 'string|required',
            'sim_gen' => 'string|required',
            'terms_content' => 'string|nullable',
            'details_content' => 'string|nullable',
            'package_options' => 'string|nullable',
            'language' => 'string|nullable',
            'benefit_ids' => 'string|nullable',

            'id' => 'numeric|required',
            'discount' => 'numeric|nullable',
            'move_cate_id' => 'numeric|required',
            'price' => 'numeric|required',
            'priority' => 'numeric|required',
        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {
            DB::beginTransaction();

            $newFolder = "upload/" . date('Y') . "/" . date('m') . "/" . date('d') . "/";
            $uploadMoreImage = array();
            $addMoreImage = array();
            $idRemove = explode(',', $params['moreImageRemove']);

            // return response([
            //     'data' => $request->all(),
            //     'all files' => $request->allFiles(),
            //     'params' => $params,
            //     'idRemove' => count($idRemove),
            // ]);

            if (isset($params['EditImageLink'])) {
                MoveImages::where('move_id', $params['id'])->where('language', $params['language'])->delete();
                $numb = count($params['EditImageLink']);
                for ($ii = 0; $ii < $numb; $ii++) {
                    array_push($addMoreImage, [
                        "move_id" => $params['id'],
                        "language" =>  $params['language'],
                        "image_title" => ($params['EditImageTitle'][$ii]) ? $params['EditImageTitle'][$ii] : "",
                        "image_alt" => ($params['EditImageAlt'][$ii]) ? $params['EditImageAlt'][$ii] : "",
                        "image_link" =>   $params['EditImageLink'][$ii],
                    ]);
                }
                MoveImages::insert($addMoreImage);
            }

            if (isset($params['Images'])) {
                foreach ($files['Images'] as $key => $val) {
                    array_push($uploadMoreImage, [
                        "move_id" => $params['id'],
                        "image_link" => $this->uploadImage($newFolder, $files['Images'][$key], "", "", $params['ImagesName'][$key]),
                        "image_alt" => ($params['ImagesAlt'][$key]) ? $params['ImagesAlt'][$key] : "",
                        "image_title" => ($params['ImagesTitle'][$key]) ? $params['ImagesTitle'][$key] : "",
                        "language" => $params['language'],
                    ]);
                }
                MoveImages::insert($uploadMoreImage);
            }

            if (count($idRemove) > 0) {
                $images = MoveImages::where(['move_id' => $params['id'], 'language' => $params['language']])
                    ->whereIn('id', $idRemove)
                    ->get();

                // /* Delete file. */
                // foreach ($images as $img) {
                //     if (file_exists($img->image_link)) {
                //         File::delete($img->image_link);
                //     }
                // }

                MoveImages::where('move_id', $params['id'])
                    ->where('language', $params['language'])
                    ->whereIn('id', $idRemove)
                    ->delete();
            }



            /* Upload Thumbnail */
            $thumbnail = (isset($files['thumbnail'])) ? $this->uploadImage($newFolder, $files['thumbnail'], "", "", $params['thumbnail_name']) : $params['thumbnail_link'];


            $conditions  = ['id' => $params['id'], 'language' => $params['language']];
            $values = [
                'id' => $params['id'],
                "title" => $params['title'],
                "details" => $params['details'],
                "call_minutes" => $params['call_minutes'],
                "internet_volume" => $params['internet_volume'],
                "sim_gen" => $params['sim_gen'],
                "terms_content" => $params['terms_content'],
                "details_content" => $params['details_content'],
                "package_options" => $params['package_options'],
                "benefit_ids" => $params['benefit_ids'],
                "price" => $params['price'],
                "discount" => $params['discount'],
                "move_cate_id" => $params['move_cate_id'],
                "thumbnail_link" => $thumbnail,
                "thumbnail_title" => $params['thumbnail_title'],
                "thumbnail_alt" => $params['thumbnail_alt'],
                "language" => $params['language'],
                "priority" => $params['priority'],

                "updated_at" => date('Y-m-d H:i:s')
            ];

            $this->updatePriority("move_products", $params['priority']);

            DB::table('move_products')->updateOrInsert($conditions, $values);

            $moveProducts = $this->getMoveProductAll();

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Move product has been updated successfully',
                'moveProducts' => $moveProducts,
                'maxPriority' => MoveProduct::where('delete_status', 0)->max('priority'),
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





    /* Private Function */
    private function getMoveCateAll()
    {
        $data = MoveCategory::where('delete_status', 0)
            ->orderBy('updated_at', 'DESC')
            ->orderBy('priority', 'ASC')
            ->get();

        return $data;
    }

    private function getMoveProductAll()
    {
        $data = MoveProduct::join('move_categories AS mc', 'mc.id', 'move_products.move_cate_id')
            ->select('move_products.*', 'mc.title AS move_cate_name')
            ->where('move_products.delete_status', 0)
            ->orderBy('move_products.updated_at', 'DESC')
            ->orderBy('move_products.priority', 'ASC')
            ->with('images')
            ->get();

        return $data;
    }
}
