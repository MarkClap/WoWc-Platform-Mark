<?php

namespace App\Http\Controllers;

use App\Models\Quizzes_History;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Character;
use App\Models\Characters_quiz;
use App\Models\Inscription;

class PlayerController extends Controller
{

    public function createCharacter()
    {
        
        return view('main.player.create-character');
    }

    public function character(string $token)
    {
        $name = 'Character';
        $allhistory = Quizzes_History::all();
        return view('main.player.character', compact('name', 'allhistory','token'));
    }

    public function tasks(string $token)
    {
        $name = 'Tasks';
        $allhistory = Quizzes_History::all();
        return view('main.player.tasks', compact('name', 'allhistory','token'));
    }

    public function quizzes(string $token)
    {
        $name = 'Quizzes';
        $allhistory = Quizzes_History::all();
        return view('main.player.quizzes', compact('name', 'allhistory','token'));
    }

    public function groups(string $token)
    {
        $name = 'Groups';
        $allhistory = Quizzes_History::all();
        return view('main.player.groups', compact('name', 'allhistory','token'));
    }

    public function members(string $token)
    {
        $name = 'Members';
        $allhistory = Quizzes_History::all();
        return view('main.player.members', compact('name', 'allhistory','token'));
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

    public function get_history(string $token)
    {
        $allhistory = Quizzes_History::all();

        return view('layouts\main\player', compact('allhistory','token'));
    }
    public function quizzes_start(string $token){

        $name = 'Quizzes_start';
        $i = 1;
        $quizzes = Quiz::inRandomOrder()->take(10)->get();
        
        return view('main.player.quizz-start', compact('name','token','quizzes','i'));
    }

    public function score(string $token) {

        $name = 'Quizzes_score';
        
        return view('main.player.quizz-start', compact('name','token','quizzes','i'));
    }

}
