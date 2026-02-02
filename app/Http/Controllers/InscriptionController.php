<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Inscription;
use App\Models\Invitation;
use App\Models\Character;

class InscriptionController extends Controller
{
    public function validation(Request $request)
    {
        $request->validate([
            'code' => 'required|string',
            'id_course' => 'nullable|integer',
            'id_user' => 'nullable|integer', // Made nullable as we can get it from Auth
            'token' => 'nullable|string',
        ]);

        $user_id = $request->id_user ?? Auth::id();

        // Find the invitation by code globally since it's unique
        $invitation = Invitation::where('code', $request->code)
            ->where('used', false)
            ->first();

        // If specific course ID was provided, ensure it matches (extra security/validation)
        if ($invitation && $request->id_course && $invitation->id_course != $request->id_course) {
             return redirect()->route('dashboard')->with('error', 'El código no corresponde a este curso.');
        }

        if ($invitation) {
            // 1. Crear inscripción
            $inscription = Inscription::create([
                'id_user' => $user_id,
                'id_course' => $invitation->id_course,
            ]);

            // 2. Marcar invitación como usada
            $invitation->used = true;
            $invitation->save();

            // 3. Crear personaje automáticamente
            Character::create([
                'name' => Auth::user()->username,
                'gender' => 'M',
                'time' => 'night',
                'ambience' => 'Ambience2',
                'id_class' => 1, // Default class ID (e.g., Mage from seeder)
                'id_inscription' => $inscription->id,
            ]);

            // Retrieve course to get token for redirection
            $course = $invitation->course; // Assuming relationship exists, otherwise: Course::find($invitation->id_course)

            // 4. Redirigir a la vista del personaje
            // Use token from request if available, otherwise get it from the course
            $token = $request->token ?? $course->token; 
            
            return redirect()->route('player.character', ['token' => $token]);
        } else {
            return redirect()->route('dashboard')->with('error', 'Código inválido o ya utilizado.');
        }
    }
}