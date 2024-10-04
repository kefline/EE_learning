<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index(){
        $assignments = Assignment::all();
        return view('Task.index',compact('assignments'));
    }
}
