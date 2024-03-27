<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> @yield('title') </title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{ asset('assets-admin') }}/vendors/typicons.font/font/typicons.css">
    <link rel="stylesheet" href="{{ asset('assets-admin') }}/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{ asset('assets-admin') }}/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="icon" type="image/png" href="{{ asset('assets') }}/images/icons/favicon.png" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
</head>

<body>

    @yield('main-content')

    <!-- base:js -->
    <script src="{{ asset('assets-admin') }}/vendors/js/vendor.bundle.base.js"></script>
    <script src="{{ asset('assets-admin') }}/js/off-canvas.js"></script>
    <script src="{{ asset('assets-admin') }}/js/hoverable-collapse.js"></script>
    <script src="{{ asset('assets-admin') }}/js/template.js"></script>
    <script src="{{ asset('assets-admin') }}/js/settings.js"></script>
    <script src="{{ asset('assets-admin') }}/js/todolist.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="{{ asset('assets-admin') }}/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="{{ asset('assets-admin') }}/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="{{ asset('assets-admin') }}/js/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>

</html>
