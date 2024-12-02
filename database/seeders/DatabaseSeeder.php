<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use User\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Arthur Melo',
            'email' => 'arthur.melo@example.com',
        ]);
    }
}
