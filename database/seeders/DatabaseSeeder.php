<?php

namespace Database\Seeders;

use App\Models\Athlete;
use App\Models\Event;
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
        Event::firstOrCreate([
            'started_at' => '2025-08-23 18:00:00',
            'title' => 'Онлайн чемпионат России 2025',
            'description' => null,
            'location' => 'Онлайн',
            'image_path' => 'images/event0.jpg',
        ]);

        Event::firstOrCreate([
            'started_at' => '2025-11-29 18:00:00',
            'title' => 'Онлайн рекорды ССА',
            'description' => null,
            'location' => 'Онлайн',
            'image_path' => 'images/event1.jpg',
        ]);

        Event::firstOrCreate([
            'started_at' => '2026-03-25 18:00:00',
            'title' => 'Онлайн рекорды ССА 2',
            'description' => null,
            'location' => 'Онлайн',
            'image_path' => 'images/event2.jpg',
        ]);


        $this->call([
            ElementSeeder::class,
            AthleteSeeder::class,
        ]);

    }
}
