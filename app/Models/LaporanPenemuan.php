<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaporanPenemuan extends Model
{
    protected $table = 'laporan_penemuan';

    protected $fillable = [
        'nama_penemu', 'npm', 'prodi', 'lokasi_ditemukan',
        'nama_barang', 'tanggal_ditemukan', 'deskripsi_barang', 'foto_barang'
    ];

    public $timestamps = true;
}
