@extends('layout.app')
@section('title','Add questions')
@section('content')

<div class="row justify-content-center">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="card shadow-sm" style="padding: 40px; border-radius: 8px; width: 100%;">
            <div class="card-header text-center d-flex justify-content-center align-items-center">
                <h4 class="card-title" style="font-size: 1.75rem; font-weight: bold;">Questions</h4>
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
                <form action="{{ route('questions.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-md-6" >
                            <label for="questionName">Question Name</label>
                            <input type="text" name="name" class="form-control input-default" placeholder="Enter question " required>
                            @error('question_type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="questionNumber" class="form-label">Question Number</label>
                            <select id="questionNumber" class="form-select form-control input-default @error('question_number') is-invalid @enderror" name="question_no" required>
                                <option value="" disabled selected>Select question number</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            @error('question_type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="questionType" class="form-label">Question Type</label>
                            <select id="questionType" class="form-select form-control input-default @error('question_type') is-invalid @enderror" name="type" required>
                                <option value="" disabled selected>Select question type</option>
                                <option value="multiple_choice">Multiple Choice</option>
                                <option value="true_false">True/False</option>
                                <option value="short_answer">Short Answer</option>
                            </select>
                            @error('question_type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                
                        <div class="mb-3 col-md-6">
                            <label for="questionLevel" class="form-label">Question Level</label>
                            <select id="questionLevel" class="form-select form-control input-default @error('question_level') is-invalid @enderror" name="level" required>
                                <option value="" disabled selected>Select question level</option>
                                <option value="easy">Easy</option>
                                <option value="medium">Medium</option>
                                <option value="hard">Hard</option>
                            </select>
                            @error('question_level')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                
                        <div class="mb-3 col-md-6">
                            <label for="courseId" class="form-label">Course</label>
                            <select id="courseId" class="form-select form-control input-default @error('course_id') is-invalid @enderror" name="course_id" required>
                                <option value="" disabled selected>Select a course</option>
                                @foreach ($courses as $course)
                                <option value="{{$course->id}}">{{$course->name}}</option>
                                    
                                @endforeach
                            </select>
                            @error('course_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                
                        <div class="mb-3 col-md-6">
                            <label for="examId" class="form-label">Exam</label>
                            <select id="examId" class="form-select form-control input-default @error('exam_id') is-invalid @enderror" name="exam_id" required>
                                <option value="" disabled selected>Select an exam</option>
                                @foreach ($exams as $exam)
                                    <option value="{{$exam->id}}">{{$exam->name}}</option>
                                @endforeach
                            </select>
                            @error('exam_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                
                        <div class="mb-3 col-md-6">
                            <label for="academicYear" class="form-label">Academic Year</label>
                            <select id="academicYear" class="form-select form-control input-default @error('academic_year_id') is-invalid @enderror" name="academic_year_id" required>
                                <option value="" disabled selected>Select academic year</option>
                                @foreach ($academicYears as $academicYear)
                                    <option value="{{$academicYear->id}}">{{$academicYear->name}}</option>
                                @endforeach
                            </select>
                            @error('academic_year_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                
                        <div class="mb-3 col-md-6">
                            <label for="deadline" class="form-label">Deadline</label>
                            <input type="date" id="deadline" class="form-control input-default @error('deadline') is-invalid @enderror" name="deadline" required>
                            @error('deadline')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                
                        <div class="mb-3 col-md-6">
                            <label for="questionStatus" class="form-label">Status</label>
                            <select id="questionStatus" class="form-select form-control input-default @error('status') is-invalid @enderror" name="status" required>
                                <option value="" disabled selected>Select status</option>
                                <option value="1">Active</option>
                                <option value="2">Inactive</option>
                                <option value="3">Pending</option>

                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                
                        <div class="mb-3 col-md-6">
                            <label for="actions" class="form-label">Actions</label>
                            <select id="actions" class="form-select form-control input-default" name="actions">
                                <option value="" disabled selected>Select action</option>
                                <option value="publish">Publish</option>
                                <option value="draft">Save as Draft</option>
                            </select>
                        </div>
                
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg" style="padding: 10px 20px; font-size: 1.1rem;">Add Question</button>
                        </div>
                    </div>
                </form>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection