@extends('layout.app')
@section('title', 'Add Academic year')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card shadow-sm" style="padding: 40px; border-radius: 8px; width: 100%;">
                <div class="card-header text-center">
                    <h4 class="card-title" style="font-size: 1.75rem; font-weight: bold;">Add Academic</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('years.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="AcademicName">Academic Name</label>
                                    <input type="text" id="Academicyear" name="name" class="form-control input-default"
                                        placeholder="Enter Academic name" required>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="description">Course Description</label>
                                    <textarea id="description" name="description" class="form-control input-default" placeholder="Enter course description" required></textarea>
                                </div>
                            </div>
                           
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg"
                                    style="padding: 10px 20px; font-size: 1.1rem;">Add Academic year</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
