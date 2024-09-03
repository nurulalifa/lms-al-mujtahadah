<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    // use HasFactory;
    protected $table = "table_kelas";
    protected $fillable =['id_jadwal','id_dosen','id_matkul','id_rps','jenis_perkuliahan','judul','deskripsi','bahan','tanggal','waktu'];

}
