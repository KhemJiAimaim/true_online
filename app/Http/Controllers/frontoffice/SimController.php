<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SimController extends Controller
{
    public function prepaid_sim()
    {
        return view("frontend.pages.prepaid_sim.home_sim");
    }
    public function buy_sim()
    {
        return view("frontend.pages.prepaid_sim.buy_sim");
    }
    public function sim_includ()
    {
        return view("frontend.pages.prepaid_sim.sim_includ");
    }
    public function package()
    {
        return view("frontend.pages.prepaid_sim.package");
    }
    public function buy_package()
    {
        return view("frontend.pages.prepaid_sim.buy_package");
    }}