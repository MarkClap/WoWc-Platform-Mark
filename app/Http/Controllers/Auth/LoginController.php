<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('web')->attempt($credentials)) {

            $user = Auth::guard('web')->user()->id;

            $role = Role::where('model_id', $user)->where('model_type', 'App\Models\User')->first();

            if ($role->role_id === 2) {
                return redirect()->intended('/dashboard');
            } else if ($role->role_id === 1) {
                return redirect()->intended('/institution');
            } else {
                return back()->withErrors([
                    'email' => 'The provided credentials do not match our records.',
                ]);
            }

        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        if (Auth::guard('web')->check()) {
            Auth::guard('web')->logout();
        }

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
