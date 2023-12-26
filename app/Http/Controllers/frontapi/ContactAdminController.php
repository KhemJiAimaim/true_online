<?php

namespace App\Http\Controllers\frontapi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactAdminController extends Controller
{
    public function sendFormFiber(Request $request) {
        $params = $request->all();
        dd($params);
    }

    public function sendFormMove(Request $request) {
        $params = $request->all();
        dd($params);
    }
}
