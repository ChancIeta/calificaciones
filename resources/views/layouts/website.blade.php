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
    </head>
    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            @include('layouts.website.sidebar')
            <!-- End of Sidebar -->
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <!-- Topbar -->
                    @include('layouts.website.navbar')
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                    <!-- End of Main Content -->
                </div>
                <!-- End of Content Wrapper -->
            </div>
        </div>
        <!-- End of Page Wrapper -->
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
            $("#sidebarMenuButton").click(function () {
                $("#sidebarMenu").toggle();
            });
        </script>
        @include("admin.modals.modalconfiguracionUser")
        @if (Auth::user()->alumno()->count() == 0 && Auth::user()->profesor()->count() == 0 )
        @include("admin.modals.modalRolUsuario")
        <script>$("#modalRole").modal();</script>
        @endif
        @yield("script")
    </body>
</html>
