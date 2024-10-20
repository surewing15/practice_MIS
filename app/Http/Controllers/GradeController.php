<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function create()
    {
        $enrollments = Enrollment::all();
        return view('grades.create', compact('enrollments'));
    }

    public function store(Request $request)
    {
        Grade::create($request->all());
        return redirect()->route('students.index')->with('success', 'Grade assigned successfully.');
    }

    public function edit($id)
    {
        $grade = Grade::findOrFail($id);
        $enrollments = Enrollment::all();
        return view('grades.edit', compact('grade', 'enrollments'));
    }

    public function update(Request $request, $id)
    {
        $grade = Grade::findOrFail($id);
        $grade->update($request->all());
        return redirect()->route('students.index')->with('success', 'Grade updated successfully.');
    }
}