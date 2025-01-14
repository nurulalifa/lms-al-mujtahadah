<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Web\Home;
use App\Http\Controllers\Web\Login;
use App\Http\Controllers\Web\DashboardWeb;
use App\Http\Controllers\LMS\modul_master\DosenController as Modul_masterDosenController;
use App\Http\Controllers\LMS\modul_master\JadwalController as Modul_masterJadwalController;
use App\Http\Controllers\LMS\modul_master\MahasiswaController as Modul_masterMahasiswaController;
use App\Http\Controllers\LMS\modul_master\MatkulController as Modul_masterMatkulController;
use App\Http\Controllers\LMS\modul_master\RuanganController as Modul_masterRuanganController;
use App\Http\Controllers\LMS\modul_master\ProdiController as Modul_masterProdiController;

use App\Http\Controllers\LMS\modul_dosen\Dosen_MatkulController as Modul_Dosen;
use App\Http\Controllers\LMS\modul_dosen\RPSController as RPSController;
use App\Http\Controllers\LMS\modul_dosen\Dosen_JadwalController as Dosen_JadwalController;

use App\Http\Controllers\LMS\modul_mahasiswa\MahasiswaController as Mahasiswa_Controller;
use App\Http\Controllers\Auth\ChangePasswordController;
// Route::get('/', function () {
//     return view('welcome');
// });

//frontend
// Route::get('/',[FrontendController::class, 'index']);
// Route::get('/login',[FrontendController::class, 'formlogin']);
// Route::get('/register',[FrontendController::class,'formregister']);

Route::namespace('App\Http\Controllers\Web')->group(function () {
    route::get('/', [Home::class, 'index']);
    Route::get('/webadmin', [Login::class, 'index'])->name('Web.Login');
    Route::post('/proseslogin', [Login::class, 'proseslogin']);
    Route::get('/DashboardWeb', [DashboardWeb::class, 'index'])->name('Web.DashboardWeb');;
});


Auth::routes();
Route::get('/dashboard',[BackendController::class,'index'])->name('dashboard');
// Route::get('/reset',[BackendController::class,'reset']);
Route::get('reset', [ChangePasswordController::class, 'showChangePasswordForm']);
Route::post('password/change', [ChangePasswordController::class, 'updatePassword'])->name('password.change');
Route::post('password/change/dosen', [ChangePasswordController::class, 'updatePassword_dosen'])->name('password.change.dosen');
Route::post('password/change/mahasiswa', [ChangePasswordController::class, 'updatePassword_mahasiswa'])->name('password.change.mahasiswa');

Route::group(['middleware' => ['auth', 'role:admin']], function() {

//website
Route::get('berita/daftar',[BackendController::class,'daftar_berita']);
Route::get('berita/detail/{id_berita}',[BackendController::class,'detail_berita']);
Route::get('berita/edit/{id_berita}',[BackendController::class,'edit_berita']);
Route::post('berita/update/{id_berita}',[BackendController::class,'update_berita']);
Route::get('berita/tambah',[BackendController::class,'tambah_berita']);
Route::post('berita/simpan',[BackendController::class,'simpan_berita']);

Route::get('kata/sambutan',[BackendController::class,'kata_sambutan']);
Route::post('sambutan/update/{id}',[BackendController::class,'update_sambutan']);




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
});


//Modul Dosen
//RPS
Route::group(['middleware' => ['auth', 'role:dosen']], function() {
Route::get('/dosen/matkul',[Modul_Dosen::class,'index'])->name('dosen.matkul');
Route::get('/dosen/matkul/tahun/{tahun}',[Modul_Dosen::class,'index2']);

Route::get('input/rps/{id}',[Modul_Dosen::class,'daftar_rps'])->name('rps');
Route::get('rps/form/{id}',[RPSController::class,'form_rps']);
Route::post('rps/simpan/',[RPSController::class,'simpan_rps']);
Route::get('rps/edit/{id}',[RPSController::class,'edit_rps']);
Route::post('rps/update/{id}',[RPSController::class,'update_rps']);
// Route::get('rps/delete/{id}',[RPSController::class,'delete_rps']);

Route::get('dosen/jadwal/{id}',[Dosen_JadwalController::class,'index']);
Route::get('dosen/kelas/{id}',[Dosen_JadwalController::class,'kelas']);
Route::get('dosen/kelas/tambah/{id}',[Dosen_JadwalController::class,'tambah_materi']);
Route::post('dosen/kelas/simpan/{id}',[Dosen_JadwalController::class,'simpan_materi']);

Route::get('dosen/kelas/detail/{id}',[Dosen_JadwalController::class,'detail_kelas']);
Route::post('dosen/kelas/kirim/{id}',[Dosen_JadwalController::class,'kirim_pesan']);
Route::post('dosen/kelas/nilai/{id}',[Dosen_JadwalController::class,'input_nilai']);

Route::get('dosen/absen/{id}',[Dosen_JadwalController::class, 'form_absen']);
Route::post('dosen/absen/simpan/{id}',[Dosen_JadwalController::class, 'simpan_absen']);



});

Route::group(['middleware' => ['auth', 'role:mahasiswa']], function() {
Route::get('mahasiswa/dashboard',[Mahasiswa_Controller::class, 'index'])->name('mahasiswa.dashboard');
Route::get('/mahasiswa/matkul/tahun/{tahun}',[Mahasiswa_Controller::class,'index2']);
Route::get('mahasiswa/kelas/{id}',[Mahasiswa_Controller::class, 'kelas']);
Route::get('mahasiswa/kelas/detail/{id}',[Mahasiswa_Controller::class,'detail_kelas']);
Route::get('mahasiswa/absen/{id}',[Mahasiswa_Controller::class, 'absen']);
Route::get('mahasiswa/kelas/aktifitas/{id}',[Mahasiswa_Controller::class,'aktifitas']);
Route::post('mahasiswa/kelas/kirim/{id}',[Mahasiswa_Controller::class,'kirim_pesan']);

Route::post('mahasiswa/kelas/upload/{id}',[Mahasiswa_Controller::class,'upload_tugas']);

Route::get('mahasiswa/pilih/semester',[Mahasiswa_Controller::class, 'pilih_smt']);
Route::get('mahasiswa/khs',[Mahasiswa_Controller::class, 'calculateFinalScore']);
// Route::get('mahasiswa/KHS',[Mahasiswa_Controller::class, 'khs']);

});

