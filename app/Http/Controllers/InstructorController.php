<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructorController extends Controller
{
    //
    public function instructor_dashboard(){
        return view("instructor.instructor_dashboard");
    }
    public function courses(){
        return view('instructor.courses');
    }
    public function student(){
        return view('instructor.student');
    }
    
    public function instructor_course(){
    return view('instructor.instructor_course');
    }
    public function instructor_student(){
        return view('instructor.instructor_student');
    }
    public function instructor_assignments(){
        return view('instructor.instructor_assignments');
    }
    public function instructor_grades(){
        return view('instructor.instructor_grades');
    }
    public function instructor_schedule(){
        return view('instructor.instructor_schedule');
    }
    public function resources(){
        return view('instructor.resources');
    }
    public function notifications(){
        return view('instructor.notifications');
    }
    public function  profile(){
        return view('instructor.profile');
    }
    public function analytics(){
        return view('instructor.analytics');
    }
    public function help(){
        return view('instructor.help');
    }
    
}
