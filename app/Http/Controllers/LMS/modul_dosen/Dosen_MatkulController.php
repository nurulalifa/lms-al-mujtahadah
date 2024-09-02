<?php

namespace App\Http\Controllers\LMS\modul_dosen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use App\Models\RPS;
use Illuminate\Support\Facades\Auth;

class Dosen_MatkulController extends Controller
{
    public function index(){
        $id = Auth::id();
        $jadwal = Jadwal::where('id_dosen',$id)->get();
        return view('backend.moduldosen.kelas.daftar', compact('jadwal'));
    }
    public function daftar_rps($id){
        $auth = Auth::id();
        $jadwal = Jadwal::where('id',$id)
        ->where('id_dosen',$auth)
        ->first();
        $rps = RPS::where('id_jadwal', $id)
        ->where('id_matkul', $jadwal->id_matkul)
        ->orderBy('pertemuan', 'asc')
        ->get();

        // dd($rps,$id, $jadwal->id_matkul);
        return view('backend.moduldosen.daftar_rps',compact('jadwal','rps'));
    }
}
