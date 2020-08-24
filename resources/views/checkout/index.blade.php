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

<!--Checkout Form-->
<div class="full-row">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-7">
				<h3 class="down-line mb-5">Checkout</h3>
				<div class="form-simple mb-5">
                    {{-- <form action="{{route('checkout.store')}}" method="POST" class="needs-validation"> --}}
                    <form action="{{route('pay')}}" method="POST" class="needs-validation">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="email">Email Address</label>
                                @if (auth()->user())
                                <input type="email" name="email" class="form-control bg-gray" value="{{auth()->user()->email}}" readonly>
                                    
                                @else
                                 <input type="email" name="email" class="form-control bg-gray" value="{{old('email')}}" required>
                                    
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="businessname">Business Name</label>
                                <input type="text" name="businessname" class="form-control bg-gray" required>
                            </div>
                            <div class="col-md-6">
                                <label for="contactperson">Key Contact Person</label>
                                <input type="text" name="contactperson" class="form-control bg-gray" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="phone">Phone Number</label>
                                <input type="text" name="phone" class="form-control bg-gray" required>
                            </div>
                            <div class="col-md-6">
                                <label for="businessaddress">Business Address</label>
                                <input type="text" name="businessaddress" class="form-control bg-gray" required>
                            </div>
                            <div class="col-md-6">
                                <label for="city">City</label>
                                <input type="text" name="city" class="form-control bg-gray" >
                            </div>

                            <div class="col-md-6">
                                <label for="postalcode">Postal Code</label>
                                <input type="text" name="postalcode" class="form-control bg-gray" >
                            </div>
                            <div class="col-md-6">
                                <label for="state">State</label>
                                <input type="text" name="state" class="form-control bg-gray" >
                            </div>
                            <input type="hidden" name="amount" value="{{Cart::total()}}" />
                            <input type="hidden" name="description" value="Compass Product" />
                            <input type="hidden" name="country" value="NG" /> <!-- Replace the value with your transaction country -->
                            <input type="hidden" name="currency" value="NGN" /> <!-- Replace the value with your transaction currency -->
                            <input type="hidden" name="payment_method" value="both" />
                            <input type="hidden" name="metadata" value="{{ json_encode($array ?? '') }}" >
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-dark mt-3">Submit</button>
                            </div>
                        </div>
                    </form>
                    
				</div>
            </div>
            <div class="col-lg-5 col-md-5">
				<h3 class="down-line mb-5">Make Payment</h3>
				<p>For any other messages, then get in touch using the form</p>
				
                <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents">
                    <thead>
                        <tr>
                            <th class="product-name">Product</th>
                            <th class="product-name">Details</th>
                            <th class="product-subtotal">Total</th>
                        </tr>
                    </thead>
                    @foreach (Cart::content() as $item)
                    <tbody>
                        <tr class="woocommerce-cart-form__cart-item cart_item">
                            <td class="product-name" data-title="Product">
                                {{$item->name}}
                            </td>
                            <td class="product-name" data-title="Details">
                                {{str_limit($item->options->details, 30)}}
                            </td>
                            <td class="order-total" data-title="Total">
                            <span class="woocommerce-Price-amount amount">{{$item->model->presentPrice()}}</span>						
                            </td>
                        </tr>
                        
                    </tbody>
                    @endforeach
                    {{-- <table class="shop_table shop_table_responsive"> --}}
                        <tbody>
                            <tr class="product-name">
                                <td>VAT(7.5%)</td>
                                <td data-title="Subtotal">
                                    <span class="woocommerce-Price-amount amount"></span>
                                </td>
                                <td data-title="Subtotal">
                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">NGN</span>{{Cart::tax()}}</span>
                                </td>
                            </tr>
                            <tr class="order-total">
                                <th>Total</th>
                                <td data-title="Subtotal">
                                    <span class="woocommerce-Price-amount amount"></span>
                                </td>
                                <td data-title="Total">
                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">NGN</span>{{Cart::total()}}</span>
                                </td>
                            </tr>
                        </tbody>
                </table>        
            </div>	
		</div>
	</div>
</div>
@endsection
