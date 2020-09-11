@extends('layouts/frontpage')

@section('content')
    <!-- Slider HTML markup -->
<div class="full-row p-0 overflow-hidden">
	<div id="slider" style="width:1200px; height: 980px;margin:0 auto;margin-bottom: 0px; slidedirection: left;">	
		<!-- Slide 1-->
		<div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:10000; transition2d:3; timeshift:1000; deeplink:home; kenburnszoom:in; kenburnsrotate:0; kenburnsscale:1.1; parallaxevent:scroll; parallaxdurationmove:500;" style="slidedirection: left;">
			<img width="1920" height="1080" src="css/assets/images/slider/corporate10.jpg" class="ls-bg" alt="" />
			
			<div style="width:100%; height:100%; background:rgba(24, 27, 36, 0.6); top:50%; left:50%;" class="ls-l" data-ls="showinfo:1; durationin:2000; easingin:easeOutExpo; scalexin:1.5; scaleyin:1.5; position:fixed;"></div>
			
			<p style="font-weight:400; text-align:center; width:700px; font-size:40px; line-height:70px; top:360px; left:50%; white-space:normal;" class="ls-l text-white ls-hide-phone higlight-font" data-ls="offsetyin:40; delayin:1500; easingin:easeOutQuint; filterin:blur(10px); offsetyout:-200; durationin:1500; durationout:400; parallax:false; parallaxlevel:3;">Compass Insights is committed to building stronger customer-centric organizations that are sustainable through time. </p>
			
			<p style="font-weight:400; text-align:center; width:500px; font-size:16px; line-height:50px; top:300px; left:50%; letter-spacing: 3px; white-space:normal;" class="ls-l text-white ls-hide-phone" data-ls="showinfo:1; offsetxin:-100lw; durationin:1500; delayin:500; transformoriginin:0% 50% 0; clipin:0 0 0 100%; filterin:blur(10px); offsetyout:-200; durationout:200;">Compass Insights</p>
			
		</div>
		
		<!-- Slide 2-->
		<div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:8000; transition2d:3; timeshift:-500; deeplink:home; kenburnszoom:in; kenburnsrotate:0; kenburnsscale:1.1; parallaxevent:scroll; parallaxdurationmove:500;" style="slidedirection: left;">
			<img width="1920" height="1080" src="css/assets/images/slider/corporate11.jpg" class="ls-bg" alt="" />
			<div style="width:100%; height:100%; background:rgba(24, 27, 36, 0.6); top:50%; left:50%;" class="ls-l" data-ls="showinfo:1; durationin:2000; easingin:easeOutExpo; scalexin:1.5; scaleyin:1.5; position:fixed;"></div>
			
			<p style="font-weight:400; text-align:center; width:700px; font-size:60px; line-height:70px; top:360px; left:50%; white-space:normal;" class="ls-l text-white ls-hide-phone higlight-font" data-ls="offsetyin:40; delayin:1500; easingin:easeOutQuint; filterin:blur(10px); offsetyout:-200; durationin:1500; durationout:400; parallax:false; parallaxlevel:3;">Working with you to build a customer focused business.</p>
			
			<p style="font-weight:400; text-align:center; width:500px; font-size:16px; line-height:50px; top:300px; left:50%; letter-spacing: 3px; white-space:normal;" class="ls-l text-white ls-hide-phone" data-ls="showinfo:1; offsetxin:-100lw; durationin:1500; delayin:500; transformoriginin:0% 50% 0; clipin:0 0 0 100%; filterin:blur(10px); offsetyout:-200; durationout:200;">Compass Insights</p>
		</div>
	</div>
