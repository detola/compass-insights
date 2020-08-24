@extends('layouts.admin')

@section('content')

@include('layouts.partials.success')
@include('layouts.partials.error')
@include('layouts.includes.tinyeditor')

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-graph text-success">
                        </i>
                    </div>
                    <div>New Product
                        <div class="page-title-subheading">Build whatever layout you need with our Architect framework.
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Create New Product</h5>
                {!! Form::open(['method'=>'POST', 'action'=> 'ProductController@store',
                'class'=>'needs-validation']) !!}
                    @csrf
                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Booster 1', 'required'=>'required']) !!}
            
                        </div>
                        <div class="col-md-6 mb-3">
                            {!! Form::label('details', 'Details') !!}
                            {!! Form::text('details', null, ['class'=>'form-control', 'placeholder'=>'Energy Boosters', 'required'=>'required']) !!}
                        </div>
                        <div class="col-md-3 mb-3">
                            {!! Form::label('category_id', 'Category') !!}
                            {!! Form::select('category_id', [''=>'Select category'] + $category, null, ['class'=>'custom-select']) !!}
            
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            {!! Form::label('discount', 'Discount') !!}
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">NGN</span>
                                </div>
                                
                                {!! Form::number('discount', null, ['class'=>'form-control', 'placeholder'=>'0', 'aria-describedby'=>'inputGroupPrepend']) !!}
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">.00</span>
                                </div> 
                            </div>  
                        </div>

                        <div class="col-md-3 mb-3">
                            {!! Form::label('original_price', 'Original Price') !!}
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">NGN</span>
                                </div>
                                
                                {!! Form::number('original_price', null, ['class'=>'form-control', 'placeholder'=>'0', 'aria-describedby'=>'inputGroupPrepend']) !!}
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">.00</span>
                                </div> 
                            </div>  
                        </div>

                        <div class="col-md-3 mb-3">
                            {!! Form::label('price', 'New Price') !!}
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">NGN</span>
                                </div>
                                
                                {!! Form::number('price', null, ['class'=>'form-control', 'placeholder'=>'0', 'aria-describedby'=>'inputGroupPrepend', 'required'=>'required']) !!}
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">.00</span>
                                </div> 
                            </div>  
                        </div>
                        <div class="col-md-3 mb-3">
                            {!! Form::label('product_of_the_month', 'Bonaza') !!}
                            
                            <div class="input-group">
                                <div class="custom-checkbox custom-control">
                                    {!! Form::checkbox('product_of_the_month', null) !!}
                                    {!! Form::label('product_of_the_month', 'Product of the month') !!}
                                </div>
                            </div>
                            
            
                        </div>
                        <div class="col-md-12 mb-3 form-group">
                            {!! Form::label('description', 'Description') !!}
                            {!! Form::textarea('description', null, ['class'=>'form-control', 'rows'=>8, 'placeholder'=>'' ]) !!}
                        </div>
                        {!! Form::submit('Create Product', ['class'=>'mt-2 btn btn-primary']) !!}
                                            
                        
                    </div>
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
        
@endsection


