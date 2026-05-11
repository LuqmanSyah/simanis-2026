<?php

namespace Database\Seeders;

use App\Models\Pendaftaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pendaftaran::firstOrCreate([
            'pasien_id' => 1,
            'dokter_id' => 1,
            'tgl_daftar' => now(),
            'keluhan' => 'kaki sakit',
        ]);
    }
}
