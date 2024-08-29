<?php

namespace App\Http\Controllers\LMS\modul_dosen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use App\Models\RPS;

class Dosen_MatkulController extends Controller
{
    public function index(){
        $jadwal = Jadwal::all();
        return view('backend.moduldosen.kelas.daftar', compact('jadwal'));
    }
    public function daftar_rps($id){
        $jadwal = Jadwal::findOrFail($id);
        // $rps = RPS::all();
        return view('backend.moduldosen.daftar_rps',compact('jadwal'));
    }
}
