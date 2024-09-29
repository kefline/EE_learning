@extends('layout.app')
@section('title', 'Add_instructor')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card shadow-sm" style="padding: 40px; border-radius: 8px; width: 100%;">
                <div class="card-body">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Register Instructor</h4>
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

                                    <form action="{{ route('Teachers.store') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Instructor Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Enter instructor name">
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Enter email">
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Phone Number</label>
                                                <input type="tel" class="form-control" name="phone"
                                                    placeholder="Enter phone number">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Password</label>
                                                <input type="password" class="form-control" name="password" placeholder="Enter password">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Confirm Password</label>
                                                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm password">
                                            </div>
                                            

                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Specialization</label>
                                                <select id="inputState" class="form-control" name="specialization_id">
                                                    @foreach ($specializations as $specialization)
                                                        <option selected>Choose...</option>
                                                        <option value="{{ $specialization->id }}">
                                                            {{ $specialization->name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Department</label>
                                                <select id="inputState" class="form-control" name="department_id">
                                                    <option selected>Choose...</option>
                                                    @foreach ($departments as $department)
                                                        <option value="{{ $department->id }}">{{ $department->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="status" class="form-label">Status</label>
                                                <select name="status" id="status" class=" form-control input-default">
                                                    <option value="" disabled selected>Choose status</option>
                                                    <option value="1">Active</option>
                                                    <option value="2">Inactive</option>
                                                    <option value="3">Pending</option>
                                                </select>
                                            </div>
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

                                </div>

                                <button type="submit" class="btn btn-primary px-10">Register
                                    Instructor</button>
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
