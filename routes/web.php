<?php

use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardHotelOnwersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Login dan Register
Route::get('/login', [LoginController::class, 'index'])->name('users.login');
Route::post('/login', [LoginController::class, 'login'])->name('users.login.submit');
Route::get('/register', [LoginController::class, 'indexdaftar'])->name('users.register');
Route::post('/register', [LoginController::class, 'register'])->name('users.register.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('users.logout');

// Homepage Sudah Login
Route::middleware(['check.role:user'])->group(function () {
    Route::get('/homepages/users', [HomeController::class, 'home_login'])->name('home_login');
});

// Dashboard Untuk Admin
Route::middleware(['check.role:admin'])->group(function () {
    Route::get('/dashboard/admin', [DashboardAdminController::class, 'index'])->name('dashboard.admin');
});

// Dashboard Untuk Pemilik Hotel
Route::middleware(['check.role:hotel_owner'])->group(function () {
    Route::get('/dashboard/hotelowners', [DashboardHotelOnwersController::class, 'index'])->name('dashboard.hotelowners');
});

