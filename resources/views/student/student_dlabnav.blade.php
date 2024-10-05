<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li><a href="/student_dashboard" aria-expanded="false">
                    <i class="bi bi-grid"></i>
                    <span class="nav-text">Dashboard</span>
                </a></li>

            <li><a href="/student_profile" aria-expanded="false">
                    <i class="bi bi-person"></i>
                    <span class="nav-text">Profile</span>
                </a></li>

            <li><a href="/student_course" aria-expanded="false">
                    <i class="bi bi-book"></i>
                    <span class="nav-text">Courses</span>
                </a></li>

            <li><a href="{{route('Task.index')}}" aria-expanded="false">
                    <i class="bi bi-file-earmark-text"></i>
                    <span class="nav-text">Assignments</span>
                </a></li>

            <!-- Exams -->
            <li class="has-arrow">
                <a href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-clipboard"></i>
                    <span class="nav-text">Exams</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('student.question_level')}}">Question Levels</a></li>
                    <li><a href="{{route('student.question_type')}}">Question Types</a></li>
                    <li><a href="{{route('student.take')}}">Take Exam</a></li>
                    <li><a href="/quiz">Quiz</a></li>
                    <li><a href="/calendar">Calendar</a></li>
                </ul>
            </li>

            <li><a href="/forum" aria-expanded="false">
                    <i class="bi bi-chat-dots"></i>
                    <span class="nav-text">Forum</span>
                </a></li>

            <li><a href="/result" aria-expanded="false">
                    <i class="bi bi-trophy"></i>
                    <span class="nav-text">Results</span>
                </a></li>

            <li><a href="/student_progress" aria-expanded="false">
                    <i class="bi bi-arrow-repeat"></i>
                    <span class="nav-text">My Progress</span>
                </a></li>

            <li><a href="/announcements" aria-expanded="false">
                    <i class="bi bi-exclamation-triangle"></i>
                    <span class="nav-text">Announcements</span>
                </a></li>



            <li><a href="/logout" aria-expanded="false">
                    <i class="bi bi-box-arrow-right"></i>
                    <span class="nav-text">Logout</span>
                </a></li>
        </ul>

        <div class="plus-box">
            <div class="d-flex align-items-center">
                <h5>Improve Your Results</h5>
                <img src="images/medal.png" alt="Medal">
            </div>
            <p>Upgrade your scores to higher standards</p>
            <a href="/quiz" class="btn btn-primary btn-sm">Take Quiz</a>
        </div>
    </div>
</div>