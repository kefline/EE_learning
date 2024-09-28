<?php

namespace App\Http\Controllers;

use App\Models\Academic_year;
use App\Models\Program;
use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    //
    public function index()
    {
        $exams = Exam::with(['program', 'academicYear'])->get();
        $academics = Academic_year::all();
        return view('exams.index', compact('exams', 'academics'));
    }
    public function create()
    {
        $programs = Program::all();
        $academics = Academic_year::all();
        return view('exams.add', compact('programs', 'academics'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255|unique:exams,code',
            'academic_year_id' => 'required|exists:academic_years,id',
            'program_id' => 'required|exists:programs,id',
            'date' => 'required|date',
            'duration' => 'required|string|max:255',
            'status' => 'required|in:1,2,3',

        ]);

        $exam = Exam::create([
            'name' => $request->name,
            'code' => $request->code,
            'academic_year_id' => $request->academic_year_id,
            'program_id' => $request->program_id,
            'date' => $request->date,
            'duration' => $request->duration,
            'status' => $request->status,
        ]);

        return redirect()->route('exams.index')->with('success', 'Exam added successfully!');
    }
}
