<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Berita extends Model
{
    // use HasFactory;
    protected $table = 'berita';
    protected $fillable =['judul','tglpublish','gambar','isi','slug'];
    public static function getberita()
    {
        return DB::table('berita')
            ->orderby('tglpublish', 'asc')
            ->take(3)
            ->get();
    }
}
