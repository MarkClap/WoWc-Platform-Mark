<?php

namespace Database\Seeders;

use App\Models\Character;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Character::create([
            'name' => 'Chocce Marco',
            'gender'=>'M',
            'id_class' => 1,
            'id_inscription' => 1,
        ]);

        Character::create([
            'name' => 'Torres Ismael',
            'gender'=>'M',
            'time'=>'night',
            'ambience'=>'Ambience2',
            'id_class' => 1,
            'id_inscription' => 2,
        ]);

        Character::create([
            'name' => 'Rojas Cristian',
            'gender'=>'M',
            'ambience'=>'Ambience3',
            'id_class' => 1,
            'id_inscription' => 3,
        ]);

        Character::create([
            'name' => 'Jimenez Pedro',
            'gender'=>'M',
            'time'=>'night',
            'ambience'=>'Ambience4',
            'id_class' => 1,
            'id_inscription' => 4,
        ]);

        Character::create([
            'name' => 'Lopez Tomas',
            'gender'=>'M',
            'time'=>'day',
            'ambience'=>'Ambience5',
            'id_class' => 1,
            'id_inscription' => 5,
        ]);

        Character::create([
            'name' => 'Sanchez Karen',
            'gender'=>'F',
            'time'=>'night',
            'ambience'=>'Ambience1',
            'id_class' => 1,
            'id_inscription' => 6,
        ]);
    }
}
