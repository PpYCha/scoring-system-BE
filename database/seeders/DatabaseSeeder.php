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

        \App\Models\User::factory()->count(1)->create(['role' => 'Admin']);
        \App\Models\User::factory()->count(3)->create(['role' => 'Tabulator']);
        \App\Models\User::factory()->count(5)->create(['role' => 'Judge', 'event_id' => '1', 'subEvent_id' => '1']);
        \App\Models\User::factory()->count(7)->create(['role' => 'Judge', 'event_id' => '1', 'subEvent_id' => '2']);

        // \App\Models\User::factory(2)->create([]);

        // \App\Models\Event::factory(1)->create();
        // \App\Models\Category::factory(3)->create();
        // \App\Models\Criteria::factory(3)->create();
        // \App\Models\Score::factory(19)->create();
        // \App\Models\Contestant::factory(19)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
