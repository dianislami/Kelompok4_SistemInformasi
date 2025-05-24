<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{

    // Tampilkan halaman profil
    public function profil()
    {
        $user = Auth::user();

        if (session()->has('admin')) {
            $admin = session('admin');
            return view('admin.profil_admin', ['user' => $admin]);
        } else {
            return view('user.profil', compact('user'));
        }
        
    }

    
    public function update(Request $request)
    {

        if (session()->has('admin')) {
            $admin = session('admin');

            $validated = $request->validate([
                'nama' => 'required|string|max:100',
                'email' => 'required|email|unique:admin,email,' . $admin->id,
                'nip' => 'required|string|max:50|unique:admin,nip,' . $admin->id,
                'departemen' => 'required|string|max:100',
            ]);
    
            DB::table('admin')
                ->where('id', $admin->id)
                ->update($validated);

            // Update session supaya nama admin yang baru ikut tersimpan
            session(['admin' => DB::table('admin')->where('id', $admin->id)->first()]);
            
        } else {

            $user = Auth::user(); 

            // Validasi untuk user biasa (mahasiswa)
            $validated = $request->validate([
                'nama' => 'required|string|max:100',
                'npm' => 'required|string|max:20',
                'prodi' => 'required|string|max:50',
                'email' => 'required|email|unique:user,email,' . $user->id,
            ]);
        
            DB::table('user')
                ->where('id', $user->id)
                ->update($validated);

            // Update session Auth
            session(['user' => Auth::user()]);
        }

        return response()->json(['success' => true]);
    }

}








// <?php

// namespace App\Http\Controllers;

// use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

// class ProfilController extends Controller
// {

//     // Tampilkan halaman profil
//     public function profil()
//     {
//         $user = Auth::user();
//         return view('user.profil', compact('user'));// Kirim ke view profil.blade.php
        
//     }

    
//     public function update(Request $request)
//     {
//         $user = Auth::user(); // Ambil user yang sedang login

//         // Validasi input
//         $validated = $request->validate([
//             'nama' => 'required|string|max:100',
//             'npm' => 'required|string|max:20',
//             'prodi' => 'required|string|max:50',
//             'email' => 'required|email|unique:users,email,' . $user->id,
//         ]);

//         DB::table('user')
//             ->where('id', $user->id)
//             ->update($validated);

//         return response()->json(['success' => true]);
//     }

// }

