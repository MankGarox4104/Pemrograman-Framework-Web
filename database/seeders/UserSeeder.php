<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // User Admin
        User::create([
            'name' => 'Admin MankGarox',
            'email' => 'admin@mankgarox.com',
            'password' => Hash::make('password123'), // password: password123
            'role' => 'admin',
        ]);

        // User Biasa
        User::create([
            'name' => 'User MankGarox',
            'email' => 'user@mankgarox.com',
            'password' => Hash::make('password123'), // password: password123
            'role' => 'users',
        ]);
    }
}
