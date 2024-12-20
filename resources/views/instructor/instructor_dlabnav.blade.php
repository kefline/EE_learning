<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li><a href="/instructor_dashboard" class="" aria-expanded="false">
                    <i class="bi bi-grid"></i>
                    <span class="nav-text">Dashboard</span>
                </a></li>

            <li><a href="/instructor_course" class="" aria-expanded="false">
                    <i class="bi bi-book"></i>
                    <span class="nav-text">My Courses</span>
                </a></li>

            <li><a href="/instructor_student" class="" aria-expanded="false">
                    <i class="bi bi-people"></i>
                    <span class="nav-text">Students</span>
                </a></li>

            <li class="dropdown">
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-pencil"></i>
                    <span class="nav-text">Assignments</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('assignments.index') }}">View Assignments</a></li>
                    <li><a href="{{ route('assignments.create') }}">Add Assignments</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-file-earmark-text"></i>

                    <span class="nav-text">Exam</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('instructor_exam.index')}}">List Exams</a></li>
                    <li><a href="{{route('instructor_exam.create')}}">Add Exams</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-question-circle"></i>

                    <span class="nav-text">Questions</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('instructor_questions.index')}}">List Questions</a></li>
                    <li><a href="{{route('instructor_questions.create')}}">Add Questions</a></li>
                </ul>
            </li>



            <li><a href="/instructor_grades" class="" aria-expanded="false">
                    <i class="bi bi-pencil-square"></i>
                    <span class="nav-text">Grades</span>
                </a></li>

            <li><a href="/instructor_schedule" class="" aria-expanded="false">
                    <i class="bi bi-calendar"></i>
                    <span class="nav-text">Schedule</span>
                </a></li>

            <li><a href="/resources" class="" aria-expanded="false">
                    <i class="bi bi-folder"></i>
                    <span class="nav-text">Resources</span>
                </a>

            </li>

            <li><a href="/notifications" class="" aria-expanded="false">
                    <i class="bi bi-bell"></i>
                    <span class="nav-text">Notifications</span>
                </a></li>

            <li><a href="/analytics" class="" aria-expanded="false">
                    <i class="bi bi-graph-up"></i>
                    <span class="nav-text">Analytics</span>
                </a></li>



            <li><a href="/help" class="" aria-expanded="false">
                    <i class="bi bi-question-circle"></i>
                    <span class="nav-text">Help</span>
                </a></li>



            <li><a href="/profile" class="" aria-expanded="false">
                    <i class="bi bi-person"></i>
                    <span class="nav-text">Profile</span>
                </a></li>



            <li><a href="/logout" class="" aria-expanded="false">
                    <i class="bi bi-power"></i>
                    <span class="nav-text">Logout</span>
                </a></li>
        </ul>

        <div class="plus-box">
            <div class="d-flex align-items-center">
                <h5>Upgrade your Account</h5>
                <img src="images/medal.png" alt="">
            </div>
            <p>Upgrade</p>
            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Upgrade</a>
        </div>
    </div>

</div>
