<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="My Resume Admin">
        <meta name="author" content="Nikola Kotarac">
        <title>My Resume - Admin | @yield('head_title')</title>
        <!-- Bootstrap core CSS-->
        <link href="{{url('/skins/admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="{{url('/skins/admin/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="{{url('/skins/admin/css/sb-admin.css')}}" rel="stylesheet">
        <link href="{{url('/skins/admin/css/style.css')}}" rel="stylesheet" type="text/css"/>

        @stack('header_css')
    </head>

    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <a class="navbar-brand" href="/">Admin</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">

                @include('admin.navigation')

                <ul class="navbar-nav sidenav-toggler">
                    <li class="nav-item">
                        <a class="nav-link text-center" id="sidenavToggler">
                            <i class="fa fa-fw fa-angle-left"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-2" id="loggedInUserDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-user"></i>
                            {{\Auth::user()->name ? \Auth::user()->name : \Auth::user()->email}}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="loggedInUserDropdown">
                            <h6 class="dropdown-header">Profile options:</h6>
                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="#">
                                <i class="fa fa-fw fa-id-card"></i>
                                Edit Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-fw fa-key"></i>
                                Change Password
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                <i class="fa fa-fw fa-sign-out"></i>
                                {{ __('Logout') }}

                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content-wrapper">
            <div class="container-fluid">

                @yield('content')

            </div>
            <!-- /.container-fluid-->
            <!-- /.content-wrapper-->
            <footer class="sticky-footer">
                <div class="container">
                    <div class="text-center">
                        <small>Copyright © Nikola Kotarac 2018</small>
                    </div>
                </div>
            </footer>
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="{{url('/skins/admin/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{url('/skins/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Core plugin JavaScript-->
        <script src="{{url('/skins/admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        <!-- Custom scripts for all pages-->
        <script src="{{url('/skins/admin/js/sb-admin.min.js')}}"></script>

        @stack('footer_javascript')

        <script>

                                   $(document).ready(function () {

                                       var currentPath = window.location.pathname;

                                       //console.log(currentPath);

                                       if (currentPath === '/admin/dashboard') {

                                           $('#sideMenu').find('.nav-item:first-child').hide();

                                           //console.log(dashboard);
                                       }
                                   });

        </script>
    </body>
</html>