<?php

namespace App\Http\Controllers;

use App\Models\Institution;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Invitation;
use App\Models\Character;
use App\Models\Inscription;


class MasterController extends Controller
{   
    public function createCourse(string $id)
    {
        $id_institution = Institution::find($id);
        $id_user= Auth()->user()->id;
        $teacher = Teacher::where('id_user', $id_user)->first();

        return view('main.create-courses', compact('teacher','id_institution'));
    }

    public function createGroup()
    {
        return view('main.master.create-group');
    }

    public function members($token)
    {
        $course = Course::where('token', $token)->firstOrFail();
        $inscriptions = Inscription::where('id_course', $course->id)->pluck('id');
        $characters = Character::whereIn('id_inscription', $inscriptions)->get();
        // Calculate level: experience / 100 (example logic)
        // Or simply pass characters and handle logic in view or accessor

        $name = 'Members';
        return view('main.master.members', compact('name', 'characters', 'course'));
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

    public function createInvitation(string $token)
    {
        $course = Course::where('token', $token)->firstOrFail();
        return view('main.master.create-invitation', compact('course'));
    }

    public function invitations(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'id_course'=>'required|integer',
        ]);

        $invitation = Invitation::create([
            'name' => $request->name,
            'id_course' => $request->id_course,
        ]);

        $code = base64_encode($invitation->name . '&' . $invitation->id);
        

        if ($request->email){
            $invitation->email = $request->email;
        }

        $invitation->code = $code;
        $invitation->save();

        return redirect()->route('dashboard');
    }
}