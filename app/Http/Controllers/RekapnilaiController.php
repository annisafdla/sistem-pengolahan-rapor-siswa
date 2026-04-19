<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;
use App\Models\User;

class RekapNilaiController extends Controller
{
    public function showRekapNilai() {
        // Ambil semua mata pelajaran dari database
        $mapels = Mapel::all();
        
        return view('rekap_nilai', [
            'mapels' => $mapels
        ]);
    }
}