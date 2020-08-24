@extends('layouts.admin')

@section('content')



{{--@include('includes.form-errors')--}}

@include('layouts.includes.tinyeditor')


<!--Main Area-->  
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-graph text-success">
                        </i>
                    </div>
                    <div>Edit Post
                        <div class="page-title-subheading">Build whatever layout you need with our Architect framework.
                        </div>
                    </div>
                </div>
                   
            </div>
        </div>         
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Edit a Post</h5>
                        
                        {!! Form::model($post, ['method'=>'PATCH', 'action'=> ['PostController@update', $post->id],
                        'files'=>true]) !!}
                        {{ csrf_field() }}
                        
                            <div class="position-relative form-group">
                                {!! Form::label('title', 'Post Title') !!}
                                {!! Form::text('title', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="position-relative form-group">
                                {!! Form::label('excerpt', 'Excerpt:') !!}
                                {!! Form::text('excerpt', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="position-relative form-group">
                                {!! Form::label('category_id', 'Category') !!}
                                {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="position-relative form-group">
                                <label for="exampleImage" class="">Image</label>
                                <input name="file" id="exampleImage" type="file" class="form-control-file">
                                        <small class="form-text text-muted">Choose an image for you post</small>
                            </div>
                            <div class="position-relative form-group">
                                {!! Form::label('body', 'Body:') !!}
                                {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
                            </div>
                            {!! Form::submit('Update Post', ['class'=>'mt-2 btn btn-primary']) !!}

                        {!! Form::close() !!}

                        {!! Form::open(['method'=>'DELETE', 'action'=> ['PostController@destroy', $post->id]]) !!}

                        {!! Form::submit('Delete Post', ['class'=>'mt-2 btn btn-danger']) !!}

                        {!! Form::close() !!}

                        
                    </div>
                </div>
                
            </div>
        
        </div>
    </div>
    <!--End Main Area-->

@endsection