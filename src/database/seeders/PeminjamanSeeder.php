<?php

namespace Database\Seeders;

use App\Models\Peminjaman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Peminjaman::firstOrCreate([
            'buku_id' => 1,
            'anggota_id' => 1,
            'tanggal_pinjam' => now(),
            'tanggal_kembali' => null,
            'status' => 'dipinjam',
        ]);
    }
}
