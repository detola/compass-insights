<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta Tag -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="CompassInsights - Advisory Advisory Advisory">

	<meta name="author" content="root">
	<title>CompassInsights - Advisory Advisory Advisory</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.png">


	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700&display=swap" rel="stylesheet">

	{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> --}}
	{{-- <link rel="stylesheet" href="ouibounce.min.css"> --}}
	{{-- <script src="build/ouibounce.js"></script> --}}


	<!--  CSS Style -->
	<link rel="stylesheet" href="{{asset('css/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/assets/css/fontawesome-all-5.9.0.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/assets/css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/assets/webfonts/flaticon/flaticon.css')}}">
	<link rel="stylesheet" href="{{asset('css/assets/css/owl.css')}}">
	<link rel="stylesheet" href="{{asset('css/assets/css/jquery.fancybox.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/assets/css/layerslider.css')}}">
	<link rel="stylesheet" href="{{asset('css/assets/css/template.css')}}">
	<link rel="stylesheet" href="{{asset('css/assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/assets/css/category/corporate-3.css')}}">
	<link rel="stylesheet" href="{{asset('css/assets/css/ouibounce.min.css')}}">


</head>
<body>
	





{{-- <div id="ouibounce-modal">
	<div class="underlay"></div>
	<div class="modal">
	<div class="modal-title">
	<h3> Modal Title </h3>
	</div>
	<div class="modal-body">
	
	Modal Body 
	
	</div>
	<div class="modal-footer">
	
	Modal Footer
	
	</div>
	</div>
	</div> --}}
 
    @include('layouts.partials.navbar')
     
      

@yield('content')
<!-- Footer Section Start -->
@include('layouts.partials.footer')