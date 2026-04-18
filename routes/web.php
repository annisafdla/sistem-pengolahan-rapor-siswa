<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;

// first page
Route::get('/', function () {
    return view('login');
});

// login
Route::get('/login', [AuthController::class, 'showLogin']);

// dashboard
Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
Route::get('/data_siswa', [SiswaController::class, 'showDataSiswa'])->name('data_siswa');

// lupa sandi
Route::get('/lupa_sandi', function () {
    return view('lupa_sandi');
});
