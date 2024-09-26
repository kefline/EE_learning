<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>

    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    <link href="/Assets/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="/Assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

    <link href="/Assets/css/style.css" rel="stylesheet">


</head>

<body>


    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>

    <div id="main-wrapper">


        @include('admin.nav-header')

        <!-- Include header -->
        @include('admin.header')

        <!-- Include sidebar -->
        @include('admin.dlabnav')

        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-xxl-12">
                        <div class="row">
                            <div class="col-xl-12 col-xxl-6">
                                <div class="card dlab-join-card h-auto">
                                    <div class="card-body">
                                        <div class="dlab-media d-flex justify-content-between">
                                            <div class="dlab-content">
                                                <h4>User Management Overview</h4>
                                                <p>Manage users effectively and monitor key statistics.</p>

                                                <button class="btn btn-primary mt-3">View User List</button>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6">
                                <div class="dlab-cource bg-secondary">
                                    <div class="d-flex align-items-center">
                                        <span class="course-icon">
                                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M19 0.25H4C3.00544 0.25 2.05161 0.645088 1.34835 1.34835C0.645088 2.05161 0.25 3.00544 0.25 4V19C0.25 19.9946 0.645088 20.9484 1.34835 21.6517C2.05161 22.3549 3.00544 22.75 4 22.75H19C19.9946 22.75 20.9484 22.3549 21.6517 21.6517C22.3549 20.9484 22.75 19.9946 22.75 19V4C22.75 3.00544 22.3549 2.05161 21.6517 1.34835C20.9484 0.645088 19.9946 0.25 19 0.25ZM16.875 8.5125L11.1625 16.0125C11.0461 16.1638 10.8965 16.2864 10.7253 16.3709C10.5542 16.4554 10.3659 16.4995 10.175 16.5C9.98513 16.501 9.79753 16.4588 9.62643 16.3765C9.45532 16.2942 9.30522 16.174 9.1875 16.025L6.1375 12.1375C6.03655 12.0078 5.96212 11.8595 5.91848 11.7011C5.87484 11.5426 5.86283 11.3772 5.88314 11.2141C5.90346 11.051 5.95569 10.8935 6.03687 10.7506C6.11804 10.6077 6.22657 10.4822 6.35625 10.3812C6.61815 10.1774 6.95032 10.0859 7.27968 10.1269C7.44276 10.1472 7.60025 10.1994 7.74314 10.2806C7.88604 10.3618 8.01155 10.4703 8.1125 10.6L10.15 13.2L14.875 6.95C14.9751 6.81868 15.1002 6.70836 15.2429 6.62536C15.3857 6.54235 15.5434 6.48828 15.7071 6.46622C15.8707 6.44417 16.0371 6.45457 16.1968 6.49682C16.3564 6.53908 16.5062 6.61237 16.6375 6.7125C16.7688 6.81263 16.8791 6.93765 16.9621 7.08042C17.0451 7.22318 17.0992 7.3809 17.1213 7.54456C17.1433 7.70823 17.1329 7.87463 17.0907 8.03427C17.0484 8.19392 16.9751 8.34368 16.875 8.475V8.5125Z"
                                                    fill="var(--secondary)" />
                                            </svg>
                                        </span>
                                        <div class="ms-2">
                                            <h4 style="font-size: 12px; margin: 0;">Total Students: 1,500</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="dlab-cource">
                                    <div class="d-flex align-items-center">
                                        <span class="course-icon">
                                            <svg width="23" height="23" viewBox="0 0 21 26" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.3201 4.65852H2.86175C2.35544 4.6591 1.87003 4.8592 1.51201 5.21494C1.15399 5.57068 0.952605 6.053 0.952026 6.55609V24.5829C0.952032 24.7573 1.00037 24.9282 1.09175 25.077C1.18312 25.2259 1.31399 25.3468 1.47 25.4266C1.626 25.5063 1.80111 25.5418 1.97609 25.5292C2.15108 25.5166 2.31918 25.4563 2.46195 25.355L8.5901 21.005L14.72 25.355C14.8628 25.4563 15.0309 25.5166 15.2058 25.5292C15.3808 25.5418 15.5559 25.5063 15.7119 25.4265C15.8679 25.3468 15.9988 25.2258 16.0901 25.077C16.1815 24.9282 16.2298 24.7572 16.2298 24.5829V6.55609C16.2292 6.053 16.0278 5.57068 15.6698 5.21494C15.3118 4.8592 14.8264 4.6591 14.3201 4.65852V4.65852Z"
                                                    fill="#21262E" />
                                                <path
                                                    d="M18.1395 0.863403H5.72635C5.4731 0.863403 5.23023 0.963364 5.05116 1.14129C4.87209 1.31923 4.77148 1.56055 4.77148 1.81218C4.77148 2.06382 4.87209 2.30514 5.05116 2.48307C5.23023 2.661 5.4731 2.76096 5.72635 2.76096H18.1395V20.7878C18.1395 21.0394 18.2401 21.2808 18.4192 21.4587C18.5983 21.6366 18.8412 21.7366 19.0944 21.7366C19.3476 21.7366 19.5905 21.6366 19.7696 21.4587C19.9487 21.2808 20.0493 21.0394 20.0493 20.7878V2.76096C20.0487 2.25788 19.8473 1.77556 19.4893 1.41982C19.1313 1.06408 18.6459 0.863979 18.1395 0.863403V0.863403Z"
                                                    fill="#21262E" />
                                            </svg>
                                        </span>
                                        <div class="ms-2">
                                            <h4 style="font-size: 12px; margin: 0;">Active Teachers: 112</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12">
                                <div class="dlab-cource bg-primary">
                                    <div class="d-flex align-items-center">
                                        <span class="course-icon">
                                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18.1485 0.886042C17.6699 0.886042 17.2169 1.06586 16.9148 1.44454L12.7504 5.81502L8.58601 1.44454C8.28395 1.06586 7.83101 0.886042 7.35252 0.886042C6.30787 0.886042 5.42757 1.85468 5.42757 3.00488C5.42757 3.63866 5.7583 4.24493 6.32252 4.7078L11.4869 8.91156L8.58601 11.8143C7.77536 12.7084 7.77536 14.3111 8.58601 15.2053L11.4869 18.108L16.3225 22.3958C16.6986 22.6765 17.2498 22.6765 17.6234 22.3958C17.9969 22.1151 18.1933 21.565 18.1485 21.0623C18.1098 20.7748 17.9181 20.5059 17.6234 20.2291L12.7504 16.5L15.6502 13.5983C16.4982 12.7042 16.4982 11.113 15.6502 10.2188L12.7504 7.31905L17.6234 3.00488C18.0697 2.56636 18.3054 1.94694 18.1485 1.44454C18.1078 1.06586 17.6616 0.886042 17.1687 0.886042H18.1485Z"
                                                    fill="white" />
                                            </svg>
                                        </span>
                                        <div class="ms-2">
                                            <h4 style="font-size: 12px; margin: 0;">Total Courses: 76</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12 col-xxl-6">
                                <div class="card score-active">
                                    <div class="card-header border-0 flex-wrap">
                                        <h4>Learning Activity Overview</h4>
                                        <ul class="d-flex">
                                            <li>
                                                <svg class="me-2" width="12" height="12" viewBox="0 0 12 12"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1.5" y="1.5" width="9" height="9" rx="4.5"
                                                        fill="white" stroke="var(--primary)" stroke-width="3" />
                                                </svg>
                                                Total Lessons Completed
                                            </li>
                                            <li>
                                                <svg class="me-2" width="12" height="12" viewBox="0 0 12 12"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1.5" y="1.5" width="9" height="9" rx="4.5"
                                                        fill="white" stroke="var(--secondary)" stroke-width="3" />
                                                </svg>
                                                Total Assessments Taken
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body pb-1 custome-tooltip style-1 py-0">
                                        <div id="activity" class="chartContainer"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-12">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card score-active">
                                    <div class="card-header border-0 pb-2 flex-wrap">
                                        <h4>User Management Activity</h4>
                                        <ul class="d-flex">
                                            <li>
                                                <svg class="me-2" width="12" height="12" viewBox="0 0 12 12"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1.5" y="1.5" width="9" height="9"
                                                        rx="4.5" fill="white" stroke="var(--primary)"
                                                        stroke-width="3" />
                                                </svg>
                                                Total Students
                                            </li>
                                            <li>
                                                <svg class="me-2" width="12" height="12"
                                                    viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1.5" y="1.5" width="9" height="9"
                                                        rx="4.5" fill="white" stroke="var(--secondary)"
                                                        stroke-width="3" />
                                                </svg>
                                                Total Teachers
                                            </li>
                                        </ul>
                                        <div class="d-flex align-items-center">
                                            <select class="default-select dashboard-select tp-btn-light btn-dark">
                                                <option data-display="This Month">This Month</option>
                                                <option value="2">Last Month</option>
                                                <option value="3">This Year</option>
                                            </select>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);"
                                                    class="btn-link btn sharp tp-btn-light btn-dark"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg width="24" height="25" viewBox="0 0 24 25"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.0012 9.86C11.6544 9.86 11.3109 9.92832 10.9905 10.061C10.67 10.1938 10.3789 10.3883 10.1336 10.6336C9.88835 10.8788 9.6938 11.17 9.56107 11.4905C9.42834 11.8109 9.36002 12.1544 9.36002 12.5012C9.36002 12.848 9.42834 13.1915 9.56107 13.5119C9.6938 13.8324 9.88835 14.1236 10.1336 14.3688C10.3789 14.6141 10.67 14.8086 10.9905 14.9413C11.3109 15.0741 11.6544 15.1424 12.0012 15.1424C12.7017 15.1422 13.3734 14.8638 13.8687 14.3684C14.3639 13.873 14.642 13.2011 14.6418 12.5006C14.6417 11.8001 14.3632 11.1284 13.8678 10.6332C13.3724 10.138 12.7005 9.85984 12 9.86H12.0012ZM3.60122 9.86C3.25437 9.86 2.91092 9.92832 2.59048 10.061C2.27003 10.1938 1.97887 10.3883 1.73361 10.6336C1.48835 10.8788 1.2938 11.17 1.16107 11.4905C1.02834 11.8109 0.960022 12.1544 0.960022 12.5012C0.960022 12.848 1.02834 13.1915 1.16107 13.5119C1.2938 13.8324 1.48835 14.1236 1.73361 14.3688C1.97887 14.6141 2.27003 14.8086 2.59048 14.9413C2.91092 15.0741 3.25437 15.1424 3.60122 15.1424C4.30171 15.1422 4.97345 14.8638 5.46866 14.3684C5.96387 13.873 6.24198 13.2011 6.24182 12.5006C6.24166 11.8001 5.96324 11.1284 5.46781 10.6332C4.97237 10.138 4.30051 9.85984 3.60002 9.86H3.60122ZM20.4012 9.86C20.0544 9.86 19.7109 9.92832 19.3905 10.061C19.07 10.1938 18.7789 10.3883 18.5336 10.6336C18.2884 10.8788 18.0938 11.17 17.9611 11.4905C17.8283 11.8109 17.76 12.1544 17.76 12.5012C17.76 12.848 17.8283 13.1915 17.9611 13.5119C18.0938 13.8324 18.2884 14.1236 18.5336 14.3688C18.7789 14.6141 19.07 14.8086 19.3905 14.9413C19.7109 15.0741 20.0544 15.1424 20.4012 15.1424C21.1017 15.1422 21.7734 14.8638 22.2687 14.3684C22.7639 13.873 23.042 13.2011 23.0418 12.5006C23.0417 11.8001 22.7632 11.1284 22.2678 10.6332C21.7724 10.138 21.1005 9.85984 20.4 9.86H20.4012Z"
                                                            fill="#A098AE" />
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete
                                                        User</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit User</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pb-1 custome-tooltip pt-0">
                                        <div id="chartBar" class="chartBar"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6">
                                <div class="card">
                                    <div class="card-body pt-3">
                                        <div id="redial"></div>
                                        <div class="redial-content">
                                            <h4>My Progress</h4>

                                            <p>Pending Course Approvals: <strong>3</strong></p>
                                            <a href="admin-dashboard.html" class="btn btn-primary">View Dashboard</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-8 col-lg-6">
                                <div class="card">
                                    <div class="card-body card-calendar">
                                        <input type='text' class="form-control d-none" id='datetimepicker' />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <script src="/Assets/vendor/global/global.min.js"></script>
    <script src="/Assets/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="/Assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

    <script src="/Assets/vendor/apexchart/apexchart.js"></script>

    <script src="/Assets/vendor/bootstrap-datetimepicker/js/moment.js"></script>
    <script src="/Assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

    <script src="/Assets/js/dashboard/dashboard-1.js"></script>

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
</body>

</html>
