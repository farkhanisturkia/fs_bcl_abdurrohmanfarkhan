<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'name'      => 'valent',
            'email'     => 'valent@gmail.com',
            'role'      => 'lapangan',
            'password'  => Hash::make('password')
        ]);
        User::create([
            'name'      => 'zalfa',
            'email'     => 'zalfa@gmail.com',
            'role'      => 'kantor',
            'password'  => Hash::make('password')
        ]);
    }
}
