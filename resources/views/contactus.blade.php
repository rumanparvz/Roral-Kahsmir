
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
                    <h2 class="page-title">contact</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">contact us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- contact-form-area -->
    <section class="about-area about-area2 writeto-us padding-top-120 padding-bottom-60">
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
                    <div class="contact-form-area">
                        <h3>write <span>to us</span></h3>
                        <form action="#">
                            <input type="text" placeholder="your name:">
                            <input type="email" placeholder="email">
                            <input type="url" placeholder="website">
                            <textarea placeholder="write your text"></textarea>
                            <button type="submit" class="btn">send a message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- info-area -->
    <div class="info-area padding-bottom-120">
        <div class="info-shapes">
            <span class="info-s-1"><img src="{{asset('images/fontent')}}/shapes/7.png" alt=""></span>
            <span class="info-s-2"><img src="{{asset('images/fontent')}}/img/32.png" alt=""></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay=".2s">
                    <div
                        class="single-info d-flex flex-sm-row flex-md-column flex-lg-row justify-content-around align-items-center">
                        <div class="info-img">
                            <img src="{{asset('images/fontent')}}/icons/c1.png" alt="">
                        </div>
                        <div class="info-content text-center text-lg-left">
                            <h5>Phone Us 24/7</h5>
                            <p>123-5879406</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay=".4s">
                    <div
                        class="single-info d-flex flex-sm-row flex-md-column flex-lg-row  justify-content-around align-items-center">
                        <div class="info-img">
                            <img src="{{asset('images/fontent')}}/icons/c2.png" alt="">
                        </div>
                        <div class="info-content text-center text-lg-left">
                            <h5>Get Direction</h5>
                            <p>Sector:7, Road:27, House:18,
                                Uttara, Dhaka, 1230 Dhaka.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay=".6s">
                    <div
                        class="single-info d-flex flex-sm-row flex-md-column flex-lg-row  justify-content-around align-items-center">
                        <div class="info-img">
                            <img src="{{asset('images/fontent')}}/icons/c3.png" alt="">
                        </div>
                        <div class="info-content text-center text-lg-left">
                            <h5>Opening Hours</h5>
                            <p>Everyday 11.00 PM - 11.00 AM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- map area -->
    <div class="map-area padding-bottom-120 wow fadeInUp">
        <div class="map-shapes">
            <div class="ms-1"><img src="{{asset('images/fontent')}}/shapes/16.png" alt=""></div>
        </div>
        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.4148247742232!2d90.39747015024156!3d23.874904684452307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c43bc25ec0ad%3A0x92541def35db7c01!2sSoftTech-IT%20Institute!5e0!3m2!1sen!2sbd!4v1611143717399!5m2!1sen!2sbd"
                width="1190" height="400" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div>
    </div>
@endsection

