<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function infostud()
    {
        return view('students.infostud');
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_roll' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required|in:male,female',
            'date_of_birth' => 'required|date',
            'phone_no' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required',

            Student::create($request->all())


        ]);
        return back()->withInput();

           // return redirect('students.infostud')->with('success', 'Student information saved successfully.');
    }


    public function index()
    {
        $students = Student::all();
        return view('students.academic', ['students' => $students]);
    }



// Show student details
public function show($id)
{
    $student = Student::findOrFail($id);
    return view('students.show', compact('student'));
}

// Show edit form
public function edit($id)
{
    $student = Student::findOrFail($id);
    return view('students.edit', compact('student'));
}

// Update student
public function update(Request $request, $id)
{
    $student = Student::findOrFail($id);
    $student->update($request->all());
    return redirect()->route('students.show', $student->id)->with('success', 'Student updated successfully.');
}

// Delete student
public function destroy($id)
{
    $student = Student::findOrFail($id);
    $student->delete();
    return redirect()->route('students.academic')->with('success', 'Student deleted successfully.');
}

}