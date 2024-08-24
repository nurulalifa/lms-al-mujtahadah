<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Matkul;
use App\Models\Ruangan;

use function Ramsey\Uuid\v1;

class BackendController extends Controller
{
    public function index(){
        return view('backend.index');
    }
    public function daftar_user(){
        return view('backend.user.daftar');
    }
    // public function tambah_user(){
    //     return view('backend.user.tambah');
    // }














}
