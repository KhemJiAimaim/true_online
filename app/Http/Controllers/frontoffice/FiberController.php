<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FiberController extends Controller
{
    public function homePage()
    {
        return view("frontend.pages.internet_fiber.fiber_home");
    }
    public function true_dtac()
    {
        return view("frontend.pages.internet_fiber.true_dtac");
    }
    public function detail_true_dtac()
    {
        return view("frontend.pages.internet_fiber.detail_true_dtac");
    }
    public function form_true_dtac()
    {
        return view("frontend.pages.internet_fiber.form_true_dtac");
    }
    public function fiber_guarantee()
    {
        return view("frontend.pages.internet_fiber.home_fiber_guarantee");
    }
    public function detail_fiber_guarantee()
    {
        return view("frontend.pages.internet_fiber.detail_guarantee");
    }
    public function fiber_router()
    {
        return view("frontend.pages.internet_fiber.router_fiber");
    }
    public function detail_fiber_router()
    {
        return view("frontend.pages.internet_fiber.detail_router");
    }
    public function sme_fiber()
    {
        return view("frontend.pages.internet_fiber.SME_fiber");
    }
    public function detail_sme_fiber()
    {
        return view("frontend.pages.internet_fiber.detail_SME");
    }
    public function internet_basic()
    {
        return view("frontend.pages.internet_fiber.internet_basic");
    }
    public function detail_internet_basic()
    {
        return view("frontend.pages.internet_fiber.detail_internet_basic");
    }
    public function true_visions()
    {
        return view("frontend.pages.internet_fiber.true_visions");
    }
    public function detail_true_visions()
    {
        return view("frontend.pages.internet_fiber.detail_true_visions");
    }
    public function internet_games()
    {
        return view("frontend.pages.internet_fiber.internet_game");
    }
    public function detail_internet_game()
    {
        return view("frontend.pages.internet_fiber.detail_internet_game");
    }
}