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
			
			<p style="font-weight:400; text-align:center; width:500px; font-size:16px; line-height:50px; top:300px; left:50%; letter-spacing: 3px; white-space:normal;" class="ls-l text-white ls-hide-phone" data-ls="showinfo:1; offsetxin:-100lw; durationin:1500; delayin:500; transformoriginin:0% 50% 0; clipin:0 0 0 100%; filterin:blur(10px); offsetyout:-200; durationout:200;">Compass Insight</p>
			<!--<div style="font-size:15px; top:530px; left:50%;" class="ls-l ls-hide-phone" data-ls="offsetyin:40; delayin:2600; easingin:easeOutQuint; offsetyout:-300; durationin:1500; durationout:400; parallax:false; parallaxlevel:1;">
				<div class="simple-video-play d-table ml-auto mt-3">
					<a data-fancybox href="../../https://www.youtube.com/watch?v=0HnHUBeIBqU" class="rounded-circle"><i class="flaticon-play-button position-relative xy-center flat-mini rounded-circle text-white bg-primary"></i></a><span class="pl-3 text-white">Watch Our Intro</span>
				</div>
			</div>-->
		</div>
		
		<!-- Slide 2-->
		<div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:8000; transition2d:3; timeshift:-500; deeplink:home; kenburnszoom:in; kenburnsrotate:0; kenburnsscale:1.1; parallaxevent:scroll; parallaxdurationmove:500;" style="slidedirection: left;">
			<img width="1920" height="1080" src="css/assets/images/slider/corporate11.jpg" class="ls-bg" alt="" />
			<div style="width:100%; height:100%; background:rgba(24, 27, 36, 0.6); top:50%; left:50%;" class="ls-l" data-ls="showinfo:1; durationin:2000; easingin:easeOutExpo; scalexin:1.5; scaleyin:1.5; position:fixed;"></div>
			
			<p style="font-weight:400; text-align:center; width:700px; font-size:60px; line-height:70px; top:360px; left:50%; white-space:normal;" class="ls-l text-white ls-hide-phone higlight-font" data-ls="offsetyin:40; delayin:1500; easingin:easeOutQuint; filterin:blur(10px); offsetyout:-200; durationin:1500; durationout:400; parallax:false; parallaxlevel:3;">Working with you to build a customer focused business.</p>
			
			<p style="font-weight:400; text-align:center; width:500px; font-size:16px; line-height:50px; top:300px; left:50%; letter-spacing: 3px; white-space:normal;" class="ls-l text-white ls-hide-phone" data-ls="showinfo:1; offsetxin:-100lw; durationin:1500; delayin:500; transformoriginin:0% 50% 0; clipin:0 0 0 100%; filterin:blur(10px); offsetyout:-200; durationout:200;">Compass Insights</p>

			<!--<a style="" class="ls-l ls-hide-phone" href="https://themeforest.net/item/bluebird-multipurpose-html-template/24782709" target="_self" data-ls="offsetyin:40; delayin:2600; easingin:easeOutQuint; offsetyout:-300; durationin:1500; durationout:400; hover:true; hoverdurationin:300; hoveropacity:1; hoverbgcolor:#ffffff; hovercolor:#202430; parallax:false; parallaxlevel:1;">
				<p style="font-weight:500; text-align:center; cursor:pointer; padding-right:35px; padding-left:35px; font-size:15px; line-height:40px; top:530px; left:50%; color:#202430; border-radius:2px; border: 2px solid; border-color: #fff; padding-top:5px; padding-bottom:5px; background:#fff; white-space:nowrap;" class="higlight-font">Join Now</p>
			</a>-->
		</div>
	</div>
</div>
<!-- Slider Section End -->

