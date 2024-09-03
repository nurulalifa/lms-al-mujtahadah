<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    // use HasFactory;
   protected $table ='table_absen';
   protected $fillable=[
        'id_matkul',
        'id_jadwal',
        'id_rps',
        'id_dosen',
        'tanggal_m',
        'tanggal_s',
        'jam_m',
        'jam_s',
   ];
}
