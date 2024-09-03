<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => "Admin",
            'email' => "admin@gmail.com",
            'password' => Hash::make("12345678"),
        ]);

        User::factory()->create([
            'name' => "Seller",
            'email' => "seller@gmail.com",
            'password' => Hash::make("12345678"),
        ]);

        User::factory()->create([
            'name' => "User",
            'email' => "user@gmail.com",
            'password' => Hash::make("12345678"),
        ]);
    }
}
