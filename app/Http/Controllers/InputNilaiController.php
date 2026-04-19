<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputNilaiController extends Controller
{
    public function showInputNilai() {
        return view('input_nilai');
    }
}
