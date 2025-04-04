<?php

use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardHotelOnwersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


// Home Web
Route::get('/',[HomeController::class, 'index']);


// Dashboard Admin
Route::get('/dashboard/admin',[DashboardAdminController::class, 'index']);


// Dashboard Hotel Onwer
Route::get('/dashboard/hotelonwers',[DashboardHotelOnwersController::class, 'index']);


// Login dan Register
Route::get('/login',[LoginController::class, 'index']);