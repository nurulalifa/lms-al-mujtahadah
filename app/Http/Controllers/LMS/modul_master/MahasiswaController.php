<?php

namespace App\Http\Controllers\LMS\modul_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class MahasiswaController extends Controller
{
    public function daftar_mahasiswa(){
        $data = Mahasiswa::all();
        return view('backend.modul_master.mahasiswa.daftar', compact('data'));
    }
    public function tambah_mahasiswa(){
        return view('backend.modul_master.mahasiswa.form');
    }
    public function simpan_mahasiswa(Request $request){
        Mahasiswa::create([
            'nama'=>$request->nama,
            'nim'=>$request->nim,
            'tgl'=>$request->tgl,
            'tempat_lahir'=>$request->tempat_lahir,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'agama'=>$request->agama,
            'asal_sekolah'=>$request->asal_sekolah,
            'email'=>$request->email,
            'tahun_masuk'=>$request->tahun_masuk
        ]);
        User::create([
            'name' =>Request()->nama,
            'email' => Request()->email,
            'password' => Hash::make('12345678'),
            'role' => 'mahasiswa', // Menyimpan peran pengguna
        ]);
        return redirect('mahasiswa/daftar');
    }
    public function detail_mahasiswa($id){
        $data=Mahasiswa::findOrFail($id);
        return view('backend.modul_master.mahasiswa.detail', compact('data'));

    }
    public function edit_mahasiswa($id){
        $data=Mahasiswa::findOrFail($id);
        return view('backend.modul_master.mahasiswa.edit', compact('data'));

    }
    public function update_mahasiswa($id){
        $data = Mahasiswa::findOrFail($id);
        $data->nama = Request()->nama;
        $data->nim = Request()->nim;
        $data->tgl = Request()->tgl;
        $data->tempat_lahir = Request()->tempat_lahir;
        $data->jenis_kelamin = Request()->jenis_kelamin;
        $data->agama = Request()->agama;
        $data->asal_sekolah = Request()->asal_sekolah;
        $data->email = Request()->email;
        $data->tahun_masuk = Request()->tahun_masuk;
        $data->save();
        return redirect('/mahasiswa/daftar');

    }
    public function delete_mahasiswa($id){
        $data = Mahasiswa::findOrFail($id);
        $data->delete();
        return redirect('/mahasiswa/daftar');
    }
}
