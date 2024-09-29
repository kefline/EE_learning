@extends('layout.app')
@section('title', 'Add_student')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card shadow-sm" style="padding: 40px; border-radius: 8px; width: 100%;">
                <div class="card-body">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Register Student</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="{{ route('dents.store') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Student Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="1234 Main St">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Email">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Password</label>
                                                <input type="password" class="form-control" name="password"
                                                    placeholder="password">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Confirm Password</label>
                                                <input type="password" class="form-control" name="password_confirmation"
                                                    placeholder="Confirm password">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Registration Number</label>
                                                <input type="text" class="form-control" name="reg_no"
                                                    placeholder="Enter Registration number">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">phone Number</label>
                                                <input type="phone" class="form-control" name="phone"
                                                    placeholder="Enter phone  number">
                                            </div>



                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Level</label>
                                                <select id="inputState" class=" form-control wide" name="level_id">
                                                    <option selected>Choose...</option>
                                                    @foreach ($levels as $level)
                                                        <option value="{{ $level->id }}">{{ $level->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Department</label>
                                                <select id="inputState" class=" form-control wide" name="department_id">
                                                    <option selected>Choose...</option>
                                                    @foreach ($departments as $department)
                                                        <option value="{{ $department->id }}">{{ $department->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Program</label>
                                                <select id="inputState" class=" form-control wide" name="program_id">
                                                    <option selected>Choose...</option>
                                                    @foreach ($programs as $program)
                                                        <option value="{{ $program->id }}">{{ $program->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Courses</label>
                                                <select class="js-example-basic-multiple form-control" name="course_id[]"
                                                    multiple="multiple" style="height: 100px; width: 100%; padding: 10px;">
                                                    @foreach ($courses as $course)
                                                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Academic year</label>
                                                <select id="inputState" class="form-control wide" name="academic_year_id">
                                                    <option selected>Choose...</option>
                                                    @foreach ($academicYears as $academicYear)
                                                        <option value="{{ $academicYear->id }}">{{ $academicYear->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">status</label>
                                                <select id="inputState" class=" form-control wide" name="status">
                                                    <option selected>Choose...</option>
                                                    <option value="1">Active</option>
                                                    <option value="2">Inactive</option>
                                                    <option value="3">Pending</option>

                                                </select>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary px-10">Register
                                            Student</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
