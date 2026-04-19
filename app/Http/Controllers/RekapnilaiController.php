<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;
use App\Models\User;

class RekapNilaiController extends Controller
{
    public function showRekapNilai() {
        return view('rekap_nilai');
    }
}