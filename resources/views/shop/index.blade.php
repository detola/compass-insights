@extends('layouts.frontpage')

@section('content')
    <!--Hero Section-->
<div class="full-row page-banner-image overlay-secondary" style="background-image: url(css/assets/images/background/banner10.jpg); background-position: center center; background-size: cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-white text-center down-line-white mt-5">Our Products</h1>
            </div>
        </div>
    </div>
</div>
<div class="full-row" id="boosters">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mb-5">
				<h2 class="main-title down-line w-50 m-auto text-center w-sm-100">Compass Business Boosters</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="w-75 text-center mx-auto d-block w-sm-100">
					<p class="text-dark">Our boosters are a great way to introduce structure to your business, because once you have
						them, team members simply need to follow the established guidelines. These Customer
						Engagement Boosters will transform your customers’ experience.</p>
						<p class="text-dark">They help eliminate
							guesswork in your processes, ensure that your team knows exactly what to do per time and that
							all customers have a consistent pleasant experience. They are easy to use, so you can
							effectively delegate implementation to the responsible staff. This will give you more to focus on
							product development that grows your client base.
						</p> 
						<p class="text-dark"><b>Even if you are working solo or
							as a freelancer, your customers do not need to know that. Our boosters will help you deliver
							consistent service, address any queries or issues and set a great standard for your business.</b>
						</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="bg-light transation w-50 w-sm-100 d-flex float-left p-4">
					<span class="float-left d-table mt-2">
						<i class="flaticon-power flat-medium text-primary"></i>
					</span>
					<div class="pl-3">
						<span class="text-primary d-table tagline">Booster 1</span>
						<h5 class="text-dark mb-3 text-uppercase">First Impression Matters: <b><i>Make a great first impression 
							and increase conversion rates</i></b>
						</h5>
						<p>
							No better time to make a good impression than the first encounter with your business –
							from WhatsApp to calls, social media to emails, we ensure that a potential client’s first
							interaction with you is unforgettable for the right reasons.
						</p>
						<p>
							This booster ensures that you put your best foot forward and convey the quality and 
							value you provide to potential customers. A positive first impression is more likely to 
							yield to a sale. It also converts the potential customer to an ambassador even if they 
							don’t make an initial purchase.
						</p>
						<del class="text-dark text-uppercase">NGN 30,000</del>						
						<form action="{{route('cart.store')}}" method="post">
							{{ csrf_field() }}
							<input type="hidden" name="id" value="1">
							<input type="hidden" name="name" value="Booster 1">
							<input type="hidden" name="details" value="First Impression Matters : 
								Make a great first impression and increase conversion rates">
							<input type="hidden" name="price" value="25000">
							<button type="submit" class="btn btn-dark mt-3">Boost your business now for N25,000 launch price</button>
						</form>
					</div>
				</div>

				<div class="bg-light transation w-50 w-sm-100 d-flex float-left p-4" style="border:1px solid #fff;">
					<span class="float-left d-table mt-2"><i class="flaticon-power flat-medium text-primary"></i></span>
					<div class="pl-3">
						<span class="text-primary d-table tagline">Booster 2</span>
						<h5 class="text-dark mb-3 text-uppercase">Order Management: <b><i>Set a gold standard for your business, be known for your seamless
							order processes</i></b>
						</h5>
						<p>You have made a good first impression, and secured a sale - great! But how seamless is
							your order process, from when the order is received to fulfilment?
							Set a gold standard for your business and have a no-hiccup, no-excuses order
							management process and watch customers praise you for doing what you say you are
							going to do.</p>
							<p>
							The Order Management booster ensures that your customers have a seamless order
							process, consistently providing reassurance to your customer and ensuring referrals as
							well as repeat orders.</p>
							<del class="text-dark text-uppercase">NGN 30,000</del>
							
								<form action="{{route('cart.store')}}" method="post">
									{{ csrf_field() }}
									<input type="hidden" name="id" value="2">
									<input type="hidden" name="name" value="Booster 2">
									<input type="hidden" name="details" value="Order Management: Set a gold 
									standard for your business, be known for your seamless order processes">
									<input type="hidden" name="price" value="25000">
									<button type="submit" class="btn btn-dark mt-3">Boost your business now for N25,000 launch price</button>
								</form>
					</div>
				</div>
				<div class="bg-light transation w-50 w-sm-100 d-flex float-left p-4" style="border:1px solid #fff;">
					<span class="float-left d-table mt-2"><i class="flaticon-power flat-medium text-primary"></i></span>
					<div class="pl-3">
						<span class="text-primary d-table tagline">Booster 3</span>
						<h5 class="text-dark mb-3 text-uppercase">The Delivery Experience Revamp: <b><i>Be outstanding</i></b></h5>
						<p>This booster is a must-have for all product vendors, and can be used by service vendors
							too. This is when the customer gets to experience what they ordered. From first
							impressions through the order process, this is where your promises are either made or
							broken. Whichever way you deliver your products or services, your customer needs to
							know what to expect and when to expect your products.</p>
							<p>
							The delivery experience can make or break the order success. Provide upfront
							information about what happens to unwanted products/services. Ensure your customer
							delivery experience is a positive one, all the time.</p>
							<del class="text-dark text-uppercase">NGN 30,000</del>
							
							<form action="{{route('cart.store')}}" method="post">
								{{ csrf_field() }}
								<input type="hidden" name="id" value="3">
								<input type="hidden" name="name" value="Booster 3">
								<input type="hidden" name="details" value="The Delivery Experience Revamp: Be outstanding">
								<input type="hidden" name="price" value="25000">
								<button type="submit" class="btn btn-dark mt-3">Boost your business now for N25,000 launch price</button>
							</form>
					</div>
				</div>
				<div class="bg-light transation w-50 w-sm-100 d-flex float-left p-4" style="border:1px solid #fff;">
					<span class="float-left d-table mt-2"><i class="flaticon-power flat-medium text-primary"></i></span>
					<div class="pl-3">
						<span class="text-primary d-table tagline">Booster 4</span>
						<h5 class="text-dark mb-3 text-uppercase">Troubleshooting for Success: <b><i>Be prepared to address queries, 
							complaints and feedback</i></b></h5>
						<p>No matter how hard you try, complaints are going to come. Yet, excellent businesses
							know that complaints are the elements needed for service improvement. So, how
							equipped are you to address complaints and feedback? </p>
							<p>
							This booster ensures that you have an established system to address complaints,
							feedback or customer queries knowledgeably, professionally and without making the
							other party feel uncomfortable. Better to hear these complaints first hand than to see
							your business trending for a negative reason!
							Get the Troubleshooting for Success booster and resolve issues, respond to queries and
							complaints and receive feedback graciously. Who knows, you might get a loyal
							customer through this.</p>
							<del class="text-dark text-uppercase">NGN 30,000</del>
							
								<form action="{{route('cart.store')}}" method="post">
									{{ csrf_field() }}
									<input type="hidden" name="id" value="4">
									<input type="hidden" name="name" value="Booster 4">
									<input type="hidden" name="details" value="Troubleshooting for Success: 
									Be prepared to address queries, complaints and feedback">
									<input type="hidden" name="price" value="25000">
									<button type="submit" class="btn btn-dark mt-3">Boost your business now for N25,000 launch price</button>
								</form>
					</div>
				</div>
				<div class="feature-thumb-border hover-text-white bg-primary transation w-50 w-sm-100 d-flex float-left p-4">
					<span class="float-left d-table mt-2"><i class="flaticon-power flat-medium text-dark"></i></span>
					<div class="pl-3">
						<span class="text-dark d-table tagline"><b>Booster Bundle</b></span>
						<h5 class="text-white mb-3 text-uppercase"><b>Get All 4 Boosters</b></h5>
						<p class="text-white"><b>For a complete experience, get all boosters as a bundle and make significant savings</b></p>
							<del class="text-dark text-uppercase"><b>NGN 100,000</b></del>
							
							<form action="{{route('cart.store')}}" method="post">
								{{ csrf_field() }}
								<input type="hidden" name="id" value="5">
								<input type="hidden" name="name" value="Booster Bundle">
								<input type="hidden" name="details" value="Get All 4 Boosters">
								<input type="hidden" name="price" value="50000">
								<button type="submit" class="btn btn-dark mt-3">Get a total Boost for N60,000 launch price</button>
							</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



