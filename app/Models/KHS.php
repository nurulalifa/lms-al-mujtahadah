<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KHS extends Model
{
    use HasFactory;

    protected $table = 'table_khs'; // Nama tabel KHS

    protected $fillable = [
        'id_mahasiswa', 'id_matkul', 'id_dosen', 'id_jadwal', 'nilai_akhir', 'semester', 'sks'
    ];

    // Relasi dengan model Matkul
    public function matkul()
    {
        return $this->belongsTo(Matkul::class, 'id_matkul');
    }

    // Relasi dengan model Dosen
    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'id_dosen');
    }

    // Relasi dengan model Jadwal
    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'id_jadwal');
    }
}
