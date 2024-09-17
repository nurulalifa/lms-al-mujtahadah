<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function formlogin()
    {
        return view('frontend.auth.login');
    }

    public function formregister()
    {
        return view('frontend.auth.register');
    }
}
