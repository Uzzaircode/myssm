<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('page-title')</title>
    <!-- Bootstrap4 files-->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
    <!-- plugin: fancybox  -->
    <link href="{{asset('plugins/fancybox/fancybox.min.css')}}" type="text/css" rel="stylesheet">
    <!-- custom style -->
    <link href="{{asset('css/ui.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet" media="only screen and (max-width: 1200px)" />
    @yield('page-css')
    <style>
        .modal-full {
            min-width: 100%;
            margin: 0;
        }

        .modal-full .modal-content {
            min-height: 100vh;
        }

    </style>
    <!-- custom javascript -->
</head>

<body class="relative">
    <!-- ========================= HEADER ========================= -->
    @include('partials.header')

    @yield('content')
    <!-- ========================= FOOTER ========================= -->
    @include('partials.footer')
    <!-- ========================= SCRIPTS ========================= -->
    
    <script src="{{asset('js/jquery-2.0.0.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/fancybox/fancybox.min.js')}}" type="text/javascript"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js"
        integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous">
    </script>
    <script src="{{asset('js/script.js')}}" type="text/javascript"></script>
    @yield('page-js')
</body>

</html>
