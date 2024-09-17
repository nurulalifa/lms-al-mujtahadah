<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardWeb extends Controller
{
    public function index()
    {
        $data = session('data', [
            'user_id' => session('user_id'),
            'user_name' => session('user_name'),
            'user_email' => session('user_email'),
        ]);

        return view('Web.Back.Dashboard', compact('data'));
    }
}
