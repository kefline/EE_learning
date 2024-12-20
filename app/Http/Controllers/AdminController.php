<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;

class AdminController extends Controller
{
    public function index(){
        $totalStudents = User::where('role_id','1')->count(); 
        $totalTeachers = User::where('role_id', '2')->count();
        $activeTeachers = User::where('role_id', '2')->count(); 
        $totalCourses = Course::count(); 
        return view("admin.index",compact('totalStudents', 'activeTeachers', 'totalCourses','totalTeachers'));
    }
 
  
    public function admin_results(){
        return view('admin.admin_results');
    }
    public function levels(){
        return view('admin.levels');
    }
    public function department(){
        return view('admin.department');
    
    }
    public function programs(){
        return view('admin.programs');
    }
    public function course(){
        return view('admin.course');
    }
    public function Exams_form(){
        return view('admin.Exams_form');
    }
    public function Add_student(){
        return view('admin.Add_student');
    }
    public function Add_instructor(){
        return view('admin.Add_instructor');
    }
    public function list_levels(){
        return view('admin.list_levels');
    }
    public function list_departments(){
        return view('admin.list_departments');
    }
    public function list_programs(){
        return view('admin.list_programs');
    }
    public function list_courses(){
        return view('admin.list_courses');
    }
    public function list_exam(){
        return view('admin.list_exam');
    }
    public function list_student(){
        return view('admin.list_student');
    }
    public function list_instructor(){
        return view('admin.list_instructor');
    }
}
