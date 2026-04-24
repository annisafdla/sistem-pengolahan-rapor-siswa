<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UbahKataSandiController extends Controller
{
    public function showUbahKataSandi() {
        return view('pages.ubah_kata_sandi');
    }
}
