<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Matkul;
use App\Models\Ruangan;
use App\Models\Sambutan;
use App\Models\User;

use function Ramsey\Uuid\v1;

class BackendController extends Controller
{
    public function index(){
        return view('backend.index');
    }
    public function daftar_user(){
        $user = User::all();
        return view('backend.modul_master.user.daftar', compact('user'));
    }
    public function reset(){
        return view('auth.passwords.reset');
    }

    public function daftar_berita(){
        $berita = Berita::all();
        return view('backend.website.berita.berita', compact('berita'));
    }
    public function detail_berita($id){
        $berita = Berita::findOrFail($id)->first();
        return view('backend.website.berita.detail',compact('berita'));
    }
    public function edit_berita($id){
        $berita = Berita::find($id)->first();
        // dd($berita->judul);
        return view('backend.website.berita.edit',compact('berita'));
    }
    public function update_berita($id){
        $berita = Berita::findOrFail($id)->first();
        if(Request()->hasFile('gambar')){
            $gambar = Request()->gambar;
            $new_gambar = Str::random(16) . '.' . $gambar->extension();
            $gambar->move('uploads/berita/', $new_gambar);
            $berita->gambar = $new_gambar;
        }
        // Update field lainnya
        $berita->judul = Request()->judul;
        $berita->tglpublish = Request()->tglpublish;
        $berita->slug = Str::slug(Request()->judul);
        $berita->isi = Request()->isi;
        $berita->save();
        return redirect('berita/daftar');
    }
    public function tambah_berita(){
        return view('backend.website.berita.tambah');
    }
    public function simpan_berita(){
        $gambar = Request()->gambar;
        $new_gambar = Str::random(16).'.'.$gambar->extension();
        $gambar->move('uploads/berita/', $new_gambar);
        Berita::create([
            'judul' => Request()->judul,
            'slug' => Str::slug(Request()->judul),
            'tglpublish'=>Request()->tglpublish,
            // 'gambar'=>Request()->gambar,
            'gambar' => $new_gambar,
            'isi'=>Request()->isi,
        ]);
        return redirect('berita/daftar');
    }

    public function kata_sambutan(){
        $id = 1;
        $sambutan = Sambutan::findOrFail($id);

        return view('backend.website.sambutan.form',compact('sambutan'));
    }
    public function update_sambutan($id){
        $sambutan = Sambutan::findOrFail($id);
        $sambutan->isi = Request()->isi;
        $sambutan->save();
        return redirect('kata/sambutan');

    }












}
