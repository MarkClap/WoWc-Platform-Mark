<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $institution = User::factory()->create([
            'name' => 'Tecsup',
            'username' => 'TECSUP',
            'email' => 'tecsup@tecsup.edu.pe',
            'password' => 'Tecsup2024',
            'institution' => true,
        ]);

        $institution->assignRole('admin');
    }
}
