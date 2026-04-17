<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// first page
Route::get('/', function () {
    return view('login');
});

// login
Route::get('/login', [AuthController::class, 'showLogin']);

// dashboard
Route::get('/dashboard', [DashboardController::class, 'showDashboard']);

// lupa sandi
Route::get('/lupa_sandi', function () {
    return view('lupa_sandi');
});

