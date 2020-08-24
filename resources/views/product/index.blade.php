@extends('layouts.frontpage')

@section('content')

    <h2>Threads</h2>

    <div class="list-group">
        @forelse($products as $product)          
            <a href="{{route('product.show', $product->id)}}" class="list-group-item active">    
            <h5 class="list-group-item-heading">{{$product->name}}</h5>
            <small>{{ $product->presentPrice() }}</small>     
            <p class="list-group-item-text">{{ str_limit($product->description,100)}}</p>
            <small>Read more</small>
            <form action="{{route('cart.store')}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$product->id}}">
                <input type="hidden" name="name" value="{{$product->name}}">
                <input type="hidden" name="price" value="{{$product->price}}">
                <button type="submit" class="btn btn-plain">Add to Cart</button>
            </form>
            </a>            
        @empty
            <h5>{{'No threads'}}</h5>
        @endforelse 
    </div>
@endsection
<!--class="d-flex w-100 justify-content-between"-->

