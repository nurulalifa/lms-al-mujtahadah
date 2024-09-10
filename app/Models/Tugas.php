<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    // use HasFactory;
    protected $table="table_tugas";
    protected $fillable = [
            'id_jadwal','id_matkul','id_rps','id_mahasiswa','id_kelas','file','link'];
    }
