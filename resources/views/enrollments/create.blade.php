<!-- resources/views/enrollments/create.blade.php -->

@extends('theme.layout')
@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Create Enrollment</h3>
                    </div>
                </div>
            </div>
            <div class="nk-block nk-block-lg">
                <div class="card card-bordered card-preview">
                    <div class="card-inner">
                        <form action="{{ route('enrollments.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="student_id">Student</label>
                                <select name="student_id" id="student_id" class="form-control">
                                    @foreach ($students as $student)
                                        <option value="{{ $student->id }}">{{ $student->first_name }}
                                            {{ $student->last_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="course_id">Course</label>
                                <select name="course_id" id="course_id" class="form-control">
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="enrollment_date">Enrollment Date</label>
                                <input type="date" name="enrollment_date" id="enrollment_date" class="form-control"
                                    required>
                            </div>
                            <button type="submit" class="btn btn-primary">Create Enrollment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
