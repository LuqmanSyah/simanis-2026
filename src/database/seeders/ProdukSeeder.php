<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::firstOrCreate([
            'nama_produk' => 'Contoh Produk',
            'harga' => 10000.00,
            'stok' => 50,
            'deskripsi' => 'Deskripsi contoh produk',
        ]);
    }
}
