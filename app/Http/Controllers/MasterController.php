<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{   
    public function createGroup()
    {
        return view('main.master.create-group');
    }

    public function members()
    {
        $name = 'Members';
        return view('main.master.members', compact('name'));
    }

    public function groups()
    {
        $name = 'Groups';
        return view('main.master.groups', compact('name'));
    }

    public function tasks()
    {
        $name = 'Task';
        return view('main.master.tasks', compact('name'));
    }

    public function quizzes()
    {
        $name = 'Quizzes';
        return view('main.master.quizzes', compact('name'));
    }
}