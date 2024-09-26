<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Program;

class ProgramController extends Controller
{
    // Display a list of programs
    public function index()
    {
        $programs = Program::with('department')->get();
        return view('programs.index', compact('programs'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('programs.add', compact('departments'));
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'code' => 'required|string|max:100',
                'contact' => 'required|string|max:100',
                'location' => 'required|string|max:255',
                'description' => 'nullable|string',
                'department_id' => 'required|exists:departments,id',
                'status' => 'required|integer',
            ]);
        
            // Program creation
            Program::create($validatedData);
            return redirect()->route('programs.index')->with('success', 'Program created successfully');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to create program: ' . $e->getMessage()]);
        }
        
    }

    // Display the specified program
    public function show($id)
    {
        $program = Program::with('department')->findOrFail($id);
        return view('programs.show', compact('program'));
    }

    // Show the form for editing a program
    public function edit($id)
    {
        $program = Program::findOrFail($id);
        $departments = Department::all();
        return view('programs.edit', compact('program', 'departments'));
    }

    // Update the specified program in the database
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:100',
            'contact' => 'required|string|max:100',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string',
            'department_id' => 'required|exists:departments,id',
            'status' => 'required|integer',
        ]);

        // Update the program and handle potential errors
        try {
            $program = Program::findOrFail($id);
            $program->update($request->all());
            return redirect()->route('programs.index')->with('success', 'Program updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to update program: ' . $e->getMessage()]);
        }
    }

    // Remove the specified program from the database
    public function destroy($id)
    {
        // Delete the program and handle potential errors
        try {
            $program = Program::findOrFail($id);
            $program->delete();
            return redirect()->route('programs.index')->with('success', 'Program deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to delete program: ' . $e->getMessage()]);
        }
    }

}
