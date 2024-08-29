<?php

namespace App\Http\Controllers\LMS\modul_master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Prodi;

class ProdiController extends Controller
{
    public function daftar_prodi(){
        $data = Prodi::all();
        return view('backend.modul_master.prodi.daftar', compact('data'));
    }
    public function tambah_prodi(){
        return view('backend.modul_master.prodi.tambah');
    }
    public function simpan_prodi(Request $request){
        Prodi::create([
            'kode_prodi'=>$request->kode,
            'nama_prodi'=>$request->nama
        ]);
        return redirect('/prodi/daftar');
    }
    public function edit_prodi($id){
        $data= Prodi::findOrFail($id);
        return view('backend.modul_master.prodi.edit',compact('data'));
    }
    public function update_prodi($id){
        $data=Prodi::findOrFail($id);
        $data->kode_prodi = Request()->kode_prodi;
        $data->nama_prodi = Request()->nama_prodi;
        $data->save();
        return redirect('/prodi/daftar');
    }
    public function delete_prodi($id){
        $data = Prodi::findOrFail($id);
        $data->delete();
        return redirect('/prodi/daftar');
    }
}
