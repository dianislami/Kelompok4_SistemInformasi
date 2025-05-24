<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;

class AdminLaporanController extends Controller {

    public function adminLaporanMasuk()
    {
        $dataHilang = DB::table('laporan_kehilangan')->orderBy('created_at', 'desc')->get();
        $dataTemuan = DB::table('laporan_penemuan')->orderBy('created_at', 'desc')->get();
        $user = User::orderBy('created_at', 'desc')->take(5)->get();
        $totalLaporan = DB::table('laporan')->count();
        $totalUser = DB::table('user')->count();

        return view('admin.daftar_laporan', compact('dataHilang', 'dataTemuan', 'user', 'totalLaporan', 'totalUser'));
    }

    public function showLaporanDetail($id)
    {

        // Mengambil data dari laporan_kehilangan berdasarkan id dan melakukan join dengan tabel laporan
        $laporanHilang = DB::table('laporan_kehilangan')
                    ->join('laporan', 'laporan_kehilangan.kode_hilang', '=', 'laporan.kode')
                    ->where('laporan_kehilangan.id', $id)
                    ->first();

        // Jika ditemukan di laporan_kehilangan
        if ($laporanHilang) {
            return response()->json([
                'success' => true,
                'source' => 'kehilangan',
                'nama_barang' => $laporanHilang->nama_barang,
                'deskripsi_barang' => $laporanHilang->deskripsi_barang,
                'id' => $id
            ]);
        }

        // Jika tidak ditemukan di laporan_kehilangan, coba di laporan_penemuan
        $laporanTemu = DB::table('laporan_penemuan')
            ->join('laporan', 'laporan_penemuan.kode_temu', '=', 'laporan.kode')
            ->where('laporan_penemuan.id', $id)
            ->first();

        if ($laporanTemu) {
            return response()->json([
                'success' => true,
                'source' => 'penemuan',
                'nama_barang' => $laporanTemu->nama_barang,
                'deskripsi_barang' => $laporanTemu->deskripsi_barang,
                'id' => $id
            ]);
        }

        // Jika tidak ditemukan di kedua tabel
        return response()->json([
            'success' => false, 
            'message' => 'Laporan tidak ditemukan',
            'id' => $id
        ]);
    }

    public function showUsers()
    {

        try {
            $user = User::orderBy('created_at', 'desc')->take(5)->get();
            return view('admin.daftar_users', compact('user'));
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }  
    
    public function total()
    {
        try {
            $totalLaporan = DB::table('laporan')->count();
            $totalUser = DB::table('user')->count();

            return view('admin.klaim', compact('totalLaporan', 'totalUser'));
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

}

