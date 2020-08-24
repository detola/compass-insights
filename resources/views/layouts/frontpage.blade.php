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
</head>
<body>
 
    @include('layouts.partials.navbar')
     
      <!-- {{--<div class="container">
          <div class="row">
              <div class="row content-heading">
                  <div class="col-md-3"><h4>Category</h4></div>
                  <div class="col-md-9">
                      <div class="row">
                          <div class="col-md-4"><h4 class="main-content-heading">@yield('heading')</h4></div>
                        <div class="col-md offset-6 col-md-2">
                            <a href="{{route('thread.create')}}" class="btn btn-primary">Create Thread</a>
                        </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-3">
                  <div class="content-wrap well">
                    <div class="list-group">
                        <a href={{ route('thread.index') }} class="list-group-item list-group-item-action">
                            Cras justo odio
                            <span class="badge">12</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">               
                            Dapibus ac facilisis in
                            <span class="badge">12</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            Morbi leo risus                   
                            <span class="badge">12</span>
                        </a>
                    </div>
                </div>   
            </div>
          
            <div class="col-md-9">
                <div class="content-wrap well">
                @yield('content')
                </div>
            </div>          
        </div>
      </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>--}} -->

@yield('content')
<!-- Footer Section Start -->
@include('layouts.partials.footer')