<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          integrity="sha384-3B6NwesSXE7YJlcLI9RpRqGf2p/EgVH8BgoKTaUrmKNDkHPStTQ3EyoYjCGXaOTS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="{{ asset('css/decorations/decorations.css') }}">
    <link rel="stylesheet" href="{{ asset('css/decorations/decorations_modal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/comments/comments.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/home_header_footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/prices/prices.css') }}">
    <title>@yield('title')</title>
    <!-- vendor styles -->
    @yield('vendor-style')
    <!-- page styles -->
    @yield('page-style')
</head>
<body>
<!-- content section -->
@yield('content')

<!-- vendor scripts -->
@yield('vendor-script')
<!-- page scripts -->
@yield('page-script')
</body>
</html>
