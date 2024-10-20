@extends('theme.layout')
@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Student Details</h3>
                    </div>
                </div>
            </div>
            <div class="nk-block nk-block-lg">
                <div class="card card-bordered card-preview">
                    <div class="card-inner">
                        <h4>{{ $student->first_name }} {{ $student->last_name }}</h4>
                        <p>Status: {{ $student->status }}</p>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Edit</a>
                    </div>
                </div><!-- .card-preview -->
            </div>
        </div>
    </div>
@endsection
