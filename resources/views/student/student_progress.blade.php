@extends('layout.student_app')
@section('title', 'student_progress')
@section('content')
    <div class="row">


        <div class="row">
            <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body p-4">
                        <h4 class="card-title">Total Exams</h4>
                        <h3>3280</h3>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-animated bg-primary" style="width: 80%"></div>
                        </div>
                        <small>80% Progress Towards Annual Goal</small>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body p-4">
                        <h4 class="card-title">Assignments Completed</h4>
                        <h3>245</h3>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-animated bg-warning" style="width: 50%"></div>
                        </div>
                        <small>50% of Assignments Completed in the Last 30 Days</small>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body p-4">
                        <h4 class="card-title">Courses In Progress</h4>
                        <h3>28</h3>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-animated bg-red" style="width: 76%"></div>
                        </div>
                        <small>76% of Courses Active in the Current Term</small>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body p-4">
                        <h4 class="card-title">Quiz Completion Rate</h4>
                        <h3>2516</h3>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-animated bg-success" style="width: 30%"></div>
                        </div>
                        <small>30% Quizzes Completed by Students</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-xxl-6 col-lg-6">
            <div class="card">
                <div class="card-header border-0 pb-0">
                    <h4 class="card-title">Recent Progress</h4>
                </div>
                <div class="card-body">
                    <div id="DZ_W_TimeLine" class="widget-timeline dlab-scroll height370">
                        <ul class="timeline">
                            <li>
                                <div class="timeline-badge primary"></div>
                                <a class="timeline-panel text-muted" href="#">
                                    <span>10 minutes ago</span>
                                    <h6 class="mb-0">John submitted Assignment 3 <strong class="text-primary">Grade:
                                            A</strong>.</h6>
                                </a>
                            </li>
                            <li>
                                <div class="timeline-badge info"></div>
                                <a class="timeline-panel text-muted" href="#">
                                    <span>20 minutes ago</span>
                                    <h6 class="mb-0">Mary completed Quiz 5 <strong class="text-info">Score:
                                            85%</strong>.</h6>
                                    <p class="mb-0">Excellent improvement on this attempt...</p>
                                </a>
                            </li>
                            <li>
                                <div class="timeline-badge danger"></div>
                                <a class="timeline-panel text-muted" href="#">
                                    <span>30 minutes ago</span>
                                    <h6 class="mb-0">Jack missed the deadline for Project 1 <strong
                                            class="text-warning">Incomplete</strong>.</h6>
                                </a>
                            </li>
                            <li>
                                <div class="timeline-badge success"></div>
                                <a class="timeline-panel text-muted" href="#">
                                    <span>1 hour ago</span>
                                    <h6 class="mb-0">Lisa improved her test score to <strong
                                            class="text-success">92%</strong> in Math.</h6>
                                </a>
                            </li>
                            <li>
                                <div class="timeline-badge warning"></div>
                                <a class="timeline-panel text-muted" href="#">
                                    <span>2 hours ago</span>
                                    <h6 class="mb-0">Tom uploaded a project <strong class="text-warning">Review
                                            Pending</strong>.</h6>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-xxl-6 col-lg-6">
            <div class="card">
                <div class="card-header border-0 pb-0">
                    <h4 class="card-title">Upcoming Tasks</h4>
                </div>
                <div class="card-body">
                    <div id="DZ_W_TimeLine11" class="widget-timeline dlab-scroll style-1 height370">
                        <ul class="timeline">
                            <li>
                                <div class="timeline-badge primary"></div>
                                <a class="timeline-panel text-muted" href="#">
                                    <span>Due in 1 day</span>
                                    <h6 class="mb-0">Submit final draft for English paper <strong class="text-primary">Due
                                            Tomorrow</strong>.</h6>
                                </a>
                            </li>
                            <li>
                                <div class="timeline-badge info"></div>
                                <a class="timeline-panel text-muted" href="#">
                                    <span>Due in 2 days</span>
                                    <h6 class="mb-0">Math homework submission <strong class="text-info">Due in 2
                                            days</strong>.</h6>
                                    <p class="mb-0">Chapters 5-6 review questions...</p>
                                </a>
                            </li>
                            <li>
                                <div class="timeline-badge danger"></div>
                                <a class="timeline-panel text-muted" href="#">
                                    <span>Due in 3 days</span>
                                    <h6 class="mb-0">Physics project milestone <strong class="text-danger">Due
                                            in 3 days</strong>.</h6>
                                </a>
                            </li>
                            <li>
                                <div class="timeline-badge success"></div>
                                <a class="timeline-panel text-muted" href="#">
                                    <span>Due in 1 week</span>
                                    <h6 class="mb-0">Prepare for History final exam.</h6>
                                </a>
                            </li>
                            <li>
                                <div class="timeline-badge warning"></div>
                                <a class="timeline-panel text-muted" href="#">
                                    <span>Due in 1 week</span>
                                    <h6 class="mb-0">Submit Chemistry lab report.</h6>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-xxl-6 col-lg-6">
            <div class="card border-0 pb-0">
                <div class="card-header border-0 pb-0">
                    <h4 class="card-title">Messages</h4>
                </div>
                <div class="card-body">
                    <div id="DZ_W_Todo3" class="widget-media dlab-scroll height370">
                        <ul class="timeline">
                            <li>
                                <div class="timeline-panel">
                                    <div class="media me-2">
                                        <img alt="image" width="50" src="images/avatar/1.jpg">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mb-1">Mr. Smith <small class="text-muted">2 hours ago</small>
                                        </h5>
                                        <p class="mb-1">Please revise your essay on time.</p>
                                        <a href="#" class="btn btn-primary btn-xxs shadow">Reply</a>
                                        <a href="#" class="btn btn-outline-danger btn-xxs">Delete</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-panel">
                                    <div class="media me-2 media-info">KB</div>
                                    <div class="media-body">
                                        <h5 class="mb-1">Ms. Johnson <small class="text-muted">1 hour
                                                ago</small></h5>
                                        <p class="mb-1">You did a great job in the last assignment!</p>
                                        <a href="#" class="btn btn-primary btn-xxs shadow">Reply</a>
                                        <a href="#" class="btn btn-outline-danger btn-xxs">Delete</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-panel">
                                    <div class="media me-2 media-success">
                                        <img alt="image" width="50" src="images/avatar/2.jpg">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mb-1">Dr. Lee <small class="text-muted">3 hours ago</small>
                                        </h5>
                                        <p class="mb-1">Make sure to attend tomorrow's review session.</p>
                                        <a href="#" class="btn btn-primary btn-xxs shadow">Reply</a>
                                        <a href="#" class="btn btn-outline-danger btn-xxs">Delete</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


























    </div>

@endsection
@section('scripts')
<script src="/Assets/vendor/global/global.min.js"></script>
<script src="/Assets/vendor/chart.js/Chart.bundle.min.js"></script>
<script src="/Assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

<script src="/Assets/vendor/apexchart/apexchart.js"></script>

<script src="/Assets/vendor/bootstrap-datetimepicker/js/moment.js"></script>
<script src="/Assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

<script src="/Assets/vendor/day-fullcalendar/main.min.js"></script>
<script src="/Assets/vendor/peity/jquery.peity.min.js"></script>

<script src="/Assets/js/dashboard/instructor-dashboard.js"></script>

<script src="/Assets/js/custom.js"></script>
<script src="/Assets/js/dlabnav-init.js"></script>
<script src="/Assets/js/demo.js"></script>
<script src="/Assets/js/styleSwitcher.js"></script>
<script>
    $(function() {
        $('#datetimepicker').datetimepicker({
            inline: true,
        });
    });

    $(document).ready(function() {
        $(".booking-calender .fa.fa-clock-o").removeClass(this);
        $(".booking-calender .fa.fa-clock-o").addClass('fa-clock');
    });
</script>
@endsection


