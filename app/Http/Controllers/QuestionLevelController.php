<?php

namespace App\Http\Controllers;
use App\Models\Question;
use App\Models\Questionlevel;

use Illuminate\Http\Request;

class QuestionLevelController extends Controller
{
    //
    public function index(){
        // $questionlevels = Questionlevel::with('questions')->get();
        $questions = Question::all();
        return view('student.question_level',compact('questions'));
    }
}
