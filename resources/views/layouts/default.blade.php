<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PSTN Service :: User Portal</title>
    <link rel="stylesheet" href="/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/iconfonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="/css/portal.css">
    <link rel="stylesheet" href="/css/theme.css">
    <link rel="shortcut icon" href="/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('includes.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            @include('includes.sidebar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                @include('includes.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <script src="/js/app.js"></script>
    @yield('scripts')
</body>

</html>
