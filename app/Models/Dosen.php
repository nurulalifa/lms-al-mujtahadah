<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    // use HasFactory;
    protected $table ='table_dosen';
    protected $fillable = ['nama','kategori','univ','nidn','foto', 'email'];

}
