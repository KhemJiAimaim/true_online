<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\MailInbox;
use App\Models\Order;
use Exception;
use Illuminate\Http\Request;

class DashboardController extends BaseController
{
    public function index(Request $request)
    {
        $this->getAuthUser();

        try {

            $orders = Order::orderBy('created_at', 'DESC')->limit(5)->get();
            $mailService = MailInbox::where('type_id', '<>', 0)->orderBy('created_at', 'DESC')->limit(5)->get();
            $mailContact = MailInbox::where('type_id', 0)->orderBy('created_at', 'DESC')->limit(5)->get();

            return response([
                'message' => 'ok',
                'status' => true,
                'data' => [
                    'orders' => $orders,
                    'mailService' => $mailService,
                    'mailContact' => $mailContact,
                ],
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'error',
                'errorMessage' => $e->getMessage(),
            ], 500);
        }
    }
}
