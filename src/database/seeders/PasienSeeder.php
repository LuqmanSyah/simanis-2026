<?php

namespace Database\Seeders;

use App\Models\Pasien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pasien::firstOrCreate([
            'nama' => 'bagas',
            'alamat' => 'alamat',
            'no_telp' => '0818282828',
        ]);
    }
}
