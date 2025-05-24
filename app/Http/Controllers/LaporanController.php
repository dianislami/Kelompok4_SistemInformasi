<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use App\Models\LaporanKehilangan;
use App\Models\LaporanPenemuan;

class LaporanController extends Controller
{
    public function storeKehilangan(Request $request)
    {
        try {
            $request->validate([
                'nama' => 'required|string|max:100',
                'npm' => 'required|string|max:20',
                'prodi' => 'required|string|max:100',
                'email' => 'required|string|max:100',
                'barang' => 'required|string|max:100',
                'tanggal' => 'required|date',
                'deskripsi' => 'required|string',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $fotoPath = null;
            if ($request->hasFile('foto')) {
                $fotoPath = $request->file('foto')->store('foto_kehilangan', 'public');
            }

            // Generate kode_hilang otomatis
            $last = DB::table('laporan_kehilangan')
                ->where('kode_hilang', 'LIKE', 'LS%')
                ->orderByDesc('id')
                ->value('kode_hilang');

            $lastNumber = $last ? intval(substr($last, 2)) : 12; // LS12 berarti mulai dari LS13
            $newKode = 'LS' . ($lastNumber + 1);

            $inserted = DB::table('laporan_kehilangan')->insert([
                'nama_pelapor'     => $request->nama,
                'npm'              => $request->npm,
                'prodi'            => $request->prodi,
                'kontak'           => $request->email,
                'nama_barang'      => $request->barang,
                'tanggal_hilang'   => $request->tanggal,
                'deskripsi_barang' => $request->deskripsi,
                'foto_barang'      => $fotoPath,
                'kode_hilang'      => $newKode,
                'created_at'       => now(),
            ]);

            if ($inserted) {
                return response()->json(['success' => true, 'message' => 'Data berhasil disimpan']);
            } else {
                return response()->json(['success' => false, 'message' => 'Gagal menyimpan data']);
            }

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false, 
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            // Log error untuk debugging
            Log::error('Error storing kehilangan: ' . $e->getMessage());
            return response()->json([
                'success' => false, 
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ], 500);
        }
    }

    public function storePenemuan(Request $request)
    {
        try {
            $request->validate([
                'penemu' => 'required|string|max:100',
                'npm_penemu' => 'required|string|max:20',
                'prodi_penemu' => 'required|string|max:100',
                'lokasi' => 'required|string|max:150',
                'telepon_penemu' => 'required|string|max:20',
                'barang_ditemukan' => 'required|string|max:100',
                'tanggal_ditemukan' => 'required|date',
                'deskripsi_penemuan' => 'required|string',
                'foto_penemuan' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $fotoPath = null;
            if ($request->hasFile('foto_penemuan')) {
                $fotoPath = $request->file('foto_penemuan')->store('foto_penemuan', 'public');
            }

            // Ambil nomor terakhir dari kode_temu
            $last = DB::table('laporan_penemuan')
                ->where('kode_temu', 'LIKE', 'TM%')
                ->orderByDesc('id')
                ->value('kode_temu');

            $lastNumber = $last ? intval(substr($last, 2)) : 10; // mulai dari TM11
            $newKode = 'TM' . ($lastNumber + 1);

            $inserted = DB::table('laporan_penemuan')->insert([
                'nama_penemu'        => $request->penemu,
                'npm'                => $request->npm_penemu,
                'prodi'              => $request->prodi_penemu,
                'lokasi_ditemukan'   => $request->lokasi,
                'phone'              => $request->telepon_penemu,
                'nama_barang'        => $request->barang_ditemukan,
                'tanggal_ditemukan'  => $request->tanggal_ditemukan,
                'deskripsi_barang'   => $request->deskripsi_penemuan,
                'foto_barang'        => $fotoPath,
                'kode_temu'          => $newKode,
                'created_at'         => now(),
            ]);

            if ($inserted) {
                return response()->json(['success' => true, 'message' => 'Data berhasil disimpan']);
            } else {
                return response()->json(['success' => false, 'message' => 'Gagal menyimpan data']);
            }

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false, 
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            // Log error untuk debugging
            Log::error('Error storing penemuan: ' . $e->getMessage());
            return response()->json([
                'success' => false, 
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ], 500);
        }
    }

    public function showKehilangan()
    {
        $dataHilang = DB::table('laporan_kehilangan')->orderBy('created_at', 'desc')->get();
        return view('user.lost', compact('dataHilang'));
    }

    public function showPenemuan()
    {
        $dataTemuan = DB::table('laporan_penemuan')->orderBy('created_at', 'desc')->get();
        return view('user.found', compact('dataTemuan'));
    }
}
