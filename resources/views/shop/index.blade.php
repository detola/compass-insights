@extends('layouts/frontpage')

@section('content')
    <!--Hero Section-->
<div class="full-row page-banner-image overlay-secondary" style="background-image: url(css/assets/images/background/bg-9.png); background-position: center center; background-size: cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-white text-center down-line-white">Product Page</h1>
                <span class="text-white text-center mt-4 sub-title w-50 w-sm-100 mx-auto">Product Page, feel free to choose from the variety of product that's we've itemised for you</span>
            </div>
        </div>
    </div>
</div>


<!--Product Section Begin-->
<div class="full-row bg-primary">
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
							<a href="#" class="btn btn-dark mt-3">About Company</a>
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
</div>

<div class="full-row">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mb-5">
				<h2 class="main-title down-line w-50 m-auto text-center w-sm-100">Compass Business Boosters</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="w-75 text-center mx-auto d-block w-sm-100">
					<p>Our boosters are a great way to introduce structure to your business, because once you have
						them, team members simply need to follow the established guidelines. These Customer
						Engagement Boosters will transform your customers’ experience. They help eliminate
						guesswork in your processes, ensure that your team knows exactly what to do per time and that
						all customers have a consistent pleasant experience. They are easy to use, so you can
						effectively delegate implementation to the responsible staff. This will give you more to focus on
						product development that grows your client base.</p>
					<p><b>Even if you are working solo or
						as a freelancer, your customers do not need to know that. Our boosters will help you deliver
						consistent service, address any queries or issues and set a great standard for your business.</b></p>
				</div>
				<!--<div class="mx-auto d-table wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
					<img src="assets/images/background/bg-13.png" alt="corporate template">
				</div>-->
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="feature-thumb-border hover-text-white bg-light transation w-50 w-sm-100 d-flex float-left p-4">
					<span class="float-left d-table mt-2"><i class="flaticon-power flat-medium text-primary"></i></span>
					<div class="pl-3">
						<span class="text-primary d-table tagline">Booster 1</span>
						<h5 class="text-dark mb-3 text-uppercase">First Impression Matters : Make a great first impression 
							and increase conversion rates</h5>
						<p>No better time to make a good impression than the first encounter with your business –
							from WhatsApp to calls, social media to emails, we ensure that a potential client’s first
							interaction with you is unforgettable for the right reasons. 
							This booster ensures that you put your best foot forward and convey the quality and 
							value you provide to potential customers. A positive first impression is more likely to 
							yield to a sale. It also converts the potential customer to an ambassador even if they 
							don’t make an initial purchase.</p>
							
								<form action="{{route('cart.store')}}" method="post">
									{{ csrf_field() }}
									<input type="hidden" name="id" value="1">
									<input type="hidden" name="name" value="Booster 1">
									<input type="hidden" name="details" value="First Impression Matters : 
									Make a great first impression and increase conversion rates">
									<input type="hidden" name="price" value="20000">
									<button type="submit" class="btn btn-dark mt-3">Get this now for NGN 20,000 launch price</button>
								</form>
					</div>
				</div>
				<div class="feature-thumb-border hover-text-white bg-light transation w-50 w-sm-100 d-flex float-left p-4">
					<span class="float-left d-table mt-2"><i class="flaticon-power flat-medium text-primary"></i></span>
					<div class="pl-3">
						<span class="text-primary d-table tagline">Booster 2</span>
						<h5 class="text-dark mb-3 text-uppercase">Order Management: Set a gold standard for your business, be known for your seamless
							order processes</h5>
						<p>You have made a good first impression, and secured a sale - great! But how seamless is
							your order process, from when the order is received to fulfilment?
							Set a gold standard for your business and have a no-hiccup, no-excuses order
							management process and watch customers praise you for doing what you say you are
							going to do.
							The Order Management booster ensures that your customers have a seamless order
							process, consistently providing reassurance to your customer and ensuring referrals as
							well as repeat orders.</p>
							
								<form action="{{route('cart.store')}}" method="post">
									{{ csrf_field() }}
									<input type="hidden" name="id" value="2">
									<input type="hidden" name="name" value="Booster 2">
									<input type="hidden" name="details" value="Order Management: Set a gold 
									standard for your business, be known for your seamless order processes">
									<input type="hidden" name="price" value="20000">
									<button type="submit" class="btn btn-dark mt-3">Get this now for NGN 20,000 launch price</button>
								</form>
					</div>
				</div>
				<div class="feature-thumb-border hover-text-white bg-light transation w-50 w-sm-100 d-flex float-left p-4">
					<span class="float-left d-table mt-2"><i class="flaticon-power flat-medium text-primary"></i></span>
					<div class="pl-3">
						<span class="text-primary d-table tagline">Booster 3</span>
						<h5 class="text-dark mb-3 text-uppercase">The Delivery Experience Revamp: Be outstanding</h5>
						<p>This booster is a must-have for all product vendors, and can be used by service vendors
							too. This is when the customer gets to experience what they ordered. From first
							impressions through the order process, this is where your promises are either made or
							broken. Whichever way you deliver your products or services, your customer needs to
							know what to expect and when to expect your products.
							The delivery experience can make or break the order success. Provide upfront
							information about what happens to unwanted products/services. Ensure your customer
							delivery experience is a positive one, all the time.</p>
							
								<form action="{{route('cart.store')}}" method="post">
									{{ csrf_field() }}
									<input type="hidden" name="id" value="3">
									<input type="hidden" name="name" value="Booster 3">
									<input type="hidden" name="details" value="The Delivery Experience Revamp: Be outstanding">
									<input type="hidden" name="price" value="20000">
									<button type="submit" class="btn btn-dark mt-3">Get this now for NGN 20,000 launch price</button>
								</form>
					</div>
				</div>
				<div class="feature-thumb-border hover-text-white bg-light transation w-50 w-sm-100 d-flex float-left p-4">
					<span class="float-left d-table mt-2"><i class="flaticon-power flat-medium text-primary"></i></span>
					<div class="pl-3">
						<span class="text-primary d-table tagline">Booster 4</span>
						<h5 class="text-dark mb-3 text-uppercase">Troubleshooting for Success: Be prepared to address queries, 
							complaints and feedback</h5>
						<p>No matter how hard you try, complaints are going to come. Yet, excellent businesses
							know that complaints are the elements needed for service improvement. So, how
							equipped are you to address complaints and feedback?
							This booster ensures that you have an established system to address complaints,
							feedback or customer queries knowledgeably, professionally and without making the
							other party feel uncomfortable. Better to hear these complaints first hand than to see
							your business trending for a negative reason!
							Get the Troubleshooting for Success booster and resolve issues, respond to queries and
							complaints and receive feedback graciously. Who knows, you might get a loyal
							customer through this.</p>
							
								<form action="{{route('cart.store')}}" method="post">
									{{ csrf_field() }}
									<input type="hidden" name="id" value="4">
									<input type="hidden" name="name" value="Booster 4">
									<input type="hidden" name="details" value="Troubleshooting for Success: 
									Be prepared to address queries, complaints and feedback">
									<input type="hidden" name="price" value="20000">
									<button type="submit" class="btn btn-dark mt-3">Get this now for NGN 20,000 launch price</button>
								</form>
					</div>
				</div>
				<div class="feature-thumb-border hover-text-white bg-light transation w-50 w-sm-100 d-flex float-left p-4">
					<span class="float-left d-table mt-2"><i class="flaticon-power flat-medium text-primary"></i></span>
					<div class="pl-3">
						<span class="text-primary d-table tagline">Booster Pack</span>
						<h5 class="text-dark mb-3 text-uppercase">Get All 4 Bossters</h5>
						<p>No matter how hard you try, complaints are going to come. Yet, excellent businesses
							know that complaints are the elements needed for service improvement. So, how
							equipped are you to address complaints and feedback?
							This booster ensures that you have an established system to address complaints,
							feedback or customer queries knowledgeably, professionally and without making the
							other party feel uncomfortable. Better to hear these complaints first hand than to see
							your business trending for a negative reason!
							Get the Troubleshooting for Success booster and resolve issues, respond to queries and
							complaints and receive feedback graciously. Who knows, you might get a loyal
							customer through this.</p>
							<del>100,000</del>
							
								<form action="{{route('cart.store')}}" method="post">
									{{ csrf_field() }}
									<input type="hidden" name="id" value="5">
									<input type="hidden" name="name" value="Booster Pack">
									<input type="hidden" name="details" value="Get All 4 Bossters">
									<input type="hidden" name="price" value="50000">
									<button type="submit" class="btn btn-dark mt-3">Get this now for NGN 50,000 launch price</button>
								</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="full-row">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mb-5">
				<span class="text-primary pb-2 d-table m-auto tagline">Lauchpads</span>
				<h2 class="main-title down-line w-50 mx-auto mb-4 text-center w-sm-100">Compass Launchpads</h2>
				<span class="d-table w-50 w-sm-100 sub-title mx-auto text-center mb-5">Our Launchpads are specially packaged to transform key areas of your business at the pace you like. Start your journey to successful customer engagements and make customer service quality and engagement, a unique selling point (USP) of your business.</span>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-4 p-0">
				<div class="pricing-table-simple p-5 bg-light">
					<div class="box-100px p-3 mx-auto rotate45 mb-4"><span class="flaticon-kite flat-large text-primary"></span></div>
					<h4 class="text-center mb-3">The Starter Launchpad</h4>
					<p class="text-center">Get the Compass business review, understand your customers perspectives better and get detailed insights on how to improve and grow your business. The Compass Starter Launchpad is a good start on your customer engagement journey and a foundational block to build on.</p>
					<ul class="py-2">
						<li><i class="fas fa-check pr-1 text-primary"></i> Basic business review</li>
						<li><i class="fas fa-check pr-1 text-primary"></i> Customised feedback from from up to 15 of your customers (surveys)</li>
						<li><i class="fas fa-check pr-1 text-primary"></i> Strategic insights on key areas in your business</li>
						<li><i class="fas fa-check pr-1 text-primary"></i> Implementation plan to develop your customer engagement system</li>
					</ul>
					<hr>
					<div class="text-center"><span class="text-primary font-large">NGN35,000</span></div>
					<a href="#" class="btn btn-primary mt-4 mx-auto d-block">Add to basket</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 p-0">
				<div class="pricing-table-simple popular p-5 text-white bg-primary">
					<div class="box-100px p-3 mx-auto rotate45 mb-4"><span class="flaticon-plane flat-large text-white"></span></div>
					<h4 class="text-center text-white mb-3">Essential</h4>
					<p class="text-center">Business Strategy Review Customer Engagement Growth Kit for up to 25 customers
						Team Health Assessment 
						</p>
					<ul class="py-2">
						<li><i class="fas fa-check pr-1 text-white"></i> First impression matters</li>
						<li><i class="fas fa-check pr-1 text-white"></i> Troubleshooting</li>
					</ul>
					<hr>
					<div class="text-center"><span class="text-white font-large">NGN75,000</span></div>
					<a href="#" class="btn btn-white mt-4 mx-auto d-block">Get Started</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 p-0">
				<div class="pricing-table-simple p-5 text-white bg-dark">
					<div class="box-100px p-3 mx-auto rotate45 mb-4"><span class="flaticon-start flat-large text-white"></span></div>
					<h4 class="text-center text-white mb-3">Premium</h4>
					<p class="text-center">Business Strategy Review Customer Engagement Growth Kit for up to 40 customers
						Customer Relationship Management System Set Up Team Health Assessment. 
						</p>
					<ul class="py-2">
						<li><i class="fas fa-check pr-1 text-white"></i> First impression matters</li>
						<li><i class="fas fa-check pr-1 text-white"></i> Seamless Order</li>
						<li><i class="fas fa-check pr-1 text-white"></i> The Ultimate Delivery Experience.</li>
						<li><i class="fas fa-check pr-1 text-white"></i> Troubleshooting</li>
					</ul>
					<hr>
					<div class="text-center"><span class="text-white font-large">NGN250,000</span></div>
					<a href="#" class="btn btn-primary mt-4 mx-auto d-block">Get Started</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="full-row pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-7">
				<span class="tagline text-primary pb-2 d-table w-xs-100">Essential Package</span>
				<h3 class="down-line mb-4">Compass Customer Experience Packages - Essential</h3>
				<!--<span class="d-table sub-title ordenery-font mb-4">Mauris primis turpis Laoreet magna felis mi amet 
					quam enim curae. Sodales semper tempor dictum faucibus habitasse.</span>-->
				<p>Strategy Review: 30-minute call and then 1 email follow up one week after 
					Customer feedback carried out via Whatsapp messages and emails for 25 customers.
					Team health check carried out via survey to assess the state of and advise on the 
					improvement of your internal systems as they affect your customer engagement process.
					</p>
				<!--<ul class="list-full-width">
					<li><i class="far fa-plus-square text-primary mr-2"></i> Fames elementum diam ridiculus quis varius.</li>
					<li><i class="far fa-plus-square text-primary mr-2"></i> Quisque ultricies neque mi sollicitudin sociis potenti viverra.</li>
					<li><i class="far fa-plus-square text-primary mr-2"></i> Neque Consequat tellus pede sociosqu viverra purus massa mollis sapien.</li>
				</ul>-->
				<div class="bb-accordion ac-single-show accordion-plus-left">
					<div class="ac-card">
						<a class="ac-toggle d-block py-2 text-secondary font-small higlight-font active" href="javascript:void(0);">First Impression Matters</a>
						<div class="ac-collapse show" style="display: block">
							<p>There is no time to make a good second impression, whatever the medium used to get in touch with you.  
								This includes WhatsApp, calls, social media, and emails. We ensure that a potential customer’s first 
								interaction with you is a positive one and a positive experience is more likely to yield to a sale than a negative one. 
								Not to be taken lightly, a lot of businesses lose potential customers at this stage.
								</p>
						</div>
					</div>
					<div class="ac-card">
						<a class="ac-toggle d-block py-2 text-secondary font-small higlight-font" href="javascript:void(0);">Troubleshooting</a>
						<div class="ac-collapse">
							<p>Yes, you want everything to go ahead without any issues, but this does not always happen. 
								How equipped are you to address complaints and feedback? 
								This booster ensures that when complaints or queries come in as they are going to, 
								your business is able to deal with this empathetically and get to a favorable resolution 
								and maybe a repeat customer and even referral in the process?
								</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-5 offset-lg-1">
				<div class="row">
					<div class="col-lg-6 col-md-6 border-right border-bottom">
						<div class="px-4 py-5">
							<span class="flaticon-conveyor flat-medium text-primary d-table mb-3"></span>
							<h5 class="text-secondary">First Impression Matters</h5>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 border-bottom">
						<div class="px-4 py-5">
							<span class="flaticon-group-1 flat-medium text-primary d-table mb-3"></span>
							<h5 class="text-secondary">Troubleshooting</h5>
						</div>
					</div>
					<!--<div class="col-lg-6 col-md-6 border-bottom">
						<div class="px-4 py-5">
							<span class="flaticon-online-marketing flat-medium text-primary d-table mb-3"></span>
							<h5 class="text-secondary">Seamless Order</h5>
						</div>
					</div>-->
					<!--<div class="col-lg-6 col-md-6 border-right">
						<div class="px-4 py-5">
							<span class="flaticon-group-1 flat-medium text-primary d-table mb-3"></span>
							<h5 class="text-secondary">Revamp the Delivery Experience</h5>
						</div>
					</div>-->
					<!--<div class="col-lg-6 col-md-6">
						<div class="px-4 py-5">
							<span class="flaticon-rocket flat-medium text-primary d-table mb-3"></span>
							<h5 class="text-secondary">Troubleshooting</h5>
						</div>
					</div>-->
				</div>
					<a href="#" class="btn btn-primary mt-4 mx-auto d-block">NGN 75,000</a>
			</div>
		</div>
	</div>
