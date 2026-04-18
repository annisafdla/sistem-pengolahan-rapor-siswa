<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\RekapnilaiController;
use App\Http\Controllers\RaporController;
use App\Http\Controllers\PengampuController;

// first page
Route::get('/', function () {
    return view('login');
});

// login
Route::get('/login', [AuthController::class, 'showLogin']);

// dashboard
Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
// siswa
Route::get('/data_siswa', [SiswaController::class, 'showDataSiswa'])->name('data_siswa');
// guru
Route::get('/data_guru', [GuruController::class, 'showGuru'])->name('data_guru');
// kelas
Route::get('/data_kelas', [KelasController::class, 'showKelas'])->name('data_kelas');
// mapel
Route::get('/data_mapel', [MapelController::class, 'showMapel'])->name('data_mapel');
// rekap nilai
Route::get('/rekap_nilai', [RekapnilaiController::class, 'showRekapNilai'])->name('rekap_nilai');
// rapor
Route::get('/data_rapor', [RaporController::class, 'showRapor'])->name('data_rapor');
// pengampu
Route::get('/pengampu', [PengampuController::class, 'showPengampu'])->name('pengampu');

// lupa sandi
Route::get('/lupa_sandi', function () {
    return view('lupa_sandi');
});
