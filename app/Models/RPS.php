<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RPS extends Model
{
    // use HasFactory;
    protected $table='table_rps';
    protected $fillable=[
            'id_jadwal',
            'id_matkul',
            'id_dosen',
            'pertemuan',
            'kemampuan',
            'pengalaman',
            'bahan',
            'metode',
            'waktu',
            'kriteria',
            'bobot',
            'jenis_ujian',
    ];
    
}
