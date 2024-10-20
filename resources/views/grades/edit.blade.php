@extends('theme.layout')
@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <h3 class="nk-block-title page-title">Edit Grade</h3>
            <div class="card card-bordered card-preview">
                <div class="card-inner">
                    <form action="{{ route('grades.update', $grade->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="enrollment_id">Enrollment:</label>
                            <select id="enrollment_id" name="enrollment_id" class="form-control" disabled>
                                @foreach ($enrollments as $enrollment)
                                    <option value="{{ $enrollment->id }}" {{ $grade->enrollment_id == $enrollment->id ? 'selected' : '' }}>
                                        {{ $enrollment->student->first_name }} {{ $enrollment->student->last_name }} - {{ $enrollment->course->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="grade">Grade:</label>
                            <select id="grade" name="grade" class="form-control">
                                <option value="A" {{ $grade->grade == 'A' ? 'selected' : '' }}>A</option>
                                <option value="B" {{ $grade->grade == 'B' ? 'selected' : '' }}>B</option>
                                <option value="C" {{ $grade->grade == 'C' ? 'selected' : '' }}>C</option>
                                <option value="D" {{ $grade->grade == 'D' ? 'selected' : '' }}>D</option>
                                <option value="F" {{ $grade->grade == 'F' ? 'selected' : '' }}>F</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
