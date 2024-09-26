@extends('layout.app')
@section('title', 'Exams_form')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card shadow-sm" style="padding: 40px; border-radius: 8px; width: 100%;">
                <div class="card-header text-center">
                    <h4 class="card-title" style="font-size: 1.75rem; font-weight: bold;">Exams
                    </h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <input type="text" id="ExamName" class="form-control input-default"
                                        placeholder="Enter Exam name">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <input type="text" id="ExamCode" class="form-control input-default"
                                        placeholder="Enter Exam code">
                                </div>
                                <div class="mb-3 col-md-6">

                                    <select id="associatedAcademicyear" class="form-control">
                                        <option>Select associated Academic year</option>
                                        <option value="1"> 2023/2024</option>
                                        <option value="2"> 2025/2026</option>
                                        <option value="3">2027/2028</option>
                                    </select>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <input type="text" id="Examdate" class="form-control input-default"
                                        placeholder="Enter Exam date">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <input type="text" id="duration" class="form-control input-default"
                                        placeholder="Enter Duration">
                                </div>

                            </div>

                            <div class="row">
                                <div class="mb-3 col-md-6">

                                    <select id="associatedCourses" class="form-select" multiple
                                        aria-label="multiple select example">
                                        <option disabled>Select associated programs</option>
                                        <option value="1"> Computer Science</option>
                                        <option value="2"> Mathematics</option>
                                        <option value="3">Biology</option>
                                    </select>
                                </div>
                            </div>











                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg"
                                    style="padding: 10px 20px; font-size: 1.1rem;">Add Exam</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
