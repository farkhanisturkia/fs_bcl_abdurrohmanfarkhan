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
            'nomor'         => '001',
            'jenis'         => 'Kontainer',
            'ketersediaan'  => 'Tersedia',
            'kapasitas'     => '2000'
        ]);
        Armada::create([
            'nomor'         => '002',
            'jenis'         => 'truck',
            'ketersediaan'  => 'Tersedia',
            'kapasitas'     => '800'
        ]);
        Armada::create([
            'nomor'         => '003',
            'jenis'         => 'Pick up',
            'ketersediaan'  => 'Tersedia',
            'kapasitas'     => '300'
        ]);
    }
}
