@extends('layouts.admin')

@section('content')
    
@include('layouts.partials.error')
@include('layouts.partials.success')


<!--Main Area-->  
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                                        </i>
                                    </div>
                                    <div>Product Categories
                                        <div class="page-title-subheading">Wide selection of forms controls, using the Bootstrap 4 code base, but built with React.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>            
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Create a Product Category</h5>
                                                
                                                {!! Form::open(['method'=>'POST', 'action'=> 'ProductCategoryController@store']) !!}
                                                @csrf
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
                                    <div class="card-body"><h5 class="card-title">All Product Categories</h5>
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
	                                    	{{-- @if($productcategories) --}}

	                                    	@foreach($productcategories as $productcategory)
                                            <tr>
                                                <th scope="row">{{$productcategory->id}}</th>
                                                <td><a href="{{route('productcategory.edit', $productcategory->id)}}">{{$productcategory->name}}</td>
                                                <td>{{$productcategory->created_at->diffForHumans()}}</td>
                                                <td>{{$productcategory->updated_at->diffForHumans()}}</td>
                                            </tr>
                                            @endforeach

                							{{-- @endif --}}
                                    
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