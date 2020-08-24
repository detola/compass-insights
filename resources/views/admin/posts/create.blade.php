@extends('layouts.admin')

@section('content')

{{-- @include('layouts.partials.error')
@include('layouts.partials.success') --}}

@include('layouts.includes.tinyeditor')

{{-- @include('includes.form-errors')--}}

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
                    <div>New Post
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
                        <h5 class="card-title">Create Post</h5>
     
                        {!! Form::open(['method'=>'POST', 'action'=> 'PostController@store', 'files'=>true,
                        'class'=>'']) !!}
                        @csrf
                            <div class="position-relative form-group">
                                {!! Form::label('title', 'Post Title') !!}
                                {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Customer engagement']) !!}
                            </div>
                            <div class="position-relative form-group">
            
                                {!! Form::label('excerpt', 'Excerpt') !!}
                                {!! Form::text('excerpt', null, ['class'=>'form-control', 'placeholder'=>'Customer engagement']) !!}
                            </div>
                            <div class="position-relative form-group">
                                {!! Form::label('category_id', 'Category') !!}
                                {!! Form::select('category_id', [''=>'Select category'] + $category, null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="position-relative form-group">
                                {!! Form::label('photo_id', 'Select Image') !!}
                                <div class="input-group col-xs-12">
                                {!! Form::file('photo_id', ['class'=>'form-control-file']) !!}
                                <small class="form-text text-muted">Choose an image for you post</small>
                                </div>
                            </div>
                            <div class="position-relative form-group">
                                {!! Form::label('body', 'Body') !!}
                                {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>5, 'placeholder'=>'Enter your post here...' ]) !!}
                            </div>
                            {!! Form::submit('Create Post', ['class'=>'mt-2 btn btn-primary']) !!}
                            
                        {!! Form::close() !!}
                    </div>
                </div>
                
            </div>
        
        </div>
    </div>
    <!--End Main Area-->


@endsection

