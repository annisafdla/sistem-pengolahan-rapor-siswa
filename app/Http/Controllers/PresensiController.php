<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresensiController extends Controller
{
    public function showPresensi() {
        return view('pages.presensi');
    }
}
