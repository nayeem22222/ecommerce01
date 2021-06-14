<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>	
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/fontend/images/favicon.ico')}}">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	
    

    <link href="{{asset('assets/fontend/css/animate.css')}}" rel="stylesheet" >
    <link href="{{asset('assets/fontend/css/font-awesome.min.css')}}" rel="stylesheet" >
    <link href="{{asset('assets/fontend/css/bootstrap.min.css')}}" rel="stylesheet" >
    <link href="{{asset('assets/fontend/css/owl.carousel.min.css')}}" rel="stylesheet" >
    <link href="{{asset('assets/fontend/css/chosen.min.css')}}" rel="stylesheet" >
    <link href="{{asset('assets/fontend/css/style.css')}}" rel="stylesheet" >
    <link href="{{asset('assets/fontend/css/color-01.css')}}" rel="stylesheet" >

</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	
    @include('fontend.partials._header')

	<main id="main">
   
    @yield('main')

	</main>

	@include('fontend.partials._footer')
	
	
    <script src="{{asset('assets/fontend/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}" ></script>
    <script src="{{asset('assets/fontend/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}" ></script>
    <script src="{{asset('assets/fontend/js/bootstrap.min.js')}}" ></script>
    <script src="{{asset('assets/fontend/js/jquery.flexslider.js')}}" ></script>
    <script src="{{asset('assets/fontend/js/chosen.jquery.min.js')}}" ></script>
    <script src="{{asset('assets/fontend/js/owl.carousel.min.js')}}" ></script>
    <script src="{{asset('assets/fontend/js/jquery.countdown.min.js')}}" ></script>
    <script src="{{asset('assets/fontend/js/jquery.sticky.js')}}" ></script>
    <script src="{{asset('assets/fontend/js/functions.js')}}" ></script>

</body>
</html>