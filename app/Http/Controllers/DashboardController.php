<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Inscription;
use App\Models\Teacher;
use App\Models\Teachers_Course;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        $user = Auth::user()->id;

        $course = Course::all();

        $teacher = Teacher::all()->where('id_user', $user);

        $institution_courses = [];

        $inscriptions = Inscription::where('id_user', $user)->get();

        $teachers_courses = [];

        foreach ($teacher as $teach) {
            $teachers_course = Teachers_Course::where("id_teacher", $teach->id)->get();

            foreach ($teachers_course as $courses) {

                $institution_courses[] = $courses;
            }

        }


        foreach ($inscriptions as $inscription) {
            $student_courses = Course::where('id', $inscription->id_course)->get();

            foreach ($student_courses as $student_course) {
                $student_course_teachers = Teachers_Course::where('id_course', $student_course->id)->get();

                foreach ($student_course_teachers as $student_course_teacher) {
                    $teachers_courses[] = $student_course_teacher;
                }
            }

        }



        return view('dashboard', compact('teacher', 'institution_courses', 'inscriptions', 'teachers_courses'));
    }
}
