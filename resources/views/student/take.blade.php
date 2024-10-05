@extends('layout.student_app')
@section('title', 'take')
@section('content')
    <div class="row">
        <div class="row">
            <div class="row">
                <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="widget-stat card">
                        <div class="card-body p-4">
                            <h4 class="card-title">Total Exams Available</h4>
                            <h3>{{ $totalExams }}</h3>
                            <div class="progress mb-2">
                                <div class="progress-bar progress-animated bg-primary" style="width: 100%"></div>
                            </div>
                            <small>All Exams Currently Open</small>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="widget-stat card">
                        <div class="card-body p-4">
                            <h4 class="card-title">Upcoming Exams</h4>
                            <h3>{{ $upcomingExams }}</h3>
                            <div class="progress mb-2">
                                <div class="progress-bar progress-animated bg-warning" style="width: 50%"></div>
                            </div>
                            <small>50% Increase in 15 Days</small>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="widget-stat card">
                        <div class="card-body p-4">
                            <h4 class="card-title">Completed Exams</h4>
                            <h3>{{ $completedExams }}</h3>
                            <div class="progress mb-2">
                                <div class="progress-bar progress-animated bg-success" style="width: 70%"></div>
                            </div>
                            <small>70% Completion Rate</small>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="widget-stat card">
                        <div class="card-body p-4">
                            <h4 class="card-title">Total Score Achieved</h4>
                            <h3>575</h3>
                            <div class="progress mb-2">
                                <div class="progress-bar progress-animated bg-info" style="width: 85%"></div>
                            </div>
                            <small>Average Score Across Exams</small>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-xxl-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Recent Exam Attempts</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive recentOrderTable">
                                <table class="table verticle-middle table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th scope="col">Exam Name</th>
                                            <th scope="col">Program</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Start Exam</th> 
                                            <th scope="col">Score</th>

                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Exams as $Exam)
                                            <tr>
                                                <td>{{ $Exam->name }}</td>
                                                <td>{{ $Exam->program->name }}</td>
                                                <td>{{ $Exam->date }}</td>
                                                <td>
                                                    @if ($Exam->status == 1)
                                                        <span class="badge light badge-danger">
                                                            <i class="fa fa-circle text-danger me-1"></i>
                                                            Completed
                                                        </span>
                                                    @elseif ($Exam->status == 2)
                                                        <span class="badge light badge-success">
                                                            <i class="fa fa-circle text-success me-1"></i>
                                                            Upcoming
                                                        </span>
                                                    @elseif ($Exam->status == 3)
                                                        <span class="badge light badge-warning">
                                                            <i class="fa fa-circle text-warning me-1"></i>
                                                            Pending
                                                        </span>
                                                    @endif
                                                </td>
                                                <td class="text-end">
                                                    @if ($Exam->status == 2) 
                                                        <a href="" class="badge light badge-info" style="text-decoration: none; display: inline-flex; align-items: center;">
                                                            <i class="fa fa-clock text-info me-1"></i>
                                                            Ready to Start
                                                        </a>
                                                    @elseif ($Exam->status == 3) 
                                                        <a href="#" class="badge light badge-primary" style="text-decoration: none; display: inline-flex; align-items: center;">
                                                            <i class="fa fa-hourglass-start text-primary me-1"></i>
                                                            Wait for Exam
                                                        </a>
                                                    @else
                                                        <span class="badge light badge-secondary" style="display: inline-flex; align-items: center;">
                                                            <i class="fa fa-ban text-secondary me-1"></i>
                                                            Not Available
                                                        </span>
                                                    @endif
                                                </td>
                                                
                                                <td>85%</td>

                                                <td class="text-end">
                                                    <div class="dropdown custom-dropdown mb-0">
                                                        <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18px"
                                                                height="18px" viewBox="0 0 24 24">
                                                                <circle fill="#000000" cx="12" cy="5"
                                                                    r="2" />
                                                                <circle fill="#000000" cx="12" cy="12"
                                                                    r="2" />
                                                                <circle fill="#000000" cx="12" cy="19"
                                                                    r="2" />
                                                            </svg>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="javascript:void();">View
                                                                Results</a>
                                                            <a class="dropdown-item text-danger"
                                                                href="javascript:void();">Retake Exam</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
    <script src="/Assets/vendor/chartist/js/chartist.min.js"></script>
    <script src="/Assets/vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
    <script src="/Assets/vendor/flot/jquery.flot.js"></script>
    <script src="/Assets/vendor/flot/jquery.flot.pie.js"></script>
    <script src="/Assets/vendor/flot/jquery.flot.resize.js"></script>
    <script src="/Assets/vendor/flot-spline/jquery.flot.spline.min.js"></script>
    <script src="/Assets/vendor/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="/Assets/js/plugins-init/sparkline-init.js"></script>
    <script src="/Assets/vendor/peity/jquery.peity.min.js"></script>
    <script src="/Assets/js/plugins-init/piety-init.js"></script>
    <script src="/Assets/js/plugins-init/widgets-script-init.js"></script>
    <script src="/Assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="/Assets/js/custom.js"></script>
    <script src="/Assets/js/dlabnav-init.js"></script>
    <script src="/Assets/js/demo.js"></script>
    <script src="/Assets/js/styleSwitcher.js"></script>
@endsection
