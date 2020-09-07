@extends('layouts.frontpage')

@section('content')
    <!--Hero Section-->
<div class="full-row page-banner-image overlay-secondary" style="background-image: url(../css/assets/images/background/banner10.jpg); background-position: center center; background-size: cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-white text-center down-line-white">Our Products</h1>
                {{-- <span class="text-white text-center mt-4 sub-title w-50 w-sm-100 mx-auto">Product Page, feel free to choose from the variety of product that's we've itemised for you</span> --}}
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
						<h5 class="text-dark mb-3 text-uppercase">First Impression Matters: <i>Make a great first impression 
							and increase conversion rates</i></h5>
						<p>No better time to make a good impression than the first encounter with your business –
							from WhatsApp to calls, social media to emails, we ensure that a potential client’s first
							interaction with you is unforgettable for the right reasons. 
							This booster ensures that you put your best foot forward and convey the quality and 
							value you provide to potential customers. A positive first impression is more likely to 
							yield to a sale. It also converts the potential customer to an ambassador even if they 
							don’t make an initial purchase.</p>
							<del class="text-dark text-uppercase">NGN 25,000</del>
							
								<form action="{{route('cart.store')}}" method="post">
									{{ csrf_field() }}
									<input type="hidden" name="id" value="1">
									<input type="hidden" name="name" value="Booster 1">
									<input type="hidden" name="details" value="First Impression Matters : 
									Make a great first impression and increase conversion rates">
									<input type="hidden" name="price" value="20000">
									<button type="submit" class="btn btn-dark mt-3">Boost your business now for N20,000 launch price</button>
								</form>
					</div>
				</div>
				<div class="feature-thumb-border hover-text-white bg-light transation w-50 w-sm-100 d-flex float-left p-4">
					<span class="float-left d-table mt-2"><i class="flaticon-power flat-medium text-primary"></i></span>
					<div class="pl-3">
						<span class="text-primary d-table tagline">Booster 2</span>
						<h5 class="text-dark mb-3 text-uppercase">Order Management: <i>Set a gold standard for your business, be known for your seamless
							order processes</i></h5>
						<p>You have made a good first impression, and secured a sale - great! But how seamless is
							your order process, from when the order is received to fulfilment?
							Set a gold standard for your business and have a no-hiccup, no-excuses order
							management process and watch customers praise you for doing what you say you are
							going to do.
							The Order Management booster ensures that your customers have a seamless order
							process, consistently providing reassurance to your customer and ensuring referrals as
							well as repeat orders.</p>
							<del class="text-dark text-uppercase">NGN 25,000</del>
							
								<form action="{{route('cart.store')}}" method="post">
									{{ csrf_field() }}
									<input type="hidden" name="id" value="2">
									<input type="hidden" name="name" value="Booster 2">
									<input type="hidden" name="details" value="Order Management: Set a gold 
									standard for your business, be known for your seamless order processes">
									<input type="hidden" name="price" value="20000">
									<button type="submit" class="btn btn-dark mt-3">Boost your business now for N20,000 launch price</button>
								</form>
					</div>
				</div>
				<div class="feature-thumb-border hover-text-white bg-light transation w-50 w-sm-100 d-flex float-left p-4">
					<span class="float-left d-table mt-2"><i class="flaticon-power flat-medium text-primary"></i></span>
					<div class="pl-3">
						<span class="text-primary d-table tagline">Booster 3</span>
						<h5 class="text-dark mb-3 text-uppercase">The Delivery Experience Revamp: <i>Be outstanding</i></h5>
						<p>This booster is a must-have for all product vendors, and can be used by service vendors
							too. This is when the customer gets to experience what they ordered. From first
							impressions through the order process, this is where your promises are either made or
							broken. Whichever way you deliver your products or services, your customer needs to
							know what to expect and when to expect your products.
							The delivery experience can make or break the order success. Provide upfront
							information about what happens to unwanted products/services. Ensure your customer
							delivery experience is a positive one, all the time.</p>
							<del class="text-dark text-uppercase">NGN 25,000</del>
							
								<form action="{{route('cart.store')}}" method="post">
									{{ csrf_field() }}
									<input type="hidden" name="id" value="3">
									<input type="hidden" name="name" value="Booster 3">
									<input type="hidden" name="details" value="The Delivery Experience Revamp: Be outstanding">
									<input type="hidden" name="price" value="20000">
									<button type="submit" class="btn btn-dark mt-3">Boost your business now for N20,000 launch price</button>
								</form>
					</div>
				</div>
				<div class="feature-thumb-border hover-text-white bg-light transation w-50 w-sm-100 d-flex float-left p-4">
					<span class="float-left d-table mt-2"><i class="flaticon-power flat-medium text-primary"></i></span>
					<div class="pl-3">
						<span class="text-primary d-table tagline">Booster 4</span>
						<h5 class="text-dark mb-3 text-uppercase">Troubleshooting for Success: <i>Be prepared to address queries, 
							complaints and feedback</i></h5>
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
							<del class="text-dark text-uppercase">NGN 25,000</del>
							
								<form action="{{route('cart.store')}}" method="post">
									{{ csrf_field() }}
									<input type="hidden" name="id" value="4">
									<input type="hidden" name="name" value="Booster 4">
									<input type="hidden" name="details" value="Troubleshooting for Success: 
									Be prepared to address queries, complaints and feedback">
									<input type="hidden" name="price" value="20000">
									<button type="submit" class="btn btn-dark mt-3">Boost your business now for N20,000 launch price</button>
								</form>
					</div>
				</div>
				{{-- <div class="feature-thumb-border hover-text-white bg-light transation w-50 w-sm-100 d-flex float-left p-4">
					<span class="float-left d-table mt-2"><i class="flaticon-power flat-medium text-primary"></i></span>
					<div class="pl-3">
						<span class="text-primary d-table tagline">Booster Bundle</span>
						<h5 class="text-dark mb-3 text-uppercase">Get All 4 Boosters</h5>
						<p>For a complete experience, get all boosters as a bundle and make significant savings</p>
							<del class="text-dark text-uppercase">NGN 100,000</del>
							
								<form action="{{route('cart.store')}}" method="post">
									{{ csrf_field() }}
									<input type="hidden" name="id" value="5">
									<input type="hidden" name="name" value="Booster Pack">
									<input type="hidden" name="details" value="Get All 4 Bossters">
									<input type="hidden" name="price" value="50000">
									<button type="submit" class="btn btn-dark mt-3">Get a total Boost for N50,000 launch price</button>
								</form>
					</div>
				</div> --}}

				<div class="feature-thumb-border hover-text-white bg-primary transation w-50 w-sm-100 d-flex float-left p-4">
					<span class="float-left d-table mt-2"><i class="flaticon-power flat-medium text-dark"></i></span>
					<div class="pl-3">
						<span class="text-dark d-table tagline">Booster Bundle</span>
						<h5 class="text-white mb-3 text-uppercase">Get All 4 Boosters</h5>
						<p class="text-white">For a complete experience, get all boosters as a bundle and make significant savings</p>
							<del class="text-dark text-uppercase">NGN 100,000</del>
							
								<form action="{{route('cart.store')}}" method="post">
									{{ csrf_field() }}
									<input type="hidden" name="id" value="5">
									<input type="hidden" name="name" value="Booster Bundle">
									<input type="hidden" name="details" value="Get All 4 Boosters">
									<input type="hidden" name="price" value="50000">
									<button type="submit" class="btn btn-dark mt-3">Get a total Boost for N50,000 launch price</button>
								</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection