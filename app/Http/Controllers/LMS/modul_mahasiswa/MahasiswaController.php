<?php

namespace App\Http\Controllers\LMS\modul_mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\Jadwal;
use App\Models\Jadwal_Mahasiswa;
use App\Models\Mahasiswa;
use App\Models\Matkul;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $id_mahasiswa = 1;
        $mahasiswa = DB::table('table_jadwal_mahasiswa')
            ->join('table_mahasiswa', 'table_jadwal_mahasiswa.id_mahasiswa', '=', 'table_mahasiswa.id')
            ->join('table_jadwal as tj', 'table_jadwal_mahasiswa.id_jadwal', '=', 'tj.id')
            ->join('table_matkul', 'tj.id_matkul', '=', 'table_matkul.id')
            ->select(
                'table_mahasiswa.*',
                'tj.hari as hari',
                'tj.jam_m as jam_mulai',
                'tj.jam_k as jam_selesai',
                'table_matkul.kode as kode_matkul',
                'table_matkul.nama as nama_matkul', // Alias kolom untuk nama matkul
                'table_matkul.id as id_matkul'
            )
            ->where('table_jadwal_mahasiswa.id_mahasiswa', $id_mahasiswa)
            ->get();
        return view('backend.modul_mahasiswa.dashboard', compact('mahasiswa'));
    }
}
