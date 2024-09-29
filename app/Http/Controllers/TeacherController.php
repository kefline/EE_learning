<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Specialization;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\Department;


class TeacherController extends Controller
{
    //

    public function index()
    {
        $users = User::with('department', 'specialization', 'courses')
            ->where('role_id', 2)
            ->get();

        $courses = Course::all();
        $specializations = Specialization::all();
        $departments = Department::all();

        return view('Teachers.index', compact('users', 'courses', 'specializations', 'departments'));
    }

    public function create()
    {
        $courses = Course::all();
        $specializations = Specialization::all();
        $departments = Department::all();

        return view('Teachers.add', compact('courses', 'specializations', 'departments'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'required|string|min:10|max:15',
            'department_id' => 'nullable|integer|exists:departments,id',
            'level_id' => 'nullable|integer|exists:levels,id',
            'program_id' => 'nullable|integer|exists:programs,id',
            'specialization_id' => 'nullable|integer|exists:specializations,id',
            'academic_year_id' => 'nullable|integer|exists:academic_years,id',
            'course_id' => 'required|array',
            'course_id.*' => 'integer|exists:courses,id',
            'status' => 'required|integer'
        ]);
      
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'role_id' => 2,
            'department_id' => $request->department_id,
            //  'level_id' => $request->level_id,
            'program_id' => $request->program_id,
            'specialization_id' => $request->specialization_id,
            'status' => $request->status
            //  'academic_year_id' => $request->academic_year_id,
        ]);


        $selectedCourses = $request->input('course_id');
        $user->courses()->sync($selectedCourses);

        return redirect()->back()->with('success', 'Instructor created and courses added successfully!');
    }
}
