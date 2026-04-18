<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function showMapel() {
        return view('data_mapel');
    }
}
