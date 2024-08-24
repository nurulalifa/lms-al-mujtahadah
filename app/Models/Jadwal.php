<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    // use HasFactory;
    protected $table = "table_jadwal";
    protected $fillable =['id_matkul','jam_m','jam_k','id_dosen',];
}

