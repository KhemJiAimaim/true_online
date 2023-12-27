<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Exception;
use Illuminate\Http\Request;

class TestAPIController extends Controller
{
    public function testCreateOrder(Request $request)
    {

        try {
            $params = $request->all();
            $order = Order::create($params);
            $order->order_number = 'TRUEONLINE-' . $order->id;
            $order->save();

            return response([
                'message' => 'success',
                'order' => $order,
            ], 201);

        } catch (Exception $e) {
            return response([
                'message' => 'error',
                'errorMessage' => $e->getMessage(),
            ], 500);
        }
    }
}
