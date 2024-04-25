<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') </title>
    <link rel="stylesheet" href="{{ asset('assets-admin') }}/vendors/typicons.font/font/typicons.css">
    <link rel="stylesheet" href="{{ asset('assets-admin') }}/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{ asset('assets-admin') }}/css/vertical-layout-light/style.css">
    <link rel="icon" type="image/png" href="{{ asset('assets') }}/images/icons/favicon.png" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


</head>

<body>
    @include('admin.layouts.navbar')

    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">
            @include('admin.layouts.sidebar')
            @yield('main-content')
        </div>
    </div>

    @include('admin.layouts.footer')


    <!-- base:js -->
    <script src="{{ asset('assets-admin') }}/vendors/js/vendor.bundle.base.js"></script>
    <script src="{{ asset('assets-admin') }}/js/off-canvas.js"></script>
    <script src="{{ asset('assets-admin') }}/js/hoverable-collapse.js"></script>
    <script src="{{ asset('assets-admin') }}/js/template.js"></script>
    <script src="{{ asset('assets-admin') }}/js/settings.js"></script>
    <script src="{{ asset('assets-admin') }}/js/todolist.js"></script>
    <script src="{{ asset('assets-admin') }}/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="{{ asset('assets-admin') }}/vendors/chart.js/Chart.min.js"></script>
    <script src="{{ asset('assets-admin') }}/js/dashboard.js"></script>
</body>

</html>
