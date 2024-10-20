@extends('theme.layout')
@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Edit Student</h3>
                    </div>
                </div>
            </div>
            <div class="nk-block nk-block-lg">
                <div class="card card-bordered card-preview">
                    <div class="card-inner">
                        <form action="{{ route('students.update', $student->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="first_name">First Name:</label>
                                <input type="text" id="first_name" name="first_name" value="{{ $student->first_name }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name:</label>
                                <input type="text" id="last_name" name="last_name" value="{{ $student->last_name }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="status">Status:</label>
                                <input type="text" id="status" name="status" value="{{ $student->status }}" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div><!-- .card-preview -->
            </div>
        </div>
    </div>
@endsection
