<?php

namespace App\Http\Controllers\LMS\modul_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Ruangan;

class RuanganController extends Controller
{
    public function daftar_ruangan(){
        $data = Ruangan::all();
        return view('backend.modul_master.ruangan.daftar', compact('data'));
    }
    public function tambah_ruangan(){
        return view('backend.modul_master.ruangan.tambah');
    }
    public function simpan_ruangan(Request $request){
        Ruangan::create([
            'nama'=>$request->nama
        ]);
        return redirect('/ruangan/daftar');
    }
    public function edit_ruangan($id){
        $data= Ruangan::findOrFail($id);
        return view('backend.modul_master.ruangan.edit',compact('data'));
    }
    public function update_ruangan($id){
        $data=Ruangan::findOrFail($id);
        $data->nama = Request()->nama;
        $data->save();
        return redirect('/ruangan/daftar');
    }
    public function delete_ruangan($id){
        $data = Ruangan::findOrFail($id);
        $data->delete();
        return redirect('/ruangan/daftar');
    }
}
