@extends('layouts.admin')

@section('content')
    
@include('layouts.partials.error')
@include('layouts.partials.success')


<!--Main Area  -->
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                        </i>
                    </div>
                    <div>Products
                        <div class="page-title-subheading">Wide selection of forms controls, using the Bootstrap 4 code base, but built with React.
                        </div>
                    </div>
                </div>
            </div>
        </div>          
        <div class="row">                            
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">All Products</h5>
                        <table class="mb-0 table table-hover">
                            @if (count($products)>0)
                                
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Details</th>
                                <th>Category</th>
                                <th>Discount</th>
                                <th>Old Price</th>
                                <th>Price</th>
                            </tr>
                            </thead>
                            @foreach ($products as $product)
                            <tbody>
                                <tr>
                                    
                                    <th scope="row">{{$product->id}}</th>
                                    <td><a href="{{route('admin.products.edit', $product->id)}}">{{ str_limit($product->name,30)}}</a></td>
                                    <td>{{str_limit($product->details,30)}}</td>
                                    <td>{{$product->category ? $product->category->name : 'Uncategorized'}}</td>
                                    <td>{{$product->discount ? 'NGN' . $product->discount : 'NGN0.00'}}</td>
                                    <td>{{$product->original_price ? 'NGN' . $product->original_price : 'NGN0.00'}}</td>
                                    <td class="text-success">{{$product->presentPrice()}}</td>                                   
                                </tr>   
                            </tbody>
                                 @endforeach
                            @else
                                <p>{{'No Product yet!.'}}</p>
                                <p><a class="btn btn-dark" href="{{url('/admin/products/create')}}">Create product</a></p>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!--End Main Area-->
@endsection