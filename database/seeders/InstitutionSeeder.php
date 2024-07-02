<?php

namespace Database\Seeders;

use App\Models\Institution;
use App\Models\User;
use Illuminate\Database\Seeder;

class InstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Institution::create([
            'id_user' => 6,
            'name' => 'TECSUP',
            'email' => 'tecsup@tecsup.edu.pe',
            'phone_number' => 98441136,
        ]);

        Institution::create([
            'id_user' => 7,
            'name' => 'UTEC',
            'email' => 'utec@utec.edu.pe',
            'phone_number' => 98441136,
        ]);
    }

}
