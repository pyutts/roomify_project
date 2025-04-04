<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardHotelOnwersController extends Controller
{
    public function index(){
        return view("hotelonwers.dashboard_hotel_onwers");
    }
}
