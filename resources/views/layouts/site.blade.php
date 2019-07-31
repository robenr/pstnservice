<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
    <!-- Favicons -->
    <link href="/images/favicon.png" rel="icon">
    <link href="/images/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- /header -->
    @include('includes.site.header')
    <!-- /header -->
    
    @yield('content')

    <!-- Footer -->
    @include('includes.site.footer')
    <!-- Footer -->

    <script src="{{ asset('js/scripts.js') }}"></script>
    @yield('scripts')
</body>

</html>
