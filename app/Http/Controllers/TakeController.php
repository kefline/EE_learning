<?php

namespace App\Http\Controllers;
use App\Models\Exam;
use App\Models\Program;
use Illuminate\Http\Request;


class TakeController extends Controller
{
    //
    public function index(){
        $totalExams = Exam::count();
        // $upcomingExams = Exam::where('date', '>', now())->count();
        $completedExams = Exam::where('status', operator: 1)->count();
        $upcomingExams = Exam::where('status', operator: 2)->count();
        $Exams= Exam::all();
        // $programs = Program::all();

        return view('student.take',compact('totalExams','upcomingExams','completedExams','Exams'));
    }
    
}
