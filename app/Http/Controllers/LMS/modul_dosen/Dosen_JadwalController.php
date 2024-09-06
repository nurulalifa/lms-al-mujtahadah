<?php

namespace App\Http\Controllers\LMS\modul_dosen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Absen;
use App\Models\Aktifitas;
use App\Models\Jadwal;
use App\Models\Jadwal_Mahasiswa;
use App\Models\Kelas;
use App\Models\Matkul;
use App\Models\RPS;
use Laravel\Ui\Presets\React;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class Dosen_JadwalController extends Controller
{
    public function index($id){
        $auth = Auth::id();

        $jadwal = Jadwal::where('id',$id)
        ->where('id_dosen',$auth)
        ->first();
        $rps = RPS::where('id_jadwal',$id)->where('id_dosen',$auth)->get();
        $absen = Absen::where('id_jadwal',$id)->get();

        // dd($absen->id_rps);
        return view('backend.moduldosen.kelas.kelas', compact('jadwal','rps','absen'));
    }

    public function kelas($id){
        $auth = Auth::id();
        // dd($id);
        $rps = RPS::where('id',$id)->where('id_dosen',$auth)->first();
        $kelas = Kelas::where('id_rps',$id)->get();

        return view('backend.moduldosen.kelas.aktifitas',compact('rps','kelas'));
    }
    public function tambah_materi($id){
        return view('backend.moduldosen.kelas.tambah_materi',compact('id'));
    }
    public function simpan_materi($id){
        $auth = Auth::id();
        $rps = RPS::findOrFail($id);
        $bahan = Request()->bahan;
        if ($bahan) {
            $new_bahan = Str::random(16).'.'.$bahan->extension();
            $bahan->move('uploads/bahan/', $new_bahan);
        } else {
           $new_bahan = '';
        }
        Kelas::create([
            'id_jadwal'=>$rps->id_jadwal,
            'id_matkul'=>$rps->id_matkul,
            'id_rps'=>$id,
            'id_dosen'=>$auth,
            'judul'=>Request()->judul,
            'deskripsi'=>Request()->deskripsi,
            'jenis_perkuliahan'=>Request()->kategori,
            'bahan'=>$new_bahan,
            'tanggal'=>Request()->tgl,
            'waktu'=>Request()->wkt,
        ]);
        return redirect('dosen/kelas/'.$id);
    }
    public function detail_kelas($id){
        // $rps = RPS::findOrFail($id);
        $kelas = Kelas::findOrFail($id);
        $aktifitas = Aktifitas::where('id_kelas',$id)->get();
        return view('backend.moduldosen.kelas.detail_kelas', compact('kelas','aktifitas'));
    }
    public function kirim_pesan($id){
        $auth = Auth::id();
        $kelas = Kelas::findOrFail($id);
        Aktifitas::create([
            'id_jadwal'=>$kelas->id_jadwal,
            'id_matkul'=>$kelas->id_matkul,
            'id_rps'=>$kelas->id,
            'id_pengguna'=>$auth,
            'id_kelas'=>$kelas->id,
            'pesan'=>Request()->pesan
        ]);
        return redirect()->back();
    }
    public function form_absen($id){
        $absen = Absen::where('id_rps',$id)->first();
        $rps = RPS::findOrFail($id);
        $jadwal_mahasiswa=Jadwal_Mahasiswa::where('id_jadwal',$rps->id_jadwal)->get();
        return view('backend.moduldosen.kelas.absen',compact('id','absen','jadwal_mahasiswa'));
    }
    public function simpan_absen($id)
    {
        $auth = Auth::id();
        $rps = RPS::findOrFail($id);
        $absen = Absen::where('id_rps', $id);

        if ($absen->exists()) {
            // Jika ada data absen yang sudah ada, perbarui entri-entri tersebut
            $absen->update([
                'tanggal_m' => Request()->tanggal_m,
                'tanggal_s' => Request()->tanggal_s,
                'jam_m' => Request()->jam_m,
                'jam_s' => Request()->jam_s
            ]);
        } else {
            // Jika tidak ada data absen, buat entri baru
            Absen::create([
                'id_matkul' => $rps->id_matkul,
                'id_jadwal' => $rps->id_jadwal,
                'id_rps' => $rps->id,
                'id_dosen' => $auth,
                'tanggal_m' => Request()->tanggal_m,
                'tanggal_s' => Request()->tanggal_s,
                'jam_m' => Request()->jam_m,
                'jam_s' => Request()->jam_s
            ]);
        }

        return redirect('dosen/jadwal/'.$rps->id_jadwal);
    }

}
