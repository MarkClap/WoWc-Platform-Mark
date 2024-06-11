<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'test',
            'paternal_surname' => 'Test User',
            'maternal_surname' => 'Test User',
            'username' => 'Test',
            'email' => 'test@example',
            'password' => 'test123456',
        ]);
    }
}