{{-- <div class="full-row bg-primary">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-12">
				<div class="text-secondary mb-5">
					<span class="text-secondary pb-3 tagline">Customer Insights</span>
					<h2 class="text-secondary mb-4">Customer Engagement Boosters</h2>
					<p>Our boosters are a great way to introduce structure to your business, because once you have them, 
						team members simply need to follow the established guidelines. We have four great boosters that 
						can transform your customers’ experiences. They eliminate guesswork in your processes and so ensure 
						that your team knows exactly what to do at any given time and that all customers have a consistent 
						pleasant experience. They are easy to use, so you can delegate comfortably and leave these tasks to 
						the staff responsible and have more time for you to focus on tweaking and refining the actual products 
						for your business growth. It also means your team is a lot more efficient and effective in achieving 
						your business goals.</p>
					<p>Are you working solo or as a freelancer? Great but your customers do not need to know that! Our 
						boosters can work for you too - they give you the confidence to provide consistent service and 
						address any queries or issues - and by so doing, set a great standard for your business.</p>
					<a href="#" class="btn btn-dark mt-3">About Company</a>
				</div>
			</div>
			<div class="col-lg-7 col-md-12">
				<div class="row">
					<div class="col-md-6">
						<div class="simple-thumb text-secondary transation mb-5">
							<i class="flaticon-sketch flat-medium text-secondary"></i>
							<h5 class="my-3"><a href="#" class="text-secondary">Creative Design</a></h5>
							<p>Nam aenean nibh fringilla maecenas erdum taciti id, interdum donec aliqua. Convallis et eleifend 
								torquent ac, dapibus suscipit auctor arcu posuere eu placerat lvinar.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="simple-thumb text-secondary transation mb-5">
							<i class="flaticon-student flat-medium text-secondary"></i>
							<h5 class="my-3"><a href="#" class="text-secondary">Corporate Template</a></h5>
							<p>Nam aenean nibh fringilla maecenas erdum taciti id, interdum donec aliqua. Convallis et eleifend torquent ac, dapibus suscipit auctor arcu posuere eu placerat lvinar.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="simple-thumb text-secondary transation mb-5">
							<i class="flaticon-conveyor flat-medium text-secondary"></i>
							<h5 class="my-3"><a href="#" class="text-secondary">Easy Customize</a></h5>
							<p>Nam aenean nibh fringilla maecenas erdum taciti id, interdum donec aliqua. Convallis et eleifend torquent ac, dapibus suscipit auctor arcu posuere eu placerat lvinar.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="simple-thumb text-secondary transation mb-5">
							<i class="flaticon-import flat-medium text-secondary"></i>
							<h5 class="my-3"><a href="#" class="text-secondary">Automatic Update</a></h5>
							<p>Nam aenean nibh fringilla maecenas erdum taciti id, interdum donec aliqua. Convallis et eleifend torquent ac, dapibus suscipit auctor arcu posuere eu placerat lvinar.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div> --}}




