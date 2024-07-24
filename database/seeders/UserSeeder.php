<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => Hash::make(env('ADMIN_PASSWORD', 'admin@123')),
        ]);

        User::create([
            'name' => 'User User',
            'email' => 'user@gmail.com',
            'role' => 'user',
            'password' => Hash::make(env('USER_PASSWORD', 'user@123')),
        ]);
    }
}
