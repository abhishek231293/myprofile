<!DOCTYPE html>
<html lang="en" ng-app="vgsApp">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script type="text/javascript">
        var APP_URL = {!! json_encode(url('/')) !!}
    </script>

    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('img/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('img/apple-touch-icon-114x114.png')}}">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome/css/font-awesome.css')}}">

    <!-- Stylesheet
        ================================================== -->
    <link rel="stylesheet" type="text/css"  href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/prettyPhoto.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>

    <link rel="icon" href="{{asset('img/favicon.ico')}}" type="image/png" sizes="16x16">
    <script type="text/javascript" src="{{asset('js/modernizr.custom.js')}}"></script>
    <title>Abhishek | Profile</title>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>



</head>
<body id="page-top"  data-spy="scroll" data-target=".navbar-fixed-top">

    @yield('template')

    <script type="text/javascript" src="{{asset('js/jquery.1.11.1.js')}}"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/SmoothScroll.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/easypiechart.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.isotope.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.counterup.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/waypoints.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jqBootstrapValidation.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/contact_me.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>
