
@extends('layout.app')
@section('title','Add_student')
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
                                <form>

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
                                            <label class="form-label">Registration Number</label>
                                            <input type="email" class="form-control" name="reg_no"
                                                placeholder="Enter Registration number">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Level</label>
                                            <select id="inputState"
                                                class="default-select form-control wide"
                                                name="level_id[]">
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
                                            <select id="inputState"
                                                class="default-select form-control wide"
                                                name="department_id[]">
                                                <option selected>Choose...</option>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Program</label>
                                            <select id="inputState"
                                                class="default-select form-control wide"
                                                name="program_id[]">
                                                <option selected>Choose...</option>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Course</label>
                                            <select id="inputState"
                                                class="default-select form-control wide"
                                                name="course_id[]">
                                                <option selected>Choose...</option>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Academic year</label>
                                            <select id="inputState"
                                                class="default-select form-control wide"
                                                name="academic_year_id[]">
                                                <option selected>Choose...</option>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
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
        

     
              







    
