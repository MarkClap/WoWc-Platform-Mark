<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use GuzzleHttp\Promise\Create;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'name' => 'Deep sleep',
            'description' => 'players lose 2 energy',
            'energy' => -2,
        ]);

        Event::create([
            'name' => 'Time travel',
            'description' => 'players regain 3 health',
            'health' => 2,
        ]);

        Event::create([
            'name' => 'Divine intervention',
            'description' => 'players lose 3 health',
            'health' => -3,
        ]);

        Event::create([
            'name' => 'Found the X',
            'description' => 'The player receives 100 gold.',
            'gold' => 100,
        ]);

        Event::create([
            'name' => 'Secret room',
            'description' => 'The player receives 100 EXP.',
            'experience' => 100,
        ]);

    }
}