</div>
<!-- Slider Section End -->
{{-- Compass Section --}}
{{-- <div class="full-row bg-white">
	<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-12">
			<div class="text-secondary mb-5">
				<span class="text-primary pb-3 tagline">Customer Insights</span>
				<h2 class="text-primary mb-4">There are 4 ways to get started <span class="flaticon-arrow-pointing-to-right"></span> </h2>
			</div>
		</div>
		<div class="col-lg-6 col-md-12">
			 <div id="skills">
				<div id="part1" class="circle animate"></div>
				<div id="part2" class="circle animate"></div>
				<div id="part3" class="circle animate"></div>
				<div id="part4" class="circle animate"></div>
			  
				<div class="text-white">
					<a href="{{ url('/shop#boosters') }}" class="text-circle-top text-white" data-toggle="popover" title="Compass Boosters" 
						data-content="Our customized boosters allow you to present a consistent face to your business and a high service quality level. We have 4 boosters that will save your time, standardize your processes, improve your service quality, increase your conversion rate and transform your customer experience. The boosters are customized to meet your business’ needs so no two boosters are the same.">
						Boosters
					</a>
					<a href="{{ url('/shop#launchpads') }}" class="text-circle-right text-white" data-toggle="popover" title="Compass Launchpads"
						data-content=""="Bring new life to your business. Get one of our launchpads specially designed to allow you to address your pressing business challenges. You can choose from our starter, essential or premium packages to sstreamline your activities and achieve more with what you have.">
						Launchpads
					</a>
					<a href="{{ url('/thread') }}" class="text-circle-bottom text-white" data-toggle="popover" title="Ask Compass"
						data-content="Get access to questions, answers and discussions business owners have, that highlight the business problems they face and the solutions implemented, when you join the Compass Network. To make the experience wholesome, you also get to ask your own questions and get engagement from other business owners.">
						Ask Compass
					</a>
					<a href="{{ url('/shop#business-solutions') }}" class="text-circle-left text-white" data-toggle="popover" title="Compass Business Solutions"
						data-content="If you need clarity on your business and an advisor to identify opportunities and improve performance, then our affordable business solutions are for you. They are focused on equipping you with the tools to run your business effectively and have a built-in reflection period to ensure you get the most out of your time with us.">
						Solutions
					</a>
				</div>
				
			  </div> 

			  <div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="thumb-line bg-secondary hover-text-white d-flex p-4 mb-4 transation">
						<i class="flaticon-power flat-small text-general mr-4"></i>
						<h5><a class="text-general" href="#">Compass Business Boosters</a></h5>
						<span class="flaticon-next text-general position-absolute price d-table ml-2"></span>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="thumb-line bg-secondary hover-text-white d-flex p-4 mb-4 transation">
						<i class="flaticon-branding flat-small text-general mr-4"></i>
						<h5><a class="text-general" href="#">Compass Business Solutions</a></h5>
						<span class="flaticon-next text-general position-absolute price d-table ml-2"></span>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="thumb-line bg-secondary hover-text-white d-flex p-4 mb-4 transation">
						<i class="flaticon-layers flat-small text-general mr-4"></i>
						<h5><a class="text-general" href="#">Compass Business Launchpads</a></h5>
						<span class="flaticon-next text-general position-absolute price d-table ml-2"></span>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="thumb-line bg-secondary hover-text-white d-flex p-4 mb-4 transation">
						<i class="flaticon-analysis-1 flat-small text-general mr-4"></i>
						<h5><a class="text-general" href="#">Ask Compass</a></h5>
						<span class="flaticon-next text-general position-absolute price d-table ml-2"></span>
					</div>
				</div>
			</div>
	
		</div>
	</div>
	</div>
</div> --}}


