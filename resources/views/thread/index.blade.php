@extends('layouts.frontpage')

@section('content')

    <h2>Threads</h2>

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
    </div>
@endsection
<!--class="d-flex w-100 justify-content-between"-->