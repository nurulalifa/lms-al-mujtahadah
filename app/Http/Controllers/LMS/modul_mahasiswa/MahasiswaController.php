<?php

namespace App\Http\Controllers\LMS\modul_mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Absen;
use App\Models\Absen_mahasiswa;
use App\Models\RPS;
use App\Models\Aktifitas;
use App\Models\Dosen;
use App\Models\Jadwal;
use App\Models\Jadwal_Mahasiswa;
use App\Models\Mahasiswa;
use App\Models\Matkul;
use App\Models\Kelas;
use App\Models\Tugas;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $email = Auth::user()->email;
        $id_mahasiswa = Mahasiswa::where('email',$email)->first();

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
                'table_matkul.id as id_matkul',
                'tj.id as id_jadwal'
            )
            ->where('table_jadwal_mahasiswa.id_mahasiswa', $id_mahasiswa->id)
            ->get();
        return view('backend.modul_mahasiswa.dashboard', compact('mahasiswa'));
    }

    public function kelas($id)
    {
        $email = Auth::user()->email;
        $id_mahasiswa = Mahasiswa::where('email',$email)->first();

        // $jadwal = Jadwal::where('id', $id)->first();

        $jadwal = Jadwal::join('table_matkul', 'table_jadwal.id_matkul', '=', 'table_matkul.id')
        ->select('table_matkul.nama', 'table_jadwal.*')
        ->where('table_jadwal.id', $id)
        ->first();

        $rps = RPS::where('id_jadwal', $id)->get();
        $absen = Absen::where('id_jadwal', $id)->get();
        $absen_mahasiswa = Absen_mahasiswa::where('id_mahasiswa', $id_mahasiswa->id)->where('id_jadwal', $id)->first();


        return view('backend.modul_mahasiswa.kelas', compact('jadwal', 'rps', 'absen', 'absen_mahasiswa'));
    }
    public function detail_kelas($id)
    {
        // $rps = RPS::where('id', $id)->first();
        $rps = RPS::join('table_matkul', 'table_rps.id_matkul', '=', 'table_matkul.id')
        ->select('table_rps.*', 'table_matkul.nama')
        ->where('table_rps.id',$id)
        ->first();
        $kelas = Kelas::where('id_rps', $id)->get();

        return view('backend.modul_mahasiswa.detail_kelas', compact('rps', 'kelas'));
    }
    public function absen($id)
    {
        $email = Auth::user()->email;
        $id_mahasiswa = Mahasiswa::where('email',$email)->first();

        $rps = RPS::findOrFail($id);
        Absen_mahasiswa::create([
            'id_mahasiswa' => $id_mahasiswa->id,
            'id_matkul' => $rps->id_matkul,
            'id_jadwal' => $rps->id_jadwal,
            'id_rps' => $rps->id,
            'absen' => 'absen',
            'waktu' => now()
        ]);
        return redirect()->back();
    }
    public function aktifitas($id)
    {
        $email = Auth::user()->email;
        $id_mahasiswa = Mahasiswa::where('email',$email)->first();

        $kelas = Kelas::findOrFail($id);
        $aktifitas = Aktifitas::where('id_kelas', $id)->get();
        $tugas = Tugas::where('id_kelas',$id)->where('id_mahasiswa',$id_mahasiswa->id)->first();
        return view('backend.modul_mahasiswa.aktifitas', compact('kelas', 'aktifitas', 'tugas'));
    }
    public function kirim_pesan($id)
    {
        // $auth = Auth::id();
        $email = Auth::user()->email;
        $id_mahasiswa = Mahasiswa::where('email',$email)->first();

        $kelas = Kelas::findOrFail($id);
        Aktifitas::create([
            'id_jadwal' => $kelas->id_jadwal,
            'id_matkul' => $kelas->id_matkul,
            'id_rps' => $kelas->id,
            'id_pengguna' => $id_mahasiswa->id,
            'id_kelas' => $kelas->id,
            'pesan' => Request()->pesan
        ]);
        return redirect('mahasiswa/kelas/aktifitas/' . $kelas->id);
    }

    public function upload_tugas($id){
        $email = Auth::user()->email;
        $id_mahasiswa = Mahasiswa::where('email',$email)->first();

        $kelas = Kelas::findOrFail($id);
        $data = Tugas::where('id_kelas',$id)->where('id_mahasiswa',$id_mahasiswa->id)->first();

        $tugas = Request()->tugas;
        if ($tugas) {
            $new_tugas = Str::random(16).'.'.$tugas->extension();
            $tugas->move('uploads/tugas/', $new_tugas);
        } else {
           $new_tugas = '';
        }

        if($data){
            $data->file= $new_tugas;
            $data->link=Request()->link;
            $data->save();
        }
        else{
        Tugas::create([
            'id_jadwal' => $kelas->id_jadwal,
            'id_matkul' => $kelas->id_matkul,
            'id_rps' => $kelas->id,
            'id_mahasiswa' => $id_mahasiswa->id,
            'id_kelas' => $kelas->id,
            'file' => $new_tugas,
            'link'=>Request()->link
        ]);
        }
        return redirect()->back();
    }
}
