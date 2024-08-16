<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function formlogin(){
        return view('frontend.auth.login');
    }

    public function formregister(){
        return view('frontend.auth.register');
    }
}
