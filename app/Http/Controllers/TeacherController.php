<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Institution;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $institutionId = Auth::user()->id;
        $teachers = Teacher::where('id_institution', $institutionId)->paginate();
        $users = User::all();
        $institutions = Institution::all();
        return view('layouts.board-institutions.board', compact('teachers','users','institutions','institutionId'))
            ->with('i', ($request->input('page', 1) - 1) * $teachers->perPage());
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'id_institution' => 'required|exists:institutions,id',
        ]);

        $user = User::where('email', $request->email)->firstOrFail();

        $Teacher_exists = Teacher::where('id_user', $user->id)
                         ->where('id_institution', $request->id_institution)
                         ->exists();

        if ($Teacher_exists) {
            return redirect()->route('teachers.index')->withErrors(['email' => 'The user is already registered as a teacher at this institution.']);
        }

        Teacher::create([
            'id_user' => $user->id,
            'id_institution' => $request->id_institution,
        ]);

        return redirect()->route('teachers.index')->with('success', 'Teacher created successfully.');
    }

    public function destroy(string $id)
    {
            $album = Teacher::find($id);
            $album->delete();
            return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully');
        
    } 

}
