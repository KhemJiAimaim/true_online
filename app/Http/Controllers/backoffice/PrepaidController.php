<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\PrepaidCategory;
use App\Models\PrepaidSim;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PrepaidController extends BaseController
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

    public function createPrepaidCate(Request $request)
    {
        $this->getAuthUser();
        $files = $request->allFiles();
        $params = $request->all();

        $validator = Validator::make($request->all(), [
            'title' => 'string|required',
            'details' => 'string|nullable',
            'description' => 'string|nullable',
            'details_content' => 'string|nullable',
            'terms_content' => 'string|nullable',
            'display' => 'numeric|required',
            'pin' => 'numeric|required',
            'priority' => 'numeric|required',
            'language' => 'string|nullable',
        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {
            DB::beginTransaction();

            $newFolder = "upload/" . date('Y') . "/" . date('m') . "/" . date('d') . "/";

            /* Upload Thumbnail */
            $thumbnail = (isset($files['thumbnail'])) ? $this->uploadImage($newFolder, $files['thumbnail'], "", "", $params['thumbnail_name']) : "";

            $this->updatePriority("prepaid_categories", $params['priority']);

            $created = PrepaidCategory::create([
                "title" => $params['title'],
                "details" => $params['details'],
                "description" => $params['description'],
                "terms_content" => $params['terms_content'],
                "details_content" => $params['details_content'],
                "thumbnail_link" => $thumbnail,
                "thumbnail_title" => $params['thumbnail_title'],
                "thumbnail_alt" => $params['thumbnail_alt'],

                "priority" => $params['priority'],
                "display" => boolval($params['display']),
                "pin" => boolval($params['pin']),
                "language" => $params['language'],
            ]);

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Prepaid cate has been created successfully',
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

    public function updatePrepaidCate(Request $request, $id)
    {
        $this->getAuthUser();
        $files = $request->allFiles();
        $params = $request->all();

        $validator = Validator::make($request->all(), [
            'id' => 'numeric|required',
            'title' => 'string|required',
            'details' => 'string|nullable',
            'description' => 'string|nullable',
            'details_content' => 'string|nullable',
            'terms_content' => 'string|nullable',
            'priority' => 'numeric|required',
            'language' => 'string|nullable',

        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {
            DB::beginTransaction();

            /* Upload Thumbnail */
            $newFolder = "upload/" . date('Y') . "/" . date('m') . "/" . date('d') . "/";
            $thumbnail = (isset($files['thumbnail'])) ? $this->uploadImage($newFolder, $files['thumbnail'], "", "", $params['thumbnail_name']) : $params['thumbnail_link'];

            $conditions  = ['id' => $params['id'], 'language' => $params['language']];
            $values = [
                'id' => $params['id'],
                "title" => $params['title'],
                "details" => $params['details'],
                "description" => $params['description'],
                "terms_content" => $params['terms_content'],
                "details_content" => $params['details_content'],
                "thumbnail_link" => $thumbnail,
                "thumbnail_title" => $params['thumbnail_title'],
                "thumbnail_alt" => $params['thumbnail_alt'],
                "language" => $params['language'],
                "priority" => $params['priority'],
                "updated_at" => date('Y-m-d H:i:s')
            ];

            $this->updatePriority("prepaid_categories", $params['priority']);

            DB::table('prepaid_categories')->updateOrInsert($conditions, $values);

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Prepaid cate has been updated successfully',
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










    //sim
    public function simIndex(Request $request)
    {
        $sims = $this->getPrepaidSimAll();
        $cates = $this->getPrepaidCateAll();

        return response([
            'message' => 'ok',
            'status' => true,
            'description' => 'Get Prepaid sim success',
            'sims' => $sims,
            'cates' => $cates,
            'maxPriority' => PrepaidSim::where('delete_status', 0)->max('priority'),

        ], 200);
    }

    public function createPrepaidSim(Request $request)
    {
        $this->getAuthUser();
        $files = $request->allFiles();
        $params = $request->all();

        $validator = Validator::make($request->all(), [
            'title' => 'string|required',
            'details' => 'string|nullable',
            'price' => 'numeric|nullable',
            'display' => 'numeric|required',
            'prepaid_cate_id' => 'numeric|required',
            'recommended' => 'numeric|required',
            'priority' => 'numeric|required',
            'language' => 'string|nullable',
        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {
            DB::beginTransaction();

            $newFolder = "upload/" . date('Y') . "/" . date('m') . "/" . date('d') . "/";

            /* Upload Thumbnail */
            $thumbnail = (isset($files['thumbnail'])) ? $this->uploadImage($newFolder, $files['thumbnail'], "", "", $params['thumbnail_name']) : "";

            $this->updatePriority("prepaid_sims", $params['priority']);

            $created = PrepaidSim::create([
                "prepaid_cate_id" => $params['prepaid_cate_id'],
                "title" => $params['title'],
                "details" => $params['details'],
                "price" => $params['price'],
                "thumbnail_link" => $thumbnail,
                "thumbnail_title" => $params['thumbnail_title'],
                "thumbnail_alt" => $params['thumbnail_alt'],
                "priority" => $params['priority'],
                "display" => boolval($params['display']),
                "recommended" => boolval($params['recommended']),
                "language" => $params['language'],
            ]);

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Prepaid sim has been created successfully',
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



    public function updatePrepaidSim(Request $request, $id)
    {
        $this->getAuthUser();
        $files = $request->allFiles();
        $params = $request->all();

        $validator = Validator::make($request->all(), [
            'id' => 'numeric|required',
            'prepaid_cate_id' => 'numeric|required',
            'title' => 'string|required',
            'price' => 'numeric|required',
            'details' => 'string|nullable',
            'priority' => 'numeric|required',
            'language' => 'string|nullable',
        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {
            DB::beginTransaction();

            /* Upload Thumbnail */
            $newFolder = "upload/" . date('Y') . "/" . date('m') . "/" . date('d') . "/";
            $thumbnail = (isset($files['thumbnail'])) ? $this->uploadImage($newFolder, $files['thumbnail'], "", "", $params['thumbnail_name']) : $params['thumbnail_link'];

            $conditions  = ['id' => $params['id'], 'language' => $params['language']];
            $values = [
                'id' => $params['id'],
                'prepaid_cate_id' => $params['prepaid_cate_id'],
                "title" => $params['title'],
                "details" => $params['details'],
                "price" => $params['price'],
                "thumbnail_link" => $thumbnail,
                "thumbnail_title" => $params['thumbnail_title'],
                "thumbnail_alt" => $params['thumbnail_alt'],
                "language" => $params['language'],
                "priority" => $params['priority'],
                "updated_at" => date('Y-m-d H:i:s')
            ];

            $this->updatePriority("prepaid_sims", $params['priority']);

            DB::table('prepaid_sims')->updateOrInsert($conditions, $values);

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Prepaid sim has been updated successfully',
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

    public function updateRecProduct(Request $request, $id)
    {
        try {

            $product = PrepaidSim::findOrFail($id);
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

    public function updateDisplaySim(Request $request, $id)
    {
        try {

            $sim = PrepaidSim::findOrFail($id);
            $sim->update($request->only(['display']));

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'update display sim successfully',
                'updated' => $sim,
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 500);
        }
    }

    public function deletePrepaidSim(Request $request, $id)
    {
        try {

            $product = PrepaidSim::findOrFail($id);
            $product->update(['delete_status' => 1]);

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Prepaid sim has been deleted successfully',
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
        $data = PrepaidSim::join('prepaid_categories AS pc', 'pc.id', 'prepaid_sims.prepaid_cate_id')
            ->select('prepaid_sims.*', 'pc.title AS prepaid_cate_name')
            ->where('prepaid_sims.delete_status', 0)
            ->orderBy('prepaid_sims.updated_at', 'DESC')
            ->orderBy('prepaid_sims.priority', 'ASC')
            ->get();

        return $data;
    }
}
