@extends('layout.instructor_app')
@section('title', 'Add Assignments')
@section('content')
<div class="row justify-content-center">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="card shadow-sm" style="padding: 40px; border-radius: 8px; width: 100%;">
            <div class="card-header text-center">
                <h4 class="card-title" style="font-size: 1.75rem; font-weight: bold;">Add Assignment</h4>
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
                    <form action="{{ route('assignments.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="AssignmentName">Assignment Name</label>
                                <input type="text" id="AssignmentName" name="name" class="form-control input-default"
                                    placeholder="Enter Assignment name" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="AssignmentDeadline">Assignment Deadline</label>
                                <input type="date" id="AssignmentDeadline" name="deadline" class="form-control input-default"
                                    placeholder="Enter deadline date" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="AssignmentProgress">Progress</label>
                                <input type="number" id="AssignmentProgress" name="progress" class="form-control input-default"
                                    placeholder="Enter Progress Percentage" min="0" max="100" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="AssignmentLabel">Label</label>
                                <input type="text" id="AssignmentLabel" name="label" class="form-control input-default"
                                    placeholder="Enter Label" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="AssociatedCourse">Associated Course</label>
                                <select name="course_id" id="" class="form-control input-default" required>
                                    <option value="">Choose...</option>
                                    @foreach ($courses as $course)
                                    <option value="{{$course->id}}">{{$course->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="AssignmentFile">Upload File</label>
                                <input type="file" id="AssignmentFile" name="file" class="form-control input-default" accept=".pdf,.doc,.docx,.ppt,.pptx" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg"
                                style="padding: 10px 20px; font-size: 1.1rem;">Add Assignment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="/Assets/vendor/global/global.min.js"></script>
<script src="/Assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="/Assets/js/custom.js"></script>
<script src="/Assets/js/dlabnav-init.js"></script>
<script src="/Assets/js/demo.js"></script>
<script src="/Assets/js/styleSwitcher.js"></script>
@endsection