<div class="full-row bg-white">
	<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-12">
			<div class="text-secondary mb-5">
				<span class="text-primary pb-3 tagline">Customer Insights</span>
				<h2 class="text-primary mb-4">Working with you to build a customer focused business.</h2>
				<p>Compass Insights is committed to building stronger customer-centric organizations that are
					sustainable through time.</p>
				{{-- <p>There are 3 ways to get started …. explore options below</p> --}}
				{{-- <a href="#" class="btn btn-dark mt-3">About Company</a> --}}
			</div>
		</div>
		<div class="col-lg-6 col-md-12">
			{{-- <div style="height: 600px; width:100%;">
				<div class="compass_container">
					<a id="square-1" class="square compass" href=" {{ url('/thread') }} "></a>
					<a id="square-2" class="square compass" href=" {{ url('/shop/boosters') }} "></a>
					<a id="square-3" class="square compass" href=" {{ url('/shop/launchpads') }} "></a>
					<a id="square-4" class="square compass" href=" {{ url('/shop/business-solutions') }} "></a>
					<span class="main-arrow"></span>
					<!-- <div class="circTxt1">	</div> -->
				</div>
				<div class="compass_text_container">
					<!--the holders for the text, reuse as desired-->
					<a href=" {{ url('/shop/boosters') }} "><div class="circTxt" id="test"></div></a>
					<a href="{{ url('/shop/launchpads') }}"><div class="circTxt2" id="test"></div></a>
					<a href="{{ url('/shop/business-solutions') }}"><div class="circTxt3" id="test"></div></a>
					<a href="{{ url('/thread') }} "><div class="circTxt4" id="test"></div></a>
				</div>
			</div> --}}
			<div id="skills">
				<div id="part1" class="circle animate"></div>
				<div id="part2" class="circle animate"></div>
				<div id="part3" class="circle animate"></div>
				<div id="part4" class="circle animate"></div>
			  
				<div class="text-white">
	
				  <a href="{{ url('/shop#boosters') }}" class="text-circle-top text-white" 
				  data-toggle="tooltip" 
				  title="Our customized boosters allow you to present a consistent face to your business and a high service quality level. We have 4 boosters that will save your time, standardize your processes, improve your service quality, increase your conversion rate and transform your customer experience. The boosters are customized to meet your business’ needs so no two boosters are the same.">Compass Business Boosters</a>
				  <a href="{{ url('/shop#launchpads') }}" class="text-circle-right text-white"
				  data-toggle="tooltip"
				  title="Bring new life to your business. Get one of our launchpads specially designed to allow you to address your pressing business challenges. You can choose from our starter, essential or premium packages to sstreamline your activities and achieve more with what you have.">Compass Business Launchpads</a>
				<a href="{{ url('/thread') }}" class="text-circle-bottom text-white"
				data-toggle="tooltip"
				title="Get access to questions, answers and discussions business owners have, that highlight the business problems they face and the solutions implemented, when you join the Compass Network. To make the experience wholesome, you also get to ask your own questions and get engagement from other business owners.">
				Ask Compass</a>
				<a href="{{ url('/shop#business-solutions') }}" class="text-circle-left text-white"
				data-toggle="tooltip"
				title="If you need clarity on your business and an advisor to identify opportunities and improve performance, then our affordable business solutions are for you. They are focused on equipping you with the tools to run your business effectively and have a built-in reflection period to ensure you get the most out of your time with us.">
				Compass Business Solutionsw</a>
				</div>
				
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
					{{-- <span class="tagline text-primary pb-2 d-table w-xs-100">How It Work</span> --}}
					<h2 class="down-line text-white mb-4">The Compass Way</h2>
					<p class="text-white">For a business to be viable, it needs to have customers. While the focus is usually on getting
						new customers, businesses can be better off building better relationships with existing
						customers.
						The insights we obtain from your customers will enable you to create better products for them,
						market them in a targeted way, enhancing your value and optimizing your returns.</p>

						<a href="{{ url('/shop#boosters') }}" class="btn btn-primary d-table mt-5">Our Products</a>
					{{-- <div class="simple-video-play d-table mt-5">
						<a data-fancybox href="https://www.youtube.com/watch?v=0HnHUBeIBqU" class="rounded-circle"><i class="flaticon-play-button position-relative xy-center flat-mini rounded-circle text-white bg-primary"></i></a><span class="pl-3 text-white">Explore more Compass Offerings to help you achieve this</span>
					</div> --}}
				</div>
			</div>
		</div>
		<div class="bg-white p-5 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-12 simple-thumb hover-bg-primary hover-text-white transation bg-white shadow-sm">
					{{-- <span class="h3 down-line text-primary mb-4 d-table">01</span> --}}
					{{-- simple-thumb hover-bg-primary hover-text-white transation bg-white shadow-sm mb-30 px-4 py-5 --}}
					<h4 class="mb-3">How well is your team doing?</h4>
					<p>Do they know the expectations of the business? Do they have
						specific challenges that affect productivity? <a href="{{ url('/shop#business-solutions') }}">Find out</a> and fix any potential issues before they
						emerge.</p>
						{{-- <a href="{{ url('/shop/business-solutions') }}" class="btn-link">Read More</a> --}}
				</div>
				<div class="col-lg-4 col-md-12 simple-thumb hover-bg-primary hover-text-white transation bg-white shadow-sm">
					{{-- <span class="h3 down-line text-primary mb-4 d-table">02</span> --}}
					<h4 class="mb-3">How well do you know your major clients/customers?</h4>
					<p>Do you know their purchasing power?
						Who is your target audience? <a href="{{ url('/shop#business-solutions') }}">See</a> how to position your offer optimally and engage better
						with them</p>
						{{-- <a href="{{ url('/shop/business-solutions') }}" class="btn-link">Read More</a> --}}
				</div>
				<div class="col-lg-4 col-md-12 simple-thumb hover-bg-primary hover-text-white transation bg-white shadow-sm">
					{{-- <span class="h3 down-line text-primary mb-4 d-table">03</span> --}}
					<h4 class="mb-3">Experience is the best teacher</h4>
					<p>Experience is the best teacher but experiences do not have to happen to you before you learn
						from them. Check out our <a href="{{ url('/blog') }}">insights</a> and see customer
						engagement issues businesses are facing and how they are getting through them.</p>
						{{-- <a href="{{ url('/blog') }}" class="btn-link">Read More</a> --}}
				</div>
			</div>
		</div>
	</div>
