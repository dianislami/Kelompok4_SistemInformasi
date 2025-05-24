<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Laporan;

class DashboardController extends Controller
{

    public function index()
    {
        $laporans = DB::table('laporan')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        $items = [];

        foreach ($laporans as $laporan) {
            $kode = $laporan->kode;

            // Cek di laporan_penemuan
            $temuan = DB::table('laporan_penemuan')->where('kode_temu', $kode)->first();
            if ($temuan) {
                $items[] = [
                    'status' => 'ditemukan',
                    'foto' => $temuan->foto_barang,
                    'nama_barang' => $temuan->nama_barang,
                    'lokasi' => $temuan->lokasi_ditemukan,
                    'tanggal' => $temuan->tanggal_ditemukan,
                    'created_at' => $laporan->created_at,
                ];
                continue;
            }

            // Cek di laporan_kehilangan
            $hilang = DB::table('laporan_kehilangan')->where('kode_hilang', $kode)->first();
            if ($hilang) {
                $items[] = [
                    'status' => 'hilang',
                    'foto' => $hilang->foto_barang,
                    'nama_barang' => $hilang->nama_barang,
                    'lokasi' => 'Tidak diketahui', // jika lokasi tidak disimpan
                    'tanggal' => $hilang->tanggal_hilang,
                    'created_at' => $laporan->created_at,
                ];
            }
        }

        return view('dashboard.index', compact('items'));
    }

}


