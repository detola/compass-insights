
<!-- Header Section Start -->
{{-- <header class="transparent-header nav-on-banner"> --}}
<header class="transparent-header bg-white nav-on-banner">
	{{-- <div class="top-header bg-secondary sm-mx-none">
		<div class="container">			
			<div class="row">
				<div class="col-lg-12 col-md-2 py-2">
				<h6 class="text-tertiary mb-2" style="text-align: center;">Find out how Compass Insights is #KeepingTheLightsOn for businesses during COVID-19.</h6>
				</div>
			</div>
		</div>
	</div> --}}
	<div class="navigation-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					{{-- <nav class="navbar navbar-expand-lg nav-white nav-primary-hover nav-down-line-active py-2"> --}}
					<nav class="navbar navbar-expand-lg nav-secondary nav-primary-hover py-2"><!--nav-down-line-active-->
						<a class="navbar-brand" href="{{ url('/') }}"><img class="nav-logo" src="{{URL::to('/')}}/css/assets/images/logo/logo_small.png" alt="{{ config('app.name', 'Laravel') }}" /></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon flaticon-menu flat-small text-primary"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto">
							  <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="{{url('/')}}">
								Home
								</a>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href=" {{ url('/shop') }} ">
								Products
								</a>
								<ul class="dropdown-menu">
									
								  <li><a class="dropdown-item" href="{{url('/shop#boosters')}}">Compass Business Boosters</a></li>
								  <li><a class="dropdown-item" href="{{url('/shop#launchpads')}}">Compass Business Launchpads</a></li>
								  <li><a class="dropdown-item" href="{{url('/shop#business-solutions')}}">Compass Business Solutions</a></li>
								</ul>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="{{url('about-us')}}">
								About Us
								</a>
								<ul class="dropdown-menu">
									
									<li><a class="dropdown-item" href="{{url('about-us#who-we-are')}}">Who we are</a></li>
									<li><a class="dropdown-item" href="{{url('about-us#our-team')}}">Our Team</a></li>
									<li><a class="dropdown-item" href="{{url('about-us#testimonials')}}">Testimonials</a></li>
								  </ul>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="{{url('blog')}}">
								Insights
								</a>
							  </li>
							  <li class="nav-item dropdown mega-dropdown">
								<a class="nav-link dropdown-toggle" href="{{url('thread')}}">
								Ask Compass
								</a>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="{{url('faq')}}">
								FAQs
								</a>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="{{url('contact')}}">
								Contact Us
								</a>
								<ul class="dropdown-menu">
									
									<li><a class="dropdown-item" href="{{url('about-us#tell-compass')}}">Tell Compass</a></li>
									<li><a class="dropdown-item" href="{{url('about-us#get-in-touch')}}">Get in touch</a></li>
								  </ul>
							  </li>
							</ul>
							<ul class="navbar-nav ml-auto">
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#"><i class="fas fa-user"></i> My Account</a>
									<ul class="dropdown-menu">
                                        @guest
										<li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                        @if (Route::has('register'))
                                        <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                                        @endif
                                        @else
                                        <li><a class="dropdown-item" href="#"> {{ Auth::user()->name }} </a></li>
                                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">Logout</a>
                                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                        @endguest
									</ul>
								</li>
                            </ul>
							<div class="float-right navbar-nav nav-element">
								<div class="navbar-nav search-pop mx-4 position-relative">
									<span class="flaticon-search flat-mini"></span>
									<div class="search-form shadow-sm bg-white">
										<form action="#" method="post" class="position-relative">
										  <input class="form-control" type="search" placeholder="Search" aria-label="Search">
										  <button class="btn-search my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
										</form>
									</div>
								</div>
								<div class="navbar-nav cart-view position-relative">
									<a href="{{route('cart.index')}}" class="top-quantity">
										<i class="flaticon-shopping-cart-black-shape flat-mini"></i>
										@if (Cart::instance('default')->count() > 0)
										<span>{{Cart::instance('default')->count()}}</span>
									@endif 
									</a>
								</div>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- Header Section End -->
