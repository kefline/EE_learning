@extends('layout.app')
@section('title','Admin_result')
@section('content')


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Student Results Management</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example5" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="form-check custom-checkbox ms-2">
                                                        <input type="checkbox" class="form-check-input" id="checkAll"
                                                            required="">
                                                        <label class="form-check-label" for="checkAll"></label>
                                                    </div>
                                                </th>
                                                <th>Student ID</th>
                                                <th>Student Name</th>
                                                <th>Course</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Score</th>
                                                <th>Grade</th>
                                                <th>Exam Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check custom-checkbox ms-2">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customCheckBox21" required="">
                                                        <label class="form-check-label" for="customCheckBox21"></label>
                                                    </div>
                                                </td>
                                                <td>#S-0001</td>
                                                <td>John Doe</td>
                                                <td>Computer Science</td>
                                                <td>john.doe@example.com</td>
                                                <td>
                                                    <span class="badge light badge-success">
                                                        <i class="fa fa-circle text-success me-1"></i>
                                                        Passed
                                                    </span>
                                                </td>
                                                <td>85%</td>
                                                <td>A</td>
                                                <td>01/09/2024</td>
                                                <td>
                                                    <div class="dropdown ms-auto text-end">
                                                        <div class="btn-link" data-bs-toggle="dropdown">
                                                            <svg width="24px" height="24px" viewBox="0 0 24 24"
                                                                version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <circle fill="#000000" cx="5" cy="12" r="2">
                                                                    </circle>
                                                                    <circle fill="#000000" cx="12" cy="12" r="2">
                                                                    </circle>
                                                                    <circle fill="#000000" cx="19" cy="12" r="2">
                                                                    </circle>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            style="max-height: 200px; overflow-y: auto;">
                                                            <a class="dropdown-item" href="#">View Profile</a>
                                                            <a class="dropdown-item" href="#">Suspend Student</a>
                                                            <a class="dropdown-item" href="#">Delete Student</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Repeat for other students -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>






                </div>
 @endsection         