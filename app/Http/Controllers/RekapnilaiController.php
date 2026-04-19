<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RekapNilaiController extends Controller
{
    public function index()
{

    return view('admin.rekap_nilai', compact(
        'rekap',
        'kelas'
    ));
}
}