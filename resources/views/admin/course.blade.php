@extends('layout.app')
@section('title','courses')
@section('content')
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card shadow-sm" style="padding: 40px; border-radius: 8px; width: 100%;">
                            <div class="card-header text-center">
                                <h4 class="card-title" style="font-size: 1.75rem; font-weight: bold;">Courses
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <input type="text" id="courseName" class="form-control input-default"
                                                    placeholder="Enter course name">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <input type="text" id="courseCode" class="form-control input-default"
                                                    placeholder="Enter course code">
                                            </div>


                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <input type="text" id="credicts" class="form-control input-default"
                                                    placeholder="Enter credicts">
                                            </div>


                                            <div class="mb-3 col-md-6">
                                                <input type="text" id="academic year" class="form-control input-default"
                                                    placeholder="Enter academic year">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <textarea id="levelDescription" class="form-control input-default"
                                                    placeholder="Enter program description"></textarea>
                                            </div>

                                            <div class="mb-3 col-md-6">

                                                <select id="associatedPrograms" class="form-select" multiple
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
                                                style="padding: 10px 20px; font-size: 1.1rem;">Add course</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           @endsection