{{-- Compass Launchpads --}}

<div class="full-row" id="launchpads">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mb-5">
				<h2 class="main-title down-line-tertiary w-50 m-auto text-center w-sm-100">Compass Business Launchpads</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="w-75 text-center mx-auto d-block w-sm-100">
					<p>Our Launchpads are specially packaged to transform key areas of your business at the pace
						you like. Start your journey to successful customer engagements and make customer service
						quality and engagement, a unique selling point (USP) of your business.
						Fully customized to your business needs, one great benefit of our launchpads is that the
						insights gained from the stipulated number of customers can be replicated across board for your
						entire customer base. Achieve more profitability with a stronger understanding of your key
						business issues and uncover new opportunities for growth.
						Select one of three affordable launchpads
					</p>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- Case Study Section Start -->

<div class="full-row">
<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-12">
				<span class="text-tertiary pb-2 d-table">Compass Launchpads</span>
				<h3 class="mb-4">The Starter Launchpad.</h3>
				<p>Get the Compass business review, understand your customers perspectives better and get
					detailed insights on how to improve and grow your business. 
					The Compass Starter Launchpad is a good start on your customer engagement journey and a 
					foundational block to build on.</p>					
					<ul class="py-2"><!--list-half-width-->
						<li><i class="fas fa-check pr-1"></i>Basic business review</li>
						<li><i class="fas fa-check pr-1"></i>Customised feedback from from up to 15 of your customers ( surveys)</li>
						<li><i class="fas fa-check pr-1"></i>Strategic insights on key areas in your business</li>
						<li><i class="fas fa-check pr-1"></i>Implementation plan to develop your customer engagement system</li>
					</ul>
					<p >Enhance your business, transform your business by tracking your customers, understanding
						they think of your product(s) and learn how you can improve your offerings.</p>
						<form action="{{route('cart.store')}}" method="post">
							{{ csrf_field() }}
							<input type="hidden" name="id" value="6">
							<input type="hidden" name="name" value="The Starter Launchpad.">
							<input type="hidden" name="details" value="The Starter Launchpad.">
							<input type="hidden" name="price" value="35000">
							<button type="submit" class="btn btn-tertiary mt-4 d-table">Get this for NGN35,000 only</button>
						</form>
					{{-- <a href="#" class="btn btn-primary mt-4 d-table">Get all of these for NGN35,000 only</a> --}}
		</div>
		<div class="col-lg-5 col-md-5 offset-lg-1">
			<div class="row">
				<div class="col-lg-6 col-md-6 border-right border-bottom">
					<div class="px-4 py-5">
						<span class="flaticon-conveyor flat-medium text-tertiary d-table mb-3"></span>
						<h5 class="text-secondary">Basic Business Review</h5>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 border-bottom">
					<div class="px-4 py-5">
						<span class="flaticon-chat-1 flat-medium text-tertiary d-table mb-3"></span>
						<h5 class="text-secondary">Customised Feedback (15 Customers)</h5>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 border-right">
					<div class="px-4 py-5">
						<span class="flaticon-online-marketing flat-medium text-tertiary d-table mb-3"></span>
						<h5 class="text-secondary">Strategic Insights</h5>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="px-4 py-5">
						<span class="flaticon-rocket flat-medium text-tertiary d-table mb-3"></span>
						<h5 class="text-secondary">CES Implementation Plan</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<div class="full-row">
