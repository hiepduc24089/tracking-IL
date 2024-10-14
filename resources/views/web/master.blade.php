<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta content="Fun Academy" name="description">
    <meta content="Fun Academy" name="author">
    <meta name="keywords" content="khoa hoc online, khoa hoc, hoc toan online"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    @yield('meta')
    <link rel="icon" type="image/x-icon" href="/assets/images/admin/logo.png">
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap"
          rel="stylesheet">
    <link href="{{ asset('assets/css/web/all.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/web/header.css') }}" rel="stylesheet"/>
    @yield('style_page')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('assets/js/web/all.js')}}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
</head>
<body class="">

<header>
    @include('web.partials.header')
</header>

@yield('content')

<footer>
    @include('web.partials.footer')
</footer>

@stack('scripts')
</body>
</html>
