<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\PrepaidCategory;
use App\Models\PrepaidNetwoek;
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
        $cates = $this->getPrepaidCateNet();
        $net = PrepaidNetwoek::all();

        return response([
            'message' => 'ok',
            'status' => true,
            'description' => 'Get Prepaid cate success',
            'cates' => $cates,
            'prenet' => $net,
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
            'networks_id' => 'string|required',
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
                "networks_id" => $params['networks_id'],
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
            'networks_id' => 'string|required',
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

            $cateUpdate = PrepaidCategory::findOrFail($id);

            /* Upload Thumbnail */
            $newFolder = "upload/" . date('Y') . "/" . date('m') . "/" . date('d') . "/";
            $thumbnail = (isset($files['thumbnail'])) ? $this->uploadImage($newFolder, $files['thumbnail'], "", "", $params['thumbnail_name']) : $params['thumbnail_link'];

            $conditions  = ['id' => $params['id'], 'language' => $params['language']];
            $values = [
                'id' => $params['id'],
                "title" => $params['title'],
                "details" => $params['details'],
                "description" => $params['description'],
                "networks_id" => $params['networks_id'],
                "terms_content" => $params['terms_content'],
                "details_content" => $params['details_content'],
                "thumbnail_link" => $thumbnail,
                "thumbnail_title" => $params['thumbnail_title'],
                "thumbnail_alt" => $params['thumbnail_alt'],
                "language" => $params['language'],
                "priority" => $params['priority'],
                "updated_at" => date('Y-m-d H:i:s')
            ];

            if ($cateUpdate->priority != $params['priority']) {
                $this->updatePriority("prepaid_categories", $params['priority']);
            }

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
    
    //net
    public function netIndex()
    {
        $net = PrepaidNetwoek::all();
        return response([
            'message' => 'ok',
            'status' => true,
            'description' => 'Get Prepaid networks success',
            'prenetworks' => $net
        ], 200);
    }

    public function createPrepaidNet(Request $request)
    {
        $this->getAuthUser();
        // dd($request);
        $files = $request->allFiles();
        $params = $request->all();

        $validator = Validator::make($request->all(), [
            'networkname' => 'string|required',
            'thumbnail_name' => 'string|nullable',
        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {
            DB::beginTransaction();

            $newFolder = "upload/" . date('Y') . "/" . date('m') . "/" . date('d') . "/";

            /* Upload Thumbnail */
            $thumbnail = (isset($files['thumbnail'])) ? $this->uploadImage($newFolder, $files['thumbnail'], "", "", $params['thumbnail_name']) : "";

            $created = PrepaidNetwoek::create([
                "network_name" => $params['networkname'],
                "thumbnail" => $thumbnail,
                "display" => boolval($params['display']),
            ]);

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Prepaid networks has been created successfully',
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

    public function updatePrepaidNet(Request $request, $id)
    {
        $files = $request->allFiles();
        // dd( $files);
        $params = $request->all();
        $validator = Validator::make($request->all(), [
            'network_name' => 'string|required',
            'imagename' => 'string|nullable',
        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {
            DB::beginTransaction();
            /* Upload Thumbnail */
            $newFolder = "upload/" . date('Y') . "/" . date('m') . "/" . date('d') . "/";
            $thumbnail = (isset($files['thumbnail'])) ? $this->uploadImage($newFolder, $files['thumbnail'], "", "", $params['thumbnail_name']) : $params['imagename'];

            $conditions  = ['id' => $id];
            $values = [
                "network_name" => $params['network_name'],
                "thumbnail" =>  $thumbnail,
                "display" => $params['display'],
                "updated_at" => date('Y-m-d H:i:s')
            ];

            DB::table('prepaid_netwoeks')->updateOrInsert($conditions, $values);
            // Bernetwork::where('network_id', $id)->update($values);
            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'PrepaidNetworks updated successfully',
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
            'price' => 'numeric|required',
            'quantity' => 'numeric|required',
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
                "quantity" => $params['quantity'],
                "quantity_sold" => 0,
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
            'quantity' => 'numeric|required',
            'details' => 'string|nullable',
            'priority' => 'numeric|required',
            'language' => 'string|nullable',
        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        try {
            DB::beginTransaction();

            $simUpdate = PrepaidSim::findOrFail($id);

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
                "quantity" => $params['quantity'],
                "thumbnail_link" => $thumbnail,
                "thumbnail_title" => $params['thumbnail_title'],
                "thumbnail_alt" => $params['thumbnail_alt'],
                "language" => $params['language'],
                "priority" => $params['priority'],
                "updated_at" => date('Y-m-d H:i:s')
            ];

            if ($simUpdate->priority != $params['priority']) {
                $this->updatePriority("prepaid_sims", $params['priority']);
            }

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

    private function getPrepaidCateNet()
    {
        $data = PrepaidCategory::leftjoin('prepaid_netwoeks AS pn', 'pn.id', 'prepaid_categories.networks_id')
            ->select('prepaid_categories.*', 'pn.network_name AS prepaid_networks_name')
            ->where('prepaid_categories.delete_status', 0)
            ->orderBy('prepaid_categories.updated_at', 'DESC')
            ->orderBy('prepaid_categories.priority', 'ASC')
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
