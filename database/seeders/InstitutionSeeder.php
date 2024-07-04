<?php

namespace Database\Seeders;

use App\Models\Institution;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserInstitutionCreator
{
    public function createUserAndInstitution($userData, $institutionData)
    {
        $user = User::factory()->create($userData);
        $user->assignRole('institution');

        $institutionData['id_user'] = $user->id;
        Institution::create($institutionData);
    }
}
class InstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $creator = new UserInstitutionCreator();

        $creator->createUserAndInstitution([
            'name' => 'Pedro',
            'paternal_surname' => "Flores",
            'maternal_surname' => "Pantoja",
            'username' => 'Pedro Flores',
            'email' => 'pflores@tecsup.edu.pe',
            'password' => bcrypt('Tecsup2024'),
        ], [
            'name' => 'TECSUP',
            'email' => 'tecsup@tecsup.edu.pe',
            'phone_number' => 98441136,
        ]);

        $creator->createUserAndInstitution([
            'name' => 'Roberto Carlo',
            'paternal_surname' => 'Molina',
            'maternal_surname' => 'Mimata',
            'username' => 'Roberto Molina',
            'email' => 'rmolina@utec.edu.pe',
            'password' => bcrypt('Utec2024'),
        ], [
            'name' => 'UTEC',
            'email' => 'utec@utec.edu.pe',
            'phone_number' => 98441136,
        ]);

        $creator->createUserAndInstitution([
            'name' => 'Paulo Benedictino',
            'paternal_surname' => 'Melendez',
            'maternal_surname' => 'Corrales',
            'username' => 'paulin_lin_lan',
            'email' => 'paulo.melendez@senati.edu.pe',
            'password' => bcrypt('Senati2024'),
        ], [
            'name' => 'SENATI',
            'email' => 'senati@senati.edu.pe',
            'phone_number' => 98441136,
        ]);
    }
}
