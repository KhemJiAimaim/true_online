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
        try {
            // ใช้ Eager Loading เพื่อลดจำนวนครั้งที่ query ไปยัง FiberProduct และ MoveProduct
            $data = MailInbox::with(['fiber', 'move'])
                ->orderBy('created_at', 'DESC')
                ->get();

            // ใช้ Collection Map เพื่อทำการแปลงข้อมูล
            $mails = $data->map(function ($d) {
                if ($d->type_id === 1 && $d->fiber) {
                    $d->product = $d->fiber;
                    return $d;
                } elseif ($d->type_id === 2 && $d->move) {
                    $d->product = $d->move;
                    return $d;
                } elseif ($d->type_id === 0) {
                    return $d;
                }
                return null; // กรณีที่ไม่ตรงเงื่อนไข
            })->filter(); // กรองข้อมูลที่เป็น null ออก

            // แบ่งข้อมูลตามประเภท
            $mailsObj = $mails->where('type_id', '!=', 0);
            $contactMsObj = $mails->where('type_id', "=", 0);
            $mailUnread = $mailsObj->where('readed', 0)->values()->all();
            $contactUnread = $contactMsObj->where('readed', 0)->values()->all();

            $contactMs = $mails->where('type_id', 0)->values()->all(); // แปลงเป็น array
            $mails = $mails->where('type_id', '!=', 0)->values()->all(); // แปลงเป็น array (ถ้ามี condition จะ return เป็น object)

            return response([
                'message' => 'ok',
                'status' => true,
                'mails' => $mails,
                'contactMs' => $contactMs,
                'unreadData' => [
                    'mails' => $mailUnread,
                    'contactMs' => $contactUnread,
                ]
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'server error',
                'description' => 'Something went wrong.',
                'errorsMessage' => $e->getMessage()
            ], 500);
        }
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

    public function updateReaded(Request $request, $id)
    {
        try {

            $mail = MailInbox::where('id', $id)->update([
                'readed' => 1,
            ]);

            return response([
                'message' => 'ok',
                'status' => true,
                'description' => 'update readed successfully',
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
