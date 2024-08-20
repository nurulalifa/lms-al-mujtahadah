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


    public function daftar_dosen(){
        $data = Dosen::all();
        return view('backend.dosen.daftar', compact('data'));
    }
    public function tambah_dosen(){
        return view('backend.dosen.form');
    }
    public function delete_dosen($id){
        $dosen = dosen::findOrFail($id);
        $dosen->delete();
        return redirect('dosen/daftar');
    }
    public function simpan_dosen(Request $request){
        $foto = $request->foto;
        $new_foto = Str::random(16).'.'.$foto->extension();
        $foto->move('uploads/dosen/', $new_foto);
        dosen::create([
            'nama' => $request->nama,
            'tgl'=>$request->tgl,
            // 'foto'=>$request->foto,
            'foto' => $new_foto,
            'kategori'=>$request->kategori,
            'univ'=>$request->univ,
            'email'=>$request->email
        ]);
        return redirect('dosen/daftar')->with('pesan','Berhasil Disimpan');
    }
    public function detail_dosen($id){
        $dosen = Dosen::findorfail($id);
        return view('backend.dosen.detail', compact('dosen'));
    }
    public function edit_dosen($id){
        $dosen = Dosen::findOrFail($id);
        return view('backend.dosen.edit', compact('dosen'));
    }
    public function update_dosen($id){
        $dosen=Dosen::findOrFail($id);
        if(Request()->foto !=''){
        $foto = Request()->foto;
        $new_foto = Str::random(16).'.'.$foto->extension();
        $foto->move('uploads/dosen/', $new_foto);
        unlink('uploads/dosen/'.$dosen->foto);
        }
        $dosen->nama= Request()->nama;
        $dosen->tgl = Request()->tgl;
        $dosen->foto = Request()->foto != ''? $new_foto:$dosen->foto  ;
        $dosen->univ = Request()->univ;
        $dosen->kategori = request()->kategori;
        $dosen->email = Request()->email;
        $dosen->save();
        return redirect('dosen/daftar')->with('pesan','Berhasil Disimpan');
    }


    public function daftar_mahasiswa(){
        $data = Mahasiswa::all();
        return view('backend.mahasiswa.daftar', compact('data'));
    }
    public function tambah_mahasiswa(){
        return view('backend.mahasiswa.form');
    }
    public function simpan_mahasiswa(Request $request){
        Mahasiswa::create([
            'nama'=>$request->nama,
            'nim'=>$request->nim,
            'tgl'=>$request->tgl,
            'tempat_lahir'=>$request->tempat_lahir,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'agama'=>$request->agama,
            'asal_sekolah'=>$request->asal_sekolah,
            'email'=>$request->email,
            'tahun_masuk'=>$request->tahun_masuk
        ]);
        return redirect('mahasiswa/daftar');
    }
    public function detail_mahasiswa($id){
        $data=Mahasiswa::findOrFail($id);
        return view('backend.mahasiswa.detail', compact('data'));

    }
    public function edit_mahasiswa($id){
        $data=Mahasiswa::findOrFail($id);
        return view('backend.mahasiswa.edit', compact('data'));

    }
    public function update_mahasiswa($id){
        $data = Mahasiswa::findOrFail($id);
        $data->nama = Request()->nama;
        $data->nim = Request()->nim;
        $data->tgl = Request()->tgl;
        $data->tempat_lahir = Request()->tempat_lahir;
        $data->jenis_kelamin = Request()->jenis_kelamin;
        $data->agama = Request()->agama;
        $data->asal_sekolah = Request()->asal_sekolah;
        $data->email = Request()->email;
        $data->tahun_masuk = Request()->tahun_masuk;
        $data->save();
        return redirect('/mahasiswa/daftar');

    }
    public function delete_mahasiswa($id){
        $data = Mahasiswa::findOrFail($id);
        $data->delete();
        return redirect('/mahasiswa/daftar');
    }


    public function daftar_matkul(){
        $data = Matkul::all();
        return view('backend.matakuliah.daftar', compact('data'));
    }
    public function tambah_matkul(){
        return view('backend.matakuliah.tambah');
    }
    public function simpan_matkul(Request $request){
        Matkul::create([
            'nama'=>$request->nama,
            'kode'=>$request->kode,
            'bobot'=>$request->bobot
        ]);
        return redirect('/matkul/daftar');
    }
    public function edit_matkul($id){
        $data= Matkul::findOrFail($id);
        return view('backend.matakuliah.edit',compact('data'));
    }
    public function update_matkul($id){
        $data=Matkul::findOrFail($id);
        $data->nama = Request()->nama;
        $data->kode = Request()->kode;
        $data->bobot = Request()->bobot;
        $data->save();
        return redirect('/matkul/daftar');
    }
    public function delete_matkul($id){
        $data = Matkul::findOrFail($id);
        $data->delete();
        return redirect('/matkul/daftar');
    }

    public function daftar_ruangan(){
        $data = Ruangan::all();
        return view('backend.ruangan.daftar', compact('data'));
    }
    public function tambah_ruangan(){
        return view('backend.ruangan.tambah');
    }
    public function simpan_ruangan(Request $request){
        Ruangan::create([
            'nama'=>$request->nama
        ]);
        return redirect('/ruangan/daftar');
    }
    public function edit_ruangan($id){
        $data= Ruangan::findOrFail($id);
        return view('backend.ruangan.edit',compact('data'));
    }
    public function update_ruangan($id){
        $data=Ruangan::findOrFail($id);
        $data->nama = Request()->nama;
        $data->save();
        return redirect('/ruangan/daftar');
    }
    public function delete_ruangan($id){
        $data = Ruangan::findOrFail($id);
        $data->delete();
        return redirect('/ruangan/daftar');
    }




    public function daftar_jadwalkuliah(){
        return view('backend.jadwalkuliah.daftar');
    }
    public function tambah_jadwalkuliah(){
        return view('backend.jadwalkuliah.tambah');
    }
}
