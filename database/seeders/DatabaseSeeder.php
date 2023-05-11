<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create([]);

        \App\Models\Event::factory(1)->create();
        \App\Models\Category::factory(8)->create();
        \App\Models\Criteria::factory(30)->create();
        \App\Models\Score::factory(30)->create();
        \App\Models\Contestant::factory(19)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}