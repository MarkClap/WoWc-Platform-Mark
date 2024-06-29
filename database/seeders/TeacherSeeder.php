<?php

namespace Database\Seeders;
use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::create([
            'id_user' => 1,
            'id_institution' => 2,
        ]);

        Teacher::create([
            'id_user' => 2,
            'id_institution' => 2,
        ]);

        Teacher::create([
            'id_user' => 2,
            'id_institution' => 1,
        ]);
    }
}
