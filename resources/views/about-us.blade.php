@extends('layouts.frontpage')

@section('content')
    <!--Hero Section-->
<div class="full-row page-banner-image overlay-secondary" style="background-image: url(css/assets/images/background/bg001.jpg); background-position: center center; background-size: cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-white text-center down-line-white">About Us</h1>
            </div>
        </div>
    </div>
</div>

<!--About us Section-->
{{-- <div class="full-row pt-0" id="who-we-are">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-12 mb-5">
				<span class="text-primary pb-2 d-table tagline">Who we are</span>
				<h2 class="main-title down-line mb-4">who we are</h2>
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
				<img src="css/assets/images/about-us.jpg" alt="corporate template">
			</div>
		</div>
	</div>
</div> --}}

<div class="full-row bg-primary" id="who-we-are">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-12">
				<div class="text-secondary mb-5">
					<span class="text-secondary pb-3 tagline">Customer Insights</span>
					<h2 class="text-secondary mb-4">Who we are</h2>
					<p>Compass Insights is a boutique business advisory and consulting outfit based in Nigeria, that
						provides accessible data-driven insights for businesses to improve customer engagement and
						satisfaction. Our services ensure that across industries, brands are able to convert customers to
						loyal ambassadors, while optimizing resources spent on customer acquisition.</p>
					<a href=" {{ url('/shop') }}"  class="btn btn-dark mt-3" style="">Our Products</a>
				</div>
			</div>
			<div class="col-lg-7 col-md-12">
				<div class="row">
					<div class="col-md-6">
						<div class="simple-thumb text-secondary transation mb-5">
							<i class="flaticon-sketch flat-medium text-secondary"></i>
							{{-- <h5 class="my-3"><a href="#" class="text-secondary">Creative Design</a></h5> --}}
							<p>At Compass Insights, we work with businesses to positively reform customer service and
								sustainable business growth across West Africa.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="simple-thumb text-secondary transation mb-5">
							<i class="flaticon-student flat-medium text-secondary"></i>
							{{-- <h5 class="my-3"><a href="#" class="text-secondary">Corporate Template</a></h5> --}}
							<p>Our business was born out of a desire to transform the quality of customer service delivery in
								Nigeria - for us to do something tangible about the space and by extension, build stronger
								businesses and organizations in Nigeria.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="simple-thumb text-secondary transation mb-5">
							<i class="flaticon-conveyor flat-medium text-secondary"></i>
							{{-- <h5 class="my-3"><a href="#" class="text-secondary">Easy Customize</a></h5> --}}
							<p>Some of the challenges that lead to poor service delivery include instances where business
								owners and leaders are actively involved in all facets of the business - from product
								development to customer service. Our solutions come with an element of standardisation, so
								that processes are established, employees are clear about what is expected of them, and
								quality is guaranteed.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="simple-thumb text-secondary transation mb-5">
							<i class="flaticon-import flat-medium text-secondary"></i>
							{{-- <h5 class="my-3"><a href="#" class="text-secondary">Automatic Update</a></h5> --}}
							<p>The benefits of standardization: Fundamentally, standardization means that your employees
								have an established, time-tested process to use. When done well, standardization can decrease
								ambiguity and guesswork, guarantee quality, boost productivity, and increase employee morale.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!--Out Team Section-->
