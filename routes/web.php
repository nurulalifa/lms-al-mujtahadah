<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;

use App\Http\Controllers\LMS\modul_master\DosenController as Modul_masterDosenController;
use App\Http\Controllers\LMS\modul_master\JadwalController as Modul_masterJadwalController;
use App\Http\Controllers\LMS\modul_master\MahasiswaController as Modul_masterMahasiswaController;
use App\Http\Controllers\LMS\modul_master\MatkulController as Modul_masterMatkulController;
use App\Http\Controllers\LMS\modul_master\RuanganController as Modul_masterRuanganController;
use App\Http\Controllers\LMS\modul_master\ProdiController as Modul_masterProdiController;

use App\Http\Controllers\LMS\modul_dosen\Dosen_MatkulController as Modul_Dosen;
use App\Http\Controllers\LMS\modul_dosen\RPSController as RPRController;


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
Route::get('/user/daftar',[BackendController::class,'daftar_user']);
Route::get('/user/tambah',[BackendController::class,'tambah_user']);


//dosen
Route::get('/dosen/daftar',[Modul_masterDosenController::class,'daftar_dosen']);
Route::get('/dosen/tambah',[Modul_masterDosenController::class,'tambah_dosen']);
Route::get('/dosen/delete/{id}', [Modul_masterDosenController::class,'delete_dosen']);
Route::post('/dosen/simpan',[Modul_masterDosenController::class,'simpan_dosen']);
Route::get('/dosen/detail/{id}',[Modul_masterDosenController::class,'detail_dosen']);
Route::get('/dosen/edit/{id}',[Modul_masterDosenController::class,'edit_dosen']);
Route::post('/dosen/update/{id}',[Modul_masterDosenController::class,'update_dosen']);


//mahasiswa
Route::get('/mahasiswa/daftar',[Modul_masterMahasiswaController::class,'daftar_mahasiswa']);
Route::get('/mahasiswa/tambah',[Modul_masterMahasiswaController::class,'tambah_mahasiswa']);
Route::post('/mahasiswa/simpan',[Modul_masterMahasiswaController::class,'simpan_mahasiswa']);
Route::get('/mahasiswa/detail/{id}',[Modul_masterMahasiswaController::class,'detail_mahasiswa']);
Route::get('/mahasiswa/edit/{id}',[Modul_masterMahasiswaController::class,'edit_mahasiswa']);
Route::post('mahasiswa/update/{id}',[Modul_masterMahasiswaController::class,'update_mahasiswa']);
Route::get('/mahasiswa/delete/{id}',[Modul_masterMahasiswaController::class,'delete_mahasiswa']);

//prodi
Route::get('/prodi/daftar',[Modul_masterProdiController::class,'daftar_prodi']);
Route::get('/prodi/tambah',[Modul_masterProdiController::class,'tambah_prodi']);
Route::post('/prodi/simpan',[Modul_masterProdiController::class,'simpan_prodi']);
Route::get('/prodi/edit/{id}',[Modul_masterProdiController::class,'edit_prodi']);
Route::post('/prodi/update/{id}',[Modul_masterProdiController::class,'update_prodi']);
Route::get('/prodi/delete/{id}',[Modul_masterProdiController::class,'delete_prodi']);

//mata kuliah
Route::get('/matkul/daftar',[Modul_masterMatkulController::class,'daftar_matkul']);
Route::get('/matkul/tambah',[Modul_masterMatkulController::class,'tambah_matkul']);
Route::post('/matkul/simpan',[Modul_masterMatkulController::class,'simpan_matkul']);
Route::get('/matkul/edit/{id}',[Modul_masterMatkulController::class,'edit_matkul']);
Route::post('/matkul/update/{id}',[Modul_masterMatkulController::class,'update_matkul']);
Route::get('/matkul/delete/{id}',[Modul_masterMatkulController::class,'delete_matkul']);


//ruangan
Route::get('/ruangan/daftar',[Modul_masterRuanganController::class,'daftar_ruangan']);
Route::get('/ruangan/tambah',[Modul_masterRuanganController::class,'tambah_ruangan']);
Route::post('/ruangan/simpan',[Modul_masterRuanganController::class,'simpan_ruangan']);
Route::get('/ruangan/edit/{id}',[Modul_masterRuanganController::class,'edit_ruangan']);
Route::post('/ruangan/update/{id}',[Modul_masterRuanganController::class,'update_ruangan']);
Route::get('/ruangan/delete/{id}',[Modul_masterRuanganController::class,'delete_ruangan']);

