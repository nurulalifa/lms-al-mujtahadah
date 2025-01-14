<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    // use HasFactory;
    protected $table = 'table_mahasiswa';
    protected $fillable =['nama','tgl','tempat_lahir','jenis_kelamin','agama','nim','asal_sekolah','email','tahun_masuk','prodi'];
}
