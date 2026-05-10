<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sadmin = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            ['name' => 'Super Admin', 'password' => Hash::make('password')]
        );
        $sadmin->assignRole('super_admin');

        $akademik = User::firstOrCreate(
            ['email' => 'akademik@admin.com'],
            ['name' => 'Akademik Account', 'password' => Hash::make('password')]
        );
        $akademik->assignRole('akademik');

        $guru = User::firstOrCreate(
            ['email' => 'guru@admin.com'],
            ['name' => 'Guru Account', 'password' => Hash::make('password')]
        );
        $guru->assignRole('guru');

        $siswa = User::firstOrCreate(
            ['email' => 'siswa@admin.com'],
            ['name' => 'Siswa Account', 'password' => Hash::make('password')]
        );
        $siswa->assignRole('siswa');

        $orangTua = User::firstOrCreate(
            ['email' => 'orangTua@admin.com'],
            ['name' => 'Orang Tua Account', 'password' => Hash::make('password')]
        );
        $orangTua->assignRole('orang_tua');
    }
}