<div class="full-row bg-gray" id="our-team">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<span class="tagline text-primary m-auto text-center pb-2 d-table w-xs-100">Our Team</span>
				<h2 class="down-line m-auto text-center w-50 w-sm-100">The Compass Team</h2>
				<span class="text-center mt-4 mb-5 sub-title w-75 mx-auto">The Compass team is made up of active advisors, growth managers and analysts who are supported by an advisory board.</span>
			</div>
		</div>

			<div class="row">
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="bg-primary">
						<div class="position-relative">
							<img src="css/assets/images/team/adun1.png" alt="image not found">
							
							<!-- Use youtube or Vimeo video link in href, first open the video and just copy the link from url and past here -->
						</div>
					</div>
				</div>
				<div class="col-xl-8 col-lg-6 col-md-6">
					<span class="text-primary extra-font font-large pb-1 d-table">Adun Okupe, PhD</span>
					<h3 class="mb-4">Senior Advisor</h3>
					<p>Adun Okupe, PhD, is the Senior Advisor at Compass Insights. With over a decade’s experience in research and business advisory, she has worked
						across several sectors including infrastructure and sustainable development projects in
						Sub-Saharan Africa and Europe. Adun is passionate about SME growth and
						development, using data as a tool to provide customers and employees improved levels
						of engagement.</p>
						<p>Her business focus is in SME, creative and tourism sectors and sustainability. She is on
							the advisory boards of Open House Lagos, Zonta E-Club West Africa and is a member of
							Legacy 1995 and a fellow of the Higher Education Academy.
						</p>
				</div>

				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="bg-primary">
						<div class="position-relative">
							<img src="css/assets/images/team/kiru1.png" alt="image not found">
							
							<!-- Use youtube or Vimeo video link in href, first open the video and just copy the link from url and past here -->
						</div>
					</div>
				</div>
				<div class="col-xl-8 col-lg-6 col-md-6">
					<span class="text-primary extra-font font-large pb-1 d-table">Nkiruka Nwakonobi</span>
					<h3 class="mb-4">Business Development Manager</h3>
					<p>Nkiruka Nwakonobi is the Business Development Manager at Compass Insights with five
						years of experience in overseeing and contributing to projects in the public and private
						
						sectors. She holds an MBA in General Management from the Lagos Business School.
						She grew an interest in brand and service management and spent a trimester at IPADE
						Business School, Mexico where she focused on Integrated Brand Strategies. Nkiru’s
						interests include tourism development and using service design as a competitive
						advantage for Nigerian businesses.
						</p>
				</div>

				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="bg-primary">
						<div class="position-relative">
							<img src="css/assets/images/team/france1.png" alt="image not found">
						</div>
					</div>
				</div>
				<div class="col-xl-8 col-lg-6 col-md-6">
					<span class="text-primary extra-font font-large pb-1 d-table">Franchesca Ihuoma</span>
					<h3 class="mb-4">Lead Analyst</h3>
					<p>Franchesca Ihuoma is the Lead Analyst at Compass Insights. She is an experienced
						Customer Relationship Manager as well as Health Safety and Environment professional.
						Franchesca is passionate about research, writing and information technology. Her
						research prowess covers market research for businesses, data analysis and
						commissioned research pieces for human growth and sustainable development.</p>
				</div>			
			</div>
		<br>
		<div class="row">
			<div class="col-lg-12">
				{{-- <span class="tagline text-primary m-auto text-center pb-2 d-table w-xs-100">Our Advisory Board</span> --}}
				<h2 class="down-line m-auto text-center w-50 w-sm-100">The Advisory Board</h2>
				{{-- <span class="text-center mt-4 mb-5 sub-title w-75 mx-auto">The Compass team is made up of active advisors, growth managers and analysts who are supported by an advisory board.</span> --}}
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2 col-md-6">
				<div class="thumb-team-classic mb-4">
					<h5 class="mt-3"><a href="https://www.linkedin.com/in/bukola-obafunso-b44494177">Bukola Obafunsho</a></h5>
					{{-- <span class="text-general">Advisory Board Member</span> --}}
				</div>
			</div>
			<div class="col-lg-2 col-md-6">
				<div class="thumb-team-classic mb-4">
					<h5 class="mt-3"><a href="http://linkedin.com/in/dayo-balogun-2b328b4a">Dayo Adeola</a></h5>
					{{-- <span class="text-general">Advisory Board Member</span> --}}
				</div>
			</div>	
			<div class="col-lg-3 col-md-6">
				<div class="thumb-team-classic mb-4">
					<h5 class="mt-3"><a href="https://www.linkedin.com/in/demilade-ademuson-ba631944/">Demilade Ademuson</a></h5>
					{{-- <span class="text-general">Advisory Board Member</span> --}}
				</div>
			</div>
			<div class="col-lg-2 col-md-6">
				<div class="thumb-team-classic mb-4">
					<h5 class="mt-3"><a href="https://www.linkedin.com/in/dr-ponmile-osibo-7057152">Ponmile Osibo</a></h5>
					{{-- <span class="text-general">Advisory Board Member</span> --}}
				</div>
			</div>
			<div class="col-lg-2 col-md-6">
				<div class="thumb-team-classic mb-4">
					<h5 class="mt-3"><a href="https://www.linkedin.com/in/chioma-viola-opara-35113517">Chioma Viola Opara</a></h5>
					{{-- <span class="text-general">Advisory Board Member</span> --}}
				</div>
			</div>
		</div>
	</div>
</div>
	<div class="full-row pt-0" id="testimonials">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="tagline text-primary m-auto text-center pb-2 d-table w-xs-100">Testimonial</span>
					<h2 class="down-line m-auto text-center w-50 w-sm-100">What Our Customers Say About Us</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="testimonial-simple text-center w-75 w-sm-100 mx-auto mt-5">
						<div class="owl-carousel text-carusel">
							<div class="item">
								<i class="flaticon-text-quotes flat-medium text-primary"></i>
								<p>From your findings and feedback, the foundation followed through with your
									recommendations and applied it to in the new social media strategy. We are happy that
									our online followers understand more about who we are and what we are doing. Our
								online presence and engagement has improved . </p>
								{{-- <p><i class="flaticon-left-quote flat-medium text-primary"></i></p> --}}

								<span class="text-primary">Chris Ogunbanjo Foundation</span>
							</div>
							<div class="item">
								<i class="flaticon-text-quotes flat-medium text-primary"></i>
								<p>Working with Compass has been seamless. From our very first brainstorming session,
									they helped to streamline the vision for the foundation. They are always on the ball and
									have helped shape the foundation’s model so it can fully thrive and benefit those it set
									out to help in the first place.</p>
								{{-- <p><i class="flaticon-left-quote flat-medium text-primary"></i></p> --}}
								<span class="text-primary">The Dolapo Sijuwade Foundation</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection