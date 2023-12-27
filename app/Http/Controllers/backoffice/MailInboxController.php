<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\FiberProduct;
use App\Models\MailInbox;
use App\Models\MoveProduct;
use Exception;
use Illuminate\Http\Request;

class MailInboxController extends Controller
{
    public function index(Request $request)
    {
        $data = MailInbox::orderBy('created_at', 'DESC')->get();

        if ($data) {
            foreach ($data as $d) {
                if ($d->type_id === 1) {
                    $fiber = FiberProduct::where('id', $d->fiber_id)->first();
                    $d->product = $fiber;
                } else {
                    $move = MoveProduct::where('id', $d->move_id)->first();
                    $d->product = $move;
                }
            }
        }

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

    public function deleteMail(Request $request, $id)
    {
        try {

            $mail = MailInbox::where('id', $id)->delete();

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'Mail has been deleted successfully',
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
