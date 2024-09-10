<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen_mahasiswa extends Model
{
    // use HasFactory;
    protected $table ='table_absen_mahasiswa';
    protected $fillable=[
       'id_mahasiswa',
       'id_matkul',
       'id_jadwal',
       'id_rps',
       'absen',
       'waktu',
    ];
}
