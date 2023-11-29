<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\MoveCategory;
use App\Models\MoveProduct;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

        return response([
            'data' => $request->all(),
            'Files' => $request->allFiles(),
            'id' => $id,
        ]);

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