<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-12">
				<span class="text-tertiary pb-2 d-table">Compass Launchpads</span>
				<h3 class="mb-4">The Essentials Launchpad.</h3>
				<p>The next level of our offerings, The Compass Essentials Launchpad sets you up on the
					essentials of customer engagement.
					
					What’s included:</p>					
					<ul class="py-2"><!--list-half-width-->
						<li><i class="fas fa-check pr-1"></i>A 30-minute Strategy Review call and email follow up in 1 week</li>
						<li><i class="fas fa-check pr-1"></i>Detailed feedback from 25 of your customers (messages, surveys)</li>
						<li><i class="fas fa-check pr-1"></i>Team assessment (from your employees as well to assess the state of your team, how
							well they understand their role and responsibilities and how equipped they are to carry
							out their work) (messages, surveys)</li>
						<li><i class="fas fa-check pr-1"></i>Strategic insights on key areas in your business</li>
						<li><i class="fas fa-check pr-1"></i>Implementation plan to develop key areas of your customer engagement system</li>
					</ul>
					<p >The essentials launchpad focuses on the internal system of your business, you can
						improve your customer retention rate and increase your profit.</p>
					<form action="{{route('cart.store')}}" method="post">
						{{ csrf_field() }}
						<input type="hidden" name="id" value="7">
						<input type="hidden" name="name" value="The Essentials Launchpad.">
						<input type="hidden" name="details" value="The Essentials Launchpad.">
						<input type="hidden" name="price" value="75000">
						<button type="submit" class="btn btn-tertiary mt-4 d-table">Get this for NGN75,000 only</button>
					</form>
					{{-- <a href="#" class="btn btn-primary mt-4 d-table">Get all of these for NGN75,000 only</a> --}}
		</div>
		<div class="col-lg-5 col-md-5 offset-lg-1">
			<div class="row">
				<div class="col-lg-6 col-md-6 border-right border-bottom">
					<div class="px-4 py-5">
						<span class="flaticon-conveyor flat-medium text-tertiary d-table mb-3"></span>
						<h5 class="text-secondary">Business Strategy Review</h5>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 border-bottom">
					<div class="px-4 py-5">
						<span class="flaticon-chat-1 flat-medium text-tertiary d-table mb-3"></span>
						<h5 class="text-secondary">Detailed Feedback (25 Customers)</h5>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 border-right border-bottom">
					<div class="px-4 py-5">
						<span class="flaticon-group-1 flat-medium text-tertiary d-table mb-3"></span>
						<h5 class="text-secondary">Team Assessment</h5>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 border-bottom">
					<div class="px-4 py-5">
						<span class="flaticon-online-marketing flat-medium text-tertiary d-table mb-3"></span>
						<h5 class="text-secondary">Strategic Insights</h5>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 border-right">
					<div class="px-4 py-5">
						<span class="flaticon-rocket flat-medium text-tertiary d-table mb-3"></span>
						<h5 class="text-secondary">CES Implementation Plan</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<div class="full-row">
