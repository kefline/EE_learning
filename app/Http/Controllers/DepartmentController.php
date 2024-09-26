<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Level;

use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Generator\DuplicateMethodException;

class DepartmentController extends Controller
{
   
    public function index()
{
    $this->data['departments'] = Department::with('levels')->get();
    return view('departments.index', $this->data);
}


  
    public function create()
    {
        $levels = Level::all();
        return view('departments.add', compact('levels'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string',
            'levels' => 'array|exists:levels,id',
            'status' => 'required|boolean'
        ]);

        $department = Department::create([
            'name' => $request->name,
            'code' => $request->code,
            'contact' => $request->contact,
            'location' => $request->location,
            'description' => $request->description,
            'status' => $request->status, 
        ]);

        if ($request->has('levels')) {
            $department->levels()->attach($request->levels);
        }

        return redirect()->back()->with('success', 'Department created successfully');
    }



   
    public function show() {}

   
    public function edit()
    {
        return view('departments.edit');
    }

   
    public function update(Request $request, $id)
    {
        
    }

  
    public function destroy($id)
    {
        //
    }
}