</div>


{{-- <div class="full-row">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mb-5">
				<span class="text-primary pb-2 d-table m-auto tagline">Business Setup</span>
				<h2 class="main-title down-line w-50 m-auto text-center w-sm-100">Amazin Setup of Corporate Business</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="thumb-classic">
					<img src="css/assets/images/portfolio/3.png" alt="">
					<h4 class="my-3">Entrepreneur Training</h4>
					<p>Facilisis ullamcorper tellus integer, aliquet semper sit fermentum duis a ligula adipiscing lacinia ceptos placerat sagittis mus dui mi dis tincidunt viverra.</p>
					<a href="#" class="btn-link">Read More</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="thumb-classic">
					<img src="css/assets/images/portfolio/9.png" alt="">
					<h4 class="my-3">Funding Facility</h4>
					<p>Facilisis ullamcorper tellus integer, aliquet semper sit fermentum duis a ligula adipiscing lacinia ceptos placerat sagittis mus dui mi dis tincidunt viverra.</p>
					<a href="#" class="btn-link">Read More</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="thumb-classic">
					<img src="css/assets/images/portfolio/11.png" alt="">
					<h4 class="my-3">Business Aviation</h4>
					<p>Facilisis ullamcorper tellus integer, aliquet semper sit fermentum duis a ligula adipiscing lacinia ceptos placerat sagittis mus dui mi dis tincidunt viverra.</p>
					<a href="#" class="btn-link">Read More</a>
				</div>
			</div>
		</div>
	</div>
</div> --}}

{{-- <div class="full-row pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-12 mb-5">
				<span class="text-primary pb-2 d-table tagline">We Are Special</span>
				<h2 class="main-title down-line mb-4">We Are Creative and Professional Business Agency</h2>
				<!--<span class="d-table sub-title mb-4">Mauris primis turpis Laoreet magna felis mi amet quam enim curae. sodales semper tempor dictum faucibus habitasse.</span>-->
				<p>Malesuada euismod eu metus gravida egestas, sociis torquent euismod nulla amet inceptos consequat id augue rhoncus imperdiet faucibus turpis rutrum Magna nonummy neque quis egestas feugiat lorem. Nisl ad montes risus elementum nostra mauris. Varius, conubia est curae; a netus dignissim quis posuere lacus cubilia pede. Magna ad mollis felis convallis hac fames sed nibh. Donec dapibus ante.</p>
				<p>Nibh commodo blandit venenatis. Sit erat risus congue. Hymenaeos mauris hac dictumst. Habitant praesent. Accumsan. Volutpat lectus ante potenti sociis. Malesuada tincidunt quisque mollis, cursus penatibus class malesuada nunc ac dapibus potenti urna taciti vivamus. Sollicitudin netus eleifend nostra etiam porttitor fusce.</p>
				<P>Lacus ante augue tellus primis nam. Primis, est curabitur eleifend risus integer aptent sollicitudin feugiat erat tortor dis primis massa hac magnis ligula.</p>
			</div>
			<div class="col-lg-6 col-md-12 offset-lg-1 mb-5">
				<img src="css/assets/images/hi-30.png" alt="corporate template">
			</div>
		</div>
	</div>
</div> --}}

