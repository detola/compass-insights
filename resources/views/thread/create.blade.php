@extends('layouts.frontpage')

@section('content')
@include('layouts.partials.error')
@include('layouts.partials.success')

    <div class="row">
        <div class="well">
            <form action="{{route('thread.store')}}" method="post" role="form" id="create-thread-form">
                 {{ csrf_field() }}
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" name="subject" id="" placeholder="Enter subject" value="{{old('subject')}}">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" name="type" id="" placeholder="Enter type" value="{{old('type')}}">
                </div>
                <div class="form-group">
                    <label for="Users">Thread</label>
                    <input type="number" class="form-control" name="user_id" id="" placeholder="Enter user" value="{{old('user')}}">
                </div>
                <div class="form-group">
                    <label for="subject">Thread</label>
                    <textarea type="text" class="form-control" name="thread" id="" placeholder="Enter thread" rows="3" >{{old('thread')}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection