<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Tampilkan Form Login Admin
    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect('/tasty-secret-admin');
        }
        return view('admin.login');
    }

    // Proses Autentikasi Login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/tasty-secret-admin');
        }

        return back()->with('error', 'Email atau Password salah!');
    }

    // Proses Logout (Dijalankan saat user menekan "Ya, Logout" di modal)
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/tasty-secret-admin/login')->with('sukses', 'Anda telah berhasil logout.');
    }
}