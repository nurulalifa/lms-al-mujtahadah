<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModulMahasiswaController extends Controller
{
    // Absen
    public function daftar_absen(){
        // Logika untuk menampilkan daftar absen mahasiswa$absen = Absen::where('mahasiswa_id', auth()->id())->get(); // Misalnya mengambil data absen berdasarkan mahasiswa yang sedang login
        return view('modulmahasiswa.absen.daftar');
    }

    // Ruang Belajar
    public function ruang_belajar(){
        // Logika untuk menampilkan ruang belajar$ruangBelajar = RuangBelajar::where('mahasiswa_id', auth()->id())->get(); // Misalnya mengambil data ruang belajar mahasiswa
        return view('modulmahasiswa.ruang_belajar.daftar');
    }

    // Upload Tugas
    public function upload_tugas(){
        // Logika untuk menampilkan form upload tugas
        // return view('modulmahasiswa.tugas.upload');
    }

    // KHS
    public function khs()
    {
        // Logika untuk menampilkan KHS$khs = Khs::where('mahasiswa_id', auth()->id())->get(); // Misalnya mengambil data KHS mahasiswa yang sedang login
        return view('modulmahasiswa.khs.daftar');
    }
}
