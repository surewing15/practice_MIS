<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function index()
    {
        $enrollments = Enrollment::with('student', 'course')->get();
        return view('enrollments.index', compact('enrollments'));
    }

    public function create()
    {
        $students = Student::all();
        $courses = Course::all();
        return view('enrollments.create', compact('students', 'courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
            'enrollment_date' => 'required|date',
        ]);

        Enrollment::create($request->all());

        return redirect()->route('enrollments.index')->with('success', 'Enrollment created successfully.');
    }

    public function edit($id)
    {
        $enrollment = Enrollment::findOrFail($id);
        $students = Student::all();
        $courses = Course::all();
        return view('enrollments.edit', compact('enrollment', 'students', 'courses'));
    }

    public function update(Request $request, $id)
    {
        $enrollment = Enrollment::findOrFail($id);
        $enrollment->update($request->all());
        return redirect()->route('enrollments.index')->with('success', 'Enrollment updated successfully.');
    }

    public function destroy($id)
    {
        $enrollment = Enrollment::findOrFail($id);
        $enrollment->delete();
        return redirect()->route('enrollments.index')->with('success', 'Enrollment deleted successfully.');
    }
}