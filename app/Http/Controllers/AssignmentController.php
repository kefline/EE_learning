<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assignment;
use App\Models\Course;

class AssignmentController extends Controller

{
    public function index()
    {
        $assignments = Assignment::with('course')->get();
        $courses = Course::all();
        return view('assignments.index', compact('assignments', 'courses'));
    }

    public function create()
    {
        $courses = Course::all();
        return view('assignments.add', compact('courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'deadline' => 'required|date',
            'progress' => 'required|integer|min:0|max:100',
            'label' => 'required|string|max:100',
            'course_id' => 'required|exists:courses,id',
            'file' => 'required|file|mimes:pdf,doc,docx,ppt,pptx|max:2048', // Added validation for file upload
        ]);
        
        // Store the uploaded file
        $path = $request->file('file')->store('uploads/assignments', 'public');

        // Create the assignment with the file path
        Assignment::create([
            'name' => $request->name,
            'deadline' => $request->deadline,
            'progress' => $request->progress,
            'label' => $request->label,
            'course_id' => $request->course_id,
            'file_path' => $path, // Store the file path in the database
        ]);

        return redirect()->back()->with('success', 'Assignment created successfully');
    }

    public function edit(Assignment $assignment)
    {
        $courses = Course::all(); 
        return view('assignments.edit', compact('assignment', 'courses'));
    }

    public function update(Request $request, Assignment $assignment)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'deadline' => 'required|date',
            'progress' => 'required|integer|min:0|max:100',
            'label' => 'required|string|max:100',
            'course_id' => 'required|exists:courses,id',
        ]);

        $assignment->update($request->all());
        return redirect()->route('assignments.index')->with('success', 'Assignment updated successfully');
    }

    public function destroy(Assignment $assignment)
    {
        $assignment->delete();
        return redirect()->route('assignments.index')->with('success', 'Assignment deleted successfully');
    }

    public function upload(Assignment $assignment)
    {
        return view('assignments.upload', compact('assignment'));
    }

    public function handleUpload(Request $request, Assignment $assignment)
    {
        $request->validate([
            'file' => 'required|file|mimes:pdf,doc,docx,ppt,pptx|max:2048', // Accept PDF and Word documents
        ]);

        // Store the uploaded file
        $path = $request->file('file')->store('uploads/assignments', 'public');

        // Update the assignment with the new file path
        $assignment->uploaded_file = $path;
        $assignment->save();

        return redirect()->route('assignments.index')->with('success', 'File uploaded successfully');
    }
}
