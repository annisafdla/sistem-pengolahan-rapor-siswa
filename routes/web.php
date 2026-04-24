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
use App\Http\Controllers\InputNilaiController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\UbahKataSandiController;

// first page
Route::get('/', function () {
    return view('pages.login');
});

// login
Route::get('/pages.login', [AuthController::class, 'showLogin']);

// dashboard
Route::get('/pages/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
// siswa
Route::get('/pages/data_siswa', [SiswaController::class, 'showDataSiswa'])->name('data_siswa');
// guru
Route::get('/pages/data_guru', [GuruController::class, 'showGuru'])->name('data_guru');
// kelas
Route::get('/pages/data_kelas', [KelasController::class, 'showKelas'])->name('data_kelas');
// mapel
Route::get('/pages/data_mapel', [MapelController::class, 'showMapel'])->name('data_mapel');
// rapor
Route::get('/pages/data_rapor', [RaporController::class, 'showRapor'])->name('data_rapor');
// pengampu
Route::get('/pages/pengampu', [PengampuController::class, 'showPengampu'])->name('pengampu');
// input nilai
Route::get('/pages/input_nilai', [InputNilaiController::class, 'showInputNilai'])->name('input_nilai');
// lupa sandi
Route::get('/pages/lupa_sandi', function () {
    return view('pages.lupa_sandi');
});
Route::get('/pages/presensi', [PresensiController::class, 'showPresensi'])->name('presensi');

// ubah kata sandi
Route::get('/pages/ubah_kata_sandi', function () {
    return view('pages.ubah_kata_sandi');
})->name('ubah_kata_sandi');

Route::put('/password/update', function () {
    return back()->with('status', 'Kata sandi berhasil diperbarui!');
})->name('password.update');

// tambah pengampu
Route::resource('pengampu', PengampuController::class);

// rekap nilai
Route::get('/pages/rekap_nilai', [RekapnilaiController::class, 'showRekapNilai'])->name('rekap_nilai');