<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Jalankan seeder untuk tabel admin.
     */
    public function run(): void
    {
        Admin::create([
            'nama_admin' => 'Super Admin',
            'username' => 'admin1',
            'password' => Hash::make('123456'),
            'tanggal_bergabung' => now(),
        ]);
        Admin::create([
            'nama_admin' => 'Superadmin1',
            'username' => 'admin01',
            'password' => Hash::make('admin123'),
            'tanggal_bergabung' => now(),
        ]);
    }
}
