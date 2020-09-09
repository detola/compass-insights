@extends('layouts/frontpage')

@section('content')
    <!--Hero Section-->
<div class="full-row page-banner-image overlay-secondary" style="background-image: url(css/assets/images/background/banner10.jpg); background-position: center center; background-size: cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-white text-center down-line-white">We want to hear from you</h1>
                {{-- <span class="text-white text-center mt-4 sub-title w-50 w-sm-100 mx-auto">People freequenly ask question and get answer from our cool stuff. User can feel free to ask question and we answer asap.</span> --}}
            </div>
        </div>
    </div>
</div>


<!--Contact us-->
{{-- <div class="full-row" style="background-image: url(css/assets/images/background/bg-30.png); background-repeat: no-repeat; background-position: center center; background-size: cover;"> --}}
<div class="full-row" id="tell-compass">	
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<span class="tagline text-primary pb-2 d-table w-xs-100">Tell Compass</span>
				<h2 class="down-line mb-2">Have you had exceptionally great service or poor service with any business/brand? Tell Compass.</h2>
				<p> 
					Your reviews are 100% anonymous and only used to improve customer experiences for the brands you engage with.
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
								<input type="text" class="form-control bg-light pl-5" name="name" placeholder="Your Name" required>
								<span class="flaticon-user flat-mini text-general"></span>
							</div>
							<div class="col-lg-6 col-md-6 mb-2">
								<input type="email" class="form-control bg-light pl-5" name="email" placeholder="Your Email" required>
								<span class="flaticon-email flat-mini text-general"></span>
							</div>
							<div class="col-lg-6 col-md-6 mb-2">
								<input type="text" class="form-control bg-light pl-5" name="company" placeholder="Name of the Business/Brand" required>
								<span class="flaticon-group flat-mini text-general"></span>
							</div>
							<div class="col-lg-6 col-md-6 mb-2">
								<input type="text" class="form-control bg-light pl-5" name="socialhandles" placeholder="Social Media of the business - e.g compassinsightsafrica/instagram" required="">
								<span class="flaticon-email-1 flat-mini text-general"></span>
							</div>
							<div class="col-lg-6 col-md-6 mb-2">
								<input type="text" class="form-control bg-light pl-5" name="platform" placeholder="Platform">
								<span class="flaticon-email flat-mini text-general"></span>
							</div>
							<div class="col-lg-12 col-md-12 mb-2">
								<input type="text" class="form-control bg-light pl-5" name="message" placeholder="Message" required>
								<span class="flaticon-envelope flat-mini text-general"></span>
							</div>
							<div class="col-lg-12 col-md-12 mb-2">
								<button class="btn btn-primary" name="submit">Tell Compass</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="full-row" id="get-in-touch">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-7">
				<span class="tagline text-pink pb-2 d-table w-xs-100">Get in touch</span>
	
				<h2 class="down-line-pink mb-5">Send Message</h2>
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
								<button class="btn btn-pink" name="submit" type="submit">Send Message</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="col-lg-5 col-md-5">
				<span class="tagline text-white pb-2 d-table w-xs-100">Get in touch</span>
				<h3 class="down-line-pink mb-5 text-white">Get In Touch</h3>
				<p>For any other messages, then get in touch using the form</p>
				<div class="d-flex mb-3">
					<ul>
						<li class="mb-3">
							<strong>Office Address :</strong><br>
							135A Brickfield Road, Costain, Surulere, Lagos, Nigeria.
						</li>
						<li class="mb-3">
							<strong>Contact Number :</strong><br>
							+234 908 467 4448
						</li>
						<li class="mb-3">
							<strong>Email Address :</strong><br>
							talk@compassinsights.ng
						</li>
					</ul>
				</div>
				<h5 class="mb-2">Career Info</h5>
				<p>If you’re interested in employment opportunities at Compass Insights, please email us:<br> <a href="mailto:career@compassinsights.ng" 
					class="text-pink">career@compassinsights.ng</a></p>
			</div>
		</div>
	</div>
</div>

<!--Send Message Section-->



@endsection