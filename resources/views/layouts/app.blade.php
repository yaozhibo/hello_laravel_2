<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--csrf token-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'LaraBBS') - Laravel 进阶</title>

    <!-- Style -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html {
            position: relative;
            min-height: 100% ;
        }
        body {
            font-family: Hiragino Sans GB, "Hiragino Sans GB", Helvetica, "Microsoft YaHei", Arial,sans-serif;
            /* Margin bottom by footer height */
            margin-bottom: 60px;
        }

        /* header */

        .navbar-static-top {
            border-color: #e7e7e7;
            background-color: #fff;
            box-shadow: 0px 1px 11px 2px rgba(42, 42, 42, 0.1);
            border-top: 4px solid #00b5ad;
            margin-bottom: 40px;
            margin-top: 0px;
        }
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            /* Set the fixed height of the footer here */
            height: 60px;
            background-color: #00b5ad;
        }
        .container {
            padding-right: 15px;
            padding-left: 15px;
        }
        p {
            margin: 19px 0;
            color: #fff;
        }
        a {
            color: inherit;
        }
    </style>
</head>

<body>
    <div id="app" class="{{ route_class() }}-page">
        @include('layouts._header')

        <div class="container">

            @yield('content')

        </div>

        @include('layouts._footer')
    </div>

    <!--Scripts-->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>