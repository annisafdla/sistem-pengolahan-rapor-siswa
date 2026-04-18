<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function showDataSiswa() {
        return view('data_siswa');
    }
}
