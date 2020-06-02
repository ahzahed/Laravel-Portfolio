<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="favicon.svg" sizes="16x16" type="image/png">
    <title> @yield('title') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" >
    <link href="{{asset('frontend/css/custom.css')}}" rel="stylesheet" >
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet" >
    <link href="{{asset('frontend/css/owl.carousel.min.css')}}" rel="stylesheet" >
    <link href="{{asset('frontend/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
</head>
<body>

@include('layout.front_menu')

@yield('content')


@include('layout.front_footer')

<script type="text/javascript" src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/axios.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/custom.js')}}"></script>
</body>
</html>
