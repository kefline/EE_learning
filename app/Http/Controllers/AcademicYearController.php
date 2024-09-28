<?php

namespace App\Http\Controllers;

use App\Models\Academic_year;
use Illuminate\Http\Request;

class AcademicYearController extends Controller
{
    //
    public function create()
    {
        return view("years.add");
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Academic_year::create($request->all());

        return redirect()->back()->with('success', 'Academic year created successfully');
    }
}
