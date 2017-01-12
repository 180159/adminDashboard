<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Accounting System</title>
        <!-- Bootstrap -->
        <link href="{{URL::to('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{URL::to('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="{{URL::to('build/css/custom.min.css')}}" rel="stylesheet">
        <!-- Package from Charts for Laravel :P -->
        {!! Charts::assets () !!}

    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="/" class="site_title"><i class="fa fa-money"></i> <span>Admin Dashboard</span></a>
                        </div>
                        <div class="clearfix"></div>
                        @yield('content')
                    </div>
                </div>
                <!-- jQuery -->
                <script src="{{URL::asset('vendors/jquery/dist/jquery.min.js')}}"></script>
                <!-- Bootstrap -->
                <script src="{{URL::asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
                <!-- FastClick -->
                <script src="{{URL::asset('vendors/fastclick/lib/fastclick.js')}}"></script>
                <!-- NProgress -->
                <script src="{{URL::asset('vendors/nprogress/nprogress.js')}}"></script>
                <!-- Custom Theme Scripts -->
                <script src="{{URL::asset('build/js/custom.min.js')}}"></script>
            </div>
            </div>
    </body>
</html>