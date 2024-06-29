<?php

namespace Database\Seeders;

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
        $this->call([
            UserSeeder::class,
            InstitutionSeeder::class,
            QuizSeeder::class,
            CourseSeeder::class,
            TeacherSeeder::class,
            Teacher_CourseSeeder::class,
            EventSeeder::class,
        ]);
    }
}
