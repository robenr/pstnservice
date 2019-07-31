<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PSTN Service :: User Portal Login</title>
    <!-- inject:css -->
    <link href="{{ asset('iconfonts/mdi/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('iconfonts/ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('iconfonts/typicons/src/font/typicons.css') }}" rel="stylesheet">
    <link href="{{ asset('iconfonts/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor.bundle.base.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor.bundle.addons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/portal.css') }}" rel="stylesheet">
    <!-- plugin css for this page -->
    <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon">
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
                @yield('content')
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../../../assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="../../../assets/js/shared/off-canvas.js"></script>
    <script src="../../../assets/js/shared/misc.js"></script>
    <!-- endinject -->
</body>

</html>
