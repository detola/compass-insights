@extends('layouts.frontpage')

@section('content')
@include('layouts.partials.error')
@include('layouts.partials.success')

    <div class="row">
        <div class="well">
            <form action="{{route('thread.update',$thread->id)}}" method="post" role="form" id="create-thread-form">
                {{ csrf_field() }}
                {{method_field('PUT')}}
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" name="subject" id="" placeholder="Enter subject" value="{{$thread->subject}}">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" name="type" id="" placeholder="Enter type" value="{{$thread->type}}">
                </div>
                <div class="form-group">
                    <label for="subject">Thread</label>
                    <textarea type="text" class="form-control" name="thread" id="" placeholder="Enter thread" rows="3" value="{{$thread->thread}}">{{$thread->thread}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection