@extends('layouts.frontpage')

@section('content')
    
	<div class="full-row page-banner-image overlay-secondary" style="background-image: url('{{$post->photo ? $post->photo->path : 'assets/images/blog/grid/3.png'}}'); background-position: center center; background-size: cover">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="text-white down-line-white">{{$post->title}}</h1>
					<span class="text-white mt-4 sub-title w-50 w-sm-100">{{$post->excerpt}}</span>
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- breadcrumb -->
	<div class="full-row bg-gray py-3">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav aria-label="breadcrumb" class="float-left">
					  <ol class="breadcrumb mb-0 bg-transparent p-0">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Blog</a></li>
						<li class="breadcrumb-item active" aria-current="page">Blog Left Sidebar</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcrumb -->
	
	
	
	<div class="full-row">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 mb-5">
					<div class="single-post">
						<div class="single-post-title">
							<h3 class="mb-2 text-secondary">{{$post->title}}</h3>
							<div class="post-meta mb-4">
								<a href="#"><i class="flaticon-user-silhouette flat-mini"></i> <span>By {{$post->user->name}}</span></a>
								<a href="#"><i class="flaticon-calendar flat-mini"></i> <span>{{$post->updated_at->diffForHumans()}}</span></a>
								<a href="#"><i class="flaticon-comments flat-mini"></i> <span>{{count($post->comments)}} Comments</span></a>
								<a href="#"><i class="flaticon-like flat-mini"></i> <span>30 Likes</span></a>
								<span><i class="flaticon-document flat-mini text-primary"></i> <a href="{{--route('categories', $post->category->id)--}}"><span>{{$post->categories}}</span></a></span>
							</div>
						</div>
						<div class="post-image">
							<img src="{{$post->photo ? $post->photo->path : 'assets/images/blog/grid/3.png'}}" alt="Image not found!">
						</div>
						<div class="post-content pt-4 mb-5">
							<p>Nullam. Facilisis tempor rhoncus at. Tincidunt tempus lacus donec pulvinar fusce metus class cras litora condimentum inceptos senectus curae; mollis amet consectetuer urna mi tempus nisi sociis velit dis, suscipit lectus senectus cursus tincidunt sit primis eros semper luctus.</p>
							
							<p>Aenean augue, sociosqu netus varius sollicitudin. Pharetra senectus sem ornare. Fermentum mus hymenaeos. Mi molestie. <a href="#">Ultrices arcu tellus</a> mattis, et vitae posuere pede fames per. Elit. Mollis. Ridiculus tristique. Facilisis feugiat consequat, est per. Interdum potenti. Vitae accumsan diam neque risus mollis parturient massa porta nascetur primis magnis tincidunt tempus sed semper integer semper penatibus ultricies nisi natoque fames.</p>
							
							<blockquote>{{$post->excerpt}}</blockquote>
							
							<p>Scelerisque. Cubilia ultrices sociis interdum augue. Sollicitudin accumsan enim vel quisque semper at Aliquam potenti velit rutrum mus erat amet dapibus sit facilisi aliquam lorem ad vestibulum litora, parturient non sagittis tellus litora. Viverra Tristique proin commodo et quisque. Torquent convallis imperdiet vulputate cubilia a consectetuer tellus laoreet nascetur euismod potenti inceptos enim mauris curabitur consequat.</p>
							
							<pre>.post-meta a span { 
	color: #a5a5a5; 
	font-size: 13px; 
	font-style: italic 
}</pre>
							
							<p>Nisi amet Nisl urna facilisis ad curae;. Amet habitasse adipiscing nibh mollis felis leo semper. Semper lobortis interdum class rutrum nonummy. Hymenaeos, purus eu. Semper dictum mattis, magnis platea facilisis dapibus arcu suscipit litora porttitor odio luctus inceptos lectus curabitur erat platea faucibus.</p>
						</div>
						<div class="tagcloud">
							<ul>
								<li><a href="#">general</a></li>
								<li><a href="#">videos</a></li>
								<li><a href="#">media</a></li>
								<li><a href="#">web</a></li>
								<li><a href="#">parallax</a></li>
								<li><a href="#">ecommerce</a></li>
								<li><a href="#">t-shirt</a></li>
								<li><a href="#">women</a></li>
								<li><a href="#">trade</a></li>
								<li><a href="#">animation</a></li>
								<li><a href="#">theme</a></li>
							</ul>
						</div>
						<div class="share-post mt-5">
							<span><b>Share This Post:</b></span>
							<a href="#"><i class="fab fa-facebook-f"></i></a>
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fab fa-linkedin-in"></i></a>
							<a href="#"><i class="fab fa-google-plus-g"></i></a>
							<a href="#"><i class="fab fa-pinterest-p"></i></a>
						</div>
					</div>
					<div class="authore-meta mt-5">
						<div class="modal-content">
						  <div class="modal-header bg-gray py-2">
							<span class="modal-title">Posted By: <a href="#">John Doe</a></span>
						  </div>
						  <div class="modal-body d-flex">
							<div class="author-image"><img class="rounded-circle" src="assets/images/user1.jpg" alt="image not found!"></div>
							<p>Mus sed luctus sagittis. Elementum porttitor nullam dis montes. Eu adipiscing purus hendrerit eros habitasse facilisi non mus pellentesque natoque tincidunt congue suscipit porttitor ullamcorper cras a viverra ipsum nascetur hymenaeos.</p>
						  </div>
						</div>
					</div>
					<div id="comments" class="comments mt-5">
						<h3 class="down-line mb-5">Comments (03)</h3>
						<div class="media">
						  <img src="assets/images/user2.jpg" class="mr-3 rounded-circle" alt="...">
						  <div class="media-body">
							<h5 class="mt-0">Lee Sipes</h5>
							<div class="comments-date mb-2"><span>Posted On 21th May, 2019 - </span><a href="#">Replay</a></div>
							<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>

							<div class="media mt-5">
							  <img src="assets/images/user4.jpg" class="mr-3 rounded-circle" alt="...">
							  <div class="media-body">
								<h5 class="mt-0">James Salter</h5>
								<div class="comments-date mb-2"><span>Posted On 10th June, 2019 - </span><a href="#">Replay</a></div>
								<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra.</p>
							  </div>
							</div>
						  </div>
						</div>
						<div class="media mt-4">
						  <img src="assets/images/user3.jpg" class="mr-3 rounded-circle" alt="...">
						  <div class="media-body">
							<h5 class="mt-0">Brianna Maxted</h5>
							<div class="comments-date mb-2"><span>Posted On 10th June, 2019 - </span><a href="#">Replay</a></div>
							<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla tempus viverra turpis.</p>
						  </div>
						</div>
					</div>
					<div class="mt-5 form-boder">
						<h3 class="down-line mb-4">Leave Your Comment</h3>
						<form class="contact_message" action="email.php" method="post" novalidate="novalidate">
							<div class="row">
								<div class="form-group col-md-6 col-sm-6">
									<input class="form-control" id="name" name="name" placeholder="Name" type="text">
								</div>
								<div class="form-group col-md-6 col-sm-6">
									<input class="form-control" id="email" name="email" placeholder="Email Address" type="text">
								</div>
								<div class="form-group col-md-12 col-sm-12">
									<textarea class="form-control" id="message" rows="5" name="message" placeholder="Message"></textarea>
								</div>
								<div class="form-group col-md-12 col-sm-6">
									<button class="btn btn-primary" id="send" value="send" type="submit">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div id="sidebar" class="sidebar sidebar-blog">
						<div class="widget search-widget">
							<form action="#" method="post">
								<input type="text" class="form-control" name="search" placeholder="Search">
								<button type="submit" name="submit"><i class="flaticon-search flat-mini text-white"></i></button>
							</form>
						</div>
						<div class="widget widget_categories">
							<h4 class="widget-title down-line">Categories</h4>
							<ul>
								<li><a href="#">Graphics Design</a> (12)</li>
								<li><a href="#">Corporate Template</a> (7)</li>
								<li><a href="#">Business Agency</a> (6)</li>
								<li><a href="#">Commercial Support</a> (3)</li>
								<li><a href="#">Fininace and Banking</a> (10)</li>
								<li><a href="#">Personal Portfolio</a> (4)</li>
								<li><a href="#">Construction</a> (5)</li>
								<li><a href="#">Website Development</a> (7)</li>
							</ul>
						</div>
						<div class="widget widget_recent_entries">
							<h4 class="widget-title down-line">Recent Post</h4>
							<ul>
								<li>
									<a href="#">Habitasse felis magna velit posuere ridiculus curabitur</a>
									<span class="post-date">Oct 05, 2019</span>
								</li>
								<li>
									<a href="#">Elit auctor primis ac ullamcorper libero. Felis erat auctor</a>
									<span class="post-date">Sep 25, 2019</span>
								</li>
								<li>
									<a href="#">Tempus interdum justo aliquet id vulputate fringilla</a>
									<span class="post-date">Sep 10, 2019</span>
								</li>
								<li>
									<a href="#">Porttitor primis vel libero consectetuer eleifend feugiat</a>
									<span class="post-date">Aug 30, 2019</span>
								</li>
								<li>
									<a href="#">Conubia habitant vivamus nonummy per curabitur laoreet</a>
									<span class="post-date">July 18, 2019</span>
								</li>
							</ul>
						</div>
						<div class="widget widget_archive">
							<h4 class="widget-title down-line">Recent Post</h4>
							<ul>
								<li>
									<a href="#">September 2019</a>
								</li>
								<li>
									<a href="#">August 2019</a>
								</li>
								<li>
									<a href="#">June 2019</a>
								</li>
								<li>
									<a href="#">March 2019</a>
								</li>
								<li>
									<a href="#">February 2019</a>
								</li>
							</ul>
						</div>
						<div class="widget widget_tag_cloud">
							<h4 class="widget-title down-line">Tags</h4>
							<div class="tagcloud">
								<ul>
									<li><a href="#">general</a></li>
									<li><a href="#">videos</a></li>
									<li><a href="#">media</a></li>
									<li><a href="#">web</a></li>
									<li><a href="#">parallax</a></li>
									<li><a href="#">ecommerce</a></li>
									<li><a href="#">t-shirt</a></li>
									<li><a href="#">women</a></li>
									<li><a href="#">trade</a></li>
									<li><a href="#">animation</a></li>
									<li><a href="#">theme</a></li>
								</ul>
							</div>
						</div>
						<div class="widget widget_fliker_photo">
							<h4 class="widget-title down-line">Fliker Photostream</h4>
							<ul>
								<li><a href="assets/images/portfolio/1.png" data-fancybox="gallery" data-caption="Caption for single image"><img src="assets/images/fliker/1.png" alt=""></a></li>
								<li><a href="assets/images/portfolio/2.png" data-fancybox="gallery" data-caption="Caption for single image"><img src="assets/images/fliker/2.png" alt=""></a></li>
								<li><a href="assets/images/portfolio/3.png" data-fancybox="gallery" data-caption="Caption for single image"><img src="assets/images/fliker/3.png" alt=""></a></li>
								<li><a href="assets/images/portfolio/4.png" data-fancybox="gallery" data-caption="Caption for single image"><img src="assets/images/fliker/4.png" alt=""></a></li>
								<li><a href="assets/images/portfolio/5.png" data-fancybox="gallery" data-caption="Caption for single image"><img src="assets/images/fliker/5.png" alt=""></a></li>
								<li><a href="assets/images/portfolio/6.png" data-fancybox="gallery" data-caption="Caption for single image"><img src="assets/images/fliker/6.png" alt=""></a></li>
								<li><a href="assets/images/portfolio/7.png" data-fancybox="gallery" data-caption="Caption for single image"><img src="assets/images/fliker/7.png" alt=""></a></li>
								<li><a href="assets/images/portfolio/8.png" data-fancybox="gallery" data-caption="Caption for single image"><img src="assets/images/fliker/8.png" alt=""></a></li>
								<li><a href="assets/images/portfolio/9.png" data-fancybox="gallery" data-caption="Caption for single image"><img src="assets/images/fliker/9.png" alt=""></a></li>
								<li><a href="assets/images/portfolio/10.png" data-fancybox="gallery" data-caption="Caption for single image"><img src="assets/images/fliker/10.png" alt=""></a></li>
								<li><a href="assets/images/portfolio/11.png" data-fancybox="gallery" data-caption="Caption for single image"><img src="assets/images/fliker/11.png" alt=""></a></li>
								<li><a href="assets/images/portfolio/12.png" data-fancybox="gallery" data-caption="Caption for single image"><img src="assets/images/fliker/12.png" alt=""></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
@endsection