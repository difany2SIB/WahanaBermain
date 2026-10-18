<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Wahana Bermain')</title>

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }}">

    <!-- CSS Volt -->
    <link rel="stylesheet" href="{{ asset('css/volt.css') }}">

    

</head>

<body>

    @include('layouts.partials.navbar')

    
    <main>
        @yield('content')
    </main>

    <!-- JavaScript Bootstrap -->
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
