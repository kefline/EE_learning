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
                        <form action="{{ route('programs.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="programName" class="form-label">Program Name</label>
                                    <input type="text" id="programName"
                                        class="form-control input-default @error('name') is-invalid @enderror"
                                        name="name" placeholder="Enter program name" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="programCode" class="form-label">Program Code</label>
                                    <input type="text" id="programCode"
                                        class="form-control input-default @error('code') is-invalid @enderror"
                                        name="code" placeholder="Enter program code" required>
                                    @error('code')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="programContact" class="form-label">Program Contact</label>
                                    <input type="text" id="programContact"
                                        class="form-control input-default @error('contact') is-invalid @enderror"
                                        name="contact" placeholder="Enter program contact" required>
                                    @error('contact')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="programLocation" class="form-label">Program Location</label>
                                    <input type="text" id="programLocation"
                                        class="form-control input-default @error('location') is-invalid @enderror"
                                        name="location" placeholder="Enter program location" required>
                                    @error('location')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="programStatus" class="form-label">Program Status</label>
                                    <input type="number" id="programStatus"
                                        class="form-control input-default @error('status') is-invalid @enderror"
                                        name="status" placeholder="Enter program status" required>
                                    @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="associatedDepartments" class="form-label">Associated Departments</label>
                                    <select id="associatedDepartments"
                                        class="form-select form-control input-default @error('department_id') is-invalid @enderror"
                                        name="department_id" required>
                                        <option value="" disabled selected>Select a department</option>
                                        @forelse($departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                                        @empty
                                            <option value="" disabled>No departments available</option>
                                        @endforelse
                                    </select>
                                    @error('department_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="programDescription" class="form-label">Program Description</label>
                                    <textarea id="programDescription" class="form-control input-default @error('description') is-invalid @enderror"
                                        name="description" placeholder="Enter program description" style="height: 100px;"></textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg"
                                    style="padding: 10px 20px; font-size: 1.1rem;">Add Program</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
