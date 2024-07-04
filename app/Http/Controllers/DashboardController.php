<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Teacher;
use App\Models\Teachers_Course;
use App\Models\Course;

class DashboardController extends Controller
{
    public function index()
    {

        $user = Auth::user()->id;

        $course = Course::all();

        $teacher = Teacher::all()->where('id_user', $user);

        $institution_courses = [];
        
        foreach ($teacher as $teach) {
            $teachers_course = Teachers_Course::where("id_teacher", $teach->id)->get();
            
            foreach ($teachers_course as $courses) {

                $institution_courses[] = $courses;
        }

        // institution_courses -> course
        // $institution_courses -> teacher -> institution -> name

        // tea


    }


        //$course = $teacher_course->course->name;

        return view('dashboard', compact('teacher','institution_courses'));
    }
}
