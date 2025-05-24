<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaporanKehilangan extends Model
{
    protected $table = 'laporan_kehilangan';

    protected $fillable = [
        'nama_pelapor', 'npm', 'prodi', 'kontak',
        'nama_barang', 'tanggal_hilang', 'deskripsi_barang', 'foto_barang'
    ];

    public $timestamps = true;
}
