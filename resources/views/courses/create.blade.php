<!-- resources/views/courses/create.blade.php -->

@extends('theme.layout')

@section('content')
<div class="nk-content-inner">
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Create Course</h3>
                </div>
            </div>
        </div>
        <div class="nk-block nk-block-lg">
            <div class="card card-bordered card-preview">
                <div class="card-inner">
                    <form action="{{ route('courses.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Course Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Course Description</label>
                            <textarea name="description" id="description" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Course</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
