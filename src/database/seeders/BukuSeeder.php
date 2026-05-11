<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Buku::firstOrCreate([
            'judul' => 'Buku 1',
            'pengarang' => 'Adit',
            'tahun_terbit' => 2000,
            'stok' => 100,
        ]);
    }
}
