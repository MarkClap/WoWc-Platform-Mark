<?php

namespace Database\Seeders;
use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'name' => 'Database',
            'description' => 'description database',
        ]);

        Course::create([
            'name' => 'Big Data',
            'description' => 'description big data',
        ]);

        Course::create([
            'name' => 'Math',
            'description' => 'description math',
        ]);
    }
}
