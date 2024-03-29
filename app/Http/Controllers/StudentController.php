<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request; 

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $student = Student::all();
        return view ('students.index')->with('students', $student);
    }
    public function indexAPI()
    {
        //
        $student = Student::all();
        return $student;
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        Student::create($input);
        return redirect('student')->with('flash_massage', 'Student Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $student = Student::find($id);
        return view ('students.show')->with('students', $student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $student = Student::find($id);
        $input =$request->all();
        $student->update($input);
        return redirect('student')->with('flash_message', 'Student Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Student::destroy($id);
        return redirect('students.index')->with('flash_message', 'Student Deleted!');
    }
}