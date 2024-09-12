<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class ChangePasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showChangePasswordForm()
    {
        $email = Auth::user()->role;
        if($email == 'dosen'){
        return view('auth.passwords.reset_dosen');
        }
        elseif($email=='mahasiswa'){
            return view('auth.passwords.reset_mahasiswa');

        }
        return view('auth.passwords.reset');
    }

    public function updatePassword_dosen(Request $request): RedirectResponse
    {
        // Validate the new password length...
        $email = Auth::user()->role;

        $request->user()->fill([
            'password' => Hash::make($request->password)
        ])->save();

        return redirect('/dosen/matkul');
    }
    public function updatePassword_mahasiswa(Request $request): RedirectResponse
    {
        // Validate the new password length...
        $email = Auth::user()->role;

        $request->user()->fill([
            'password' => Hash::make($request->password)
        ])->save();

        return redirect('/mahasiswa/dashboard');
    }
    public function updatePassword(Request $request): RedirectResponse
    {
        // Validate the new password length...
        $email = Auth::user()->role;

        $request->user()->fill([
            'password' => Hash::make($request->password)
        ])->save();

        return redirect('/dashboard');
    }
}
