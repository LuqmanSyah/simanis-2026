<?php

namespace Database\Seeders;

use App\Models\Anggota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Anggota::firstOrCreate([
            'nama' => 'angga',
            'alamat' => 'alamat',
            'no_telepon' => '082828282'
        ]);
    }
}
