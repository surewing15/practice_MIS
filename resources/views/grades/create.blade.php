@extends('theme.layout')
@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <h3 class="nk-block-title page-title">Assign Grade</h3>
            <div class="card card-bordered card-preview">
                <div class="card-inner">
                    <form action="{{ route('grades.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="enrollment_id">Enrollment:</label>
                            <select id="enrollment_id" name="enrollment_id" class="form-control">
                                @foreach ($enrollments as $enrollment)
                                    <option value="{{ $enrollment->id }}">{{ $enrollment->student->first_name }} {{ $enrollment->student->last_name }} - {{ $enrollment->course->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="grade">Grade:</label>
                            <select id="grade" name="grade" class="form-control">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="F">F</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Assign</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
