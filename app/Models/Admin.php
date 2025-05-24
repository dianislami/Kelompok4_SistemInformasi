<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Hash;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'admin'; // Nama tabel di database

    protected $fillable = [
        'nama',
        'email',
        'nip',
        'departemen',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // protected function casts(): array
    // {
    //     return [
    //         'email_verified_at' => 'datetime',
    //         'password' => 'hashed',
    //     ];
    // }

    public function insertAdminData()
    {
        // Data yang ingin dimasukkan
        $data = [
            'nama' => 'yuyun',
            'email' => 'yuyun@gmail.com',
            'nip' => '57938457700',
            'departemen' => 'Biro Kemahasiswaan',
            'password' => Hash::make('admin123'), // Password di-hash
        ];

        // $data = [
        //     'nama' => 'firah',
        //     'email' => 'firah@gmail.com',
        //     'nip' => '5659340658',
        //     'departemen' => 'Biro Kemahasiswaan',
        //     'password' => Hash::make('admin123'), // Password di-hash
        // ];

        // $data = [
        //     'nama' => 'diann',
        //     'email' => 'diann@gmail.com',
        //     'nip' => '098654538754',
        //     'departemen' => 'Biro Kemahasiswaan',
        //     'password' => Hash::make('admin123'), // Password di-hash
        // ];

        // $data = [
        //     'nama' => 'hana',
        //     'email' => 'hana@gmail.com',
        //     'nip' => '1234567890',
        //     'departemen' => 'Biro Kemahasiswaan',
        //     'password' => Hash::make('admin123'), // Password di-hash
        // ];

        // Insert data ke tabel admin
        Admin::create($data);
    }
}
