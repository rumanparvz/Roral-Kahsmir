@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- breadcrumb-area -->
<div class="banner-area breadcrumb-area padding-top-120 padding-bottom-90">
    <div class="bread-shapes">
        <span class="b-shape-1 item-bounce"><img src="{{asset('images/fontent')}}/img/5.png" alt=""></span>
        <span class="b-shape-2"><img src="{{asset('images/fontent')}}/img/6.png" alt=""></span>
        <span class="b-shape-3"><img src="{{asset('images/fontent')}}/img/7.png" alt=""></span>
        <span class="b-shape-4"><img src="{{asset('images/fontent')}}/img/9.png" alt=""></span>
        <span class="b-shape-5"><img src="{{asset('images/fontent')}}/shapes/18.png" alt=""></span>
        <span class="b-shape-6 item-animateOne"><img src="{{asset('images/fontent')}}/img/7.png" alt=""></span>
    </div>
    <div class="container padding-top-120">
        <div class="row justify-content-center">
            <nav aria-label="breadcrumb">
                <h2 class="page-title">login page</h2>
                <ol class="breadcrumb text-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">login page</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- contact-form-area -->
<section class="about-area about-area2 writeto-us login-area padding-top-120 signup-area padding-bottom-60">
    <div class="form-shapes">
        <span class="fs1 item-animateOne"><img src="{{asset('images/fontent')}}/shapes/1.png" alt=""></span>
        <span class="fs2 item-bounce"><img src="{{asset('images/fontent')}}/shapes/12.png" alt=""></span>
        <span class="fs3"><img src="{{asset('images/fontent')}}/shapes/13.png" alt=""></span>
        <span class="fs4 item-bounce"><img src="{{asset('images/fontent')}}/shapes/26.png" alt=""></span>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12  wow fadeInUp">
                <div class="about-left">
                    <div class="about-l-shapes">
                        <span class="als-1"><img src="{{asset('images/fontent')}}/shapes/2.png" alt=""></span>
                    </div>
                    <div class="row">
                        <div
                            class="col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-end justify-content-end margin-bottom-20">
                            <div class="about-gallery-1">
                                <img src="{{asset('images/fontent')}}/gallery/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-8 margin-bottom-20">
                            <div class="about-gallery-2">
                                <img src="{{asset('images/fontent')}}/gallery/2.jpg" alt="">

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="about-gallery-3">
                                <img src="{{asset('images/fontent')}}/gallery/3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-5 d-flex align-items-stretch ">
                            <div class="about-gallery-5 text-center">
                                <img src="{{asset('images/fontent')}}/gallery/5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 wow fadeInUp">
                <div class="contact-form-area login-form-area signup-form-area">
                    <h3>login to <span>your account</span></h3>
                    <form action="#">
                        <div class="google-button">
                            <a href="#" class="btn"><span><i class="fab fa-google"></i></span> google</a>
                        </div>
                        <input type="email" placeholder="email">
                        <input type="password" placeholder="password">
                        <div class="checkbox-area">
                            <div class="checkbox-part">
                                <input type="checkbox" id="remember">
                                <label for="remember">remember me</label>
                            </div>
                            <div class="forgot-pas">
                                <a href="#">forgot password?</a>
                            </div>
                        </div>
                        <div class="login-btn">
                            <button type="submit" class="btn">login account</button>
                            <span>Don't have an account? <a href="/signup">Signup here </a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ToTop Button -->
<button class="scrollup"><i class="fas fa-angle-up"></i></button>
@endsection
