<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Sesuaikan dengan path view kamu
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Coba login sebagai Admin
        $admin = Admin::where('email', $credentials['email'])->first();
        if ($admin && Hash::check($credentials['password'], $admin->password)) {
            // Simpan data admin ke session
            session(['admin' => $admin]);
            return redirect()->route('dashboard_admin'); // Sesuaikan dengan route admin
        }

        // Coba login sebagai User
        if (Auth::attempt($credentials)) {
            session(['user' => Auth::user()]);
            return redirect()->route('dashboard'); // Sesuaikan dengan route user
        }

        // Gagal login
        return redirect()->back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        session()->forget(['admin', 'user']);
        Auth::logout(); // Ini hanya logout Auth user
        return redirect('/')->with('success', 'Berhasil logout');
    }
}
