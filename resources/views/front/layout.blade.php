<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Nikola Kotarac">
        <meta name="description" content="Nikola Kotarac Resume">

        <title>@yield('head_title') | {{trans('front.index_page_title')}}</title>

        <!--FONTS CSS-->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 

        <!-- Bootstrap CSS -->
        <link href="{{url('/skins/front/css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
       
        <!-- Theme CSS --->
        <link href="{{url('/skins/front/css/style.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{url('/skins/front/css/responsive.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{url('/skins/front/css/loading.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{url('/skins/front/css/loading-btn.css')}}" rel="stylesheet" type="text/css"/>
        
        
        @stack('header_css')
    </head>
    <body>

        @yield('content')
        
        @include('front.footer')

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{url('/skins/front/js/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{url('/skins/front/js/poper.js')}}" type="text/javascript"></script>
        <script src="{{url('/skins/front/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{url('/skins/front/js/jquery.validate.min.js')}}" type="text/javascript"></script>

        <!--CUSTOM PAGE JS--> 
        <script src="{{url('/skins/front/js/custom.js')}}" type="text/javascript"></script>
        @stack('footer_javascript')
    </body>
</html>

