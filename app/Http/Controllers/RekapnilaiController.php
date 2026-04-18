<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekapnilaiController extends Controller
{
    public function showRekapNilai() {
        return view('rekap_nilai');
    }
}
