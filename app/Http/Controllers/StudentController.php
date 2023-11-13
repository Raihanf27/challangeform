<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_student');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->gpa = $request->input('gpa');
        $student->save();

        return redirect()->route('create_student')->with('success', 'Berhasi dibuat!');

    }
    /**
     * Display the specified resource.
     */
    public function view()
    {
        $students = Student::all();
        return view('view_students', ['students' => $students]);
    }

    public function delete($id)
{
    $student = Student::find($id);
    $student->delete();

    return redirect()->route('view_students')->with('success', 'Berhasi dihapus!');
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
