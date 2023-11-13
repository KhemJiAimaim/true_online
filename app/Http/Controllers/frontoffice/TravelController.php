<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function travel_sim()
    {
        return view("frontend.pages.travel_sim.home_travel_sim");
    }
    public function travel_sim_travelling()
    {
        return view("frontend.pages.travel_sim.thai_tourist");
    }
    public function travel_sim_visiting()
    {
        return view("frontend.pages.travel_sim.thai_visiting");
    }
    public function travel_sim_buy()
    {
        return view("frontend.pages.travel_sim.buy_sim");
    }
}