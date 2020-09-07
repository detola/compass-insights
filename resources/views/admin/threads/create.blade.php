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
                    <div>New Thread
                        <div class="page-title-subheading">
                        </div>
                    </div>
                </div>
                   
            </div>
        </div>            
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Create Thread</h5>
     
                        {!! Form::open(['method'=>'POST', 'action'=> 'ThreadController@store', 'files'=>true,
                        'class'=>'']) !!}
                        @csrf
                            <div class="position-relative form-group">
                                {!! Form::label('subject', 'Thread Subject') !!}
                                {!! Form::text('subject', null, ['class'=>'form-control', 'placeholder'=>'Enter Subject']) !!}
                            </div>
                            <div class="position-relative form-group">
            
                                {!! Form::label('type', 'Thread Type') !!}
                                {!! Form::text('type', null, ['class'=>'form-control', 'placeholder'=>'Enter Type']) !!}
                            </div>                            
                            <div class="position-relative form-group">
                                {!! Form::label('thread', 'Thread') !!}
                                {!! Form::textarea('thread', null, ['class'=>'form-control', 'rows'=>5 ]) !!}
                            </div>
                            {!! Form::submit('Create Thread', ['class'=>'mt-2 btn btn-primary']) !!}
                            
                        {!! Form::close() !!}
                    </div>
                </div>
                
            </div>
        
        </div>
    </div>
    <!--End Main Area-->


@endsection

