<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    <link href="/Assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="/Assets/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="/Assets/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


</head>

<body>

    <div id="main-wrapper">
        <!-- Include navigation header -->
        @include('admin.nav-header')

        <!-- Include header -->
        @include('admin.header')

        <!-- Include sidebar -->
        @include('admin.dlabnav')

        <!-- Main Content -->
        <div class="content-body">
            <div class="container-fluid">
                @yield('content') <!-- Placeholder for page content -->
            </div>
        </div>
    </div>

    {{-- <script src="{{ asset('Assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('Assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('Assets/vendor/apexchart/apexchart.js') }}"></script>

    <script src="{{ asset('Assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('Assets/js/plugins-init/datatables.init.js') }}"></script>

    <script src="{{ asset('Assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('Assets/js/custom.js') }}"></script>
    <script src="{{ asset('Assets/js/dlabnav-init.js') }}"></script>
    <script src="{{ asset('Assets/js/demo.js') }}"></script>
    <script src="{{ asset('Assets/js/styleSwitcher.js') }}"></script> --}}

    <!-- External CDN -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  




<script src="/Assets/vendor/global/global.min.js"></script>
    <script src="/Assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

    <script src="/Assets/js/custom.js"></script>
    <script src="/Assets/js/dlabnav-init.js"></script>
    <script src="/Assets/js/demo.js"></script>
    <script src="/Assets/js/styleSwitcher.js"></script>
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


</body>

</html>
