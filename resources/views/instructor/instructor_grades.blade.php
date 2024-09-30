@extends('layout.instructor_app')
@section('title', 'instructor_grades')
@section('content')
    <div class="row">




        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Students</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example5" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="form-check custom-checkbox ms-2">
                                            <input type="checkbox" class="form-check-input" id="checkAll" required="">
                                            <label class="form-check-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th>Student ID</th>
                                    <th>Date Check in</th>
                                    <th>Patient Name</th>
                                    <th>Doctor Assgined</th>
                                    <th>Disease</th>
                                    <th>Status</th>
                                    <th>Room no</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check custom-checkbox ms-2">
                                            <input type="checkbox" class="form-check-input" id="customCheckBox2"
                                                required="">
                                            <label class="form-check-label" for="customCheckBox2"></label>
                                        </div>
                                    </td>
                                    <td>#P-00001</td>
                                    <td>26/02/2020, 12:42 AM</td>
                                    <td>Tiger Nixon</td>
                                    <td>Dr. Cedric</td>
                                    <td>Cold & Flu</td>
                                    <td>
                                        <span class="badge light badge-danger">
                                            <i class="fa fa-circle text-danger me-1"></i>
                                            New Patient
                                        </span>
                                    </td>
                                    <td>AB-001</td>
                                    <td>
                                        <div class="dropdown ms-auto text-end">
                                            <div class="btn-link" data-bs-toggle="dropdown">
                                                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                        <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                        <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Accept Patient</a>
                                                <a class="dropdown-item" href="#">Reject Order</a>
                                                <a class="dropdown-item" href="#">View Details</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
<script src="/Assets/vendor/global/global.min.js"></script>
<script src="/Assets/vendor/chart.js/Chart.bundle.min.js"></script>
<script src="/Assets/vendor/apexchart/apexchart.js"></script>

<script src="/Assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="/Assets/js/plugins-init/datatables.init.js"></script>

<script src="/Assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

<script src="/Assets/js/custom.js"></script>
<script src="/Assets/js/dlabnav-init.js"></script>
<script src="/Assets/js/demo.js"></script>
<script src="/Assets/js/styleSwitcher.js"></script>

@endsection








