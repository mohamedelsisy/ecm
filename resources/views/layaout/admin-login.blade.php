<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    <title>
        تسجيل الدخول
    </title>

    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.rtl.css')  }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap-grid.rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap-reboot.rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap-utilities.rtl.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">

</head>
<body>


    @yield('content')

<script src="{{ asset('assets/admin/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('assets/admin/js/bootstrap.esm.js') }}"></script>
<script src="{{ asset('assets/admin/js/bootstrap.js') }}"></script>
</body>
</html>
