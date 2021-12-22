@extends('layouts.app')
@section('content')
     <!-- breadcrumb-area -->
     <div class="banner-area breadcrumb-area padding-top-120 padding-bottom-90">
        <div class="bread-shapes">
            <span class="b-shape-1 item-bounce"><img src="assets/images/img/5.png" alt=""></span>
            <span class="b-shape-2"><img src="assets/images/img/6.png" alt=""></span>
            <span class="b-shape-3"><img src="assets/images/img/7.png" alt=""></span>
            <span class="b-shape-4"><img src="assets/images/img/9.png" alt=""></span>
            <span class="b-shape-5"><img src="assets/images/shapes/18.png" alt=""></span>
            <span class="b-shape-6 item-animateOne"><img src="assets/images/img/7.png" alt=""></span>
        </div>
        <div class="container padding-top-120">
            <div class="row justify-content-center">
                <nav aria-label="breadcrumb">
                    <h2 class="page-title">Menu item</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">menu item</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- food-items countdown -->
    <div class="foods-counter menus-area">
        <div class="container">
            <div class="row foods-wrapper menus-wrapper">
                <div class="col-lg-3 col-md-6">
                    <div class="single-food single-menus">
                        <img src="assets/images/menu-item/menu2.png" alt="">
                        <h6>Super Fast Delivery</h6>
                        <p>Free Delivery in you Location</p>
                        <a href="shopping-cart.html">Order Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-food single-menus">
                        <img src="assets/images/menu-item/menu1.png" alt="">
                        <h6>100% Best Quality</h6>
                        <p>We Provide Best Quality Food</p>
                        <a href="shopping-cart.html">Order Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-food single-menus">
                        <img src="assets/images/menu-item/menu3.png" alt="">
                        <h6>Money Back Guarantee</h6>
                        <p>100% Money Back Guarantee</p>
                        <a href="shopping-cart.html">Order Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-food single-menus">
                        <img src="assets/images/menu-item/menu4.png" alt="">
                        <h6>Delicious Food Menu</h6>
                        <p>Food Khan Provide Best Food</p>
                        <a href="shopping-cart.html">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- chicken tab-area -->
    <section class="menu-area  pizza-area burger-area chicken-area padding-top-40">
        <div class="menu-i-shapes">
            <span class="bleft"><img src="assets/images/menu-item/bleft.png" alt=""></span>
        </div>
        <div class="container">
            <div class="common-title-area text-center padding-40">
                <h3>food items</h3>
                <h2>chicken <span>menu</span> </h2>
            </div>
            <!-- menu-nav-wrapper -->
            <div class="menu-nav-wrapper">
                <div class="container">
                    <div class="row">
                        <nav>
                            <div class="nav" id="nav-tab" role="tablist">
                                <!-- menu-nav-1 -->
                                <a class="nav-item nav-link active" id="nav-chicken-1" data-toggle="tab"
                                    href="#chicken-1" role="tab" aria-controls="chicken-1" aria-selected="true">
                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="assets/images/menu-item/tc1.png" alt="">
                                        </div>
                                        <h6>Spicy Chicken</h6>
                                        <span class="g-s-4"><img src="assets/images/shapes/10.png" alt=""></span>
                                        <span class="g-s-5"><img src="assets/images/shapes/14.png" alt=""></span>
                                    </div>
                                </a>
                                <!-- menu-nav-2 -->
                                <a class="nav-item nav-link" id="nav-chicken-2" data-toggle="tab" href="#chicken-2"
                                    role="tab" aria-controls="chicken-2" aria-selected="false">
                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="assets/images/menu-item/tc2.png" alt="">
                                        </div>
                                        <h6>Chicken Fry</h6>
                                        <span class="g-s-4"><img src="assets/images/shapes/10.png" alt=""></span>
                                        <span class="g-s-5"><img src="assets/images/shapes/14.png" alt=""></span>
                                    </div>
                                </a>
                                <!-- menu-nav-3 -->
                                <a class="nav-item nav-link" id="nav-chicken-3" data-toggle="tab" href="#chicken-3"
                                    role="tab" aria-controls="chicken-3" aria-selected="false">
                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="assets/images/menu-item/tc3.png" alt="">
                                        </div>
                                        <h6>Chicken Stick</h6>
                                        <span class="g-s-4"><img src="assets/images/shapes/10.png" alt=""></span>
                                        <span class="g-s-5"><img src="assets/images/shapes/14.png" alt=""></span>
                                    </div>

                                </a>
                                <!-- menu-nav-4 -->
                                <a class="nav-item nav-link" id="nav-chicken-4" data-toggle="tab" href="#chicken-4"
                                    role="tab" aria-controls="chicken-4" aria-selected="false">
                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="assets/images/menu-item/tc4.png" alt="">
                                        </div>
                                        <h6>Chicken Bites</h6>
                                        <span class="g-s-4"><img src="assets/images/shapes/10.png" alt=""></span>
                                        <span class="g-s-5"><img src="assets/images/shapes/14.png" alt=""></span>
                                    </div>

                                </a>
                                <!-- menu-nav-5 -->
                                <a class="nav-item nav-link" id="nav-chicken-5" data-toggle="tab" href="#chicken-5"
                                    role="tab" aria-controls="chicken-5" aria-selected="false">

                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="assets/images/menu-item/tc5.png" alt="">
                                        </div>
                                        <h6>Crispy Strips</h6>
                                        <span class="g-s-4"><img src="assets/images/shapes/10.png" alt=""></span>
                                        <span class="g-s-5"><img src="assets/images/shapes/14.png" alt=""></span>
                                    </div>
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- menu-items-wrapper -->
            <div class="tab-content" id="nav-tabContent">
                <!-- menu-items-1 -->
                <div class="tab-pane fade show active" id="chicken-1" role="tabpanel" aria-labelledby="chicken-1">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="assets/images/menu-item/tc6.png" alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Fried Chicken</a></h6>
                                                <p>shirmp. squid, pineapple</p>
                                                <span>price :$10.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="assets/images/menu-item/tc7.png" alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Roast Chicken</a></h6>
                                                <p>shirmp. squid, pineapple</p>
                                                <span>price :$15.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="assets/images/menu-item/tc8.png" alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Crispy Fry</a></h6>
                                                <p>shirmp. squid, pineapple</p>
                                                <span>price :$15.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="assets/images/menu-item/tc9.png" alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Baked Roast</a></h6>
                                                <p>shirmp. squid, pineapple</p>
                                                <span>price :$15.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="chicken-tab-content">
                                    <h5>Super <br>Combo
                                        Burger</h5>
                                    <p>Shrimp, Squid</p>
                                    <a href="shopping-cart.html">Order Now</a>
                                    <span class='main-img'><img src="assets/images/menu-item/chicken-banner.png"
                                            alt=""></span>
                                    <span class="gprice-2">$15</span>
                                    <span class="gshape1"><img src="assets/images/shapes/38.png" alt=""></span>
                                    <span class="gshape2"><img src="assets/images/shapes/39.png" alt=""></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menu-items-2 -->
                <div class="tab-pane fade" id="chicken-2" role="tabpanel" aria-labelledby="chicken-2">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="assets/images/menu-item/tc6.png" alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html"> Chicken Fried</a></h6>
                                                <p>shirmp. squid, pineapple</p>
                                                <span>price :$10.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="assets/images/menu-item/tc6.png" alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Chicken Roast </a></h6>
                                                <p>shirmp. squid, pineapple</p>
                                                <span>price :$15.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="assets/images/menu-item/tc6.png" alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Crispy Fry</a></h6>
                                                <p>shirmp. squid, pineapple</p>
                                                <span>price :$15.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="assets/images/menu-item/tc6.png" alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Baked Roast</a></h6>
                                                <p>shirmp. squid, pineapple</p>
                                                <span>price :$15.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="chicken-tab-content">
                                    <h5>Super <br>Combo
                                        Burger</h5>
                                    <p>Shrimp, Squid</p>
                                    <a href="shopping-cart.html">Order Now</a>
                                    <span class='main-img'><img src="assets/images/menu-item/chicken-banner.png"
                                            alt=""></span>
                                    <span class="gprice-2">$15</span>
                                    <span class="gshape1"><img src="assets/images/shapes/38.png" alt=""></span>
                                    <span class="gshape2"><img src="assets/images/shapes/39.png" alt=""></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menu-items-3 -->
                <div class="tab-pane fade" id="chicken-3" role="tabpanel" aria-labelledby="chicken-3">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="assets/images/menu-item/tc9.png" alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Fried Chicken</a></h6>
                                                <p>shirmp. squid, pineapple</p>
                                                <span>price :$10.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="assets/images/menu-item/tc9.png" alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Roast Chicken</a></h6>
                                                <p>shirmp. squid, pineapple</p>
                                                <span>price :$15.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="assets/images/menu-item/tc9.png" alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Crispy Fry</a></h6>
                                                <p>shirmp. squid, pineapple</p>
                                                <span>price :$15.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="assets/images/menu-item/tc9.png" alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Baked Roast</a></h6>
                                                <p>shirmp. squid, pineapple</p>
                                                <span>price :$15.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="chicken-tab-content">
                                    <h5>Super <br>Combo
                                        Burger</h5>
                                    <p>Shrimp, Squid</p>
                                    <a href="shopping-cart.html">Order Now</a>
                                    <span class='main-img'><img src="assets/images/menu-item/chicken-banner.png"
                                            alt=""></span>
                                    <span class="gprice-2">$15</span>
                                    <span class="gshape1"><img src="assets/images/shapes/38.png" alt=""></span>
                                    <span class="gshape2"><img src="assets/images/shapes/39.png" alt=""></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menu-items-4 -->
                <div class="tab-pane fade" id="chicken-4" role="tabpanel" aria-labelledby="chicken-4">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="assets/images/menu-item/tc7.png" alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Fried Chicken</a></h6>
                                                <p>shirmp. squid, pineapple</p>
                                                <span>price :$10.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="assets/images/menu-item/tc7.png" alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Roast Chicken</a></h6>
                                                <p>shirmp. squid, pineapple</p>
                                                <span>price :$15.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="assets/images/menu-item/tc7.png" alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Crispy Fry</a></h6>
                                                <p>shirmp. squid, pineapple</p>
                                                <span>price :$15.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="assets/images/menu-item/tc7.png" alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Baked Roast</a></h6>
                                                <p>shirmp. squid, pineapple</p>
                                                <span>price :$15.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="chicken-tab-content">
                                    <h5>Super <br>Combo
                                        Burger</h5>
                                    <p>Shrimp, Squid</p>
                                    <a href="shopping-cart.html">Order Now</a>
                                    <span class='main-img'><img src="assets/images/menu-item/chicken-banner.png"
                                            alt=""></span>
                                    <span class="gprice-2">$15</span>
                                    <span class="gshape1"><img src="assets/images/shapes/38.png" alt=""></span>
                                    <span class="gshape2"><img src="assets/images/shapes/39.png" alt=""></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menu-items-5 -->
                <div class="tab-pane fade" id="chicken-5" role="tabpanel" aria-labelledby="chicken-5">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="assets/images/menu-item/tc8.png" alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Fried Chicken</a></h6>
                                                <p>shirmp. squid, pineapple</p>
                                                <span>price :$10.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="assets/images/menu-item/tc8.png" alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Roast Chicken</a></h6>
                                                <p>shirmp. squid, pineapple</p>
                                                <span>price :$15.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="assets/images/menu-item/tc8.png" alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Crispy Fry</a></h6>
                                                <p>shirmp. squid, pineapple</p>
                                                <span>price :$15.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="assets/images/menu-item/tc8.png" alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Baked Roast</a></h6>
                                                <p>shirmp. squid, pineapple</p>
                                                <span>price :$15.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="chicken-tab-content">
                                    <h5>Super <br>Combo
                                        Burger</h5>
                                    <p>Shrimp, Squid</p>
                                    <a href="shopping-cart.html">Order Now</a>
                                    <span class='main-img'><img src="assets/images/menu-item/chicken-banner.png"
                                            alt=""></span>
                                    <span class="gprice-2">$15</span>
                                    <span class="gshape1"><img src="assets/images/shapes/38.png" alt=""></span>
                                    <span class="gshape2"><img src="assets/images/shapes/39.png" alt=""></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- burger tab-area -->
    <section class="menu-area  pizza-area burger-area padding-top-40">
        <div class="menu-i-shapes">
            <span class="brs"><img src="assets/images/shapes/34.png" alt=""></span>
        </div>
        <div class="container">
            <div class="common-title-area text-center padding-40">
                <h3>food items</h3>
                <h2>Delicious <span>burger</span> </h2>
            </div>
            <!-- menu-nav-wrapper -->
            <div class="menu-nav-wrapper">
                <div class="container">
                    <div class="row">
                        <nav>
                            <div class="nav" id="nav-tab-1" role="tablist">
                                <!-- menu-nav-1 -->
                                <a class="nav-item nav-link active" id="nav-burger-1" data-toggle="tab" href="#burger-1"
                                    role="tab" aria-controls="burger-1" aria-selected="true">
                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="assets/images/menu-item/bn1.png" alt="">
                                        </div>
                                        <h6>Classic Burger</h6>
                                        <span class="g-s-4"><img src="assets/images/shapes/10.png" alt=""></span>
                                        <span class="g-s-5"><img src="assets/images/shapes/14.png" alt=""></span>
                                    </div>
                                </a>
                                <!-- menu-nav-2 -->
                                <a class="nav-item nav-link" id="nav-burger-2" data-toggle="tab" href="#burger-2"
                                    role="tab" aria-controls="burger-2" aria-selected="false">
                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="assets/images/menu-item/bn2.png" alt="">
                                        </div>
                                        <h6>Mushroom Burger</h6>
                                        <span class="g-s-4"><img src="assets/images/shapes/10.png" alt=""></span>
                                        <span class="g-s-5"><img src="assets/images/shapes/14.png" alt=""></span>
                                    </div>
                                </a>
                                <!-- menu-nav-3 -->
                                <a class="nav-item nav-link" id="nav-burger-3" data-toggle="tab" href="#burger-3"
                                    role="tab" aria-controls="burger-3" aria-selected="false">
                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="assets/images/menu-item/pn3.png" alt="">
                                        </div>
                                        <h6>Beef Burger</h6>
                                        <span class="g-s-4"><img src="assets/images/shapes/10.png" alt=""></span>
                                        <span class="g-s-5"><img src="assets/images/shapes/14.png" alt=""></span>
                                    </div>

                                </a>
                                <!-- menu-nav-4 -->
                                <a class="nav-item nav-link" id="nav-burger-4" data-toggle="tab" href="#burger-4"
                                    role="tab" aria-controls="burger-4" aria-selected="false">
                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="assets/images/menu-item/pn4.png" alt="">
                                        </div>
                                        <h6>Chicken Burger</h6>
                                        <span class="g-s-4"><img src="assets/images/shapes/10.png" alt=""></span>
                                        <span class="g-s-5"><img src="assets/images/shapes/14.png" alt=""></span>
                                    </div>

                                </a>
                                <!-- menu-nav-5 -->
                                <a class="nav-item nav-link" id="nav-burger-5" data-toggle="tab" href="#burger-5"
                                    role="tab" aria-controls="burger-5" aria-selected="false">

                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="assets/images/menu-item/pn5.png" alt="">
                                        </div>
                                        <h6>Vegetable Burger</h6>
                                        <span class="g-s-4"><img src="assets/images/shapes/10.png" alt=""></span>
                                        <span class="g-s-5"><img src="assets/images/shapes/14.png" alt=""></span>
                                    </div>
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- menu-items-wrapper -->
            <div class="tab-content" id="nav-tabContent1">
                <!-- menu-items-1 -->
                <div class="tab-pane fade show active" id="burger-1" role="tabpanel" aria-labelledby="burger-1">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br1.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Crispy Fried Chicken</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br2.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Beef Burger</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$10.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br3.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">BBQ Burger</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$10.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br4.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Crispy Burger</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br5.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Chicken Burger</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br6.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Chicken grill Fry</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menu-items-2 -->
                <div class="tab-pane fade" id="burger-2" role="tabpanel" aria-labelledby="burger-2">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br5.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Crispy Fried Chicken</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br5.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Beef Burger</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$10.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br5.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">BBQ Burger</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$10.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br5.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Crispy Burger</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br5.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Chicken Burger</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br5.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Chicken grill Fry</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menu-items-3 -->
                <div class="tab-pane fade" id="burger-3" role="tabpanel" aria-labelledby="burger-3">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br2.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Crispy Fried Chicken</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br2.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Beef Burger</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$10.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br2.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">BBQ Burger</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$10.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br2.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Crispy Burger</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br2.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Chicken Burger</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br2.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Chicken grill Fry</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menu-items-4 -->
                <div class="tab-pane fade" id="burger-4" role="tabpanel" aria-labelledby="burger-4">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br3.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Crispy Fried Chicken</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br3.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Beef Burger</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$10.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br3.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">BBQ Burger</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$10.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br3.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Crispy Burger</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br3.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Chicken Burger</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br3.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Chicken grill Fry</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menu-items-5 -->
                <div class="tab-pane fade" id="burger-5" role="tabpanel" aria-labelledby="burger-5">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br1.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Crispy Fried Chicken</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br1.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Beef Burger</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$10.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br1.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">BBQ Burger</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$10.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br1.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Crispy Burger</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br1.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Chicken Burger</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/br1.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Chicken grill Fry</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- pizza banner -->
    <section class="banner-gallery pizza-banner padding-top-90 padding-bottom-30">
        <div class="pizza-shapes">
            <span class="ps1"><img src="assets/images/shapes/35.png" alt=""></span>
            <span class="ps2"><img src="assets/images/shapes/26.png" alt=""></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 margin-bottom-30 wow fadeInLeft">
                            <div class="gallery-img-1">
                                <h3 class="margin-bottom-10">Buzzed Burger</h3>
                                <p>Sale off 50% only this week</p>
                                <a href="shopping-cart.html" class="btn">order now</a>
                                <img src="assets/images/gallery/24.png" alt="">
                                <span class="gs"><img src="assets/images/shapes/bbr.png" alt=""></span>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 wow fadeInRight">
                            <div class="gallery-img-1 gallery-img-01">
                                <h5 class="margin-bottom-10">Chicken Combo<br>
                                    Burger</h5>
                                <p>Sale off 50% only this week</p>
                                <a href="shopping-cart.html" class="btn">order now</a>
                                <img src="assets/images/menu-item/mg2.png" alt="">
                                <span class="yellow"><img src="assets/images/shapes/37.png" alt=""></span>
                                <span class="gs1"><img src="assets/images/shapes/bbs.png" alt=""></span>
                                <span class="pbadge"><img src="assets/images/icons/pbadge.png" alt=""></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- pizza-tab-area -->
    <section class="menu-area  pizza-area">
        <div class="menu-i-shapes">
            <span class="mis-1"><img src="assets/images/shapes/36.png" alt=""></span>
            <span class="mis-2"><img src="assets/images/shapes/6.png" alt=""></span>
        </div>
        <div class="container">
            <div class="common-title-area text-center padding-40">
                <h3>food items</h3>
                <h2>Delicious <span>Pizza</span> </h2>
            </div>
            <!-- menu-nav-wrapper -->
            <div class="menu-nav-wrapper">
                <div class="container">
                    <div class="row">
                        <nav>
                            <div class="nav" id="nav-tab2" role="tablist">
                                <!-- menu-nav-1 -->
                                <a class="nav-item nav-link active" id="nav-menu-1" data-toggle="tab" href="#menu-1"
                                    role="tab" aria-controls="menu-1" aria-selected="true">
                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="assets/images/menu-item/pm1.png" alt="">
                                        </div>
                                        <h6>pizza</h6>
                                        <span class="g-s-4"><img src="assets/images/shapes/10.png" alt=""></span>
                                        <span class="g-s-5"><img src="assets/images/shapes/14.png" alt=""></span>
                                    </div>
                                </a>
                                <!-- menu-nav-2 -->
                                <a class="nav-item nav-link" id="nav-menu-2" data-toggle="tab" href="#menu-2" role="tab"
                                    aria-controls="menu-2" aria-selected="false">
                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="assets/images/menu-item/pm2.png" alt="">
                                        </div>
                                        <h6>pizza</h6>
                                        <span class="g-s-4"><img src="assets/images/shapes/10.png" alt=""></span>
                                        <span class="g-s-5"><img src="assets/images/shapes/14.png" alt=""></span>
                                    </div>
                                </a>
                                <!-- menu-nav-3 -->
                                <a class="nav-item nav-link" id="nav-menu-3" data-toggle="tab" href="#menu-3" role="tab"
                                    aria-controls="menu-3" aria-selected="false">
                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="assets/images/menu-item/pm3.png" alt="">
                                        </div>
                                        <h6>pizza</h6>
                                        <span class="g-s-4"><img src="assets/images/shapes/10.png" alt=""></span>
                                        <span class="g-s-5"><img src="assets/images/shapes/14.png" alt=""></span>
                                    </div>

                                </a>
                                <!-- menu-nav-4 -->
                                <a class="nav-item nav-link" id="nav-menu-4" data-toggle="tab" href="#menu-4" role="tab"
                                    aria-controls="menu-4" aria-selected="false">
                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="assets/images/menu-item/pm4.png" alt="">
                                        </div>
                                        <h6>pizza</h6>
                                        <span class="g-s-4"><img src="assets/images/shapes/10.png" alt=""></span>
                                        <span class="g-s-5"><img src="assets/images/shapes/14.png" alt=""></span>
                                    </div>

                                </a>
                                <!-- menu-nav-5 -->
                                <a class="nav-item nav-link" id="nav-menu-5" data-toggle="tab" href="#menu-5" role="tab"
                                    aria-controls="menu-5" aria-selected="false">

                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="assets/images/menu-item/pm5.png" alt="">
                                        </div>
                                        <h6>pizza</h6>
                                        <span class="g-s-4"><img src="assets/images/shapes/10.png" alt=""></span>
                                        <span class="g-s-5"><img src="assets/images/shapes/14.png" alt=""></span>
                                    </div>
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- menu-items-wrapper -->
            <div class="tab-content" id="nav-tabContent2">
                <!-- menu-items-1 -->
                <div class="tab-pane fade show active" id="menu-1" role="tabpanel" aria-labelledby="menu-1">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz1.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Margherita Pizza</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz2.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Tomato sauce</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$10.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz3.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Marinara Pizza</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$10.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz4.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Frutti di Mare</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz5.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Americana Pizza</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz6.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Pizza al Pesto</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menu-items-2 -->
                <div class="tab-pane fade" id="menu-2" role="tabpanel" aria-labelledby="menu-2">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz1.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Margherita Pizza</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz2.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Tomato sauce</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$10.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz3.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Marinara Pizza</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$10.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz4.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Frutti di Mare</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz5.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Americana Pizza</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz6.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Pizza al Pesto</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menu-items-3 -->
                <div class="tab-pane fade" id="menu-3" role="tabpanel" aria-labelledby="menu-3">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz1.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Margherita Pizza</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz2.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Tomato sauce</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$10.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz3.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Marinara Pizza</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$10.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz4.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Frutti di Mare</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz5.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Americana Pizza</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz6.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Pizza al Pesto</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menu-items-4 -->
                <div class="tab-pane fade" id="menu-4" role="tabpanel" aria-labelledby="menu-4">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz1.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Margherita Pizza</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz2.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Tomato sauce</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$10.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz3.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Marinara Pizza</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$10.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz4.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Frutti di Mare</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz5.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Americana Pizza</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz6.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Pizza al Pesto</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menu-items-5 -->
                <div class="tab-pane fade" id="menu-5" role="tabpanel" aria-labelledby="menu-5">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz1.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Margherita Pizza</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz2.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Tomato sauce</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$10.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz3.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Marinara Pizza</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$10.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz4.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Frutti di Mare</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz5.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Americana Pizza</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="assets/images/menu-item/piz6.png" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Pizza al Pesto</a></h6>
                                        <p>shirmp. squid, pineapple</p>
                                        <span>price :$15.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- testimonial -->
    <section class="testimonial padding-bottom-120 padding-top-80">
        <div class="container">
            <div class="testi-shapes">
                <span class="ts-1"><img src="assets/images/img/31.png" alt=""></span>
                <span class="ts-2"><img src="assets/images/img/32.png" alt=""></span>
                <span class="ts-3"><img src="assets/images/shapes/7.png" alt=""></span>
            </div>
            <div class="common-title-area text-center padding-bottom-50">
                <h3>testimonial</h3>
                <h2>client <span>feedback</span></h2>
            </div>
            <div class="testimonial-active">
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="assets/images/shapes/33.png" alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="assets/images/testimonial/testi-1.png" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                        researching
                        the benefits of frequent testing and the feedback
                        leads to. He explains that in the history of the study.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="assets/images/shapes/33.png" alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="assets/images/testimonial/testi-2.png" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                        researching
                        the benefits of frequent testing and the feedback
                        leads to. He explains that in the history of the study.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="assets/images/shapes/33.png" alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="assets/images/testimonial/testi-1.png" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                        researching
                        the benefits of frequent testing and the feedback
                        leads to. He explains that in the history of the study.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="assets/images/shapes/33.png" alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="assets/images/testimonial/testi-2.png" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                        researching
                        the benefits of frequent testing and the feedback
                        leads to. He explains that in the history of the study.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="assets/images/shapes/33.png" alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="assets/images/testimonial/testi-1.png" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                        researching
                        the benefits of frequent testing and the feedback
                        leads to. He explains that in the history of the study.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="assets/images/shapes/33.png" alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="assets/images/testimonial/testi-2.png" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                        researching
                        the benefits of frequent testing and the feedback
                        leads to. He explains that in the history of the study.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="assets/images/shapes/33.png" alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="assets/images/testimonial/testi-1.png" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                        researching
                        the benefits of frequent testing and the feedback
                        leads to. He explains that in the history of the study.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="assets/images/shapes/33.png" alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="assets/images/testimonial/testi-2.png" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                        researching
                        the benefits of frequent testing and the feedback
                        leads to. He explains that in the history of the study.</p>
                </div>
            </div>

        </div>
    </section>




@endsection
