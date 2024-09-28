@extends('layout.app')
@section('title', 'Exams Form')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card shadow-sm p-4 rounded">
                <div class="card-header text-center">
                    <h4 class="card-title font-weight-bold">Add Exam</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('exams.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <input type="text" id="ExamName" class="form-control" name="name"
                                    value="{{ old('name') }}" placeholder="Enter Exam Name" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="text" id="ExamCode" class="form-control" name="code"
                                    value="{{ old('code') }}" placeholder="Enter Exam Code" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <select id="associatedAcademicyear" class="form-control" name="academic_year_id" required>
                                    <option value="" disabled selected>Select Academic Year</option>
                                    @foreach ($academics as $academic)
                                        <option value="{{ $academic->id }}"
                                            {{ old('academic_year_id') == $academic->id ? 'selected' : '' }}>
                                            {{ $academic->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="date" id="Examdate" class="form-control" name="date"
                                    value="{{ old('date') }}" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <input type="text" id="duration" class="form-control" name="duration"
                                    value="{{ old('duration') }}" placeholder="Enter Duration" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <select id="status" class="form-control" name="status" required>
                                    <option value="" disabled selected>Select Status</option>
                                    <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                                    <option value="2" {{ old('status') == '2' ? 'selected' : '' }}>Inactive</option>
                                    <option value="3" {{ old('status') == '3' ? 'selected' : '' }}>Pending</option>
                                </select>
                            </div>


                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <select id="associatedCourses" class="form-control" name="program_id" required>
                                    <option value="" disabled selected>Select Program</option>
                                    @foreach ($programs as $program)
                                        <option value="{{ $program->id }}"
                                            {{ old('program_id') == $program->id ? 'selected' : '' }}>{{ $program->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Add Exam</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
