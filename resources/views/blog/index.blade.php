@extends('layouts.frontpage')

@section('content')
    
	<div class="full-row page-banner-image overlay-secondary" style="background-image: url(css/assets/images/background/banner10.jpg); background-position: center center; background-size: cover">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="text-white down-line-white">Compass Insight</h1>
					<span class="text-white mt-4 sub-title w-50 w-sm-100">People freequenly ask question and get answer from our cool stuff. User can feel free to ask question and we answer asap.</span>
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- breadcrumb -->
	{{-- <div class="full-row bg-gray py-3">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav aria-label="breadcrumb" class="float-left">
					  <ol class="breadcrumb mb-0 bg-transparent p-0">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Blog</a></li>
						<li class="breadcrumb-item active" aria-current="page">Blog Grid</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</div> --}}
	<!-- breadcrumb -->
	
	
	<div class="full-row">
		<div class="container">
			<div class="row">
				@forelse ($recents as $recent)

				<div class="col-lg-3 col-md-6">
					<div class="thumb-blog-default">
						<div class="post-image">	
							<img src="{{$recent->photo ? $recent->photo->path : 'assets/images/blog/grid/3.png'}}" alt="Image not found!">
							{{--<img src="assets/images/blog/grid/1.png" alt="Image not found!">--}}
						</div>
						<div class="post-content py-4">
							<h6 class="mb-2"><a href="{{route('post', $recent->slug)}}">{{$recent->title}}</a></h6>
							<div class="post-meta mb-3">
								<a href="{{route('post', $recent->slug)}}"><span>{{$recent->updated_at->toFormattedDateString()}}</span></a>
								<a href="{{route('post', $recent->slug)}}"><span>{{count($recent->comments).' comments'}}</span></a>
								<a href="{{route('post', $recent->slug)}}"><span>15 Likes</span></a>
							</div>
							<p>{{ str_limit($recent->body,150)}}</p>
							<a href="{{route('post', $recent->slug)}}" class="btn-text text-secondary">Read More</a>
						</div>
					</div>
				</div>
				@empty
                <h5>{{'No posts'}}</h5>
                @endforelse  
				
				<div class="col-lg-12 mt-3">
					<nav aria-label="Page navigation example">
						<ul class="pagination pagination-default justify-content-center">
							<li class="page-item disabled">
							  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
							</li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
							  <a class="page-link" href="#">Next</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	

@endsection