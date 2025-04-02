<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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


    public function registrasi() {
        return view('auth.register');
    }

    public function createUser(Request $request) {
        $credentials = $request->validate([
            'nama' => 'required',
            'email' => 'required | email',
            'password' => 'required'
        ]);
        $user = new User();
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        
        return redirect('/login')->with('SuccessRegister', 'Akun Berhasil Didaftarkan');
    }

    public function logout () {
        Auth::logout();
        
        return redirect('/')->with('LogoutSuccess', 'Logout Berhasil');
    }
}