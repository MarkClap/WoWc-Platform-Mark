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
        ]);

        User::factory()->create([
            'name' => 'test2',
            'paternal_surname' => 'Test User 2',
            'maternal_surname' => 'Test User 2',
            'username' => 'Test 2',
            'email' => 'test2@example',
            'password' => 'test1234567',
        ]);

        User::factory()->create([
            'name' => 'test3',
            'paternal_surname' => 'Test User 3',
            'maternal_surname' => 'Test User 3',
            'username' => 'Test 3',
            'email' => 'test3@example',
            'password' => 'test12345678',
        ]);

        User::factory()->create([
            'name' => 'test4',
            'paternal_surname' => 'Test User 4',
            'maternal_surname' => 'Test User 4',
            'username' => 'Test 4',
            'email' => 'test4@example',
            'password' => 'test123456789',
        ]);

        User::factory()->create([
            'name' => 'test5',
            'paternal_surname' => 'Test User 5',
            'maternal_surname' => 'Test User 5',
            'username' => 'Test 5',
            'email' => 'test5@example',
            'password' => 'test1234567890',
        ]);

        User::factory()->create([
            'name' => 'test6',
            'paternal_surname' => 'Test User 6',
            'maternal_surname' => 'Test User 6',
            'username' => 'Test 6',
            'email' => 'test6@example',
            'password' => 'test12345678901',
        ]);

        $institution1 = User::factory()->create([
            'name' => 'Pedro',
            'username' => 'Pedro',
            'email' => 'pedro.flores@tecsup.edu.pe',
            'password' => bcrypt('Tecsup2024'),
            'role' => 'institution',
        ]);

        $institution2 = User::factory()->create([
            'name' => 'Jaime',
            'username' => 'Jaime',
            'email' => 'jaime.gomez@tecsup.edu.pe',
            'password' => bcrypt('Tecsup2024'),
            'role' => 'institution',
        ]);

        $institution1->assignRole('institution');

        $institution2->assignRole('institution');
    }
}
