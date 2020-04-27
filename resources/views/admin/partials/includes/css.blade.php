<!-- Bootstrap CSS-->
<link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!-- Font Awesome CSS-->
<link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
<!-- Fontastic Custom icon font-->
<link rel="stylesheet" href="{{asset('css/fontastic.css')}}">
<!-- Google fonts - Roboto -->
<link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700')}}">
<!-- Custom Scrollbar-->
<link rel="stylesheet" href="{{asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
<!-- theme stylesheet-->
<link rel="stylesheet" href="{{asset('css/style.default.css')}}" id="theme-stylesheet">
<!-- Custom stylesheet - for your changes-->
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
<!-- Favicon-->
<link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

<link rel="stylesheet" type="text/css" href="{{asset('css/select2.min.css')}}" />

@stack('push_css')