</div>

<div class="full-row pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-7">
				<span class="tagline text-primary pb-2 d-table w-xs-100">Premium Package</span>
				<h3 class="down-line mb-4">Compass Customer Experience Packages - Premium</h3>
				<!--<span class="d-table sub-title ordenery-font mb-4">Mauris primis turpis Laoreet magna felis mi amet 
					quam enim curae. Sodales semper tempor dictum faucibus habitasse.</span>-->
				<p>Business Strategy Review: 1 45-minute call and regular email follow up over the space of 1 week after the initial call.
					Customer feedback: Carried out via a a mix of messages and calls to 40 of your customers
					Setup of the customer relationship management system for your customers based on your specific business model.
					Team health check carried out via survey to assess the state of and advise on the improvement of your internal systems as they affect your customer engagement process.
					</p>
				<!--<ul class="list-full-width">
					<li><i class="far fa-plus-square text-primary mr-2"></i> Fames elementum diam ridiculus quis varius.</li>
					<li><i class="far fa-plus-square text-primary mr-2"></i> Quisque ultricies neque mi sollicitudin sociis potenti viverra.</li>
					<li><i class="far fa-plus-square text-primary mr-2"></i> Neque Consequat tellus pede sociosqu viverra purus massa mollis sapien.</li>
				</ul>-->
				<div class="bb-accordion ac-single-show accordion-plus-left">
					<div class="ac-card">
						<a class="ac-toggle d-block py-2 text-secondary font-small higlight-font active" href="javascript:void(0);">First Impression Matters</a>
						<div class="ac-collapse show" style="display: block">
							<p>There is no time to make a good second impression, whatever the medium used to get in touch with you.  
								This includes WhatsApp, calls, social media, and emails. We ensure that a potential customer’s first 
								interaction with you is a positive one and a positive experience is more likely to yield to a sale than a negative one. 
								Not to be taken lightly, a lot of businesses lose potential customers at this stage.
								</p>
						</div>
					</div>
					<div class="ac-card">
						<a class="ac-toggle d-block py-2 text-secondary font-small higlight-font" href="javascript:void(0);">Seamless Order</a>
						<div class="ac-collapse">
							<p>You have made a good first impression and secured a sale - great! Now it is time to 
								think about your order process. You need to ensure it is seamless, from when the order 
								is placed to when it is fulfilled. If you say your product/service is a good quality one, 
								then how the order is carried out reveals to the customer how consistent your quality standards are. 
								Our booster ensures that your customers have a seamless order process, consistently, 
								providing reassurance to your customer and ensuring return business.
								
								</p>
						</div>
					</div>
					<div class="ac-card">
						<a class="ac-toggle d-block py-2 text-secondary font-small higlight-font" href="javascript:void(0);">Revamp the Delivery Experience</a>
						<div class="ac-collapse">
							<p>However, you deliver your products or services, you need to ensure that the customer experience remains a positive one.
								</p>
						</div>
					</div>
					<div class="ac-card">
						<a class="ac-toggle d-block py-2 text-secondary font-small higlight-font" href="javascript:void(0);">Troubleshooting</a>
						<div class="ac-collapse">
							<p>Yes, you want everything to go ahead without any issues, but this does not always happen. 
								How equipped are you to address complaints and feedback? 
								This booster ensures that when complaints or queries come in as they are going to, 
								your business is able to deal with this empathetically and get to a favorable resolution 
								and maybe a repeat customer and even referral in the process?
								</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-5 offset-lg-1">
				<div class="row">
					<div class="col-lg-6 col-md-6 border-right border-bottom">
						<div class="px-4 py-5">
							<span class="flaticon-conveyor flat-medium text-primary d-table mb-3"></span>
							<h5 class="text-secondary">First Impression Matters</h5>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 border-bottom">
						<div class="px-4 py-5">
							<span class="flaticon-online-marketing flat-medium text-primary d-table mb-3"></span>
							<h5 class="text-secondary">Seamless Order</h5>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 border-right">
						<div class="px-4 py-5">
							<span class="flaticon-group-1 flat-medium text-primary d-table mb-3"></span>
							<h5 class="text-secondary">Revamp the Delivery Experience</h5>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="px-4 py-5">
							<span class="flaticon-rocket flat-medium text-primary d-table mb-3"></span>
							<h5 class="text-secondary">Troubleshooting</h5>
						</div>
					</div>
				</div>
					<a href="#" class="btn btn-primary mt-4 mx-auto d-block">NGN 250,000</a>
					<input type="hidden" value="250000">

					
			</div>
		</div>
	</div>
</div>




@endsection