<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-12">
				<span class="text-tertiary pb-2 d-table">Compass Launchpads</span>
				<h3 class="mb-4">The Premium Launchpad.</h3>
				<p>Get the premium experience with the Compass Premium Launchpad.
					
					What’s included:</p>					
					<ul class="py-2"><!--list-half-width-->
						<li><i class="fas fa-check pr-1"></i>A 45-minute business strategy review call and unlimited emails over one week</li>
						<li><i class="fas fa-check pr-1"></i>Detailed feedback from 40 of your customers (calls, messages, surveys)</li>
						<li><i class="fas fa-check pr-1"></i>Team assessment (from your employees as well to assess the state of your team, how
							well they understand their role and responsibilities and how equipped they are to carry
							out their work) (calls, messages, surveys)</li>
						<li><i class="fas fa-check pr-1"></i>Strategic insights on key areas in your business</li>
						<li><i class="fas fa-check pr-1"></i>Implementation plan to develop your customer engagement system</li>
					</ul>
					<p >Get a detailed strategic review with key improvements areas for your offerings to your
						customers and employees.</p>
					<p >We guide you on how to build structure, finetune your internal systems, accelerate employee
						productivity so you can grow as a business.</p>
					<p >Get your own customer engagement system and capture relevant information, connect regularly
						and convert irregular customers into repeat customers and your brand ambassadors.</p>
					<form action="{{route('cart.store')}}" method="post">
						{{ csrf_field() }}
						<input type="hidden" name="id" value="8">
						<input type="hidden" name="name" value="The Premium Launchpad.">
						<input type="hidden" name="details" value="The Premium Launchpad.">
						<input type="hidden" name="price" value="250000">
						<button type="submit" class="btn btn-tertiary mt-4 d-table">Get this for NGN250,000 only</button>
					</form>
					{{-- <a href="#" class="btn btn-primary mt-4 d-table">Get all of these for NGN250,000 only</a> --}}
		</div>
		<div class="col-lg-5 col-md-5 offset-lg-1">
			<div class="row">
				<div class="col-lg-6 col-md-6 border-right border-bottom">
					<div class="px-4 py-5">
						<span class="flaticon-conveyor flat-medium text-tertiary d-table mb-3"></span>
						<h5 class="text-secondary">Business Strategy Review</h5>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 border-bottom">
					<div class="px-4 py-5">
						<span class="flaticon-chat-1 flat-medium text-tertiary d-table mb-3"></span>
						<h5 class="text-secondary">Detailed Feedback (40 Customers)</h5>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 border-right border-bottom">
					<div class="px-4 py-5">
						<span class="flaticon-group-1 flat-medium text-tertiary d-table mb-3"></span>
						<h5 class="text-secondary">Team Assessment</h5>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 border-bottom">
					<div class="px-4 py-5">
						<span class="flaticon-online-marketing flat-medium text-tertiary d-table mb-3"></span>
						<h5 class="text-secondary">Strategic Insights</h5>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 border-right">
					<div class="px-4 py-5">
						<span class="flaticon-rocket flat-medium text-tertiary d-table mb-3"></span>
						<h5 class="text-secondary">CES Implementation Plan</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>




