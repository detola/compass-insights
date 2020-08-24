@extends('layouts.admin')

@section('content')
    
@include('layouts.partials.error')
@include('layouts.partials.success')


<!--Edit Category Main Area--> 
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-graph text-success">
                                        </i>
                                    </div>
                                    <div>Edit Product Category
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
                                        <h5 class="card-title">Edit Category</h5>
                                            {!! Form::model($productcategory, ['method'=>'PATCH', 'action'=> ['ProductCategoryController@update', $productcategory->id]]) !!}
                                            {{ csrf_field() }}

                                            <div class="position-relative form-group">
                                                {!! Form::label('name', 'Category Name:') !!}
        										{!! Form::text('name', null, ['class'=>'form-control']) !!}
                                            </div>
                                            {!! Form::submit('Update Category', ['class'=>'mt-2 btn btn-primary']) !!}
                                            {!! Form::close() !!}
                                            {!! Form::open(['method'=>'DELETE', 'action'=> ['ProductCategoryController@destroy', $productcategory->id]]) !!}

                                            {!! Form::submit('Delete Category', ['class'=>'mt-2 btn btn-danger']) !!}

            								{!! Form::close() !!}

                                    </div>
                                </div>                               
                            </div>                       
                        </div>
                    </div>

                    
                    <!--End Edit Category-->

@endsection