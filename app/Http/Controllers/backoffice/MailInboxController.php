<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\MailInbox;
use Exception;
use Illuminate\Http\Request;

class MailInboxController extends Controller
{
    public function index(Request $request) {
        $data = MailInbox::get();

        return response([
            'message' => 'ok',
            'status' => true,
            'mails' => $data,
        ], 200);
    }

    public function updatePin(Request $request, $id)
    {
        try {

            $mail = MailInbox::where('id', $id)->update([
                'pin' => $request->pin ? 1 : 0
            ]);

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'update pin mail successfully',
                'updated' => $mail,
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 500);
        }
    }
}
