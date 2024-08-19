<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index(){
        return view('backend.index');
    }
    public function daftar_user(){
        return view('backend.user.daftar');
    }
    public function tambah_user(){
        return view('backend.user.tambah');
    }


    public function daftar_dosen(){
        return view('backend.dosen.daftar');
    }
    public function tambah_dosen(){
        return view('backend.dosen.form');
    }
    public function simpan_dosen(){

    }






    public function daftar_mahasiswa(){
        return view('backend.mahasiswa.daftar');
    }
    public function tambah_mahasiswa(){
        return view('backend.mahasiswa.form');
    }


    public function daftar_matkul(){
        return view('backend.matakuliah.daftar');
    }
    public function tambah_matkul(){
        return view('backend.matakuliah.tambah');
    }

    public function daftar_ruangan(){
        return view('backend.ruangan.daftar');
    }
    public function tambah_ruangan(){
        return view('backend.user.tambah');
    }

    public function daftar_jadwalkuliah(){
        return view('backend.jadwalkuliah.daftar');
    }
    public function tambah_jadwalkuliah(){
        return view('backend.jadwalkuliah.tambah');
    }
}
