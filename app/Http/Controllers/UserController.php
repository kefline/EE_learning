<?php

namespace App\Http\Controllers;

use App\Models\Academic_year;
use App\Models\Course;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Level;
use App\Models\Program;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::with('level', 'department', 'program', 'courses', 'academicYear') // Use singular names
            ->where('role_id', 1)
            ->get();
    
        // Fetch other necessary data if needed
        $levels = Level::all();
        $departments = Department::all();
        $programs = Program::all();
        $courses = Course::all();
        $academicYears = Academic_year::all();
    
        return view('dents.index', compact('users', 'levels', 'departments', 'programs', 'courses', 'academicYears'));
    }
    
    public function create()
    {
        $levels = Level::all();
        $departments = Department::all();
        $programs = Program::all();
        $courses = Course::all();
        $academicYears = Academic_year::all();
        return view('dents.add', compact('levels', 'departments', 'programs', 'courses', 'academicYears'));
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
            'status' => 'required|integer',
            'reg_no' =>'required|string',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'role_id' => 1,
            'department_id' => $request->department_id,
             'level_id' => $request->level_id,
            'program_id' => $request->program_id,
            'status' => $request->status,
             'academic_year_id' => $request->academic_year_id,
             'reg_no'=>$request->reg_no,
        ]);
        $selectedCourses = $request->input('course_id');
        $user->courses()->sync($selectedCourses);
        return redirect()->back()->with('success', 'student created and courses added successfully!');
        
    }
    
}
