<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pelanggan::firstOrCreate([
            'nama' => 'Contoh Pelanggan',
            'alamat' => 'Jl. Contoh Alamat No. 123',
            'no_hp' => '081234567890',
            'email' => 'contoh@example.com'
        ]);
    }
}