<div class="full-row bg-dark" style="background-image: url(assets/images/background/bg-12.png); background-position: center center; background-repeat: no-repeat">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mb-5">
				<span class="text-primary pb-2 d-table m-auto tagline">Customer Insights</span>
				<h2 class="main-title down-line w-50 mb-4 mx-auto text-white text-center w-sm-100">There are 4 ways to get started</h2>
				<span class="d-table w-50 w-sm-100 sub-title mx-auto text-center text-white">Explore options below</span>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="thumb-line bg-secondary hover-text-white d-flex p-4 mb-4 transation">
					<i class="flaticon-power flat-small text-general mr-4"></i>
					<h5><a class="text-general" href="{{ url('/shop#boosters') }}" data-toggle="popover" title="Compass Boosters" 
						data-content="Our customized boosters allow you to present a consistent face to your business and a high service quality level. We have 4 boosters that will save your time, standardize your processes, improve your service quality, increase your conversion rate and transform your customer experience. The boosters are customized to meet your business’ needs so no two boosters are the same.">
						Compass Business Boosters</a></h5>
					<span class="flaticon-next text-general position-absolute price d-table ml-2"></span>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="thumb-line bg-secondary hover-text-white d-flex p-4 mb-4 transation">
					<i class="flaticon-branding flaticon-layers flat-small text-general mr-4"></i>
					<h5><a class="text-general" href="{{ url('/shop#launchpads') }}" data-toggle="popover" title="Compass Launchpads"
						data-content="Bring new life to your business. Get one of our launchpads specially designed to allow you to address your pressing business challenges. You can choose from our starter, essential or premium packages to sstreamline your activities and achieve more with what you have.">
						Compass Business Launchpads</a></h5>
					<span class="flaticon-next text-general position-absolute price d-table ml-2"></span>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="thumb-line bg-secondary hover-text-white d-flex p-4 mb-4 transation">
					<i class="flaticon-branding flat-small text-general mr-4"></i>
					<h5><a class="text-general" href="{{ url('/shop#business-solutions') }}" data-toggle="popover" title="Compass Business Solutions"
						data-content="If you need clarity on your business and an advisor to identify opportunities and improve performance, then our affordable business solutions are for you. They are focused on equipping you with the tools to run your business effectively and have a built-in reflection period to ensure you get the most out of your time with us.">
						Compass Business Solutions</a></h5>
					<span class="flaticon-next text-general position-absolute price d-table ml-2"></span>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="thumb-line bg-secondary hover-text-white d-flex p-4 mb-4 transation">
					<i class="flaticon-analysis-1 flat-small text-general mr-4"></i>
					<h5><a class="text-general" href="{{ url('/thread') }}" data-toggle="popover" title="Ask Compass"
						data-content="Get access to questions, answers and discussions business owners have, that highlight the business problems they face and the solutions implemented, when you join the Compass Network. To make the experience wholesome, you also get to ask your own questions and get engagement from other business owners.">
						Ask Compass</a></h5>
					<span class="flaticon-next text-general position-absolute price d-table ml-2"></span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="full-row" style="background-image: url(css/assets/images/background/bg002.jpg); background-repeat: no-repeat; background-position: center center; background-size: cover;">
	<div style="width:100%; height:100%; background:rgba(24, 27, 36, 0.6); top:50%; left:50%;"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-7 offset-md-5">
				<div class="text-light" style="width:100%; height:100%; padding:2%; background:rgba(24, 27, 36, 0.6); top:50%; left:50%;">
					<h2 class="down-line text-white mb-4">The Compass Way</h2>
					<p class="text-white">For a business to be viable, it needs to have customers. While the focus is usually on getting
						new customers, businesses can be better off building better relationships with existing
						customers.
						The insights we obtain from your customers will enable you to create better products for them,
						market them in a targeted way, enhancing your value and optimizing your returns.
					</p>
					<a href="{{ url('/shop#boosters') }}" class="btn btn-primary d-table mt-5">Our Products</a>
				</div>
			</div>
		</div>
		<div class="bg-white p-5 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-12 simple-thumb transation bg-white shadow-sm">
					<h4 class="mb-3">How well is your team doing?</h4>
					<p>Do they know the expectations of the business? Do they have
						specific challenges that affect productivity? <a href="{{ url('/shop#business-solutions') }}">Find out</a> and fix any potential issues before they
						emerge.
					</p>
				</div>
				<div class="col-lg-4 col-md-12 simple-thumb transation bg-white shadow-sm">
					<h4 class="mb-3">How well do you know your major clients/customers?</h4>
					<p>Do you know their purchasing power?
						Who is your target audience? <a href="{{ url('/shop#business-solutions') }}">See how to</a> position your offer optimally and engage better
						with them
					</p>
				</div>
				<div class="col-lg-4 col-md-12 simple-thumb transation bg-white shadow-sm">
					<h4 class="mb-3">Experience is the best teacher</h4>
					<p>Experience is the best teacher but experiences do not have to happen to you before you learn
						from them. <a href="{{ url('/blog') }}">Check out our insights</a> and see customer
						engagement issues businesses are facing and how they are getting through them.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