//jadwal kuliah
Route::get('/jadwalkul/daftar',[Modul_masterJadwalController::class,'daftar_jadwalkuliah']);
Route::get('/jadwalkul/tambah',[Modul_masterJadwalController::class,'tambah_jadwalkuliah']);
Route::post('/jadwalkul/simpan',[Modul_masterJadwalController::class,'simpan_jadwalkuliah']);
Route::get('jadwalkul/edit/{id}',[Modul_masterJadwalController::class,'edit_jadwal']);
Route::post('jadwalkul/update/{id}',[Modul_masterJadwalController::class,'update_jadwal']);
Route::get('jadwalkul/delete/{id}',[Modul_masterJadwalController::class,'delete_jadwal']);
Route::get('/jadwalkul/mahasiswa/daftar/{id}',[Modul_masterJadwalController::class, 'daftar_mahasiswa']);
Route::get('/jadwalkul/mahasiswa/tambah/{id}',[Modul_masterJadwalController::class, 'tambah_mahasiswa']);
Route::post('/jadwalkul/mahasiswa/simpan/{id}',[Modul_masterJadwalController::class,'simpan_mahasiswa']);
Route::get('/jadwalkul/mahasiswa/hapus/{id}/{id_mahasiswa}',[Modul_masterJadwalController::class, 'hapus_mahasiswa']);



//Modul Dosen
//RPS
Route::get('/dosen/matkul',[Modul_Dosen::class,'index']);
Route::get('input/rps/{id}',[Modul_Dosen::class,'daftar_rps']);
Route::get('form/rps/{id}/1',[RPRController::class,'form_rps1']);
Route::get('form/rps/{id}/2',[RPRController::class,'form_rps2']);
Route::get('form/rps/{id}/3',[RPRController::class,'form_rps3']);
Route::get('form/rps/{id}/4',[RPRController::class,'form_rps4']);
Route::get('form/rps/{id}/5',[RPRController::class,'form_rps5']);
Route::get('form/rps/{id}/6',[RPRController::class,'form_rps6']);
Route::get('form/rps/{id}/7',[RPRController::class,'form_rps7']);
Route::get('form/rps/{id}/8',[RPRController::class,'form_rps8']);
Route::get('form/rps/{id}/9',[RPRController::class,'form_rps9']);
Route::get('form/rps/{id}/10',[RPRController::class,'form_rps10']);
Route::get('form/rps/{id}/11',[RPRController::class,'form_rps11']);
Route::get('form/rps/{id}/12',[RPRController::class,'form_rps12']);
Route::get('form/rps/{id}/13',[RPRController::class,'form_rps13']);
Route::get('form/rps/{id}/14',[RPRController::class,'form_rps14']);
Route::get('form/rps/{id}/15',[RPRController::class,'form_rps15']);
Route::get('form/rps/{id}/16',[RPRController::class,'form_rps16']);


// Route::get('/rps/daftar',[ModulDosenController::class,'daftar_rps']);
// Route::get('/rps/tambah',[ModulDosenController::class,'tambah_rps']);

// //Kelas
// Route::get('/kelas/daftar',[ModulDosenController::class,'daftar_kelas']);
// Route::get('/kelas/tambah',[ModulDosenController::class,'tambah_kelas']);

// //Absen
// Route::get('/absen/daftar',[ModulDosenController::class,'daftar_absen']);
// // Route::get('/absen/tambah',[BackendController::class,'tambah_absen']);

// //Materi
// Route::get('/materi/daftar',[ModulDosenController::class,'daftar_materi']);
// Route::get('/materi/tambah',[ModulDosenController::class,'tambah_materi']);

// //Nilai
// Route::get('/nilai/daftar',[ModulDosenController::class,'daftar_nilai']);
// Route::get('/nilai/tambah',[ModulDosenController::class,'tambah_nilai']);

// // Modul Mahasiswa
// //Absen
// Route::get('/daftar/absen',[ModulMahasiswaController::class,'daftar_absen']);

// //ruangbelajar
// Route::get('/ruang-belajar',[ModulMahasiswaController::class,'ruang_belajar']);

// //upload tugas
// Route::get('/upload/tugas',[ModulMahasiswaController::class,'upload_tugas']);

// //KHS
// Route::get('/khs',[ModulMahasiswaController::class,'khs']);

