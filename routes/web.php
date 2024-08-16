<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;
// Route::get('/', function () {
//     return view('welcome');
// });

//frontend
Route::get('/',[FrontendController::class, 'index']);
Route::get('/login',[FrontendController::class, 'formlogin']);
Route::get('/register',[FrontendController::class,'formregister']);


//backend
Route::get('/dashboard',[BackendController::class,'index']);

//user
Route::get('/daftar/user',[BackendController::class,'daftar_user']);
Route::get('/user/tambah',[BackendController::class,'tambah_user']);


//dosen
Route::get('/daftar/dosen',[BackendController::class,'daftar_dosen']);

//mahasiswa
Route::get('/daftar/mahasiswa',[BackendController::class,'daftar_mahasiswa']);

//mata kuliah
Route::get('/daftar/matkul',[BackendController::class,'daftar_matkul']);

//ruangan
Route::get('/daftar/ruangan',[BackendController::class,'daftar_ruangan']);

//jadwal kuliah
Route::get('/daftar/jadwalkuliah',[BackendController::class,'daftar_jadwalkuliah']);

