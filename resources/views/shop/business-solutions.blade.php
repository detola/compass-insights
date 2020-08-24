@extends('layouts/frontpage')

@section('content')
    <!--Hero Section-->
    <div class="full-row page-banner-image overlay-secondary" style="background-image: url(../css/assets/images/background/bg-9.png); background-position: center center; background-size: cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-white text-center down-line-white">Compass Business Solutions</h1>
                    <span class="text-white text-center mt-4 sub-title w-50 w-sm-100 mx-auto">Our bespoke customer engagement consultancy service, just for
                        you.</span>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="full-row">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <h2 class="main-title down-line w-50 m-auto text-center w-sm-100">Compass Business Solutions</h2>
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
                    <!--<div class="mx-auto d-table wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                        <img src="assets/images/background/bg-13.png" alt="corporate template">
                    </div>-->
                </div>
            </div>
        </div>
    </div>



<!-- Case Study Section Start -->
<div class="full-row bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="case-study-line">
                    <div class="item d-table w-100 mb-5">
                        <img src="../css/assets/images/wi-9.jpg" alt="Image not found!">
                        <div class="case-absolute bg-white px-4 py-5">
                            <h4 class="down-line mb-30">Business Strategy Review</h4>
                            <p>You don’t plan a road trip without knowing your destination. In the same way, having a
                                business strategy is an important step in charting the course of your business. We
                                recommend a biannual strategy review or at the very least, an annual review.</p>
                                <p>Our detailed review - we spend time with you to understand your business and
                                    current performance levels including your financials over two 45-minute calls.
                                    You get 2 strategy review calls (one at the start and the other after a two-week
                                    period, during which you may contact us via email to seek any clarifications.</p>
                            <a href="{{ url('/contact') }}" class="btn-link text-primary">If you do not have a business strategy plan for us to work with yet, we can work with you to
                                create a winning business plan. (Contact Us)</a>
                            {{-- <div class="post-admin mt-4">
                                <ul>
                                    <li><span>Post On:</span> 12th March 2019</li>
                                    <li><span>Story By:</span> Jason Holder</li>
                                </ul>
                            </div> --}}
                        <a href="{{ url('/contact') }}" class="btn btn-primary mt-4 d-table">From NGN 100,000</a>

                        </div>
                    </div>
                    <div class="item d-table w-100 mb-5">
                        <img src="../css/assets/images/wi-9.jpg" alt="Image not found!">
                        <div class="case-absolute bg-white px-4 py-5">
                            <h4 class="down-line mb-30">Accelerate :Employee Productivity</h4>
                            <p>Employee engagement in your business has a direct relationship with their output and
                                the service quality your customers get when they interact with your business. We assess
                                the state of your team and provide insights on how to fill existing gaps and accelerate
                                the general team productivity.</p>
                                <ul class="py-2">
                                   
                                    <li><i class="fas fa-check pr-1"></i>We conduct a team feedback analysis, understand their individual motivations
                                        and preferred rewards and review your internal process to see how you can
                                        standardize to get the best out of your employees.</li>
                                </ul>
                        <a href="{{ url('/contact') }}" class="btn btn-primary mt-4 d-table">From NGN 70,000</a>

                        </div>
                    </div>
                    <div class="item d-table w-100 mb-5">
                        <img src="../css/assets/images/wi-9.jpg" alt="Image not found!">
                        <div class="case-absolute bg-white px-4 py-5">
                            <h4 class="down-line mb-30">Customer Engagement System Design</h4>
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
                            
                        <a href="{{ url('/contact') }}" class="btn btn-primary mt-4 d-table">From NGN 200,000</a>

                        </div>
                    </div>
                    <div class="item d-table w-100 mb-5">
                        <img src="../css/assets/images/wi-9.jpg" alt="Image not found!">
                        <div class="case-absolute bg-white px-4 py-5">
                            <h4 class="down-line mb-30">Market Research</h4>
                            <p>Tailored to your particular needs as regards customer insights,
                                product insights, a pitch, competition insights or any other area in which you may need
                                reliable data to make informed decisions for your business. Contact us to share your
                                needs and get a quote.</p>
                            
                        <a href="{{ url('/contact') }}" class="btn btn-primary mt-4 d-table">Contact us to get a quote</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection