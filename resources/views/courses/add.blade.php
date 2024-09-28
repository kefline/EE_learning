@extends('layout.app')
@section('title', 'Add Course')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card shadow-sm" style="padding: 40px; border-radius: 8px; width: 100%;">
                <div class="card-header text-center">
                    <h4 class="card-title" style="font-size: 1.75rem; font-weight: bold;">Add Course</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('courses.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="courseName">Course Name</label>
                                    <input type="text" id="courseName" name="name" class="form-control input-default"
                                        placeholder="Enter course name" required>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="courseCode">Course Code</label>
                                    <input type="text" id="courseCode" name="code" class="form-control input-default"
                                        placeholder="Enter course code" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="credicts">Credits</label>
                                    <input type="number" id="credicts" name="credicts" class="form-control input-default"
                                        placeholder="Enter credits" required>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="academic_year_id">Academic Year</label>
                                    <select name="academic_year_id" id="academicYear" class="form-control input-default">
                                        <option value="" disabled selected>Select academic year</option>
                                        @foreach ($academics as $academic)
                                            <option value="{{ $academic->id }}">{{ $academic->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="description">Course Description</label>
                                    <textarea id="description" name="description" class="form-control input-default" placeholder="Enter course description"
                                        required></textarea>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="program_id">Associated Programs</label>
                                    <select id="program_id" name="program_id" class="form-select form-control input-default"
                                        required>
                                        <option value="" disabled selected>Select associated program</option>
                                        @foreach ($programs as $program)
                                            <option value="{{ $program->id }}">{{ $program->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- Status Field -->
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="status">Status</label>
                                    <select id="status" name="status" class="form-select form-control input-default" required>
                                        <option value="" disabled selected>Select course status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg"
                                    style="padding: 10px 20px; font-size: 1.1rem;">Add Course</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
