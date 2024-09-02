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
        $rps = RPS::where('id_jadwal', $id)
        ->where('id_matkul', $jadwal->id_matkul)
        ->orderBy('pertemuan', 'asc')
        ->get();

        // dd($rps,$id, $jadwal->id_matkul);
        return view('backend.moduldosen.daftar_rps',compact('jadwal','rps'));
    }
}
