<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
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
       
        if (Auth::guard('admin')->attempt($credentials, $request->filled('remember'))) {
          
            if (auth()->guard('admin')->user()->role == 'superadmin') {
                return redirect()->route('admin.dashboard');
            } elseif (auth()->guard('admin')->user()->role == 'admin') {
                return redirect()->route('admin1.dashboard');
            } elseif (auth()->guard('admin')->user()->role == 'cs') {
                return redirect()->route('cs.dashboard');
            }

        }
        
        // Jika autentikasi gagal
        return back()->withErrors(['notif_login' => 'Email atau password salah']);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return redirect('/');
    }
}
