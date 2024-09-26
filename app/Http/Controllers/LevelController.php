<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Generator\DuplicateMethodException;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->data['levels'] =  Level::all();
        return view('levels.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('levels.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation
        //  name must not be Duplicated
        //  all inputs are required except description
        //  if description is posted should  contain only letter, numbers are not allowed
        //  status should accept only two values ( 0 and 1)

       // should display each validation message error below the specific input in blade
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'status' => 1 // active =1, 0= inactive
        ];
        // Level::create($request->except('_token'));
        Level::create($data);

        return redirect()->back()->with('sucess', 'Level created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show() {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view('levels.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
