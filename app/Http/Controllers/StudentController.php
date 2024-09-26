<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function student_dashboard(){
        $student = Student::all(); // select * from users where role_id = 1
        return view("student.student_dashboard");
    }
    public function student_profile(){
        return view('student.student_profile');
    }
    public function student_course(){
        return view('student.student_course');
    }
    public function student_assignments(){
        return view('student.student_assignments');
    }
    public function question_level(){
        return view('student.question_level');
    }
    public function question_type(){
        return view('student.question_type');
    }
    public function take(){
        return view('student.take');
    }
    public function quiz(){
        return view('student.quiz');
    }
    public function calendar(){
        return view('student.calendar');
    }
    public function forum(){
        return view('student.forum');
    }
    public function result(){
        return view('student.result');
    }
    public function student_progress(){
        return view('student.student_progress');
    }
    public function announcements(){
        return view('student.announcements');
    }
}
