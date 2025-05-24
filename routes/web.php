<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AdminLaporanController;

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/profil', [ProfilController::class, 'profil']);
Route::get('/profil_admin', [ProfilController::class, 'profil']);
Route::put('/profil/update', [ProfilController::class, 'update'])->name('profil.update');

Route::post('/laporan-kehilangan', [LaporanController::class, 'storeKehilangan']);
Route::post('/laporan-penemuan', [LaporanController::class, 'storePenemuan']);

Route::get('/lost', [LaporanController::class, 'showKehilangan']);
Route::get('/found', [LaporanController::class, 'showPenemuan']);

Route::get('/', function () {
    return view('landing-page');
})->name('landing-page');

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->name('dashboard');

Route::get('/report', function () {
    return view('user.report');
});



// use App\Models\Admin;

// Route::get('/insert-admin', function () {
//     $admin = new Admin();
//     $admin->insertAdminData(); // Menjalankan fungsi insertAdminData
//     return 'Admin data inserted successfully';
// });


Route::get('daftar_laporan', [AdminLaporanController::class, 'adminLaporanMasuk'])->name('admin.daftar_laporan');
Route::get('/laporan/detail/{id}', [AdminLaporanController::class, 'showLaporanDetail']);
Route::get('/daftar_users', [AdminLaporanController::class, 'showUsers'])->name('admin.daftar_users');
Route::get('/total', [AdminLaporanController::class, 'total'])->name('admin.klaim');

Route::get('/layout_admin', function () {
    return view('admin.layout_admin');
});
Route::get('/dashboard_admin', function () {
    return view('admin.dashboard_admin');
})->name('dashboard_admin');

Route::get('/daftar_klaim', function () {
    return view('admin.daftar_klaim');
});

