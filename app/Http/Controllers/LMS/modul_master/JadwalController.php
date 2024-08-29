<?php

namespace App\Http\Controllers\LMS\modul_master;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\Jadwal;
use App\Models\Jadwal_Mahasiswa;
use App\Models\Mahasiswa;
use App\Models\Matkul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class JadwalController extends Controller
{
    public function daftar_jadwalkuliah(){
        $data = Jadwal::all();
        return view('backend.modul_master.jadwalkuliah.daftar',compact('data'));
    }
    public function tambah_jadwalkuliah(){
        $matkul = Matkul::all();
        $dosen = Dosen::all();
        $mahasiswa = Mahasiswa::all();
        return view('backend.modul_master.jadwalkuliah.form',compact('matkul','dosen', 'mahasiswa'));
    }
    public function simpan_jadwalkuliah(){
        $jadwal=Jadwal::create([
            'id_matkul'=>Request()->matkul,
            'jam_m'=>Request()->jam_m,
            'jam_k'=>Request()->jam_k,
            'id_dosen'=>Request()->dosen,
            'hari'=>Request()->hari
        ]);
        $data = $jadwal->id;
        Jadwal_Mahasiswa::create([
            'id_jadwal'=>$data,
            'id_mahasiswa'=>0
        ]);
        return redirect('/jadwalkul/daftar');
    }
    public function edit_jadwal($id){
        $data = Jadwal::findOrFail($id);
        $dosen = Dosen::all();
        $matkul = Matkul::all();
        return view('backend.modul_master.jadwalkuliah.edit',compact('data','matkul','dosen'));
    }

    public function update_jadwal($id){
        $data=Jadwal::findOrFail($id);
        $data->id_matkul = Request()->id_matkul;
        $data->jam_m = Request()->jam_m;
        $data->jam_k = Request()->jam_k;
        $data->hari = Request()->hari;
        $data->id_dosen = Request()->dosen;
        $data->save();
        return redirect('/jadwalkul/daftar');
    }
    public function delete_jadwal($id){
        $data = Jadwal::findOrFail($id);
        $data->delete();
        return redirect('/jadwalkul/daftar');
    }

    public function daftar_mahasiswa($id){
        $data = Jadwal_Mahasiswa::where('id_jadwal',$id)->get();
        return view('backend.modul_master.jadwalkuliah.daftar_mahasiswa',compact('data','id'));

    }
    public function tambah_mahasiswa($id){
        $data = Mahasiswa::all();
        return view('backend.modul_master.jadwalkuliah.form_mahasiswa',compact('data','id'));
    }
    public function simpan_mahasiswa($id){
        Jadwal_Mahasiswa::create([
            'id_jadwal'=> $id,
            'id_mahasiswa'=>Request()->id_mahasiswa
        ]);
        return redirect('/jadwalkul/mahasiswa/daftar/'.$id);
    }
    public function hapus_mahasiswa($id, $id_mahasiswa)
    {
        $data=
        // Menyaring entri berdasarkan 'id' dan 'id_mahasiswa'
        $data = Jadwal_Mahasiswa::where('id', $id)
                                ->where('id_mahasiswa', $id_mahasiswa)
                                ->first();

        // Memastikan data ditemukan sebelum menghapus
        if ($data) {
            $data->delete();
        }

        // Redirect kembali ke halaman sebelumnya
        return redirect()->back();
    }

}
