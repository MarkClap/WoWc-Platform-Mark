<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function groups()
    {
        $name = 'Groups';
        return view('main.master.groups', compact('name'));
    }
}