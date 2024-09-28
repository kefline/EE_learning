<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::with("department")->get();

        return view("programs.index", compact("programs"));
    }


    public function create()
    {
        $departments = Department::all();
        return view("programs.add", compact("departments"));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:10',
            'contact' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string',
            'department_id' => 'required|exists:departments,id',
            'status' => 'required|integer',
        ]);

        Program::create($validatedData);

        return redirect()->route('programs.index')->with('success', 'Program created successfully!');
    }



    public function show()
    {
        //
    }

    public function edit()
    {
        //
    }

    public function update(Request $request)
    {
        //
    }

    public function destroy()
    {
        //
    }
}
