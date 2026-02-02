<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'test',
            'paternal_surname' => 'Test User',
            'maternal_surname' => 'Test User',
            'username' => 'Test',
            'email' => 'test@example',
            'password' => 'test123456',
        ])->assignRole('user');

        User::factory()->create([
            'name' => 'test2',
            'paternal_surname' => 'Test User 2',
            'maternal_surname' => 'Test User 2',
            'username' => 'Test 2',
            'email' => 'test2@example',
            'password' => 'test1234567',
        ])->assignRole('user');

        User::factory()->create([
            'name' => 'test3',
            'paternal_surname' => 'Test User 3',
            'maternal_surname' => 'Test User 3',
            'username' => 'Test 3',
            'email' => 'test3@example',
            'password' => 'test12345678',
        ])->assignRole('user');
    }
}
