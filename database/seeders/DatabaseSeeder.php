<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Device;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::factory()->create([
        //     "name" => "Hazel Grace Kasenda",
        //     "email" => "hazelgrace@gmail.com",
        //     "password" => Hash::make("password")
        // ]);
        // Device::create([
        //     'name' => 'Iphone 15',
        //     'type' => 'smartphone',
        //     'manufacturer' => 'Apple Inc.',
        //     'description' => fake()->paragraph(3)
        // ]);

    }
}
