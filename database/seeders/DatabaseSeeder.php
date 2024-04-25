<?php

namespace Database\Seeders;

use App\Models\listing;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'role' => 'admin'
        ]);
        User::factory()->create([
            'name' => 'Customer1',
            'email' => 'user1@mail.com',
            'role' => 'customer'
        ]);

        $listings = listing::factory(10)->create();
    }
}