<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function authenticate (Request $request){
            
        $credentials = $request->validate([
            'email' => 'required | email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/list');
        }

        return back()->with('LoginError', 'Login Gagal, Periksa Kembali Akun Anda ');
    }
}
