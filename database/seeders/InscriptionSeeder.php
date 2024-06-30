<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Inscription;

class InscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Inscription::create([
            'id_user' => 1,
            'id_course' => 1,
        ]);

        Inscription::create([
            'id_user' => 2,
            'id_course' => 1,
        ]);

        Inscription::create([
            'id_user' => 3,
            'id_course' => 1,
        ]);

        Inscription::create([
            'id_user' => 4,
            'id_course' => 1,
        ]);

        Inscription::create([
            'id_user' => 5,
            'id_course' => 1,
        ]);

        Inscription::create([
            'id_user' => 6,
            'id_course' => 1,
        ]);
    }
}
