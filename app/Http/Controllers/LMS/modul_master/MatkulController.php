<?php

namespace App\Http\Controllers\LMS\modul_master;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Models\Matkul;
use App\Models\Prodi;
use App\Models\Ruangan;

class MatkulController extends Controller
{
    public function daftar_matkul(){
        $data = Matkul::all();
        return view('backend.modul_master.matakuliah.daftar', compact('data'));
    }
    public function tambah_matkul(){

        $ruangan = Ruangan::all();
        $prodi = Prodi::all();
        // dd($ruangan);
        return view('backend.modul_master.matakuliah.tambah', compact('ruangan','prodi'));
    }
    public function simpan_matkul(Request $request){
        Matkul::create([
            'nama'=>$request->nama,
            'kode'=>$request->kode,
            'id_ruangan'=>$request->id_ruangan,
            'bobot'=>$request->bobot,
            'semester'=>$request->semester,
            'tahun'=>$request->tahun,
            'prodi'=>$request->prodi
        ]);
        return redirect('/matkul/daftar');
    }
    public function edit_matkul($id){
        $data= Matkul::findOrFail($id);
        return view('backend.modul_master.matakuliah.edit',compact('data'));
    }
    public function update_matkul($id){
        $data=Matkul::findOrFail($id);
        $data->nama = Request()->nama;
        $data->kode = Request()->kode;
        $data->bobot = Request()->bobot;
        $data->save();
        return redirect('/matkul/daftar');
    }
    public function delete_matkul($id){
        $data = Matkul::findOrFail($id);
        $data->delete();
        return redirect('/matkul/daftar');
    }

}