<!--<div class="full-row bg-dark" style="background-image: url(assets/images/background/bg-12.png); background-position: center center; background-repeat: no-repeat">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mb-5">
				<span class="text-primary pb-2 d-table m-auto tagline">WHAT WE OFFER</span>
				<h2 class="main-title down-line w-50 mb-4 mx-auto text-white text-center w-sm-100">Provide Oppertunity for Your Business</h2>
				<span class="d-table w-50 w-sm-100 sub-title mx-auto text-center text-white">Mauris primis turpis Laoreet magna felis mi amet quam enim curae. Sodales semper tempor dictum faucibus habitasse.</span>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="thumb-line bg-secondary hover-text-white d-flex p-4 mb-4 transation">
					<i class="flaticon-branding flat-small text-general mr-4"></i>
					<h5><a class="text-general" href="#">Branding Product</a></h5>
					<span class="flaticon-next text-general position-absolute price d-table ml-2"></span>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="thumb-line bg-secondary hover-text-white d-flex p-4 mb-4 transation">
					<i class="flaticon-import flat-small text-general mr-4"></i>
					<h5><a class="text-general" href="#">Markeating Strategy</a></h5>
					<span class="flaticon-next text-general position-absolute price d-table ml-2"></span>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="thumb-line bg-secondary hover-text-white d-flex p-4 mb-4 transation">
					<i class="flaticon-devices flat-small text-general mr-4"></i>
					<h5><a class="text-general" href="#">App Development</a></h5>
					<span class="flaticon-next text-general position-absolute price d-table ml-2"></span>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="thumb-line bg-secondary hover-text-white d-flex p-4 mb-4 transation">
					<i class="flaticon-shopping flat-small text-general mr-4"></i>
					<h5><a class="text-general" href="#">E-Commerce</a></h5>
					<span class="flaticon-next text-general position-absolute price d-table ml-2"></span>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="thumb-line bg-secondary hover-text-white d-flex p-4 mb-4 transation">
					<i class="flaticon-layers flat-small text-general mr-4"></i>
					<h5><a class="text-general" href="#">Landing Page</a></h5>
					<span class="flaticon-next text-general position-absolute price d-table ml-2"></span>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="thumb-line bg-secondary hover-text-white d-flex p-4 mb-4 transation">
					<i class="flaticon-analysis-1 flat-small text-general mr-4"></i>
					<h5><a class="text-general" href="#">Search Engine</a></h5>
					<span class="flaticon-next text-general position-absolute price d-table ml-2"></span>
				</div>
			</div>
		</div>
	</div>
</div>-->
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

{{-- <div class="full-row p-0 bg-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="border-bottom-gray" style="padding: 50px 0">
					<div class="row">
						<div class="col-md-5">
							<h6 class="mb-sm-30 text-white">Want to increase your customer base or y
								our customer retention rate? Let Compass show you how. Sign up to join our network</h6>
						</div>
						<div class="col-md-7">
							<form action="#" class="subscribe-form position-relative">
								<input class="form-control" type="text" placeholder="Email Address" aria-label="Address">
								<button class="btn btn-primary" type="submit">Subscribe</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> --}}


<div class="full-row bg-dark">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<h3 class="mb-5 text-white">Subscribe For Our Newsletter</h3>
				<div class="row">
					<h6 class="mb-sm-30 text-white">Want to increase your customer base or y
						our customer retention rate? Let Compass show you how. Sign up to join our network</h6>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="sign-up-box bg-white py-5 px-4 text-center">
					<h4 class="text-center mb-4">Sign up to join our network</h4>
					<p>Lacinia laoreet senectus fames tortor nisi. Rhoncus semper nostra.</p>
					<form action="#" method="post">
						<input type="text" name="name" class="form-control bg-light mb-3" placeholder="Name" />
						<input type="email" name="industry" class="form-control bg-light mb-3" placeholder="Industry" />
						<input type="email" name="email" class="form-control bg-light mb-3" placeholder="Email Address" />
						<button type="button" class="btn btn-primary w-100 mb-3">Subscribe Now</button>
					</form>
					{{-- <span>Lorem semper netus praesent senectus vivamus dapibus nostra.</span> --}}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection