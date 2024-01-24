<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Armada;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name'      => 'farkhan',
            'email'     => 'farkhan@gmail.com',
            'role'      => 'lapangan',
            'password'  => Hash::make('password')
        ]);
        User::create([
            'name'      => 'zalfa',
            'email'     => 'zalfa@gmail.com',
            'role'      => 'kantor',
            'password'  => Hash::make('password')
        ]);
        User::create([
            'name'      => 'valent',
            'email'     => 'valent@gmail.com',
            'role'      => 'client',
            'password'  => Hash::make('password')
        ]);

        Armada::create([
            'nomor'         => '1-1',
            'jenis'         => 'Darat',
            'ketersediaan'  => 'Tersedia',
            'kapasitas'     => '300'
        ]);
        Armada::create([
            'nomor'         => '1-2',
            'jenis'         => 'Darat',
            'ketersediaan'  => 'Tersedia',
            'kapasitas'     => '320'
        ]);
        Armada::create([
            'nomor'         => '1-3',
            'jenis'         => 'Darat',
            'ketersediaan'  => 'Tersedia',
            'kapasitas'     => '120'
        ]);
        Armada::create([
            'nomor'         => '2-1',
            'jenis'         => 'Udara',
            'ketersediaan'  => 'Tersedia',
            'kapasitas'     => '800'
        ]);
        Armada::create([
            'nomor'         => '2-2',
            'jenis'         => 'Udara',
            'ketersediaan'  => 'Tersedia',
            'kapasitas'     => '750'
        ]);
        Armada::create([
            'nomor'         => '3-1',
            'jenis'         => 'Laut',
            'ketersediaan'  => 'Tersedia',
            'kapasitas'     => '2000'
        ]);
        Armada::create([
            'nomor'         => '3-2',
            'jenis'         => 'Laut',
            'ketersediaan'  => 'Tersedia',
            'kapasitas'     => '3000'
        ]);
    }
}
