
<!-- Header Section Start -->
{{-- <header class="transparent-header nav-on-banner"> --}}
<header class="transparent-header bg-white nav-on-banner">
	<div class="top-header bg-secondary sm-mx-none">
		<div class="container">			
			<div class="row">
				<div class="col-lg-12 col-md-2 py-2">
				<p class="text-white">Malesuada euismod eu metus gravida egestas, sociis torquent euismod nulla.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="navigation-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					{{-- <nav class="navbar navbar-expand-lg nav-white nav-primary-hover nav-down-line-active py-2"> --}}
					<nav class="navbar navbar-expand-lg nav-secondary nav-primary-hover nav-down-line-active py-2">
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
								<a class="nav-link dropdown-toggle" href="#">
								Products
								</a>
								<ul class="dropdown-menu">
									
								  <li><a class="dropdown-item" href="{{url('/shop/boosters')}}">Customer Business Boosters</a></li>
								  <li><a class="dropdown-item" href="{{url('/shop/launchpads')}}">Customer Business Launchpads</a></li>
								  <li><a class="dropdown-item" href="{{url('/shop/business-solutions')}}">Customer Business Solution</a></li>
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
								<a class="nav-link dropdown-toggle" href="{{url('about-us')}}">
								  Our People
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
