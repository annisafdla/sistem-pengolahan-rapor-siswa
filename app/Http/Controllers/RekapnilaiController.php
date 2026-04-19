<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;
use App\Models\User;

class RekapNilaiController extends Controller
{
<<<<<<< HEAD
    public function index()
{

    return view('admin.rekap_nilai', compact(
        'rekap',
        'kelas'
    ));
}
=======
    public function showRekapNilai() {
        $mapels = Mapel::where('status', 'Aktif')->get();
        return view('rekap_nilai', compact('mapels'));
    }
>>>>>>> 90589c546130addd64377734b33bfee4a4f4cb9f
}