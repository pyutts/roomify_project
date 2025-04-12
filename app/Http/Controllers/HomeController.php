<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.section.section_home');
    }
    public function home_login(){
        return view('home.section.section_home_login');
    }
}
