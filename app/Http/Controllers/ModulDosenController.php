<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModulDosenController extends Controller
{
    public function daftar_rps(){
        // Logika untuk menampilkan daftar RPS$rps = Rps::all(); // Misalnya mengambil semua data RPS dari model
        return view('moduldosen.rps.daftar');
    }

    public function tambah_rps(){
        // Logika untuk menampilkan form tambah RPS
        return view('moduldosen.rps.tambah');
    }

    // Kelas
    public function daftar_kelas(){
        // Logika untuk menampilkan daftar kelas$kelas = Kelas::all(); // Misalnya mengambil semua data Kelas dari model
        return view('moduldosen.kelas.daftar' );
    }

    public function tambah_kelas(){
        // Logika untuk menampilkan form tambah kelas
        return view('moduldosen.kelas.tambah');
    }

    // Absen
    public function daftar_absen(){
        // Logika untuk menampilkan daftar absen$absen = Absen::all(); // Misalnya mengambil semua data Absen dari model
        return view('moduldosen.absen.daftar');
    }

    // Materi
    public function daftar_materi(){
        // Logika untuk menampilkan daftar jadwal kuliah$jadwalkuliah = JadwalKuliah::all(); // Misalnya mengambil semua data Jadwal Kuliah dari model
        return view('moduldosen.materi.daftar');
    }

    public function tambah_materi(){
        // Logika untuk menampilkan form tambah materi
        return view('moduldosen.materi.tambah');
    }

    // Nilai
    public function daftar_nilai(){
        // Logika untuk menampilkan daftar nilai$nilai = Nilai::all(); // Misalnya mengambil semua data Nilai dari model
        return view('moduldosen.nilai.daftar');
    }

    public function tambah_nilai(){
        // Logika untuk menampilkan form tambah nilai
        return view('moduldosen.nilai.tambah');
    }
}
