<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Academic_year;
use App\Models\Course;
use App\Models\Exam;
use App\Models\Question;
class InstructorQuestionController extends Controller
{
    //
    public function index(){
        $questions = Question::with('course', 'exam', 'academicYear')->get();
        $courses = Course::all();
        $exams = Exam::all();
        $academicYears = Academic_year::all();
        return view('instructor_questions.index',compact('academicYears','questions','courses','exams'));
    }
    public function create(){
        $courses = Course::all();
        $exams = Exam::all();
        $academicYears = Academic_year::all();
        return view('instructor_questions.add',compact('academicYears','courses','exams'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string',
            'level' => 'required|string',
            'question_no' => 'required|integer',
            'deadline' => 'required|date',
            'status' => 'required|integer',
            'academic_year_id' => 'required|exists:academic_years,id',
            'course_id' => 'required|exists:courses,id',
            'exam_id' => 'required|exists:exams,id'


        ]);
        Question::create($request->all());
        return redirect()->route('instructor_questions.index')->with('success', 'Course created successfully.');

    }
}
