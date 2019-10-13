<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'SC') }} - @yield('title')</title>
        <!-- Custom fonts for this template-->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        @yield("style")
    </head>
    <body class="bg-gradient-primary">
        <div class="container">
            @yield("content")
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('js/app.js') }}"></script>
        @yield("script")
    </body>
</html>
