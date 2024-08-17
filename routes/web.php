<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\ModulDosenController;
use App\Http\Controllers\ModulMahasiswaController;

// Route::get('/', function () {
//     return view('welcome');
// });

//frontend
Route::get('/',[FrontendController::class, 'index']);
Route::get('/login',[FrontendController::class, 'formlogin']);
Route::get('/register',[FrontendController::class,'formregister']);


//Modul Master
Route::get('/dashboard',[BackendController::class,'index']);

//user
Route::get('/daftar/user',[BackendController::class,'daftar_user']);
Route::get('/user/tambah',[BackendController::class,'tambah_user']);


//dosen
Route::get('/daftar/dosen',[BackendController::class,'daftar_dosen']);
Route::get('/dosen/tambah',[BackendController::class,'tambah_dosen']);


//mahasiswa
Route::get('/daftar/mahasiswa',[BackendController::class,'daftar_mahasiswa']);
Route::get('/mahasiswa/tambah',[BackendController::class,'tambah_mahasiswa']);


//mata kuliah
Route::get('/daftar/matkul',[BackendController::class,'daftar_matkul']);
Route::get('/matkul/tambah',[BackendController::class,'tambah_matkul']);


//ruangan
Route::get('/daftar/ruangan',[BackendController::class,'daftar_ruangan']);
Route::get('/ruangan/tambah',[BackendController::class,'tambah_ruangan']);


//jadwal kuliah
Route::get('/daftar/jadwalkuliah',[BackendController::class,'daftar_jadwalkuliah']);
Route::get('/jadwalkuliah/tambah',[BackendController::class,'tambah_jadwalkuliah']);


//Modul Dosen
//RPS
Route::get('/daftar/rps',[ModulDosenController::class,'daftar_rps']);
Route::get('/rps/tambah',[ModulDosenController::class,'tambah_rps']);

//Kelas
Route::get('/daftar/kelas',[ModulDosenController::class,'daftar_kelas']);
Route::get('/kelas/tambah',[ModulDosenController::class,'tambah_kelas']);

//Absen
Route::get('/daftar/absen',[ModulDosenController::class,'daftar_absen']);
// Route::get('/absen/tambah',[BackendController::class,'tambah_absen']);

//Materi
Route::get('/daftar/materi',[ModulDosenController::class,'daftar_materi']);
Route::get('/materi/tambah',[ModulDosenController::class,'tambah_materi']);

//Nilai
Route::get('/daftar/nilai',[ModulDosenController::class,'daftar_nilai']);
Route::get('/nilai/tambah',[ModulDosenController::class,'tambah_nilai']);

// Modul Mahasiswa
//Absen
Route::get('/daftar/absen',[ModulMahasiswaController::class,'daftar_absen']);

//ruangbelajar
Route::get('/ruang-belajar',[ModulMahasiswaController::class,'ruang_belajar']);

//upload tugas
Route::get('/upload/tugas',[ModulMahasiswaController::class,'upload_tugas']);

//KHS
Route::get('/khs',[ModulMahasiswaController::class,'khs']);

