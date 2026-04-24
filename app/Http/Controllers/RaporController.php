<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RaporController extends Controller
{
    public function showRapor() {
        return view('pages.data_rapor');
    }
}
