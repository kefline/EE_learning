<?php

namespace App\Http\Controllers;

use App\Models\Specialization;
use Illuminate\Http\Request;

class SpecializationController extends Controller
{
    //
    public function create()
    {
        return view("specializations.add");
    }
    public function store(Request $request){
        $request->validate ([
            'name'=>'required|string|max:255',
            'description'=>'required|string',
        ]);

        Specialization::create($request->all());
        return redirect()->back()->with('success','All specializations are successful created');
    }
}
