@extends('layout.student_app')
@section('title', 'quiz')
@section('content')
    <div class="row">
        <!-- Total Quizzes Taken -->
        <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
            <div class="widget-stat card">
                <div class="card-body p-4">
                    <h4 class="card-title">Total Quizzes Taken</h4>
                    <h3>12</h3>
                    <div class="progress mb-2">
                        <div class="progress-bar progress-animated bg-primary" style="width: 80%"></div>
                    </div>
                    <small>80% Completed this Semester</small>
                    <!-- Restart Quiz Button -->
                </div>
            </div>
        </div>

        <!-- Average Score -->
        <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
            <div class="widget-stat card">
                <div class="card-body p-4">
                    <h4 class="card-title">Average Score</h4>
                    <h3>85%</h3>
                    <div class="progress mb-2">
                        <div class="progress-bar progress-animated bg-warning" style="width: 85%"></div>
                    </div>
                    <small>Average of 12 Quizzes</small>
                    <!-- Restart Quiz Button -->
                </div>
            </div>
        </div>

        <!-- Best Score -->
        <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
            <div class="widget-stat card">
                <div class="card-body p-4">
                    <h4 class="card-title">Best Score</h4>
                    <h3>95%</h3>
                    <div class="progress mb-2">
                        <div class="progress-bar progress-animated bg-red" style="width: 95%"></div>
                    </div>
                    <small>Highest Score in a Quiz</small>
                    <!-- Restart Quiz Button -->
                </div>
            </div>
        </div>

        <!-- Upcoming Quizzes -->
        <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
            <div class="widget-stat card">
                <div class="card-body p-4">
                    <h4 class="card-title">Upcoming Quizzes</h4>
                    <h3>3</h3>
                    <div class="progress mb-2">
                        <div class="progress-bar progress-animated bg-success" style="width: 30%"></div>
                    </div>
                    <small>3 Quizzes in the Next 2 Weeks</small>
                    <!-- Restart Quiz Button -->
                    <button class="btn btn-outline-primary mt-3" onclick="restartQuiz(4)">Restart Last Quiz</button>
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
