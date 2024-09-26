@extends('layout.app')
@section('title','department')
@section('content')
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12col-md-12">
                        <div class="card shadow-sm" style="padding: 40px; border-radius: 8px; width: 100%;">
                            <div class="card-header text-center">
                                <h4 class="card-title" style="font-size: 1.75rem; font-weight: bold;">Departments
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ route('departments.store') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="department-name" class="form-label">Department Name</label>
                                                <input type="text" id="department-name" class="form-control input-default" name="name" placeholder="Enter department name" required>
                                            </div>
                
                                            <div class="mb-3 col-md-6">
                                                <label for="department-code" class="form-label">Department Code</label>
                                                <input type="text" id="department-code" class="form-control input-default" name="code" placeholder="Enter department code" required>
                                            </div>
                
                                            <div class="mb-3 col-md-6">
                                                <label for="department-location" class="form-label">Department Location</label>
                                                <input type="text" id="department-location" class="form-control input-default" name="location" placeholder="Enter department location" required>
                                            </div>
                
                                            <div class="mb-3 col-md-6">
                                                <label for="department-contact" class="form-label">Department Contact</label>
                                                <input type="text" id="department-contact" class="form-control input-default" name="contact" placeholder="Enter department contact" required>
                                            </div>
                
                                            <div class="mb-3 col-md-6">
                                                <label for="department-description" class="form-label">Department Description</label>
                                                <textarea id="department-description" class="form-control input-default" name="description" placeholder="Enter department description" style="height: 100px; width: 100%; padding: 10px;"></textarea>
                                            </div>
                
                                            <div class="mb-3 col-md-6">
                                                <label for="department-levels" class="form-label">Department Levels</label>
                                                <select id="department-levels" class="js-example-basic-multiple form-control input-default" name="levels[]" multiple="multiple" style="height: 100px; width: 100%; padding: 10px;">
                                                    @forelse($levels as $level)
                                                        <option value="{{ $level->id }}">{{ $level->name }}</option>
                                                    @empty
                                                        <option value="">No levels available</option>
                                                    @endforelse
                                                </select>
                                            </div>
                
                                            <div class="mb-3 col-md-6">
                                                <label for="department-status" class="form-label">Status</label>
                                                <select id="department-status" class="form-control input-default" name="status">
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-lg" style="padding: 10px 20px; font-size: 1.1rem;">Add Department</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          @endsection