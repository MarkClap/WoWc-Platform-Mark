<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Institution;
use Illuminate\Support\Facades\Validator;

class RegisterInstitution extends Controller
{
    public function showRegistrationForm()
    {
        return view('layouts.register.register-institutions');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required',
            'email' => 'required|string|email|max:255|unique:institutions',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $institution = Institution::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        auth()->login($institution);

        return redirect()->intended('/board-profesor');
    }
}
