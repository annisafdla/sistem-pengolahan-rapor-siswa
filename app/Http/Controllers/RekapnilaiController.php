<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class RekapnilaiController extends Controller
{
    public function showRekapNilai() {
        $mapels = Mapel::where('status', 'Aktif')->get();
        return view('rekap_nilai', compact('mapels'));
    }
}