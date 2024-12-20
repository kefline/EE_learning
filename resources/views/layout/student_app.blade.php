<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>


    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    <link href="/Assets/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="/Assets/vendor/fullcalendar/css/main.min.css" rel="stylesheet">

    <link href="/Assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">

    <link href="/Assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="/Assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">


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


        @include('student.student_nav-header')



        @include('student.student_header')
        @include('student.student_dlabnav')


        <div class="content-body">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

        @yield('scripts')
    </body>

</html>
