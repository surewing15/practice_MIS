@extends('theme.layout')
@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">List of Students</h3>
                    </div>
                </div>
            </div>
            <div class="nk-block nk-block-lg">
                <div class="card card-bordered card-preview">
                    <div class="card-inner">
                        <table class="datatable-init-export nowrap table" data-export-title="Export">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $student->id }}</td>
                                        <td>{{ $student->first_name }}</td>
                                        <td>{{ $student->last_name }}</td>
                                        <td>{{ $student->status }}</td>
                                        <td>
                                            <!-- Actions -->
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><em
                                                        class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li>
                                                            <a href="{{ route('students.show', $student->id) }}"><em
                                                                    class="icon ni ni-eye"></em><span>View
                                                                    Details</span></a>
                                                        </li>
                                                        <li>
                                                            <form action="{{ route('students.destroy', $student->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-link"><em
                                                                        class="icon ni ni-delete"></em><span>Delete</span></button>
                                                            </form>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('students.edit', $student->id) }}"><em
                                                                    class="icon ni ni-edit"></em><span>Edit</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!-- .card-preview -->
            </div>
        </div>
    </div>
@endsection
