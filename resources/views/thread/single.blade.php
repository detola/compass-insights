@extends('layouts.frontpage')

@section('content')
@include('layouts.partials.error')
@include('layouts.partials.success')

<h4>{{$thread->subject}}</h4>
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
@endif 


{{-- Comment section --}}

<div class="comment">
    @foreach ($thread->threadComments as $comment)
        <h4>{{$comment->body}}</h4>
        <small>{{$comment->user->name}}</small>
        @if (auth()->user()->id == $comment->user_id)
    

        <div class="actions">
            {{--<a href="{{route('thread.edit', $thread->id)}}" class="btn btn-xs btn-info">Edit</a>--}}

            <form action="{{route('comment.destroy',$comment->id)}}" method="post">
            {{ csrf_field() }}
            {{method_field('DELETE')}}
            <input class="btn btn-xs btn-danger" type="submit" value="Delete">
            </form>
        </div>
        @endif
    @endforeach
</div>

{{-- Comment Form --}}

<div class="comment-form">
    <form action="{{route('threadcomment.store', $thread->id)}}" method="post" role="form">
        {{ csrf_field() }}
        <legend>Create Comment</legend>
        <div class="form-group">
            <input type="text" class="form-control" name="body" id="" placeholder="Enter comment" value="{{old('comment')}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection