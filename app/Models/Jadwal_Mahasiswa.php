<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal_Mahasiswa extends Model
{
    // use HasFactory;
    protected $table ='table_jadwal_mahasiswa';
    protected $fillable = ['id_jadwal','id_mahasiswa'];
}
