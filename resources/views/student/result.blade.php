@extends('layout.student_app')
@section('title', 'result')
@section('content')

    <div class="row justify-content-center">
        <div class="col-xl-9 col-xxl-8">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="student-info">
                                        <div>
                                            <h4>Student Information</h4>
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <h6 class="fw-light mb-0">Academic Year:</h6>
                                                <h4 class="fw-medium-bold mb-0">2023-2024</h4>
                                            </div>
                                        </div>
                                        <div class="student-details">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <h6 class="fw-light mb-0">Name:</h6>
                                                <h4 class="fw-medium-bold mb-0">John Doe</h4>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <h6 class="fw-light mb-0">Class:</h6>
                                                <h4 class="fw-medium-bold mb-0">Grade 10</h4>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <h6 class="fw-light mb-0">Roll No:</h6>
                                                <h4 class="fw-medium-bold mb-0">15</h4>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <h6 class="fw-light mb-0">Overall Grade:</h6>
                                                <h4 class="fw-medium-bold mb-0">A</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 custome-tooltip">
                                    <div id="chartBar" class="chartBar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="card students-list">
                        <div class="card-header border-0 pb-0">
                            <h4>Student Results</h4>
                        </div>
                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <table
                                    class="table display mb-4 dataTablesCard order-table card-table text-black application">
                                    <thead>
                                        <tr>
                                            <th>Subject</th>
                                            <th>Marks Obtained</th>
                                            <th>Max Marks</th>
                                            <th>Grade</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Mathematics</td>
                                            <td>90</td>
                                            <td>100</td>
                                            <td>A</td>
                                            <td><span class="badge light badge-success">Passed</span></td>
                                            <td><button class="btn btn-secondary"
                                                    onclick="viewDetails('Mathematics')">View</button></td>
                                        </tr>
                                        <tr>
                                            <td>Science</td>
                                            <td>85</td>
                                            <td>100</td>
                                            <td>A</td>
                                            <td><span class="badge light badge-success">Passed</span></td>
                                            <td><button class="btn btn-secondary"
                                                    onclick="viewDetails('Science')">View</button></td>
                                        </tr>
                                        <tr>
                                            <td>History</td>
                                            <td>75</td>
                                            <td>100</td>
                                            <td>B</td>
                                            <td><span class="badge light badge-success">Passed</span></td>
                                            <td><button class="btn btn-secondary"
                                                    onclick="viewDetails('History')">View</button></td>
                                        </tr>
                                        <tr>
                                            <td>English</td>
                                            <td>88</td>
                                            <td>100</td>
                                            <td>A</td>
                                            <td><span class="badge light badge-success">Passed</span></td>
                                            <td><button class="btn btn-secondary"
                                                    onclick="viewDetails('English')">View</button></td>
                                        </tr>
                                        <tr>
                                            <td>Geography</td>
                                            <td>80</td>
                                            <td>100</td>
                                            <td>B+</td>
                                            <td><span class="badge light badge-success">Passed</span></td>
                                            <td><button class="btn btn-secondary"
                                                    onclick="viewDetails('Geography')">View</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Summary Section -->
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4>Overall Summary</h4>
                            <p><strong>Total Marks:</strong> 418/500</p>
                            <p><strong>Overall Percentage:</strong> 83.6%</p>
                            <p><strong>Final Grade:</strong> A</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        function viewDetails(subject) {
            alert('Viewing details for: ' + subject);
        }
    </script>
    <script src="/Assets/vendor/global/global.min.js"></script>
    <script src="/Assets/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="/Assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="/Assets/vendor/apexchart/apexchart.js"></script>
    <script src="/Assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/Assets/js/plugins-init/datatables.init.js"></script>
    <script src="/Assets/js/dashboard/instructor-transactions.js"></script>
    <script src="/Assets/js/custom.js"></script>
    <script src="/Assets/js/dlabnav-init.js"></script>
    <script src="/Assets/js/demo.js"></script>
    <script src="/Assets/js/styleSwitcher.js"></script>
@endsection
