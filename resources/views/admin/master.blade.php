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
    <link href="{{ asset('plugins/icons/icons.css') }} " rel="stylesheet"/>
    <link href="{{ asset('switcher/css/switcher.css') }} " rel="stylesheet"/>
    <link href="{{ asset('switcher/demo.css') }} " rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="app sidebar-mini ltr">

<div class="page">
    <div class="page-main">
        @include('admin.partials.header')
        <!-- APP-SIDEBAR -->
        <div class="sticky">
            @include('admin.partials.side_bar')
        </div>
{{--        App Content--}}
        <div class="app-content main-content">
            @yield('content')
        </div>
    </div>
</div>

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/sidemenu/sidemenu.js') }}"></script>
<script src="{{ asset('plugins/sidebar/sidebar.js') }}"></script>
<script src="{{ asset('switcher/js/switcher.js') }}"></script>
<script src="{{ asset('assets/js/admin/app.js') }}"></script>
<script src="{{ asset('assets/js/admin/custom.js') }}"></script>
<script src="{{ asset('assets/js/admin/sticky.js') }}"></script>
</body>
</html>
