<?php

namespace App\Http\Controllers;

use App\Models\Pengampu;
use App\Models\Guru;
use App\Models\Mapel;
use App\Models\Kelas;
use Illuminate\Http\Request;

class PengampuController extends Controller
{
    public function showPengampu() {
        $pengampus = Pengampu::with(['guru', 'mapel', 'kelas'])->get();
        $gurus = Guru::where('status', 'Aktif')->get();
        $mapels = Mapel::where('status', 'Aktif')->get();
        $kelas = Kelas::where('status', 'Aktif')->get();
        
        return view('pengampu', compact('pengampus', 'gurus', 'mapels', 'kelas'));
    }
}
