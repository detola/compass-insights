@extends('layouts/frontpage')

@section('content')
    <!--Hero Section-->
    <div class="full-row page-banner-image overlay-secondary" style="background-image: url(../css/assets/images/background/bg-9.png); background-position: center center; background-size: cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-white text-center down-line-white">Compass Launchpads</h1>
                    <span class="text-white text-center mt-4 sub-title w-50 w-sm-100 mx-auto">Product Page, feel free to choose from the variety of product that's we've itemised for you</span>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="full-row">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <h2 class="main-title down-line w-50 m-auto text-center w-sm-100">Compass Business Launchpads</h2>
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
                    <!--<div class="mx-auto d-table wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                        <img src="assets/images/background/bg-13.png" alt="corporate template">
                    </div>-->
                </div>
            </div>
        </div>
    </div>



<!-- Case Study Section Start -->

<div class="full-row bg-primary py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12">
                <h4 class="text-white mb-2">A Free Consultation and Business Tips 24/7</h4>
                <p class="text-white">If you interested in out theme don't wait to purchase or call us</p>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="y-center position-relative d-table ml-auto sm-margin-none text-white"><a href="#" class="btn btn-secondary">Get Customer Support</a></div>
            </div>
        </div>
    </div>
</div>

<div class="full-row" style="background-image: url(../css/assets/images/background/bg-10.png); background-repeat: no-repeat; background-position: center center; background-size: cover;">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
					<span class="text-primary pb-2 d-table">Compass Launchpads</span>
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
                                <button type="submit" class="btn btn-primary mt-4 d-table">Get all of these for NGN35,000 only</button>
                            </form>
                        {{-- <a href="#" class="btn btn-primary mt-4 d-table">Get all of these for NGN35,000 only</a> --}}
			</div>
		</div>
	</div>
</div>

<div class="full-row" style="background-image: url(../css/assets/images/background/bg-10.png); background-repeat: no-repeat; background-position: center center; background-size: cover;">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
					<span class="text-primary pb-2 d-table">Compass Launchpads</span>
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
                        <p >Essentials focuses on your internal system so that with the right internal structures, you can
                            improve your customer retention rate and increase your profits.</p>
                        <form action="{{route('cart.store')}}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="7">
                            <input type="hidden" name="name" value="The Essentials Launchpad.">
                            <input type="hidden" name="details" value="The Essentials Launchpad.">
                            <input type="hidden" name="price" value="75000">
                            <button type="submit" class="btn btn-primary mt-4 d-table">Get all of these for NGN75,000 only</button>
                        </form>
                        {{-- <a href="#" class="btn btn-primary mt-4 d-table">Get all of these for NGN75,000 only</a> --}}
			</div>
		</div>
	</div>
</div>

<div class="full-row" style="background-image: url(../css/assets/images/background/bg-10.png); background-repeat: no-repeat; background-position: center center; background-size: cover;">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
					<span class="text-primary pb-2 d-table">Compass Launchpads</span>
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
                            <button type="submit" class="btn btn-primary mt-4 d-table">Get all of these for NGN250,000 only</button>
                        </form>
                        {{-- <a href="#" class="btn btn-primary mt-4 d-table">Get all of these for NGN250,000 only</a> --}}
			</div>
		</div>
	</div>
</div>


@endsection