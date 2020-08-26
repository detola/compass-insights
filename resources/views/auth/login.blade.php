@extends('layouts.frontpage')

@section('content')
<div class="full-row page-banner-image overlay-secondary" style="background-image: url(css/assets/images/background/banner10.jpg); background-position: center center; background-size: cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-white down-line-white">Login</h1>
                {{-- <span class="text-white mt-4 sub-title w-50 w-sm-100">People freequenly ask question and get 
                    answer from our cool stuff. User can feel free to ask question and we answer asap.</span> --}}
            </div>
        </div>
    </div>
</div>


<!-- breadcrumb -->
{{-- <div class="full-row breadcrumb-bar bg-gray py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb" class="float-left">
                  <ol class="breadcrumb mb-0 bg-transparent p-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Login</li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
</div> --}}
<!-- breadcrumb -->


<div class="full-row">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mb-5">
                <h3 class="mb-3">Welcome Back</h3>
                <p>Not a member yet? <a href=" {{ url('/register') }} ">Join The Compass Network</a> to access more entries and responses.
                    Members get unlimited access to our Compass discussion board which allows you to
                    ask questions freely, get responses from our advisors as well as other business owners
                    in our community and also view questions asked by other community members and their
                    accompanying responses.</p>
                
                <h4 class="mb-5 mt-5 underline">Keep in a mind a few basic password roules :</h4>
                <ul class="list-squire-check">
                    <li><span class="flaticon-checked-1 flat-small text-primary"></span> Change your passwords periodically</li>
                    <li><span class="flaticon-checked-1 flat-small text-primary"></span> Avoid re-using password for multiple site</li>
                    <li><span class="flaticon-checked-1 flat-small text-primary"></span> Use complex characters including uppercase and number</li>
                </ul>
            </div>
            <div class="col-lg-5">
                <div class="form-icon-left rounded form-boder p-5 shadow">
                <h3 class="mb-4 down-line">{{ __('Login') }}</h3>
                    <form action="{{ route('login') }}" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control bg-light @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control bg-light @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12 form-check mb-4">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">{{ __('Remember Me') }}</label>
                            </div>

                            <div class="col-md-12 form-check">
                                <button type="submit" class="btn btn-primary mb-3">{{ __('Login') }}</button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <a href="{{route('guestcheckout.index')}}" class="btn btn-link">Check out as guest</a>
                            </div>
                            <div class="col-md-12">
                                <a href="#" class="btn-link text-dark">Forgot Password or Username</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- 
<div class="full-row bg-primary py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12">
                <h4 class="text-white mb-2">A Free Consultation and Business Tips 24/7</h4>
                <p class="text-white">If you interested in out theme don't wait to purchase or call us</p>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="y-center position-relative d-table ml-auto sm-margin-none text-white"><a href="#" class="btn btn-secondary">Get Customer Support</a></div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
