<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\TravelCategory;
use App\Models\TravelSim;
use Exception;
use Illuminate\Http\Request;

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
                    // 'maxPriority' => TravelSim::where('delete_status', 0)->max('priority'),
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
