<?php

namespace App\Http\Controllers;

use App\Models\Academic_year;
use App\Models\Course;
use App\Models\Program;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
     public function index()
     {
         $courses = Course::with(['program', 'academicYear'])->get();
         $academics = Academic_year::all();
         return view('courses.index', compact('courses', 'academics'));
     }
 
     public function create()
     {
         $programs = Program::all();
         $academics = Academic_year::all();
 
         return view('courses.add', compact('programs', 'academics'));
     }
 
     public function store(Request $request)
     {
         $request->validate([
             'name' => 'required|string|max:255',
             'code' => 'required|string|max:100',
             'credicts' => 'required|integer',
             'description' => 'required|string',
             'academic_year_id' => 'required|exists:academic_years,id',
             'program_id' => 'required|exists:programs,id',
             'status' => 'required|integer',
         ]);
 
         Course::create($request->all());
 
         return redirect()->route('courses.index')->with('success', 'Course created successfully.');
     }
}
