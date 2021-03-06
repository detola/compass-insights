<footer class="full-row" style="padding-bottom: 30px">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="footer-widget mb-5">
					<div class="footer-logo mb-4">
						<a href="{{ url('/') }}"><img src="{{URL::to('/')}}/css/assets/images/logo/logo_small.png" alt="{{ config('app.name', 'Laravel') }}" /></a>
					</div>
					<p>We are a customer engagement and insights company. We work with organizations of all sizes to strengthen and grow their customer base by building stronger relationship with their customers and other users.</p>
					<a href="{{ url('/contact') }}" class="btn btn-primary mt-2">Get to know us</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="footer-widget post-widget mb-5">
				  <h3 class="widget-title mb-4">Recent Posts</h3>
				  No posts yet.
				  {{-- <ul>
					<li><a href="#">How Our Consultation Can Change and Increase Your Business</a><span>10 May, 2019</span></li>
					<li><a href="#">The Best Way of Money Investment and Process to Get Success</a><span>08 May, 2019</span></li>
					<li><a href="#">Do You Know We Take The Risk of Your Business</a><span>30 April, 2019</span></li>
				  </ul> --}}
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="footer-widget footer-nav mb-5">
				  <h3 class="widget-title mb-4">Quick Links</h3>
				  <ul>
					<li><a href="{{ url('/shop/boosters' ) }}">Our Services</a></li>
					<li><a href="{{ url('/thread') }}">Ask Compass</a></li>
					<li><a href="{{ url('/faq') }}">Frequenly Ask Question</a></li>
					<li><a href="{{ url('/blog') }}">Insights</a></li>
					<li><a href="{{ url('/register') }}">Become a Member</a></li>
				  </ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="footer-widget contact-widget mb-5">
				  <h3 class="widget-title mb-4">Contact Us</h3>
				    <ul>
						<li>135A Brickfield Road, Costain Lagos.</li>
						<li>+234 908 467 4448</li>
						<li>talk@compassinsights.ng</li>
				    </ul>
				</div>
				<div class="footer-widget media-widget mb-5">
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-linkedin-in"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					{{-- <a href="#"><i class="fab fa-medium-m"></i></a> --}}
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Footer Section End -->



<!-- Copyright Section Start -->
<div class="copyright bg-dark text-default py-3">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<span>© 2020 codesonpoint All right reserved</span>
			</div>
			<div class="col-md-6">
				<ul class="line-menu float-right list-color-gray">
					<li class="float-left"><a href="#">Privacy & Policy </a></li>
					<li class="float-left">|</li>
					<li class="float-left"><a href="#">Site Map</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- Copyright Section End -->

<!-- Scroll to top -->
	<a href="#" class="bg-primary text-white" id="scroll"><i class="fa fa-angle-up"></i></a>
<!-- End Scroll To top -->


<!--===============================================================================================-->
<script src="{{asset('css/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('css/assets/js/greensock.js')}}"></script>
<script src="{{asset('css/assets/js/layerslider.transitions.js')}}"></script>
<script src="{{asset('css/assets/js/layerslider.kreaturamedia.jquery.js')}}"></script>
<script src="{{asset('css/assets/js/popper.min.js')}}"></script>
<script src="{{asset('css/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('css/assets/js/fontawesome-all-5.9.0.min.js')}}"></script>
<script src="{{asset('css/assets/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('css/assets/js/owl.js')}}"></script>
<script src="{{asset('css/assets/js/wow.js')}}"></script>
<script src="{{asset('css/assets/js/mixitup.min.js')}}"></script>
<script src="{{asset('css/assets/js/custom.js')}}"></script> 
<script src="{{asset('css/assets/js/ouibounce.js')}}"></script> 


<!-- Scripts -->
<script src="{{ asset('js/new.js') }}"></script>

<!-- use for map style --> 
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPZ-Erd-14Vf2AoPW2Pzlxssf6-2R3PPs"></script> --}}
{{-- <script src="css/assets/js/map.scripts.js"></script> --}}
{{-- <script>
(function($){	
	var _latitude = 6.484507 //36.596165;
	var _longitude = 3.356351 //-97.062988;
	init(_latitude, _longitude);
})(jQuery);
</script> --}}

<script>
	$(document).ready(function(){
		$('[data-toggle="popover"]').popover({
			placement : 'top',
			trigger : 'hover'
		});
	});
	</script>

<script>

$(document).ready(function() {	

	$('#slider').layerSlider({
		sliderVersion: '6.0.0',
		type: 'fullwidth',
		responsiveUnder: 0,
		layersContainer: 1200,
		maxRatio: 1,
		parallaxScrollReverse: true,
		hideUnder: 0,
		hideOver: 100000,
		skin: 'v5',
		showBarTimer: false,
		showCircleTimer: false,
		thumbnailNavigation: 'disabled',
		allowRestartOnResize: true,
		skinsPath: 'css/assets/skins/',
		height: 870
	});
	
});

// $(document).ready(function() {	

// $('#testimonials').layerSlider({
// 	sliderVersion: '6.0.0',
// 	type: 'fullwidth',
// 	responsiveUnder: 0,
// 	layersContainer: 1200,
// 	maxRatio: 1,
// 	parallaxScrollReverse: true,
// 	hideUnder: 0,
// 	hideOver: 100000,
// 	skin: 'v5',
// 	showBarTimer: false,
// 	showCircleTimer: false,
// 	thumbnailNavigation: 'disabled',
// 	allowRestartOnResize: true,
// 	skinsPath: 'css/assets/skins/',
// 	height: 870
// });

// });

</script>

<script>
	// if you want to use the 'fire' or 'disable' fn,
	// you need to save OuiBounce to an object
	var _ouibounce = ouibounce(document.getElementById('ouibounce-modal'), {
	  aggressive: true,
	  timer: 0,
	  callback: function() { console.log('ouibounce fired!'); }
	});
	
	$('body').on('click', function() {
	  $('#ouibounce-modal').hide();
	});
	
	$('#ouibounce-modal .modal-footer').on('click', function() {
	  $('#ouibounce-modal').hide();
	});
	
	$('#ouibounce-modal .modal').on('click', function(e) {
	  e.stopPropagation();
	});
	</script>

</body>
</html>