{{-- Compass Business solution --}}

<div class="full-row bg-light" id="business-solutions">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mb-5">
				<h2 class="main-title down-line-pink w-50 m-auto text-center w-sm-100">Compass Business Solutions</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="w-75 text-center mx-auto d-block w-sm-100">
					<p>Our business solutions provide clarity in your business, identify opportunities and improve
						performance. Compass Business Solutions are focused on equipping you with the tools to run
						your business effectively and have a built-in reflection period to ensure you get the most out of
						your time with us.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="full-row">
	<div class="container">
		<div class="row mb-5">
			<div class="col-lg-3 col-md-3">
				<img src="css/assets/images/strategic.png" alt="">
			</div>
			<div class="offset-md-1 col-lg-8 col-md-8">
				<div class="position-relative y-center">
					<h4 class="mb-3">Business Strategy Review</h4>
					<p>You don’t plan a road trip without knowing your destination. In the same way, having a
						business strategy is an important step in charting the course of your business. We
						recommend a biannual strategy review or at the very least, an annual review.</p>
							<ul class="py-2">
						   
								<li><i class="fas fa-check pr-1"></i>Our detailed review - we spend time with you to understand your business and
									current performance levels including your financials over two 45-minute calls.
									You get 2 strategy review calls (one at the start and the other after a two-week
									period, during which you may contact us via email to seek any clarifications.</li>
							</ul>
					<a href="{{ url('/contact') }}" class="btn-link text-dark">If you do not have a business strategy plan for us to work with yet, we can work with you to
						create a winning business plan. (Contact Us)</a>
					
					<a href="{{ url('/contact') }}" class="btn btn-pink mt-4 d-table">From NGN 100,000</a>
				</div>
			</div>
		</div>
		<div class="row mb-5">
			<div class="col-lg-8 col-md-8">
				<div class="position-relative y-center">
					<h4 class="mb-3">Accelerate: Employee Productivity</h4>
					<p>Employee engagement in your business has a direct relationship with their output and
						the service quality your customers get when they interact with your business. We assess
						the state of your team and provide insights on how to fill existing gaps and accelerate
						the general team productivity.</p>
						<ul class="py-2">
						   
							<li><i class="fas fa-check pr-1"></i>We conduct a team feedback analysis, understand their individual motivations
								and preferred rewards and review your internal process to see how you can
								standardize to get the best out of your employees.</li>
						</ul>
				<a href="{{ url('/contact') }}" class="btn btn-pink mt-4 d-table">From NGN 70,000</a>
				</div>
			</div>
			<div class="offset-md-1 col-lg-3 col-md-3">
				<img src="css/assets/images/employees.png" alt="">
			</div>
		</div>
		<div class="row mb-5">
			<div class="col-lg-3 col-md-3">
				<img src="css/assets/images/sq-17.png" alt="">
			</div>
			<div class="offset-md-1 col-lg-8 col-md-8">
				<div class="position-relative y-center">
					<h4 class="mb-3">Customer Engagement System Design</h4>
					<p>Every business has its most valuable customers that provide the most value to the
						business with every purchase or engagement made. Being aware of this helps you know
						how to position your business to optimize a relationship with these customers as well as
						groom other customers to this point.</p>
					<ul class="py-2"><!--list-half-width-->
						<li><i class="fas fa-check pr-1"></i>We assess the profiles of your customers and work with you to segment them.</li>
						<li><i class="fas fa-check pr-1"></i>We review your current engagement practices and create new pathways for
							better customer engagement across your key platforms and customer
							touchpoints.</li>
					</ul>
					
					<a href="{{ url('/contact') }}" class="btn btn-pink mt-4 d-table">From NGN 200,000</a>

				</div>
			</div>
		</div>
		<div class="row mb-5">
			<div class="col-lg-8 col-md-8">
				<div class="position-relative y-center">
					<h4 class="mb-3">Market Research</h4>
					<p>Tailored to your particular needs as regards customer insights,
						product insights, a pitch, competition insights or any other area in which you may need
						reliable data to make informed decisions for your business. Contact us to share your
						needs and get a quote.</p>
					
				<a href="{{ url('/contact') }}" class="btn btn-pink mt-4 d-table">Contact us to get a quote</a>
				</div>
			</div>
			<div class="offset-md-1 col-lg-3 col-md-3">
				<img src="css/assets/images/sq-21.png" alt="">
			</div>
		</div>
	</div>
</div>

@endsection