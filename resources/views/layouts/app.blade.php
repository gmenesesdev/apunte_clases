<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!--Custom CSS-->
    @yield('css')
</head>

<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        @include('partials.navbar')
        <!-- Sidebar -->
        @include('partials.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>@yield('page-title')</h1>
                        </div>
                        <div class="col-sm-6 text-end">
                            @yield('btn-add')
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                @yield('content')
            </section>
        </div>
        <!-- Footer -->
        @include('partials.footer')
    </div>
    <!--.wrapper-->
    <!-- Jquery JS -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap-->
</body>

</html>
