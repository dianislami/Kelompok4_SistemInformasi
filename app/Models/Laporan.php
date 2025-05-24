<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $table = 'laporan'; // pastikan nama tabel di database
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'nama_barang',
        'lokasi',
        'waktu',
        'status', // contoh: 'hilang', 'ditemukan', 'selesai'
        'foto',
        'deskripsi',
    ];
}
