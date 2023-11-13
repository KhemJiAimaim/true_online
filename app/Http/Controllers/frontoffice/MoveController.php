<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MoveController extends Controller
{
    //
    public function move()
    {
        return view('frontend.pages.move_company.home_move');
    }

    public function move_fixxy()
    {
        return view('frontend.pages.move_company.fixxynolimit');
    }
    public function move_together()
    {
        return view('frontend.pages.move_company.5GTogether');
    }
    public function moveSupersmart()
    {
        return view('frontend.pages.move_company.5GSuperSmart');
    }
    public function movenow()
    {
        return view('frontend.pages.move_company.movenow');
    }
}
