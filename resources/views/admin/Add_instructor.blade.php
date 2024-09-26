@extends('layout.app')
@section('title','Add_instructor')
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
                                                <form>

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
                                                            <label class="form-label">Specialization</label>
                                                            <select id="inputState" class="form-control"
                                                                name="specialization_id[]">
                                                                <option selected>Choose...</option>
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Department</label>
                                                            <select id="inputState" class="form-control"
                                                                name="department_id[]"
                                                                style="height: 100px; width: 100%; padding: 10px;">
                                                                <option selected>Choose...</option>
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                            </select>
                                                        </div>

                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Courses</label>
                                                            <select class="js-example-basic-multiple form-control"
                                                                name="course_id[]" name="courses[]" multiple="multiple"
                                                                style="height: 100px; width: 100%; padding: 10px;">
                                                                <option value="1">Computer Science</option>
                                                                <option value="2">Mathematics</option>
                                                                <option value="3">Biology</option>
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
            