<?php

namespace Database\Seeders;

use App\Models\Teachers_Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Teacher_CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teachers_Course::create([
            'id_teacher' => 2,
            'id_course' => 1,
        ]);

        Teachers_Course::create([
            'id_teacher' => 1,
            'id_course' => 1,
        ]);

        Teachers_Course::create([
            'id_teacher' => 2,
            'id_course' => 3,
        ]);
    }
}
