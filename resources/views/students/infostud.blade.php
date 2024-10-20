@extends('theme.layout')
@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Student Information System</h3>

                    </div>
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle">
                            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                                    class="icon ni ni-menu-alt-r"></em></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-block nk-block-lg" id="new-student-block">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <div class="card-head">
                            <h5 class="card-title">New Student</h5>
                        </div>
                        <form action="{{ route('students.store') }}" method="POST">
                            @csrf
                            <div class="row g-1">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label" for="student-roll">Student Roll</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="student-roll" name="student_roll"
                                                placeholder="Enter student roll">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label" for="first-name">First Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="first-name" name="first_name"
                                                placeholder="Enter first name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label" for="last-name">Last Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="last-name" name="last_name"
                                                placeholder="Enter last name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label class="form-label" for="middle-name">Middle Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="middle-name" name="middle_name"
                                                placeholder="Enter middle name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label class="form-label" for="gender">Gender</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select js-select2" id="gender" name="gender">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 form-group">
                                    <label class="form-label" for="date-of-birth">Date of Birth</label>
                                    <input type="date" class="form-control" id="date-of-birth" name="date_of_birth"
                                        max="<?php echo date('Y-m-d'); ?>">
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Phone No</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="phone-no" name="phone_no"
                                                placeholder="Enter phone number">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label" for="present-address">Present Address</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="present-address"
                                                name="present_address" placeholder="Enter present address">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label class="form-label" for="permanent-address">Permanent Address</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="permanent-address"
                                                name="permanent_address" placeholder="Enter permanent address">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary" id="save-btn">Save
                                            Information</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
