<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\berita;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        $berita = berita::getberita();
        return view('Web.Home', compact('berita'));
        
    }
}
