<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    // use HasFactory;
    protected $table ='table_matkul';
    protected $fillable = ['nama','kode','bobot'];

}
