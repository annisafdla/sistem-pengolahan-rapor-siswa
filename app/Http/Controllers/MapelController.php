<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function showMapel() {
        return view('pages.data_mapel');
    }
}
