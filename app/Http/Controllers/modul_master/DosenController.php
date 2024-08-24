<?php

namespace App\Http\Controllers\modul_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dosen;
use Illuminate\Support\Str;

class DosenController extends Controller
{
    public function daftar_dosen(){
        $data = Dosen::all();
        return view('backend.modul_master.dosen.daftar', compact('data'));
    }
    public function tambah_dosen(){
        return view('backend.modul_master.dosen.form');
    }
    public function delete_dosen($id){
        $dosen = dosen::findOrFail($id);
        $dosen->delete();
        return redirect('dosen/daftar');
    }
    public function simpan_dosen(Request $request){
        $foto = $request->foto;
        $new_foto = Str::random(16).'.'.$foto->extension();
        $foto->move('uploads/dosen/', $new_foto);
        Dosen::create([
            'nama' => $request->nama,
            'tgl'=>$request->tgl,
            // 'foto'=>$request->foto,
            'foto' => $new_foto,
            'kategori'=>$request->kategori,
            'univ'=>$request->univ,
            'email'=>$request->email
        ]);
        return redirect('dosen/daftar')->with('pesan','Berhasil Disimpan');
    }
    public function detail_dosen($id){
        $dosen = Dosen::findorfail($id);
        return view('backend.modul_master.dosen.detail', compact('dosen'));
    }
    public function edit_dosen($id){
        $dosen = Dosen::findOrFail($id);
        return view('backend.modul_master.dosen.edit', compact('dosen'));
    }
    public function update_dosen($id){
        $dosen=Dosen::findOrFail($id);
        if(Request()->foto !=''){
        $foto = Request()->foto;
        $new_foto = Str::random(16).'.'.$foto->extension();
        $foto->move('uploads/dosen/', $new_foto);
        unlink('uploads/dosen/'.$dosen->foto);
        }
        $dosen->nama= Request()->nama;
        $dosen->tgl = Request()->tgl;
        $dosen->foto = Request()->foto != ''? $new_foto:$dosen->foto  ;
        $dosen->univ = Request()->univ;
        $dosen->kategori = request()->kategori;
        $dosen->email = Request()->email;
        $dosen->save();
        return redirect('dosen/daftar')->with('pesan','Berhasil Disimpan');
    }

}