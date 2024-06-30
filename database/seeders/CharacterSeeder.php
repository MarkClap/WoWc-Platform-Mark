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
            'name' => 'TestCharacter',
            'appearance' => 'intruduce_appearance',
            'gender'=>'F',
            'id_class' => 1,
            'id_inscription' => 1,
        ]);
    }
}
