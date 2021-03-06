@extends('layouts.frontpage')

@section('content')

<div class="full-row page-banner-image overlay-secondary" style="background-image: url(css/assets/images/background/bg001.jpg); background-position: center center; background-size: cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-white text-center down-line-white mt-5">Ask Compass</h1>
                <span class="text-white text-center mt-4 sub-title w-50 w-sm-100 mx-auto">
                    Not a member yet? Join The Compass Network to access more entries and responses.
                    Members get unlimited access to our Compass discussion board which allows you to
                    ask questions freely, get responses from our advisors as well as other business owners
                    in our community and also view questions asked by other community members and their
                    accompanying responses.</span>
                    <div class="row">
                        <div class="col-lg-12 py-4">
                            <a href=" {{ url('/register') }} " class="btn btn-primary d-table mx-auto">Join Us Now</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

<div class="full-row">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-4 mb-5">
                <div id="sidebar" class="sidebar sidebar-blog">
                    <div class="widget search-widget">
                        <form action="#" method="post">
                            <input type="text" class="form-control" name="search" placeholder="Search">
                            <button type="submit" name="submit"><i class="flaticon-search flat-mini text-white"></i></button>
                        </form>
                    </div>
                    <div class="widget widget_recent_entries">
                        <h4 class="widget-title down-line">Threads</h4>
                        @forelse($threads as $thread)
                            <ul>
                                <li>
                                    <a href="{{route('thread.show', $thread->id)}}">{{$thread->subject}}</a>
                                    <span class="post-date">{{$thread->user->name}}</span>
                                    <span class="post-date">{{$thread->created_at->diffForHumans()}}</span>
                                </li>
                            </ul>
                        @empty
                            <h5>{{'No threads'}}</h5>
                        @endforelse                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection