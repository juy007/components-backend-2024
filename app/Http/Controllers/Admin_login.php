<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class Admin_login extends Controller
{
    public function form_login()
    {
       // return view('welcome');
        return view('admin.form_login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil
            return redirect()->intended('/dashboard');
        }
        
        // Jika autentikasi gagal
        return back()->withErrors(['email' => 'Email atau password salah']);
    }
}