@forelse ($recents as $recent)
<div class="full-row bg-light">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<span class="pb-2 d-table w-50 w-sm-100 text-primary m-auto text-center h6">Our Recent Post</span>
				<h3 class="down-line w-50 w-sm-100 mx-auto text-center mb-5">Publish What We Think, About Our Company Activities</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="thumb-blog-light mb-4">
					<div class="post-image position-relative">
						<img src="css/assets/images/portfolio/16.png" alt="Image not found!">
						<div class="position-absolute left-0 bottom-0 bg-primary text-center px-3 py-2">
							<span class="h6 text-secondary">20 Aug, 2019</span>
						</div>
					</div>
					<div class="post-content pt-3 pb-4">
						<h5 class="mb-3 post-title"><a href="#" class="transation">Our Latest Development Projects by More Efficient Developer</a></h5>
						<p>Nostra maecenas malesuada vel lobortis sociis mus aliquam tempor etiam ipsum pretium cursus nullam tortor. Massa dis aptent facilisi ante.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="thumb-blog-light mb-4">
					<div class="post-image position-relative">
						<img src="css/assets/images/portfolio/17.png" alt="Image not found!">
						<div class="position-absolute left-0 bottom-0 bg-primary text-center px-3 py-2">
							<span class="h6 text-secondary">05 Aug, 2019</span>
						</div>
					</div>
					<div class="post-content pt-3 pb-4">
						<h5 class="mb-3 post-title"><a href="#" class="transation">A Career Overview Opportunity Available in Our Company</a></h5>
						<p>Nostra maecenas malesuada vel lobortis sociis mus aliquam tempor etiam ipsum pretium cursus nullam tortor. Massa dis aptent facilisi ante.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="thumb-blog-light mb-4">
					<div class="post-image position-relative">
						<img src="css/assets/images/portfolio/19.png" alt="Image not found!">
						<div class="position-absolute left-0 bottom-0 bg-primary text-center px-3 py-2">
							<span class="h6 text-secondary">25 July, 2019</span>
						</div>
					</div>
					<div class="post-content pt-3 pb-4">
						<h5 class="mb-3 post-title"><a href="#" class="transation">Experience to the Difference of Your Self From Other</a></h5>
						<p>Nostra maecenas malesuada vel lobortis sociis mus aliquam tempor etiam ipsum pretium cursus nullam tortor. Massa dis aptent facilisi ante.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@empty
@endforelse 

<div class="full-row bg-dark" id="newsletter" style="background-image: url(css/assets/images/background/bg-12.png); background-position: center center; background-repeat: no-repeat">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="bg-white py-5 px-4 text-center">
					<h4 class="text-center mb-4">Sign up to join our network</h4>
					<p>Want to increase your customer base or your customer retention rate? Let Compass show you how.</p>
					<div class="form-icon-left mt-5">
						<form action=" {{ route('news.store') }} " method="post">
							@csrf
							<div class="row">
								<div class="col-lg-3 col-md-6 mb-2">
									<input type="text" name="name" class="form-control bg-light mb-3" required placeholder="Name" />
								</div>
								<div class="col-lg-3 col-md-6 mb-2">
									<input type="text" name="industry" class="form-control bg-light mb-3" required placeholder="Industry" />
								</div>
								<div class="col-lg-3 col-md-6 mb-2">
									<input type="email" name="email" class="form-control bg-light mb-3" required placeholder="Email Address" />
								</div>
								<div class="col-lg-3 col-md-6 mb-2">
									<button type="submit" class="btn btn-primary w-100 mb-3">Subscribe Now</button>
								</div>						
							</div>					
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection