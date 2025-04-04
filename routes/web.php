<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Home Web
Route::get('/',[HomeController::class, 'index']);


// Dashboard Admin & Hotel Onwer
Route::get('/dashboard',[DashboardController::class, 'index']);


// Login dan Register
Route::get('/login',[LoginController::class, 'index']);