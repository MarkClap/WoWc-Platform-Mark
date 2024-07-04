<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Inscription;
use App\Models\Invitation;

class InscriptionController extends Controller
{
    public function validation(Request $request)
    {
        $request -> validate([
            'code' => 'required|string',
            'id_course' => 'required|integer',
            'id_user' => 'required|integer',
            'token' =>'required|string',
        ]);

        $invitation = Invitation::where('id_course', $request->id_course)
            ->where('code', $request->code)
            ->where('used', false)
            ->first();

        if ($invitation) {
                Inscription::create([
                'id_user' => $request->id_user,
                'id_course' => $request->id_course,
            ]);

            $invitation->used = true;
            $invitation->save();

            // ruta a retornar /main/{token}/player/
            return redirect()->route('player.character', ['token' => $request->token]);


        }else{
            return redirect()->route('dashboard');
        }

    }
}