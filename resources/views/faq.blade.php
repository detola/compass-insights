@extends('layouts/frontpage')

@section('content')
<!--Hero Section-->
<div class="full-row page-banner-image overlay-secondary" style="background-image: url(css/assets/images/background/banner10.jpg); background-position: center center; background-size: cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-white text-center down-line-white">FAQ</h1>
                <span class="text-white text-center mt-4 sub-title w-50 w-sm-100 mx-auto">People freequenly ask question and get answer from our cool stuff. User can feel free to ask question and we answer asap.</span>
            </div>
        </div>
    </div>
</div>

<!--FAQ Section-->
<div class="full-row">
    <div class="container">
        <div class="row">
            {{-- <div class="col-lg-4">
                <div class="fag-category list-color-general list-text-hover-primary py-5 px-4 bg-gray mb-5">
                    <ul>
                        <li><a href="#">Basic</a></li>
                        <li><a href="#">Elements</a></li>
                        <li><a href="#">Shortcodes</a></li>
                        <li><a href="#">Extended License</a></li>
                        <li><a href="#">Refund Policy</a></li>
                        <li><a href="#">Code Quality</a></li>
                        <li><a href="#">Responsive Template</a></li>
                        <li><a href="#">Color Settings</a></li>
                    </ul>
                </div>
            </div> --}}
            <div class="col-lg-12">
                <div class="simple-collaps bg-gray px-4 py-3 border mb-3">
                    <span class="accordion text-secondary d-block">I see feedback is integral to Compass’ offerings. Why is feedback so important
                        and what does it entail?</span>
                    <div class="panel">
                        <p>Feedback from your customers and employees (your internal customers), is important
                            for you to know how you are performing. Asking for feedback invites all customers to
                            share their opinion, because sometimes if not requested, people keep quiet so as not to
                            offend. It is important to also request feedback before the customer leaves negative
                            feedback online or tells friends.</p>
                        <p>Our solutions offer various customized options and we also offer in our market research
                            component, mystery shopper offerings so that you get a run through of how you address
                            the needs of potential customers, allowing you to rectify issues that arise quickly, before
                            more customers interface with your business.</p>
                    </div>
                </div>
                <div class="simple-collaps bg-gray px-4 py-3 border mb-3">
                    <span class="accordion text-secondary d-block">Does my business need all four boosters?</span>
                    <div class="panel">
                        <p>Our boosters are designed to cater to the different points in ensuring your customers get
                            the utmost satisfaction in their order process, and they are broken down to reflect the
                            different points. Your business might have hacked some of these points and that means
                            you are already among the few on the path to excellent service delivery. If that is the
                            case, well done but it isn&#39;t complete until you ensure that the end to end customer
                            experience is hassle free for your customers. You can then purchase the ones that apply
                            alone.</p>
                    </div>
                </div>
                <div class="simple-collaps bg-gray px-4 py-3 border mb-3">
                    <span class="accordion text-secondary d-block">How do the boosters help my product?</span>
                    <div class="panel">
                        <p>The design and creation of your products are all on you as a business. You are to ensure
                            that your customers get the quality of the products promised to them e.g size, taste,
                            durability, functionality etc. Our boosters ensure that the entire customer experience
                            from start to finish is a positively memorable one for them. Your product can be
                            consumed and forgotten immediately after, but the way you make your customers feel
                            stays with them and can be the deciding factor in whether or not another purchase or
                            referral is made.</p>
                    </div>
                </div>
                <div class="simple-collaps bg-gray px-4 py-3 border mb-3">
                    <span class="accordion text-secondary d-block">My processes are top notch but I still do not have a high level of repeat business.
                        What Compass product do I need?</span>
                    <div class="panel">
                        <p>As humans, we tend to have blindspots that are visible to others and not to us, we find
                            that this happens to businesses as well. If you think you are doing everything right but
                            not getting the level of impact you expect, you can book a <a href="{{ url('/shop/business-solutions')}}">Business Strategy Review</a> 
                            session with us or purchase either one of our <a href="{{ url('/shop/launchpads')}}">Compass Essential</a>   or <a href="{{ url('/shop/launchpads')}}">Compass Premium</a>
                            Launchpads, with which we can review your business, identify existing gaps and advise
                            on how you can deliver your products and services, for better results.</p>
                        <p>Why should I opt for the <a href="{{ url('/shop/business-solutions')}}">Compass Solutions</a> instead of the <a href="{{ url('/shop/launchpads')}}">Compass Launchpads?</a></p>
                        <p>The Compass Solution offerings are standalone, in depth business analysis and advisory
                            on particular areas of your business like Strategy, Customer Engagement, Customer
                            Relationship Management and Team Productivity. These solutions allow you to focus on
                            a particular problem that you have and fix it directly. We advise these for businesses that
                            have been in operation for a while and can identify their areas of weakness.</p>
                        <p>Why should I opt for the <a href="{{ url('/shop/launchpads')}}">Compass Launchpads?</a> instead of the <a href="{{ url('/shop/business-solutions')}}">Compass Solutions</a></p>
                        <p>The Compass Launchpads are designed to provide our solutions in a package so you
                            can get started on your customer engagement journey. This way, we are able to look at,
                            and link the different areas of your business, from your strategy, team strength
                            (essentials and premium launchpads only), customer engagement and service delivery
                            and you see how every area connects to the optimum satisfaction of your customers.</p>
                    </div>
                </div>
                <div class="simple-collaps bg-gray px-4 py-3 border mb-3">
                    <span class="accordion text-secondary d-block">The number of customers in the Launchpads is too low for me because I have
                        many customers. What if I want insights from more?</span>
                    <div class="panel">
                        <p>The number of customers in our packages is for a sample from your customer base.
                            Issues or concerns some of your customers have will be replicated across board. With
                            the insights from a sample of your customers, you can tailor your processes to offer
                            better to all your customers. If you would like a more extensive review of your
                            customers, then our <a href="{{ url('/shop/business-solutions')}}">Market Research</a> 
                            product will be just perfect for you so <a href="{{ url('/contact')}}">Contact Us.</a></p>
                    </div>
                </div>
                <div class="simple-collaps bg-gray px-4 py-3 border mb-3">
                    <span class="accordion text-secondary d-block">How long will it take for me to get my order?</span>
                    <div class="panel">
                        <p>No two businesses are the same and we aim to reflect that in our offerings to you. With this, we
                            will need to work with your business information that you give to us after your order is
                            confirmed, to build your specific solution. Delivery time is between 5 - 7 working days.</p>
                    </div>
                </div>
                <div class="simple-collaps bg-gray px-4 py-3 border mb-3">
                    <span class="accordion text-secondary d-block">I don&#39;t see any product or response there that caters to the need I have,</span>
                    <div class="panel">
                        <p>Please feel free to <a href="{{ url('/contact')}}">Contact Us.</a> to discuss your specific needs and we will take it from there.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection