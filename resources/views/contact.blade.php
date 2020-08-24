@extends('layouts/frontpage')

@section('content')
    <!--Hero Section-->
<div class="full-row page-banner-image overlay-secondary" style="background-image: url(css/assets/images/background/bg-9.png); background-position: center center; background-size: cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-white text-center down-line-white">Information About Company</h1>
                <span class="text-white text-center mt-4 sub-title w-50 w-sm-100 mx-auto">People freequenly ask question and get answer from our cool stuff. User can feel free to ask question and we answer asap.</span>
            </div>
        </div>
    </div>
</div>


<!--Contact us-->
<div class="full-row" style="background-image: url(css/assets/images/background/bg-30.png); background-repeat: no-repeat; background-position: center center; background-size: cover;">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<span class="tagline text-primary pb-2 d-table w-xs-100">Contact</span>
				<h1 class="down-line mb-2">Tell us what you need so we can meet your business needs</h1>
				<p>Have you had exceptionally great service or poor service with any business/brand? Tell Compass. 
					<br>Your reviews are 100% anonymous and only used to improve customer experiences for the brands you engage with.
				</p>
				<div class="form-icon-left mt-5">
					<form action="#" method="POST">
						<div class="row">
							<!--<div class="col-lg-6 col-md-6 mb-2">
								<select class="form-control bg-light pl-5">
									<option>For My Business</option>
									<option>Food Business</option>
									<option>Hardware Center</option>
									<option>Car Business</option>
								</select>
								<span class="flaticon-conveyor flat-mini text-general"></span>
							</div>-->
							<div class="col-lg-6 col-md-6 mb-2">
								<input type="text" class="form-control bg-light pl-5" name="name" placeholder="Name" required="">
								<span class="flaticon-user flat-mini text-general"></span>
							</div>
							<div class="col-lg-6 col-md-6 mb-2">
								<input type="email" class="form-control bg-light pl-5" name="email" placeholder="Email" required="">
								<span class="flaticon-email flat-mini text-general"></span>
							</div>
							<div class="col-lg-6 col-md-6 mb-2">
								<input type="text" class="form-control bg-light pl-5" name="mobile" placeholder="mobile No." required="">
								<span class="flaticon-telephone flat-mini text-general"></span>
							</div>
							<div class="col-lg-6 col-md-6 mb-2">
								<input type="text" class="form-control bg-light pl-5" name="company" placeholder="Company" required="">
								<span class="flaticon-group flat-mini text-general"></span>
							</div>
							<div class="col-lg-6 col-md-6 mb-2">
								<input type="text" class="form-control bg-light pl-5" name="telephone" placeholder="Telephone No." required="">
								<span class="flaticon-telephone flat-mini text-general"></span>
							</div>
							<div class="col-lg-6 col-md-6 mb-2">
								<input type="email" class="form-control bg-light pl-5" name="businessEmail" placeholder="Business Email" required="">
								<span class="flaticon-email flat-mini text-general"></span>
							</div>
							<div class="col-lg-12 col-md-12 mb-2">
								<input type="text" class="form-control bg-light pl-5" name="socialhandles" placeholder="Social Media Handles" required="">
								<span class="flaticon-email-1 flat-mini text-general"></span>
							</div>
							<div class="col-lg-12 col-md-12 mb-2">
								<input type="text" class="form-control bg-light pl-5" name="message" placeholder="Message" required="">
								<span class="flaticon-envelope flat-mini text-general"></span>
							</div>
							<div class="col-lg-12 col-md-12 mb-2">
								<button class="btn btn-primary" name="submit">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Send Message Section-->
<div class="full-row">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-7">
				<h3 class="down-line mb-5">Send Message</h3>
				<div class="form-simple mb-5">
					<form id="contact-form" action="#" method="post">
						<div class="form-row">
							<div class="col-md-6">
								<label>Full Name:</label>
								<input type="text" class="form-control bg-gray" name="name" required="">
							</div>
							<div class="col-md-6">
								<label>Your Email:</label>
								<input type="email" class="form-control bg-gray" name="email" required="">
							</div>
							<div class="col-md-12">
								<label>Subject:</label>
								<input type="text" class="form-control bg-gray" name="subject" required="">
							</div>
							<div class="col-md-12">
								<label>Message:</label>
								<textarea class="form-control bg-gray" name="message" rows="8" required=""></textarea>
							</div>
							<div class="col-md-12">
								<button class="btn btn-primary" name="submit" type="submit">Send Message</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-lg-5 col-md-5">
				<h3 class="down-line mb-5">Get In Touch</h3>
				<p>For any other messages, then get in touch using the form</p>
				<div class="d-flex mb-3">
					<ul>
						<li class="mb-3">
							<strong>Office Address :</strong><br>
							305 Bakersfield, Costain, Surulere, Lagos, Nigeria
						</li>
						<li class="mb-3">
							<strong>Contact Number :</strong><br>
							+234 (0) 908 INSIGHT, (1) INSIGHTS
						</li>
						<li class="mb-3">
							<strong>Email Address :</strong><br>
							info@compassinsights.ng, ask@compassinsights.ng
						</li>
					</ul>
				</div>
				<h5 class="mb-2">Career Info</h5>
				<p>If you’re interested in employment opportunities at Compass Insights, please email us:<br> <a href="#">career@compassinsights.ng</a></p>
			</div>
		</div>
	</div>
</div>


@endsection