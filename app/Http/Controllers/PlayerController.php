<?php

namespace App\Http\Controllers;
use App\Models\Quizzes_History;
use Illuminate\Console\View\Components\Component;
use Livewire\Attributes\Layout;

class PlayerController extends Controller
{   

    
    public function createCharacter()
    {
        return view('main.player.create-character');
    }

    public function character()
    {
        $name = 'Character';
        $allhistory=Quizzes_History::all();
        return view('main.player.character', compact('name', 'allhistory'));
    }

    public function tasks()
    {
        $name = 'Tasks';
        $allhistory=Quizzes_History::all();
        return view('main.player.tasks', compact('name', 'allhistory'));
    }

    public function quizzes()
    {
        $name = 'Quizzes';
        $allhistory=Quizzes_History::all();
        return view('main.player.quizzes', compact('name', 'allhistory'));
    }

    public function groups()
    {
        $name = 'Groups';
        $allhistory=Quizzes_History::all();
        return view('main.player.groups', compact('name', 'allhistory'));
    }

    public function members()
    {
        $name = 'Members';
        $allhistory=Quizzes_History::all();
        return view('main.player.members', compact('name','allhistory'));
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

    public function get_history(){
        $allhistory=Quizzes_History::all();

        return view('layouts\main\player', compact('allhistory'));
    }
}
