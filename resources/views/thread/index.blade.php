@extends('layouts.frontpage')

@section('content')

<div class="full-row page-banner-image overlay-secondary" style="background-image: url(css/assets/images/background/banner10.jpg); background-position: center center; background-size: cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-white text-center down-line-white">Ask Compass</h1>
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
                                <span class="post-date">{{$thread->created_at}}</span>
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
    {{-- <h2>Threads</h2>

    <div class="list-group">
        @forelse($threads as $thread)          
            <a href="{{route('thread.show', $thread->id)}}" class="list-group-item active">    
            <h5 class="list-group-item-heading">{{$thread->subject}}</h5>
            <small>{{$thread->created_at}}</small>     
            <p class="list-group-item-text">{{ str_limit($thread->thread,100)}}</p>
            <small>Read more</small>
            </a>            
        @empty
            <h5>{{'No threads'}}</h5>
        @endforelse 
    </div> --}}
@endsection
<!--class="d-flex w-100 justify-content-between"-->