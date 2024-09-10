<?php

namespace App\Http\Controllers\LMS\modul_dosen;
use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\Jadwal;
use App\Models\RPS;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RPSController extends Controller
{
    public function form_rps($id){
        $jadwal = Jadwal::findOrFail($id);

       $pertemuan = 1;
        return view('backend.moduldosen.rps.form_rps',compact('pertemuan','jadwal'));
    }
    public function simpan_rps(){
        $id = Request()->id;
        $email = Auth::user()->email;
        $user = Dosen::where('email',$email)->first();
        $jadwal=Jadwal::findOrFail($id);
        // dd($jadwal->id, $jadwal->id_matkul);
        RPS::create([
            'id_jadwal'=>$jadwal->id,
            'id_matkul'=>$jadwal->id_matkul,
            'id_dosen'=>$user->id,
            'pertemuan'=>Request()->pertemuan,
            'kemampuan'=>Request()->kemampuan,
            'pengalaman'=>Request()->pengalaman,
            'bahan'=>Request()->bahan,
            'metode'=>Request()->metode,
            'waktu'=>Request()->waktu,
            'kriteria'=>Request()->kriteria,
            'bobot'=>Request()->bobot,
            'jenis_ujian'=>Request()->jenis_ujian,
        ]);
        return redirect('input/rps/'.$jadwal->id);
    }
    public function edit_rps($id){
        $data = RPS::findOrFail($id);
        return view('backend.moduldosen.rps.edit_rps',compact('data'));
    }
    public function update_rps($id){
        $data = RPS::findOrFail($id);
        $data->pertemuan=Request()->pertemuan;
        $data->kemampuan=Request()->kemampuan;
        $data->pengalaman=Request()->pengalaman;
        $data->bahan=Request()->bahan;
        $data->metode=Request()->metode;
        $data->waktu=Request()->waktu;
        $data->kriteria=Request()->kriteria;
        $data->bobot=Request()->bobot;
        $data->jenis_ujian=Request()->jenis_ujian;
        $data -> save();

        return redirect('input/rps/'.$data->id_jadwal);
    }
    public function delete_rps($id){
        $data = RPS::findOrFail($id);
        $data->delete();
        return redirect('input/rps/'.$data->id_jadwal);
    }

}
