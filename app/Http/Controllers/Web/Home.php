<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\berita;
use App\Models\Sambutan;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {

        $sambutan = Sambutan::findOrFail(1);
        $berita = berita::getberita();
        return view('Web.Home', compact('berita','sambutan'));

    }
}
