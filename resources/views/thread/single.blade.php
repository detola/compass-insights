@extends('layouts.frontpage')

@section('content')
@include('layouts.partials.error')
@include('layouts.partials.success')

<div class="full-row" >	
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<h4 class="down-line mb-2">{{$thread->subject}}</h4>
				<p> 
                    {!!$thread->thread!!}
                </p>

                @guest
                
                @else
                    @if (auth()->user()->id == $thread->user_id)
                    <div class="actions">
                        <a href="{{route('thread.edit', $thread->id)}}" class="btn btn-primary mt-3">Edit Thread</a>
                    </div>
                    @endif 
                @endguest
                
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="widget widget_recent_entries">
                    <h4 class="widget-title down-line">Replies</h4>
                    @forelse($thread->Comments as $comment)
                    <ul>
                        <li>
                            <p> {{$comment->body}} </p>
                            {{-- <a href="{{route('thread.show', $thread->id)}}">{{$thread->subject}}</a> --}}
                            <span class="post-date">{{$comment->user->name}}</span>
                            <span class="post-date">{{$thread->created_at->diffForHumans()}}</span>
                        </li>
                    </ul>
                    @empty
                    <h5>{{'No Reply'}}</h5>
                    @endforelse                            
                </div>
                <div class="comment-form">
                    <form action="{{route('threadcomment.store')}}" method="post" role="form">
                        {{ csrf_field() }}
                        <input type="hidden" name="commentable_id" value="{{$thread->id}}">
                        <input type="hidden" name="commentable_type" value="{{$thread->type}}">
                        <div class="form-row">
                            <div class="col-md-12">
                                <label>Reply</label>
                                <textarea class="form-control bg-gray" name="body" placeholder="Create a reply" rows="mt-3" required></textarea>
                            </div> 
                            @guest
                            <div class="col-md-12">
                                <a href=" {{ url('/login') }} " class="btn btn-primary">Login to Create a Reply</a>
                                <a href=" {{ url('/register') }} " class="btn btn-dark">Register to Create a Reply</a>
                            </div>
                            @else
                            <div class="col-md-12">
								<button class="btn btn-primary" name="submit" type="submit">Reply</button>
							</div>
                            @endguest
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>

{{-- <div class="full-row">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="widget widget_recent_entries">
                    <h4 class="widget-title down-line">Replies</h4>
                    @forelse($thread->Comments as $comment)
                    <ul>
                        <li>
                            <p> {{$comment->body}} </p>
                            <a href="{{route('thread.show', $thread->id)}}">{{$thread->subject}}</a>
                            <span class="post-date">{{$comment->user->name}}</span>
                            <span class="post-date">{{$thread->created_at->diffForHumans()}}</span>
                        </li>
                    </ul>
                    @empty
                    <h5>{{'No Reply'}}</h5>
                    @endforelse                            
                </div>
                <div class="comment-form">
                    <form action="{{route('threadcomment.store')}}" method="post" role="form">
                        {{ csrf_field() }}
                        <input type="hidden" name="commentable_id" value="{{$thread->id}}">
                        <input type="hidden" name="commentable_type" value="{{$thread->type}}">
                        <div class="form-row">
                            <div class="col-md-12">
                                <label>Reply</label>
                                <textarea class="form-control bg-gray" name="body" placeholder="Create a reply" rows="mt-3" required></textarea>
                            </div> 
                            <div class="col-md-12">
								<button class="btn btn-primary" name="submit" type="submit">Reply</button>
							</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- <h4>{{$thread->subject}}</h4>
<hr>
<div>
    <p>{{$thread->thread}}</p>
</div>

@if (auth()->user()->id == $thread->user_id)
    

<div class="actions">
    <a href="{{route('thread.edit', $thread->id)}}" class="btn btn-xs btn-info">Edit</a>

    <form action="{{route('thread.destroy',$thread->id)}}" method="post">
    {{ csrf_field() }}
    {{method_field('DELETE')}}
    <input class="btn btn-xs btn-danger" type="submit" value="Delete">
    </form>
</div>
@endif  --}}


{{-- Comment section --}}

{{-- <div class="comment">
    @foreach ($thread->threadComments as $comment)
        <h4>{{$comment->body}}</h4>
        <small>{{$comment->user->name}}</small>
        @if (auth()->user()->id == $comment->user_id)
    

        <div class="actions">
            <a href="{{route('thread.edit', $thread->id)}}" class="btn btn-xs btn-info">Edit</a>

            <form action="{{route('comment.destroy',$comment->id)}}" method="post">
            {{ csrf_field() }}
            {{method_field('DELETE')}}
            <input class="btn btn-xs btn-danger" type="submit" value="Delete">
            </form>
        </div>
        @endif
    @endforeach
</div> --}}

{{-- Comment Form --}}

{{-- <div class="comment-form">
    <form action="{{route('threadcomment.store')}}" method="post" role="form">
        {{ csrf_field() }}
        <legend>Create Comment</legend>
        <div class="form-group">
            <input type="text" class="form-control" name="body" id="" placeholder="Enter comment" value="{{old('comment')}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div> --}}
@endsection