<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengampuController extends Controller
{
    public function showPengampu() {
        return view('pengampu');
    }
}
