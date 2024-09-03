<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aktifitas extends Model
{
    protected $table='table_aktifitas';
    protected $fillable=[
            'id_jadwal',
            'id_matkul',
            'id_rps',
            'id_pengguna',
            'id_kelas',
            'pesan',
    ];
}
