@extends('theme.layout')
@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <h3 class="nk-block-title page-title">Enrollments</h3>
            <a href="{{ route('enrollments.create') }}" class="btn btn-primary">Add Enrollment</a>
            <div class="card card-bordered card-preview">
                <div class="card-inner">
                    <table class="datatable-init-export nowrap table" data-export-title="Export">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Student</th>
                                <th>Course</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($enrollments as $enrollment)
                                <tr>
                                    <td>{{ $enrollment->id }}</td>
                                    <td>{{ $enrollment->student->first_name }} {{ $enrollment->student->last_name }}</td>
                                    <td>{{ $enrollment->course->name }}</td>
                                    <td>
                                        <a href="{{ route('enrollments.edit', $enrollment->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('enrollments.destroy', $enrollment->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
