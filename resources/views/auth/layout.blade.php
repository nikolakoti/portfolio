<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>My Resume - Admin | @yield('head_title')</title>
        <!-- Bootstrap core CSS-->
        <link href="{{url('/skins/admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="{{url('/skins/admin/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="{{url('/skins/admin/css/sb-admin.css')}}" rel="stylesheet">
        <link href="{{url('/skins/admin/css/style.css')}}" rel="stylesheet" type="text/css"/>
    </head>

    <body class="bg-dark">
        <div class="container">
            
             @yield('content')
            
            
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="{{url('/skins/admin/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{url('/skins/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Core plugin JavaScript-->
        <script src="{{url('/skins/admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    </body>

</html>


