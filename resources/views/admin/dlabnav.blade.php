<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a href="/" aria-expanded="false">
                    <i class="bi bi-grid"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-clipboard-data"></i>

                    <span class="nav-text">Levels</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('levels.index') }}">List levels</a></li>
                    <li><a href="{{ route('levels.create') }}">Add levels</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-building"></i>
                    <span class="nav-text">Department</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('departments.index') }}">List Departments</a></li>
                    <li><a href="{{ route('departments.create') }}">Add Department</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-book"></i>
                    <span class="nav-text">Programs</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('programs.index') }}">List Programs</a></li>
                    <li><a href="{{ route('programs.create') }}">Add Programs</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-calendar"></i>
                    <span class="nav-text">Academic Years</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('years.create') }}">Add Academic Year</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-journal"></i>
                    <span class="nav-text">Courses</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('courses.index') }}">List Courses</a></li>
                    <li><a href="{{ route('courses.create') }}">Add Course</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-star"></i>
                    <span class="nav-text">Specializations</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('specializations.create') }}">Add Specialization</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-person"></i>
                    <span class="nav-text">Instructors</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('Teachers.index') }}">List Instructors</a></li>
                    <li><a href="{{ route('Teachers.create') }}">Add Instructor</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-person-badge"></i>
                    <span class="nav-text">Students</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('dents.index') }}">List Students</a></li>
                    <li><a href="{{ route('dents.create') }}">Add Student</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-file-earmark-text"></i>
                    <span class="nav-text">Exams</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('exams.index') }}">List Exams</a></li>
                    <li><a href="{{ route('exams.create') }}">Add Exam</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-file-earmark-text"></i>
                    <span class="nav-text">Questions</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('questions.index') }}">List Questions</a></li>
                    <li><a href="{{ route('questions.create') }}">Add Questions</a></li>
                </ul>
            </li>
            <li>
                <a href="/admin_results" aria-expanded="false">
                    <i class="bi bi-trophy"></i>
                    <span class="nav-text">Results</span>
                </a>
            </li>
            <li>
                <a href="#" aria-expanded="false">
                    <i class="bi bi-graph-up"></i>
                    <span class="nav-text">Analytics</span>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="/settings" aria-expanded="false">
                    <i class="bi bi-gear"></i>
                    <span class="nav-text">Settings</span>
                </a>
                <ul aria-expanded="false">
                    <!-- Add settings links here if needed -->
                </ul>
            </li>
        </ul>
        
        <div class="plus-box">
            <div class="d-flex align-items-center">
                <h5>Upgrade your Skills</h5>
                <img src="images/medal.png" alt="">
            </div>
            <p>Use our system for more exams online</p>
            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Online</a>
        </div>

        <div class="copyright">
            <p><strong>Online Examination System</strong></p>
        </div>
    </div>
</div>
