@extends('layouts.admin')

@section('content')
    
@include('layouts.partials.error')
@include('layouts.partials.success')


<!--Main Area-->  
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <!--<div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                                        </i>
                                    </div>
                                    <div>Categories
                                        <div class="page-title-subheading">Wide selection of forms controls, using the Bootstrap 4 code base, but built with React.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->            
                        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                    <span>Categories</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Create Category</h5>

                                                {!! Form::open(['method'=>'POST', 'action'=> 'CategoryController@store']) !!}
                                                    <div class="position-relative form-group">
                                                    	{!! Form::label('name', 'Category Name:') !!}
                    									{!! Form::text('name', null, ['class'=>'form-control']) !!}
                                                        </div>
                                                        {!! Form::submit('Create Category', ['class'=>'mt-1 btn btn-primary']) !!}
                                           		{!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">All Categories</h5>
                                        <table class="mb-0 table table-hover">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Category Name</th>
                                                <th>Date Created</th>
                                                <th>Date Modified</th>
                                            </tr>
                                            </thead>

                                            <tbody>
	                                    	@if($categories)

	                                    	@foreach($categories as $category)
                                            <tr>
                                                <th scope="row">{{$category->id}}</th>
                                                <td><a href="{{route('postcategory.edit', $category->id)}}">{{$category->name}}</td>
                                                <td>{{$category->created_at->diffForHumans()}}</td>
                                                <td>{{$category->updated_at->diffForHumans()}}</td>
                                            </tr>
                                            @endforeach

                							@endif
                                    
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Main Area-->

@endsection