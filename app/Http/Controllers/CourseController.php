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

        $id_course = Course::create([
            'name' => $request->name,
            'description' => $request->description,
        ])->id;
        
        $id_teacher=Teacher::where('id_institution', $request->id_institution)->first();
        
        Teachers_Course::create([
            'id_teacher' => $id_teacher->id,
            'id_course' => $id_course,
        ]);

        return redirect()->route('dashboard');
    }
}
