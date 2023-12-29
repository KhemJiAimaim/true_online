<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\TravelCategory;
use App\Models\TravelImages;
use App\Models\TravelSim;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TravelController extends BaseController
{
    public function index(Request $request)
    {
        try {

            $travelCates = $this->getTravelCateAll();
            $travelsims = $this->getTravelSimAll();
            $benefits = $this->getBenefits();

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'get travel cate success',
                'data' => [
                    'travelCates' => $travelCates,
                    'travelsims' => $travelsims,
                    'benefits' => $benefits,
                    'maxPriority' => TravelSim::where('delete_status', 0)->max('priority'),
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

    public function createTravelSim(Request $request)
    {
        $this->getAuthUser();
        $files = $request->allFiles();
        $params = $request->all();

        $validator = Validator::make($request->all(), [
            'title' => 'string|required',
            'details' => 'string|nullable',
            'internet_details' => 'string|nullable',
            'call_credit' => 'string|nullable',
            'call_credit_details' => 'string|nullable',
            'free_call' => 'string|nullable',
            'free_call_details' => 'string|nullable',
            'free_tiktok_details' => 'string|nullable',
            'package_options' => 'string|nullable',
            'details_content' => 'string|nullable',
            'terms_content' => 'string|nullable',
            'language' => 'string|nullable',
            // 'benefit_ids' => 'string|nullable',

            'travel_cate_id' => 'numeric|required',
            'price' => 'numeric|required',
            'quantity' => 'numeric|required',
            'lifetime' => 'numeric|required',
            'priority' => 'numeric|required',
            'unlimited_5g' => 'numeric|required',
            'free_wifi' => 'numeric|required',
            'free_tiktok' => 'numeric|required',
            'free_socials' => 'numeric|required',
            'display' => 'numeric|required',
            'recommended' => 'numeric|required',
        ]);

        if ($validator->fails()) {
            return $this->sendErrorValidators('Invalid params', $validator->errors());
        }

        // return response([
        //     'message' => 'ok',
        //     'data' => $request->all(),
        //     'allFiles' => $request->allFiles(),
        // ]);

        try {
            DB::beginTransaction();

            $newFolder = "upload/" . date('Y') . "/" . date('m') . "/" . date('d') . "/";

            /* Upload Thumbnail */
            $thumbnail = (isset($files['thumbnail'])) ? $this->uploadImage($newFolder, $files['thumbnail'], "", "", $params['thumbnail_name']) : "";

            $this->updatePriority("travel_sims", $params['priority']);

            $created = TravelSim::create([
                "travel_cate_id" => $params['travel_cate_id'],
                "title" => $params['title'],
                "details" => $params['details'],
                "internet_details" => $params['internet_details'],
                "call_credit" => $params['call_credit'],
                "call_credit_details" => $params['call_credit_details'],
                "lifetime" => $params['lifetime'],
                "free_call" => $params['free_call'],
                "free_call_details" => $params['free_call_details'],
                "free_tiktok_details" => $params['free_tiktok_details'],
                "terms_content" => $params['terms_content'],
                "details_content" => $params['details_content'],
                "package_options" => $params['package_options'],
                "price" => $params['price'],
                "quantity" => $params['quantity'],
                "quantity_sold" => 0,
                "thumbnail_link" => $thumbnail,
                "thumbnail_title" => $params['thumbnail_title'],
                "thumbnail_alt" => $params['thumbnail_alt'],
                "language" => $params['language'],
                "priority" => $params['priority'],

                "unlimited_5g" => boolval($params['unlimited_5g']),
                "free_wifi" => boolval($params['free_wifi']),
                "free_tiktok" => boolval($params['free_tiktok']),
                "free_socials" => boolval($params['free_socials']),
                "display" => boolval($params['display']),
                "recommended" => boolval($params['recommended']),
            ]);

            if (isset($params['Images'])) {
                $uploadMoreImage = array();
                foreach ($files['Images'] as $key => $val) {
                    array_push($uploadMoreImage, [
                        "travel_id" => $created->id,
                        "image_link" => $this->uploadImage($newFolder, $files['Images'][$key], "", "", $params['ImagesName'][$key]),
                        "image_alt" => ($params['ImagesAlt'][$key]) ? $params['ImagesAlt'][$key] : "",
                        "image_title" => ($params['ImagesTitle'][$key]) ? $params['ImagesTitle'][$key] : "",
                        "language" => $params['language'],
                    ]);
                }
                TravelImages::insert($uploadMoreImage);
            }

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Travel Sim has been created successfully',
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

    public function updateTravelSim(Request $request, $id)
    {
        $this->getAuthUser();
        $files = $request->allFiles();
        $params = $request->all();

        $validator = Validator::make($request->all(), [
            'title' => 'string|required',
            'details' => 'string|nullable',
            'internet_details' => 'string|nullable',
            'call_credit' => 'string|nullable',
            'call_credit_details' => 'string|nullable',
            'free_call' => 'string|nullable',
            'free_call_details' => 'string|nullable',
            'free_tiktok_details' => 'string|nullable',
            'package_options' => 'string|nullable',
            'details_content' => 'string|nullable',
            'terms_content' => 'string|nullable',
            'language' => 'string|nullable',
            // 'benefit_ids' => 'string|nullable',

            'id' => 'numeric|required',
            'travel_cate_id' => 'numeric|required',
            'price' => 'numeric|required',
            'quantity' => 'numeric|required',
            'lifetime' => 'numeric|required',
            'priority' => 'numeric|required',
            'unlimited_5g' => 'numeric|required',
            'free_wifi' => 'numeric|required',
            'free_tiktok' => 'numeric|required',
            'free_socials' => 'numeric|required',
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

            if (isset($params['EditImageLink'])) {
                TravelImages::where('travel_id', $params['id'])->where('language', $params['language'])->delete();
                $numb = count($params['EditImageLink']);
                for ($ii = 0; $ii < $numb; $ii++) {
                    array_push($addMoreImage, [
                        "travel_id" => $params['id'],
                        "language" =>  $params['language'],
                        "image_title" => ($params['EditImageTitle'][$ii]) ? $params['EditImageTitle'][$ii] : "",
                        "image_alt" => ($params['EditImageAlt'][$ii]) ? $params['EditImageAlt'][$ii] : "",
                        "image_link" =>   $params['EditImageLink'][$ii],
                    ]);
                }
                TravelImages::insert($addMoreImage);
            }

            if (isset($params['Images'])) {
                foreach ($files['Images'] as $key => $val) {
                    array_push($uploadMoreImage, [
                        "travel_id" => $params['id'],
                        "image_link" => $this->uploadImage($newFolder, $files['Images'][$key], "", "", $params['ImagesName'][$key]),
                        "image_alt" => ($params['ImagesAlt'][$key]) ? $params['ImagesAlt'][$key] : "",
                        "image_title" => ($params['ImagesTitle'][$key]) ? $params['ImagesTitle'][$key] : "",
                        "language" => $params['language'],
                    ]);
                }
                TravelImages::insert($uploadMoreImage);
            }

            if (count($idRemove) > 0) {
                $images = TravelImages::where(['travel_id' => $params['id'], 'language' => $params['language']])
                    ->whereIn('id', $idRemove)
                    ->get();

                // /* Delete file. */
                // foreach ($images as $img) {
                //     if (file_exists($img->image_link)) {
                //         File::delete($img->image_link);
                //     }
                // }

                TravelImages::where('travel_id', $params['id'])
                    ->where('language', $params['language'])
                    ->whereIn('id', $idRemove)
                    ->delete();
            }

            /* Upload Thumbnail */
            $thumbnail = (isset($files['thumbnail'])) ? $this->uploadImage($newFolder, $files['thumbnail'], "", "", $params['thumbnail_name']) : $params['thumbnail_link'];


            $conditions  = ['id' => $params['id'], 'language' => $params['language']];
            $values = [
                'id' => $params['id'],
                "travel_cate_id" => $params['travel_cate_id'],
                "title" => $params['title'],
                "details" => $params['details'],
                "internet_details" => $params['internet_details'],
                "call_credit" => $params['call_credit'],
                "call_credit_details" => $params['call_credit_details'],
                "lifetime" => $params['lifetime'],
                "free_call" => $params['free_call'],
                "free_call_details" => $params['free_call_details'],
                "free_tiktok_details" => $params['free_tiktok_details'],
                "terms_content" => $params['terms_content'],
                "details_content" => $params['details_content'],
                "package_options" => $params['package_options'],
                "price" => $params['price'],
                "quantity" => $params['quantity'],
                "thumbnail_link" => $thumbnail,
                "thumbnail_title" => $params['thumbnail_title'],
                "thumbnail_alt" => $params['thumbnail_alt'],
                "language" => $params['language'],
                "priority" => $params['priority'],

                "unlimited_5g" => boolval($params['unlimited_5g']),
                "free_wifi" => boolval($params['free_wifi']),
                "free_tiktok" => boolval($params['free_tiktok']),
                "free_socials" => boolval($params['free_socials']),

                // "benefit_ids" => $params['benefit_ids'],
                "updated_at" => date('Y-m-d H:i:s')
            ];

            $simUpdate = TravelSim::findOrFail($id);

            if ($simUpdate->priority != $params['priority']) {
                $this->updatePriority("travel_sims", $params['priority']);
            }

            DB::table('travel_sims')->updateOrInsert($conditions, $values);

            DB::commit();
            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Travel sim has been updated successfully',
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

            $product = TravelSim::findOrFail($id);
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

            $product = TravelSim::findOrFail($id);
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

    public function deleteTravelSim(Request $request, $id)
    {
        try {

            $product = TravelSim::findOrFail($id);
            $product->update(['delete_status' => 1]);

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Travel sim has been deleted successfully',
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
    private function getTravelCateAll()
    {
        $data = TravelCategory::where('delete_status', 0)
            ->orderBy('updated_at', 'DESC')
            ->orderBy('priority', 'ASC')
            ->get();

        return $data;
    }

    private function getTravelSimAll()
    {
        $data = TravelSim::join('travel_categories AS tc', 'tc.id', 'travel_sims.travel_cate_id')
            ->select('travel_sims.*', 'tc.title AS travel_cate_name')
            ->where('travel_sims.delete_status', 0)
            ->orderBy('travel_sims.updated_at', 'DESC')
            ->orderBy('travel_sims.priority', 'ASC')
            ->with('images')
            ->get();

        return $data;
    }
}
