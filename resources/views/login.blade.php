@extends('layouts.app')
@section('content')
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
                            <span>Don't have an account? <a href="signup.html">Signup here </a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer area -->
<footer class="padding-top-40 padding-bottom-40">
    <div class="fo-shapes">
        <span class="fs-1"><img src="{{asset('images/fontent')}}/gallery/26.png" alt=""></span>
        <span class="fs-2 item-animateTwo"><img src="{{asset('images/fontent')}}/shapes/25.png" alt=""></span>
        <span class="fs-3 item-animateTwo"><img src="{{asset('images/fontent')}}/shapes/26.png" alt=""></span>
        <span class="fs-4 item-animateOne"><img src="{{asset('images/fontent')}}/shapes/27.png" alt=""></span>
        <span class="fs-5 item-bounce"><img src="{{asset('images/fontent')}}/shapes/3.png" alt=""></span>
        <span class="fs-6"><img src="{{asset('images/fontent')}}/shapes/22.png" alt=""></span>
        <span class="fs-7"><img src="{{asset('images/fontent')}}/shapes/30.png" alt=""></span>
    </div>
    <div class="footer-top d-none d-md-block">
        <div class="container">
            <div class="row align-items-center justify-content-between padding-bottom-25">
                <div class="col-lg-3 col-md-3">
                    <div class="f-logo">
                        <a href="index.html"> <img src="{{asset('images/fontent')}}/logo/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="f-title">
                        <h4>Feel Hunger! Order Your<span> Like Food.</span></h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <a href="#" class="btn">order now</a>
                </div>
            </div>
            <hr>
        </div>
    </div>
    <div class="footer-bottom padding-top-22 padding-bottom-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 margin-bottom-20">
                    <div class="widget">
                        <h6>address</h6>
                        <p>570 8th Ave,New York, NY 10018
                            United States</p>
                        <a href="#" class="f-link">view google map</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 margin-bottom-20">
                    <div class="widget">
                        <h6>book a table</h6>
                        <p>Dogfood och Sliders foodtruck.
                            Under Om oss kan ni läsa</p>
                        <a href="#" class="f-link">make a call</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 margin-bottom-20">
                    <div class="widget">
                        <h6>opening hours</h6>
                        <p><span>monday-friday: 8am - 4pm</span>
                            <br><span>saturday: 9am - 5pm</span>
                        </p>

                        <a href="#" class="f-link">make a call</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 margin-bottom-20">
                    <div class="widget">
                        <h6>newsletter</h6>
                        <div class="newsletter d-flex">
                            <form action="#">
                                <input type="email" placeholder="enter your email"> <button type="submit"><i
                                        class="fas fa-paper-plane"></i></button>
                            </form>
                        </div>
                        <a href="#" class="f-link">subscribe now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area text-center">
        <p>Copyright © 2021 <a href="index.html">Khadyo</a></p>
    </div>
</footer>

<!-- ToTop Button -->
<button class="scrollup"><i class="fas fa-angle-up"></i></button>
@endsection
