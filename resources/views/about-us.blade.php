@extends('layouts.frontpage')

@section('content')
    <!--Hero Section-->
<div class="full-row page-banner-image overlay-secondary" style="background-image: url(css/assets/images/background/bg-9.png); background-position: center center; background-size: cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-white text-center down-line-white">Information About Company</h1>
            </div>
        </div>
    </div>
</div>

<!--About us Section-->
<div class="full-row pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-12 mb-5">
				<span class="text-primary pb-2 d-table tagline">We Are Special</span>
				<h2 class="main-title down-line mb-4">We Are your one stop shop to imporve customer engagement</h2>
				<p>Compass Insights is a boutique business advisory and consulting outfit based in Nigeria, that
					provides accessible data-driven insights for businesses to improve customer engagement and
					satisfaction. Our services ensure that across industries, brands are able to convert customers to
					loyal ambassadors, while optimizing resources spent on customer acquisition.</p>
				<p>At Compass Insights, we work with businesses to positively reform customer service and
					sustainable business growth across West Africa.</p>
				<p>Our business was born out of a desire to transform the quality of customer service delivery in
					Nigeria - for us to do something tangible about the space and by extension, build stronger
					businesses and organizations in Nigeria.</p>
				<P>Some of the challenges that lead to poor service delivery include instances where business
					owners and leaders are actively involved in all facets of the business - from product
					development to customer service. Our solutions come with an element of standardisation, so
					that processes are established, employees are clear about what is expected of them, and
					quality is guaranteed.</p>
				<p>The benefits of standardization: Fundamentally, standardization means that your employees
					have an established, time-tested process to use. When done well, standardization can decrease
					ambiguity and guesswork, guarantee quality, boost productivity, and increase employee morale.</p>
			</div>
			<div class="col-lg-6 col-md-12 offset-lg-1 mb-5">
				<img src="css/assets/images/hi-30.png" alt="corporate template">
			</div>
		</div>
	</div>
</div>

<!--Out Team Section-->
<div class="full-row bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<span class="tagline text-primary m-auto text-center pb-2 d-table w-xs-100">Our Team</span>
				<h2 class="down-line m-auto text-center w-50 w-sm-100">The Compass Team</h2>
				<span class="text-center mt-4 mb-5 sub-title w-75 mx-auto">The Compass team is made up of active advisors, growth managers and analysts who are supported by an advisory board.</span>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="thumb-team-classic mb-4">
					<img src="css/assets/images/team/1.png" alt="image not found">
					<h5 class="mt-3"><a href="#">Adun Okupe</a></h5>
					<span class="text-general">Senior Advisor</span>
				</div>
			</div>	
			<div class="col-lg-4 col-md-6">
				<div class="thumb-team-classic mb-4">
					<img src="css/assets/images/team/2.png" alt="image not found">
					<h5 class="mt-3"><a href="#">Nkiruka Nwakonobi</a></h5>
					<span class="text-general">Business Development Manager</span>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="thumb-team-classic mb-4">
					<img src="css/assets/images/team/3.png" alt="image not found">
					<h5 class="mt-3"><a href="#">Franchesca Ihuoma</a></h5>
					<span class="text-general">Lead Analyst</span>
				</div>
			</div>
		</div>
		</div>
		<div class="row">
			<div class="col-lg-12 py-4">
				<a href="#" class="btn btn-primary d-table mx-auto">Explore More Members</a>
			</div>
		</div>
	</div>
</div>

@endsection