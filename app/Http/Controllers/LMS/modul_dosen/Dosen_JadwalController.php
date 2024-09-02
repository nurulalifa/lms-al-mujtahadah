<?php

namespace App\Http\Controllers\LMS\modul_dosen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use App\Models\Kelas;
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
        // dd($rps);
        return view('backend.moduldosen.kelas.kelas', compact('jadwal','rps'));
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
        return view('backend.moduldosen.kelas.detail_kelas');
    }
}
