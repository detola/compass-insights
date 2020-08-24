@extends('layouts.frontpage')

@section('content')
@include('layouts.partials.success')
@include('layouts.partials.error')

    <!--Hero Section-->
    <div class="full-row page-banner-image overlay-secondary" style="background-image: url(css/assets/images/background/bg-9.png); background-position: center center; background-size: cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-white text-center down-line-white">Product Page</h1>
                    <span class="text-white text-center mt-4 sub-title w-50 w-sm-100 mx-auto">Product Page, feel free to choose from the variety of product that's we've itemised for you</span>
                </div>
            </div>
        </div>
    </div>
	<!-- breadcrumb -->
	<div class="full-row py-3">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					@if (Cart::count() > 0)
                        <h5>{{ Cart::count() }} item(s) in shopping cart.</h5>
                    @else
                        <h5>No item in your shopping cart.</h5>  
                    @endif
				</div>
			</div>
		</div>
	</div>
	<!-- breadcrumb -->

<div class="full-row pt-5">
    @if (Cart::count() > 0)
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form class="woocommerce-cart-form" action="#" method="post">
                    <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents">
                        <thead>
                            <tr>
                                <th class="product-remove">&nbsp;</th>
                                <th class="product-name">Product</th>
                                <th class="product-details">Details</th>
                                <th class="product-price">Price</th>
                                <th class="product-subtotal">Total</th>
                            </tr>
                        </thead>
                        @foreach (Cart::content() as $item)
                        <tbody>
                            <tr class="woocommerce-cart-form__cart-item cart_item">
                                
                                <td class="product-remove">
                                    <form action="{{ route('cart.destroy', $item->rowId) }}" method="post">
                                        {{ csrf_field() }}
                                        {{method_field('DELETE')}}
                                        
                                        <button type="submit" class="remove" aria-label="Remove this item">x</button>
                                    </form>
                                    {{-- <a href="#" class="remove" aria-label="Remove this item" data-product_id="952" data-product_sku="">×</a> --}}
                                </td>
                                <td class="product-name" data-title="Product">
                                    {{$item->name}}
                                </td>
                                <td class="product-details" data-title="Product">
                                    {{str_limit($item->options->details, 50)}}
                                </td>
                                <td class="product-price" data-title="Price">
                                    <span class="woocommerce-Price-amount amount">{{$item->model->presentPrice()}}</span>
                                </td>
    
                                <td class="product-subtotal" data-title="Total">
                                <span class="woocommerce-Price-amount amount">{{$item->model->presentPrice()}}</span>						
                                </td>
                            </tr>
                            
                        </tbody>
                        @endforeach
                    </table>
                </form>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="cart-shipping bg-light rounded border mt-5 p-4">
                            <div class="cart_totals ">						
                                <h2>Calcluting Shipping</h2>
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Country</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                          <option>Select Country</option>
                                        </select>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-6">
                                            <label>State</label>
                                            <input type="text" class="form-control" placeholder="First name">
                                        </div>
                                        <div class="col-6">
                                            <label>Zip Code</label>
                                            <input type="text" class="form-control" placeholder="Last name">
                                        </div>
                                    </div>
                                </form>
                                <div class="wc-proceed-to-checkout">
                                    <a href="#" class="checkout-button button alt wc-forward btn btn-secondary">Update Total</a>
                                </div>			
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="cart-collaterals rounded border mt-5 p-4">
                            <div class="cart_totals ">						
                                <h2>Cart Totals</h2>
                                <table class="shop_table shop_table_responsive">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td data-title="Subtotal">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">NGN</span>{{Cart::subtotal()}}</span>
                                            </td>
                                        </tr>
                                        <tr class="order-shipping">
                                            <th>Tax (7.5%)</th>
                                            <td data-title="Total">
                                                <strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">NGN</span>{{Cart::tax()}}</span></strong> 
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td data-title="Total">
                                                <strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">NGN</span>{{Cart::total()}}</span></strong> 
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="wc-proceed-to-checkout">
                                    <a href="{{route('checkout.index')}}" class="checkout-button button alt wc-forward btn btn-primary">Proceed to Checkout</a>
                                    {{-- <a href="#" class="checkout-button button alt wc-forward btn btn-primary">Proceed to checkout</a> --}}
                                </div>			
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
        <h3>No item in your shopping cart.</h3>  
    @endif
</div>
@endsection