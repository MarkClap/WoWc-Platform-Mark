<?php

namespace App\Http\Controllers;

class PlayerController extends Controller
{
    public function createCharacter()
    {
        return view('main.player.create-character');
    }

    public function character()
    {
        $name = 'Character';
        return view('main.player.character', compact('name'));
    }

    public function tasks()
    {
        $name = 'Tasks';
        return view('main.player.tasks', compact('name'));
    }

    public function quizzes()
    {
        $name = 'Quizzes';
        return view('main.player.quizzes', compact('name'));
    }

    public function groups()
    {
        $name = 'Groups';
        return view('main.player.groups', compact('name'));
    }

    public function members()
    {
        $name = 'Members';
        return view('main.player.members', compact('name'));
    }

    public function get_character_sheet($id)
    {
        $character = \App\Models\Character::find($id);
        if (!$character) {
            return response()->json(['error' => 'Character not found'], 404);
        }

        $appearance = $character->appearance;

        return response()->json(['appearance' => $appearance]);
    }

    public function get_ambience($id)
    {
        $character = \App\Models\Character::find($id);
        if (!$character) {
            return response()->json(['error' => 'Character not found'], 404);
        }

        $time = $character->time;
        $ambience = $character->ambience;

        return response()->json(['time' => $time, 'ambience' => $ambience]);
    }
}
