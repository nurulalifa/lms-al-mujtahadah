<?php

namespace App\Http\Controllers\LMS\modul_dosen;
use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use App\Models\RPS;
use Illuminate\Http\Request;

class RPSController extends Controller
{
    public function form_rps($id){
        $jadwal = Jadwal::findOrFail($id);
        $pertemuan =1;
        return view('backend.moduldosen.rps.form_rps',compact('pertemuan','jadwal'));
    }
    public function simpan_rps(){
        $id = Request()->id;
        $jadwal=Jadwal::findOrFail($id);
        // dd($jadwal->id, $jadwal->id_matkul);
        RPS::create([
            'id_jadwal'=>$jadwal->id,
            'id_matkul'=>$jadwal->id_matkul,
            'pertemuan'=>Request()->pertemuan,
            'kemampuan'=>Request()->kemampuan,
            'bahan'=>Request()->bahan,
            'metode'=>Request()->metode,
            'waktu'=>Request()->waktu,
            'kriteria'=>Request()->kriteria,
            'bobot'=>Request()->bobot,
            'jenis_ujian'=>Request()->jenis_ujian,
        ]);
        return redirect()->route('rps');
    }
    public function form_rps2(){
        return view('');
    }
    public function form_rps3(){
        return view('');
    }
    public function form_rps4(){
        return view('');
    }
    public function form_rps5(){
        return view('');
    }
    public function form_rps6(){
        return view('');
    }
    public function form_rps7(){
        return view('');
    }
    public function form_rps8(){
        return view('');
    }
    public function form_rps9(){
        return view('');
    }
    public function form_rps10(){
        return view('');
    }
    public function form_rps11(){
        return view('');
    }
    public function form_rps12(){
        return view('');
    }
    public function form_rps13(){
        return view('');
    }
    public function form_rps14(){
        return view('');
    }
    public function form_rps15(){
        return view('');
    }
    public function form_rps16(){
        return view('');
    }

    public function simpan(){

    }

}
