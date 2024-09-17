<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class Login extends Controller
{
    public function index()
    {
        return view('Web.Login');
    }
    public function proseslogin(Request $request)
    {
        $datalogin = $request->validate([
            'email' => 'required|email',
            'password' => 'required',

        ]);
        $user = User::where('email', $datalogin['email'])->first();
        if ($user && Hash::check($datalogin['password'], $user->password)) {
            return redirect()->route('Web.DashboardWeb')->with('data', [
                'user_id' => $user->id_user,
                'user_name' => $user->email,
                'pwd' => $user->password,
            ]);
        } else {

            return redirect()->route('Web.Login')->withErrors([
                'login_error' => 'Email atau password tidak sesuai'
            ]);
        }
    }
}
