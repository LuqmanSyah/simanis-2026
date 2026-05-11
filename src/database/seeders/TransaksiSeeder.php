<?php

namespace Database\Seeders;

use App\Models\Transaksi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaksi::firstOrCreate([
            'produk_id' => 1, // Pastikan ID produk yang sesuai
            'pelanggan_id' => 1, // Pastikan ID pelanggan yang sesuai
            'jumlah' => 2,
            'total_harga' => 20000.00,
            'tgl_transaksi' => now(),
        ]);
    }
}
