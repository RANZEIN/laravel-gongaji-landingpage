<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gongaji Landing Page')</title>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/libs/OwlCarousel-2/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/iconfont/tabler-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">

    @stack('styles')
</head>
<body>
    @include('partials.header')

    @yield('content')

    @include('partials.footer')

    <!-- JavaScript Files -->
    <script src="{{ asset('dist/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/libs/OwlCarousel-2/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dist/js/custom.js') }}"></script>

     @stack('scripts')
</body>
</html>
