<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function quests()
    {
        $name = 'Quests';
        return view('main.player.quests', compact('name'));
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
}