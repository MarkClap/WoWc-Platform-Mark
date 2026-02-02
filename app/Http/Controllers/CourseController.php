<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Teachers_Course;
use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'id_institution' => 'required|integer',
        ]);

        $course = Course::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        $token = base64_encode(Auth::user()->email . '&' . $course->id);
        
        $course->token = $token;
        $course->save();

        $id_teacher=Teacher::where('id_user', Auth::user()->id)->first();

        Teachers_Course::create([
            'id_teacher' => $id_teacher->id,
            'id_course' => $course->id,
        ]);

        return redirect()->route('dashboard');
    }

    public function inscriptionCourse(string $token)
    {
        $course = Course::where('token', $token)->firstOrFail();
    
        // Pasar 'course' y 'token' usando compact
        return view('main.inscription-courses', compact('course', 'token'));
    }
}

// public function showInscriptionForm($token)
// {
//     Asegúrate de que este método no redirija de nuevo a 'inscriptionCourse'
//     $course = session('course');
//     if (!$course) {
//         $course = Course::where('token', $token)->firstOrFail();
//         session(['course' => $course]);
//     }
//     Retorna una vista que muestre el formulario de inscripción o la información del curso
//     return view('course.inscription', compact('course'));
// }