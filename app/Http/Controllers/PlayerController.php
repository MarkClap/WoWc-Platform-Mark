<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function createCharacter()
    {
        return view('main.player.create-character');
    }

    public function player()
    {
        return view('main.player.character');
    }

    public function groups()
    {
        return view('main.player.groups');
    }

    public function members()
    {
        return view('main.player.members');
    }

    public function quests()
    {
        return view('main.player.quests');
    }
}