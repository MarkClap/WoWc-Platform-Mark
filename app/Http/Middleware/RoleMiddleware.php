<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;
use App\Models\Institution;
use App\Models\Teacher;

class RoleMiddleware
{
    public function handle($request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user()->id;
        $teacher = Teacher::all()->where('id_user', $user); 
        foreach ($roles as $role) {

            if (Auth::user()->hasRole($role)) {
                if ($role === 'institution') {
                    return $next($request);
                }
            }

            if ($teacher->isNotEmpty()) {
                if ($role === 'master') {
                    return $next($request);
                }
            } else {
                if ($role === 'player') {
                    return $next($request);
                }
            }

            if (Auth::user()->hasRole($role)) {
                if ($role === 'user') {
                    return $next($request);
                }
            }
        }

        // Si el usuario no tiene ninguno de los roles especificados, retornar 403 (prohibido)
        abort(403, 'Unauthorized action.');
    }
}