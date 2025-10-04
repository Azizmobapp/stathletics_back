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
        Athlete::create([
            'first_name' => 'Игнат',
            'second_name' => 'Волков',
            'third_name' => null,
            'img_path' => null,
            'gold' => 4,
            'silver' => 3,
            'bronze' => 0,
            'rate' => 15,
            'city' => 'Белгород',
            'country' => null,
        ]);

        Athlete::create([
            'first_name' => 'Данил',
            'second_name' => 'Слетин',
            'third_name' => null,
            'img_path' => null,
            'gold' => 2,
            'silver' => 2,
            'bronze' => 1,
            'rate' => 11,
            'city' => 'Белгород',
            'country' => null,
        ]);

        Event::create([
            'started_at' => '2025-08-23 18:00:00',
            'title' => 'Онлайн чемпионат России 2025',
            'description' => null,
            'location' => 'Онлайн',
            'image_path' => 'images/event0.jpg',
        ]);

        Event::create([
            'started_at' => '2025-11-29 18:00:00',
            'title' => 'Онлайн рекорды ССА',
            'description' => null,
            'location' => 'Онлайн',
            'image_path' => 'images/event1.jpg',
        ]);

        Event::create([
            'started_at' => '2026-03-25 18:00:00',
            'title' => 'Онлайн рекорды ССА 2',
            'description' => null,
            'location' => 'Онлайн',
            'image_path' => 'images/event2.jpg',
        ]);

    }
}
