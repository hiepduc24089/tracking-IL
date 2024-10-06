<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta content="DayOne - It is one of the Major Dashboard Template..." name="description">
    <meta content="Spruko Technologies Private Limited" name="author">
    <meta name="keywords" content="admin dashboard, dashboard ui, backend, admin panel..."/>

    <title>Fun Academy</title>

    <link rel="icon" type="image/x-icon" href="/assets/images/admin/logo.png">
    <link rel="icon" href="{{ asset('images/brand/favicon.ico') }}" type="image/x-icon"/>
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/admin/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/admin/plugins.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="login-img">

@yield('content')

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
