@extends('layout.app')
@section('title', 'Programs')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card shadow-sm" style="padding: 40px; border-radius: 8px; width: 100%;">
                <div class="card-header text-center d-flex justify-content-center align-items-center">
                    <h4 class="card-title" style="font-size: 1.75rem; font-weight: bold;">Programs</h4>
                </div>

                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('programs.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="programName" class="form-label">Program Name</label>
                                    <input type="text" id="programName" class="form-control input-default" name="name" placeholder="Enter program name" required>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="programCode" class="form-label">Program Code</label>
                                    <input type="text" id="programCode" class="form-control input-default" name="code" placeholder="Enter program code" required>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="programContact" class="form-label">Program Contact</label>
                                    <input type="text" id="programContact" class="form-control input-default" name="contact" placeholder="Enter program contact" required>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="programLocation" class="form-label">Program Location</label>
                                    <input type="text" id="programLocation" class="form-control input-default" name="location" placeholder="Enter program location" required>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="associatedDepartments" class="form-label">Associated Departments</label>
                                    <select id="associatedDepartments" class="form-select" name="department_id" style="height: 100px;">
                                        <option value="" disabled selected>Select associated departments</option>
                                        @foreach($departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="levelDescription" class="form-label">Program Description</label>
                                    <textarea id="levelDescription" class="form-control input-default" name="description" placeholder="Enter program description" style="height: 100px; padding: 10px;" required></textarea>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg" style="padding: 10px 20px; font-size: 1.1rem;">Add Program</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
