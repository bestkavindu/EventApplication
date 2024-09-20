<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    @hasSection('head')
    @yield('head')
    @else
        <title>Tango Del Dia</title>
        <meta name="description" content="Tango Del Dia">
    @endif
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Links of CSS files -->
    @include('layouts.css')
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->



    @yield('content')
    <!-- JavaScript Libraries -->
    @include('layouts.js')
</body>

</html>
