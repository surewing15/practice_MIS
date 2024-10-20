@extends('theme.layout')
@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <h3 class="nk-block-title page-title">Courses</h3>
            <a href="{{ route('courses.create') }}" class="btn btn-primary">Add Course</a>
            <div class="card card-bordered card-preview">
                <div class="card-inner">
                    <table class="datatable-init-export nowrap table" data-export-title="Export">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Credits</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                                <tr>
                                    <td>{{ $course->id }}</td>
                                    <td>{{ $course->name }}</td>
                                    <td>{{ $course->code }}</td>
                                    <td>{{ $course->credits }}</td>
                                    <td>
                                        <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
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
