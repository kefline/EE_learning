<?php

namespace App\Http\Controllers;
use App\Models\Question;
use Illuminate\Http\Request;


class QuestionTypeController extends Controller
{
    //
    public function index(){
        $questions = Question::all();
        return view('student.question_type',compact('questions'));
    }
}
