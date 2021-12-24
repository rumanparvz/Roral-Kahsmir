@extends('layouts.app')

@section('content')
<style>
.overlay{
background-color: rgba(0,0,0,0.9);
height: 100%;
width: 100%;
z-index: 99;
}
.carousel-caption{

    bottom: 310px !important;
    background: rgba(0,0,0,0.6);    /* opacity: 0.7; */

    border-radius: 10px;
}
.carousel-caption h2{
    color: white;
    font-size: 80px;
    letter-spacing: 3px;
}
.carousel-caption p{
    font-size: 22px;
    font-family: sans-serif;
    color: #fff;
}
.about-image-grid {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    margin-left: -10px;
    margin-right: -10px;
}
.about-image-grid-item {
    padding-left: 10px;
    padding-right: 10px;
}
.about-image-grid-inner {
    border-radius: 10px;
    overflow: hidden;
}

.mb-30 {
    margin-bottom: 30px;
}
</style>
 <!-- banner-area -->
 <section class="banner-area pt-4">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="overlay">
          <div class="carousel-item active">
            <img style="height: 100%"  class="d-block w-100" src="http://127.0.0.1:8000/images/fontent/gallery/24.png" alt="First slide">
            <div class="carousel-caption">
                <h2> Special Offer</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione ipsa obcaecati eos se</p>
                <br>
                <div class="d-flex justify-content-center">
                    <button class="btn m-4"><i class="fas fa-arrow-circle-right"></i> Commander </button>
                    <button class="btn m-4"><i class="fas fa-table"></i> Book Now</button>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <img style="height: 100%;width:100%" class="d-block" src="{{ asset('images/fontent/gallery/istockphoto-1295387240-170667a.jpg') }}" alt="Second slide">
            <div class="carousel-caption">
                <h2> Special Offer</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione ipsa obcaecati eos se</p>
                <br>
                <div class="d-flex justify-content-center">
                    <button class="btn m-4"><i class="fas fa-arrow-circle-right"></i> Commander </button>
                    <button class="btn m-4"><i class="fas fa-table"></i> Book Now</button>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <img style="height: 100%"  class="d-block w-100" src="http://127.0.0.1:8000/images/fontent/gallery/24.png"alt="Third slide">
            <div class="carousel-caption">
                <h2> Special Offer</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione ipsa obcaecati eos se</p>
                <br>
                <div class="d-flex justify-content-center">
                    <button class="btn m-4"><i class="fas fa-arrow-circle-right"></i> Commander </button>
                    <button class="btn m-4"><i class="fas fa-table"></i> Book Now</button>
                </div>
            </div>
          </div>
        </div>
    </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</section>

<section class="banner-gallery pt-5 pb-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="common-title-area padding-bottom-30 wow fadeInLeft">
            <h3 class="text-dark text-center">Offer</h3>
            <h2>Special <span>Offer</span></h2>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-6">
              <div class="gallery-img-1">
                <h3>Buzzed Burger</h3>
                <p>Sale off 50% only this week</p>
                <a href="shopping-cart.html" class="btn">order now</a>
                <img src="{{asset('images/fontent')}}/gallery/24.png" alt="" />
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-6">
              <div class="
                    gallery-img-2
                    d-flex
                    align-items-end
                    justify-content-end
                  ">
                <img src="{{asset('images/fontent')}}/gallery/26.png" alt="" />
                <img src="{{asset('images/fontent')}}/shapes/38.png" alt="" class="s11" />
                <span class="gprice-1">$15</span>
                <div class="gimg-content">
                  <h5>Super Delicious Pizza</h5>
                  <a href="shopping-cart.html">order now</a>
                </div>
              </div>
            </div>
          </div>
          {{-- <div class="row margin-top-30">
            <div class="col-lg-4 col-md-4">
              <div class="gallery-img-3">
                <h5>Super Combo Burger</h5>
                <a href="shopping-cart.html">order now</a>
                <img src="{{asset('images/fontent')}}/gallery/23.png" alt="" />
                <img src="{{asset('images/fontent')}}/shapes/layer2.png" alt="" class="s12" />
                <img src="{{asset('images/fontent')}}/shapes/113.png" alt="" class="s13" />
                <span class="gprice-2">$15</span>
              </div>
            </div>
            <div class="col-lg-4 col-md-4">
              <div class="
                    gallery-img-2
                    d-flex
                    align-items-end
                    justify-content-end
                  ">
                <img src="{{asset('images/fontent')}}/gallery/26.png" alt="" />
                <img src="{{asset('images/fontent')}}/shapes/38.png" alt="" class="s11" />
                <span class="gprice-1">$15</span>
                <div class="gimg-content">
                  <h5>Super Delicious Pizza</h5>
                  <a href="shopping-cart.html">order now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4">
              <div class="gallery-img-3">
                <h5>Super Combo Burger</h5>
                <a href="shopping-cart.html">order now</a>
                <img src="{{asset('images/fontent')}}/gallery/23.png" alt="" />
                <img src="{{asset('images/fontent')}}/shapes/layer2.png" alt="" class="s12" />
                <img src="{{asset('images/fontent')}}/shapes/113.png" alt="" class="s13" />
                <span class="gprice-2">$15</span>
              </div>
            </div>
          </div> --}}
        </div>
        {{-- <div class="col-lg-3 col-md-12">
          <div class="gallery-img-4">
            <h5>Super Combo Burger</h5>
            <a href="shopping-cart.html" class="btn">order now</a>
            <img src="{{asset('images/fontent')}}/gallery/22.png" alt="" />
            <img src="{{asset('images/fontent')}}/shapes/leaves.png" alt="" class="s14" />
            <img src="{{asset('images/fontent')}}/shapes/transparent2.png" alt="" class="s15" />
            <span class="gprice-4"><img src="{{asset('images/fontent')}}/gallery/25.png" alt="" /></span>
          </div>
        </div> --}}
      </div>
    </div>
</section>


  <!--popula-menu-area -->
<section class="menu-area padding-bottom-120">
    <div class="container">
    {{-- <div class="common-title-area text-center padding-50 wow fadeInUp">
        <h3>food items</h3>
        <h2>popular <span>menu</span></h2>
    </div> --}}
    <!-- menu-nav-wrapper -->
    <div class="row mt-5 pt-5">
    <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="max-w-390">
            <div class="common-title-area padding-bottom-30 wow fadeInLeft">

                <h2>Roral <span>Kashmir</span></h2>
            </div>
          <p class="online-des">
            NOUS VISONS À PRODUIRE À LA MAISON AUTANT QUE POSSIBLE POUR LA MEILLEURE QUALITÉ ET À RÉDUIRE LES MILLES ALIMENTAIRES. NOS DÉLICIEUX GÂTEAUX, SCONES TRADITIONNELS DEVON, PAINS, SOUPES, SAUCES ET ACCOMPAGNEMENTS SONT PRODUITS DANS NOS PROPRES CUISINES. RESTAURANT INDIEN EN FRANCE, INCLUENT UN MENU DE RESTAURANT MERVEILLEUX OÙ VOUS POURREZ PROFITER DE LA MEILLEURE CUISINE INDIENNE ET PAKISTANAISE DANS LE RESTAURANT ET BIEN PLUS ENCORE. JARDIN DE KASHMIR EST LA MEILLEURE OPTION AUTOUR DE VOUS. HAUTE GASTRONOMIE INDIENNE ET PAKISTANAISE
          </p>
       
        </div>
      </div>

      <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="about-image-grid">
                   <div class="about-image-grid-item">
                      <div class="about-image-grid-inner mb-30">
                         <img src="https://fasteats.xyz/storage/upload/aboutImage/product--1637711365.jpg" class="img-fluid" alt="welcome">
                      </div>
                      <div class="about-image-grid-inner mb-30">
                         <img src="https://fasteats.xyz/storage/upload/aboutImage/product--1637711565.jpg" class="img-fluid" alt="welcome">
                      </div>
                   </div>
                   <div class="about-image-grid-item">
                      <div class="about-image-grid-inner fluid-height">
                         <img src="https://fasteats.xyz/storage/upload/aboutImage/product--1637711627.jpg" class="img-fluid" alt="welcome">
                      </div>
                   </div>
                </div>
      </div>

    </div>

    </div>
</section>

<!-- popular-dishes -->
<section class="popular-dishes-area padding-top-110">
    <div class="pshapes">
    <span class="ps-1 item-animateTwo"><img src="{{asset('images/fontent')}}/shapes/11.png" alt="" /></span>
    <span class="ps-2 item-animateTwo"><img src="{{asset('images/fontent')}}/shapes/12.png" alt="" /></span>
    <span class="ps-3 item-bounce"><img src="{{asset('images/fontent')}}/shapes/13.png" alt="" /></span>
    <span class="ps-4 item-bounce"><img src="{{asset('images/fontent')}}/shapes/14.png" alt="" /></span>
    <span class="ps-5"><img src="{{asset('images/fontent')}}/shapes/15.png" alt="" /></span>
    <span class="ps-6"><img src="{{asset('images/fontent')}}/shapes/16.png" alt="" /></span>
    </div>
    <div class="container">
    <nav class="
            popular-tab-nav
            {{-- d-flex
            flex-wrap
            justify-content-between
            align-items-center --}}
            text-center
        ">
        <div class="common-title-area padding-bottom-30 wow fadeInLeft">
        <h3>food items</h3>
        <h2>popular <span>dishes</span></h2>
        </div>
        {{-- <div class="nav padding-bottom-30 wow fadeInRight" id="nav-tab-1" role="tablist">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
            aria-selected="true">all items</a>
        <a class="nav-link" id="nav-tab-home" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1"
            aria-selected="false">pizza</a>

        <a class="nav-link" id="nav-tab-11" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2"
            aria-selected="false">burger</a>

        <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3"
            aria-selected="false">chicken</a>

        <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4"
            aria-selected="false">drinks</a>
        </div> --}}
    </nav>
    <!-- main-content -->
    <div class="tab-content" id="nav-tabContent-1">
        <!-- all items -->
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home">
        <div class="row pb-5 mb-5">
            {{-- <div class="col-xl-3 col-lg-3 col-md-6">
            <div class="single-dishes">
                <div class="dish-img">
                <img src="{{asset('images/fontent')}}/menu-item/pd1.png" style="width: inherit" alt="" />
                </div>
                <div class="dish-content">
                <h5><a href="single-dish.html">Garlic Burger </a></h5>
                <p>
                    It is a long established fact that a reader BBQ food
                    Chicken.
                </p>
                <span class="price">price :$15.00</span>
                </div>
                <span class="badge">hot</span>
                <div class="cart-opt">
                <span>
                    <a href="#"><i class="fas fa-heart"></i></a>
                </span>
                <span>
                    <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                </span>
                </div>
            </div>
            </div> --}}
            {{-- <div class="col-xl-3 col-lg-3 col-md-6">
            <div class="single-dishes">
                <div class="dish-img">
                <img src="{{asset('images/fontent')}}/menu-item/pd2.png" style="width: inherit" alt="" />
                </div>
                <div class="dish-content">
                <h5><a href="single-dish.html">Vegetable Pizza </a></h5>
                <p>
                    It is a long established fact that a reader BBQ food
                    Chicken.
                </p>
                <span class="price">price :$15.00</span>
                </div>
                <span class="badge"></span>
                <div class="cart-opt">
                <span>
                    <a href="#"><i class="fas fa-heart"></i></a>
                </span>
                <span>
                    <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                </span>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
            <div class="single-dishes">
                <div class="dish-img">
                <img src="{{asset('images/fontent')}}/menu-item/pd3.png" style="width: inherit" alt="" />
                </div>
                <div class="dish-content">
                <h5><a href="single-dish.html">Chicken Fry </a></h5>
                <p>
                    It is a long established fact that a reader BBQ food
                    Chicken.
                </p>
                <span class="price badge-color">price :$15.00</span>
                <span class="rating">
                    <i class="fas fa-star"></i> 5star</span>
                </div>
                <span class="badge badge-bg-color">new</span>
                <div class="cart-opt">
                <span>
                    <a href="#"><i class="fas fa-heart"></i></a>
                </span>
                <span>
                    <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                </span>
                </div>
            </div>
            </div> --}}

            <div class="owl-carousel owl-products">
                <div class="item">
                    <div class="single-dishes">
                        <div class="dish-img">
                        <img src="{{asset('images/fontent')}}/menu-item/pd4.png" style="width: inherit" alt="" />
                        </div>
                        <div class="dish-content">
                        <h5><a href="single-dish.html">Chickpea Soup </a></h5>
                        <p>
                            It is a long established fact that a reader BBQ food
                            Chicken.
                        </p>
                        <span class="price">price :$15.00</span>
                        </div>
                        <span class="badge">sale</span>
                        <div class="cart-opt">
                        <span>
                            <a href="#"><i class="fas fa-heart"></i></a>
                        </span>
                        <span>
                            <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                        </span>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="single-dishes">
                        <div class="dish-img">
                        <img src="{{asset('images/fontent')}}/menu-item/pd4.png" style="width: inherit" alt="" />
                        </div>
                        <div class="dish-content">
                        <h5><a href="single-dish.html">Chickpea Soup </a></h5>
                        <p>
                            It is a long established fact that a reader BBQ food
                            Chicken.
                        </p>
                        <span class="price">price :$15.00</span>
                        </div>
                        <span class="badge">sale</span>
                        <div class="cart-opt">
                        <span>
                            <a href="#"><i class="fas fa-heart"></i></a>
                        </span>
                        <span>
                            <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                        </span>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="single-dishes">
                        <div class="dish-img">
                        <img src="{{asset('images/fontent')}}/menu-item/pd4.png" style="width: inherit" alt="" />
                        </div>
                        <div class="dish-content">
                        <h5><a href="single-dish.html">Chickpea Soup </a></h5>
                        <p>
                            It is a long established fact that a reader BBQ food
                            Chicken.
                        </p>
                        <span class="price">price :$15.00</span>
                        </div>
                        <span class="badge">sale</span>
                        <div class="cart-opt">
                        <span>
                            <a href="#"><i class="fas fa-heart"></i></a>
                        </span>
                        <span>
                            <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                        </span>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="single-dishes">
                        <div class="dish-img">
                        <img src="{{asset('images/fontent')}}/menu-item/pd4.png" style="width: inherit" alt="" />
                        </div>
                        <div class="dish-content">
                        <h5><a href="single-dish.html">Chickpea Soup </a></h5>
                        <p>
                            It is a long established fact that a reader BBQ food
                            Chicken.
                        </p>
                        <span class="price">price :$15.00</span>
                        </div>
                        <span class="badge">sale</span>
                        <div class="cart-opt">
                        <span>
                            <a href="#"><i class="fas fa-heart"></i></a>
                        </span>
                        <span>
                            <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                        </span>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="single-dishes">
                        <div class="dish-img">
                        <img src="{{asset('images/fontent')}}/menu-item/pd4.png" style="width: inherit" alt="" />
                        </div>
                        <div class="dish-content">
                        <h5><a href="single-dish.html">Chickpea Soup </a></h5>
                        <p>
                            It is a long established fact that a reader BBQ food
                            Chicken.
                        </p>
                        <span class="price">price :$15.00</span>
                        </div>
                        <span class="badge">sale</span>
                        <div class="cart-opt">
                        <span>
                            <a href="#"><i class="fas fa-heart"></i></a>
                        </span>
                        <span>
                            <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                        </span>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="single-dishes">
                        <div class="dish-img">
                        <img src="{{asset('images/fontent')}}/menu-item/pd4.png" style="width: inherit" alt="" />
                        </div>
                        <div class="dish-content">
                        <h5><a href="single-dish.html">Chickpea Soup </a></h5>
                        <p>
                            It is a long established fact that a reader BBQ food
                            Chicken.
                        </p>
                        <span class="price">price :$15.00</span>
                        </div>
                        <span class="badge">sale</span>
                        <div class="cart-opt">
                        <span>
                            <a href="#"><i class="fas fa-heart"></i></a>
                        </span>
                        <span>
                            <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                        </span>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="single-dishes">
                        <div class="dish-img">
                        <img src="{{asset('images/fontent')}}/menu-item/pd4.png" style="width: inherit" alt="" />
                        </div>
                        <div class="dish-content">
                        <h5><a href="single-dish.html">Chickpea Soup </a></h5>
                        <p>
                            It is a long established fact that a reader BBQ food
                            Chicken.
                        </p>
                        <span class="price">price :$15.00</span>
                        </div>
                        <span class="badge">sale</span>
                        <div class="cart-opt">
                        <span>
                            <a href="#"><i class="fas fa-heart"></i></a>
                        </span>
                        <span>
                            <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                        </span>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="single-dishes">
                        <div class="dish-img">
                        <img src="{{asset('images/fontent')}}/menu-item/pd4.png" style="width: inherit" alt="" />
                        </div>
                        <div class="dish-content">
                        <h5><a href="single-dish.html">Chickpea Soup </a></h5>
                        <p>
                            It is a long established fact that a reader BBQ food
                            Chicken.
                        </p>
                        <span class="price">price :$15.00</span>
                        </div>
                        <span class="badge">sale</span>
                        <div class="cart-opt">
                        <span>
                            <a href="#"><i class="fas fa-heart"></i></a>
                        </span>
                        <span>
                            <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                        </span>
                        </div>
                    </div>
                </div>
            </div>



            {{-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <div class="single-dishes">
                    <div class="dish-img">
                    <img src="{{asset('images/fontent')}}/menu-item/pd4.png" style="width: inherit" alt="" />
                    </div>
                    <div class="dish-content">
                    <h5><a href="single-dish.html">Chickpea Soup </a></h5>
                    <p>
                        It is a long established fact that a reader BBQ food
                        Chicken.
                    </p>
                    <span class="price">price :$15.00</span>
                    </div>
                    <span class="badge">sale</span>
                    <div class="cart-opt">
                    <span>
                        <a href="#"><i class="fas fa-heart"></i></a>
                    </span>
                    <span>
                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                    </span>
                    </div>
                </div>
                </div>


                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6">
                    <div class="single-dishes">
                        <div class="dish-img">
                        <img src="{{asset('images/fontent')}}/menu-item/pd4.png" style="width: inherit" alt="" />
                        </div>
                        <div class="dish-content">
                        <h5><a href="single-dish.html">Chickpea Soup </a></h5>
                        <p>
                            It is a long established fact that a reader BBQ food
                            Chicken.
                        </p>
                        <span class="price">price :$15.00</span>
                        </div>
                        <span class="badge">sale</span>
                        <div class="cart-opt">
                        <span>
                            <a href="#"><i class="fas fa-heart"></i></a>
                        </span>
                        <span>
                            <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                        </span>
                        </div>
                    </div>
                    </div>


                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6">
                        <div class="single-dishes">
                            <div class="dish-img">
                            <img src="{{asset('images/fontent')}}/menu-item/pd4.png" style="width: inherit" alt="" />
                            </div>
                            <div class="dish-content">
                            <h5><a href="single-dish.html">Chickpea Soup </a></h5>
                            <p>
                                It is a long established fact that a reader BBQ food
                                Chicken.
                            </p>
                            <span class="price">price :$15.00</span>
                            </div>
                            <span class="badge">sale</span>
                            <div class="cart-opt">
                            <span>
                                <a href="#"><i class="fas fa-heart"></i></a>
                            </span>
                            <span>
                                <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                            </span>
                            </div>
                        </div>
                        </div>


                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6">
                            <div class="single-dishes">
                                <div class="dish-img">
                                <img src="{{asset('images/fontent')}}/menu-item/pd4.png" style="width: inherit" alt="" />
                                </div>
                                <div class="dish-content">
                                <h5><a href="single-dish.html">Chickpea Soup </a></h5>
                                <p>
                                    It is a long established fact that a reader BBQ food
                                    Chicken.
                                </p>
                                <span class="price">price :$15.00</span>
                                </div>
                                <span class="badge">sale</span>
                                <div class="cart-opt">
                                <span>
                                    <a href="#"><i class="fas fa-heart"></i></a>
                                </span>
                                <span>
                                    <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                </span>
                                </div>
                            </div>
                            </div> --}}








    </div>
    </div>
</section>

<!-- banner-gallery -->





























{{-- <!-- countdown -->
<section class="countdown-area padding-top-120 padding-bottom-120">
    <div class="container">
    <div class="countdown-shapes">
        <span class="cs-1 item-bounce"><img src="{{asset('images/fontent')}}/shapes/24.png" alt="" /></span>
        <span class="cs-3 item-bounce"><img src="{{asset('images/fontent')}}/shapes/26.png" alt="" /></span>
        <span class="cs-4 item-animateOne"><img src="{{asset('images/fontent')}}/shapes/27.png" alt="" /></span>
        <span class="cs-5"><img src="{{asset('images/fontent')}}/shapes/18.png" alt="" /></span>
        <span class="cs-6"><img src="{{asset('images/fontent')}}/shapes/22.png" alt="" /></span>
        <span class="cs-7"><img src="{{asset('images/fontent')}}/shapes/30.png" alt="" /></span>
    </div>
    <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 margin-bottom-20">
        <div class="countdown-left">
            <span class="cs-1"><img src="{{asset('images/fontent')}}/shapes/25.png" alt="" /></span>
            <span class="cs-2"><img src="{{asset('images/fontent')}}/shapes/Leaf.png" alt="" /></span>
            <span class="cs-3"><img src="{{asset('images/fontent')}}/shapes/Leaf4.png" alt="" /></span>
            <span class="cs-4"><img src="{{asset('images/fontent')}}/img/3.png" alt="" /></span>
            <span class="cs-5"><img src="{{asset('images/fontent')}}/shapes/tomato.png" alt="" /></span>
            <span class="cs-6"><img src="{{asset('images/fontent')}}/shapes/onions.png" alt="" /></span>
            <span class="cs-7"><img src="{{asset('images/fontent')}}/shapes/Leaf2.png" alt="" /></span>
            <span class="cs-8"><img src="{{asset('images/fontent')}}/shapes/Leaf3.png" alt="" /></span>
            <img src="{{asset('images/fontent')}}/img/21.png" alt="" />
        </div>
        </div>
        <div class="col-lg-5 offset-lg-1 col-md-12 col-sm-12 col-12">
        <div class="countdown-right">
            <div class="common-title-area padding-bottom-20">
            <h3>coming soon</h3>
            <h2>Spicy Chicken Pizza <span>Food </span></h2>
            <p>feel hunger! order your favourite food.</p>
            </div>
            <div class="count-box countdown">
            <div>
                <span class="days">00</span>
                <p class="days_ref">days</p>
            </div>
            <span class="seperator">:</span>
            <div>
                <span class="hours">00</span>
                <p class="hours_ref">hour</p>
            </div>
            <span class="seperator">:</span>
            <div>
                <span class="minutes">00</span>
                <p class="minutes_ref">minutes</p>
            </div>
            <span class="seperator">:</span>
            <div>
                <span class="seconds">00</span>
                <p class="seconds_ref">seconds</p>
            </div>
            </div>
            <a href="shopping-cart.html" class="btn">order now</a>
        </div>
        </div>
    </div>
    </div>
</section>

<!-- testimonial -->
<section class="testimonial padding-bottom-120 padding-top-110">
    <div class="container">
      <div class="testi-shapes">
        <span class="ts-1"><img src="{{asset('images/fontent')}}/img/31.png" alt="" /></span>
        <span class="ts-2"><img src="{{asset('images/fontent')}}/img/32.png" alt="" /></span>
        <span class="ts-3 item-animateTwo"><img src="{{asset('images/fontent')}}/shapes/7.png" alt="" /></span>
        <span class="ts-4"><img src="{{asset('images/fontent')}}/shapes/26.png" alt="" /></span>
      </div>
      <div class="common-title-area text-center padding-bottom-50 wow fadeInUp">
        <h3>testimonial</h3>
        <h2>client <span>feedback</span></h2>
      </div>
      <div class="testimonial-active">
        <div class="single-testimonial">
          <div class="testi-top">
            <div class="tin-shapes">
              <span class="tsin-1"><img src="{{asset('images/fontent')}}/shapes/33.png" alt="" /></span>
            </div>
            <div class="testi-img">
              <img src="{{asset('images/fontent')}}/testimonial/testi-1.png" alt="" />
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
          <p>
            Food Khan is a gret Restaurant from the University of Texas at
            Austin has been researching the benefits of frequent testing and
            the feedback leads to. He explains that in the history of the
            study.
          </p>
        </div>
        <div class="single-testimonial">
          <div class="testi-top">
            <div class="tin-shapes">
              <span class="tsin-1"><img src="{{asset('images/fontent')}}/shapes/33.png" alt="" /></span>
            </div>
            <div class="testi-img">
              <img src="{{asset('images/fontent')}}/testimonial/testi-2.png" alt="" />
            </div>
            <div class="testi-meta">
              <h6>Lipayka Maya</h6>
              <p>CEO SoftTechit Ltd.</p>
              <div class="testi-rating">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
              </div>
            </div>
          </div>
          <p>
            Food Khan is a gret Restaurant from the University of Texas at
            Austin has been researching the benefits of frequent testing and
            the feedback leads to. He explains that in the history of the
            study.
          </p>
        </div>
        <div class="single-testimonial">
          <div class="testi-top">
            <div class="tin-shapes">
              <span class="tsin-1"><img src="{{asset('images/fontent')}}/shapes/33.png" alt="" /></span>
            </div>
            <div class="testi-img">
              <img src="{{asset('images/fontent')}}/testimonial/testi-1.png" alt="" />
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
          <p>
            Food Khan is a gret Restaurant from the University of Texas at
            Austin has been researching the benefits of frequent testing and
            the feedback leads to. He explains that in the history of the
            study.
          </p>
        </div>
        <div class="single-testimonial">
          <div class="testi-top">
            <div class="tin-shapes">
              <span class="tsin-1"><img src="{{asset('images/fontent')}}/shapes/33.png" alt="" /></span>
            </div>
            <div class="testi-img">
              <img src="{{asset('images/fontent')}}/testimonial/testi-2.png" alt="" />
            </div>
            <div class="testi-meta">
              <h6>Lipayka Maya</h6>
              <p>CEO SoftTechit Ltd.</p>
              <div class="testi-rating">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
              </div>
            </div>
          </div>
          <p>
            Food Khan is a gret Restaurant from the University of Texas at
            Austin has been researching the benefits of frequent testing and
            the feedback leads to. He explains that in the history of the
            study.
          </p>
        </div>
        <div class="single-testimonial">
          <div class="testi-top">
            <div class="tin-shapes">
              <span class="tsin-1"><img src="{{asset('images/fontent')}}/shapes/33.png" alt="" /></span>
            </div>
            <div class="testi-img">
              <img src="{{asset('images/fontent')}}/testimonial/testi-1.png" alt="" />
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
          <p>
            Food Khan is a gret Restaurant from the University of Texas at
            Austin has been researching the benefits of frequent testing and
            the feedback leads to. He explains that in the history of the
            study.
          </p>
        </div>
        <div class="single-testimonial">
          <div class="testi-top">
            <div class="tin-shapes">
              <span class="tsin-1"><img src="{{asset('images/fontent')}}/shapes/33.png" alt="" /></span>
            </div>
            <div class="testi-img">
              <img src="{{asset('images/fontent')}}/testimonial/testi-2.png" alt="" />
            </div>
            <div class="testi-meta">
              <h6>Lipayka Maya</h6>
              <p>CEO SoftTechit Ltd.</p>
              <div class="testi-rating">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
              </div>
            </div>
          </div>
          <p>
            Food Khan is a gret Restaurant from the University of Texas at
            Austin has been researching the benefits of frequent testing and
            the feedback leads to. He explains that in the history of the
            study.
          </p>
        </div>
      </div>
    </div>
</section>
  <!-- slider-gallery-img -->
  <div class="slider-gallery-img">
    <div class="container-fluid">
      <div class="slider-gallery-active">
        <div class="single-gallery-img">
          <img src="{{asset('images/fontent')}}/gallery/gm1.jpg" alt="" />
          <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
        </div>
        <div class="single-gallery-img">
          <img src="{{asset('images/fontent')}}/gallery/gm2.jpg" alt="" />
          <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
        </div>
        <div class="single-gallery-img">
          <img src="{{asset('images/fontent')}}/gallery/gm3.jpg" alt="" />
          <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
        </div>
        <div class="single-gallery-img">
          <img src="{{asset('images/fontent')}}/gallery/gm4.jpg" alt="" />
          <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
        </div>
        <div class="single-gallery-img">
          <img src="{{asset('images/fontent')}}/gallery/gm5.jpg" alt="" />
          <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
        </div>
        <div class="single-gallery-img">
          <img src="{{asset('images/fontent')}}/gallery/gm6.jpg" alt="" />
          <a href="gallery.html"><span><i class="fas fa-image"></i></span></a>
        </div>
      </div>
    </div>
  </div>

  <!-- delivery-area -->
  <section class="delivery-area padding-top-115 padding-bottom-90">
    <div class="del-shapes">
      <span class="ds-1 item-bounce"><img src="{{asset('images/fontent')}}/shapes/35.png" alt="" /></span>
      <span class="ds-2"><img src="{{asset('images/fontent')}}/shapes/34.png" alt="" /></span>
      <span class="ds-3 item-bounce"><img src="{{asset('images/fontent')}}/shapes/17.png" alt="" /></span>
      <span class="ds-4 item-animateOne"><img src="{{asset('images/fontent')}}/shapes/6.png" alt="" /></span>
    </div>
    <div class="container">
      <div class="row">
        <div class="
              col-lg-6
              align-self-lg-center
              col-md-12
              margin-bottom-20
              wow
              fadeInLeft
            ">
          <div class="delivery-left">
            <img src="{{asset('images/fontent')}}/bg/delivery-img.png" alt="" />
          </div>
        </div>
        <div class="col-lg-6 col-md-12 wow fadeInRight">
          <div class="delivery-right">
            <div class="common-title-area padding-bottom-40">
              <h3>delivery</h3>
              <h2>
                A Moments of Delivered <span> On Right Time & Place </span>
              </h2>
              <p>
                Food Khan is a restaurant, bar and coffee roastery located on
                a busy corner site in Farringdon's Exmouth Market. With glazed
                frontage on two sides of the building, overlooking the market
                and a bustling London inteon.
              </p>
              <div class="order-box d-flex align-items-end">
                <span class="order-img"><img src="{{asset('images/fontent')}}/icons/1.png" alt="" /></span>
                <div class="order-content">
                  <p>delivery order num.</p>
                  <span>123-59794069</span>
                </div>
                <a href="shopping-cart.html" class="btn">order now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- blog-area -->
  <section class="blog-area padding-top-110 padding-bottom-120">
    <div class="blog-shapes">
      <span class="bs-1"><img src="{{asset('images/fontent')}}/img/37.png" alt="" /></span>
    </div>
    <div class="container">
      <div class="common-title-area text-center padding-bottom-60 wow fadeInUp">
        <h3>food khan</h3>
        <h2>blog & <span> news </span></h2>
      </div>
      <div class="blog-slider-active">
        <div class="single-blog">
          <div class="blog-img">
            <a href="blog-single.html">
              <img src="{{asset('images/fontent')}}/blog/b-1.jpg" alt="" /></a>
            <div class="b-badge">
              <span class="date"><a href="#">02</a></span><br />
              <span class="month"><a href="#">dec</a></span>
            </div>
          </div>
          <div class="blog-meta d-flex justify-content-between">
            <span><a href="#"><i class="fas fa-tags"></i> chicken burger</a></span>
            <span><a href="#"><i class="fas fa-user-circle"></i> milone hridoy</a></span>
          </div>
          <h4>
            <a href="blog-single.html">Game day Burger with Homemade</a>
          </h4>
        </div>
        <div class="single-blog">
          <div class="blog-img">
            <a href="blog-single.html">
              <img src="{{asset('images/fontent')}}/blog/b-2.jpg" alt="" /></a>
            <div class="b-badge">
              <span class="date"><a href="#">02</a></span><br />
              <span class="month"><a href="#">dec</a></span>
            </div>
          </div>
          <div class="blog-meta d-flex justify-content-between">
            <span><a href="#"><i class="fas fa-tags"></i> pizza</a></span>
            <span><a href="#"><i class="fas fa-user-circle"></i> milone hridoy</a></span>
          </div>
          <h4>
            <a href="blog-single.html">Delicious pizza with on a wooden</a>
          </h4>
        </div>
        <div class="single-blog">
          <div class="blog-img">
            <a href="blog-single.html">
              <img src="{{asset('images/fontent')}}/blog/b-3.jpg" alt="" /></a>
            <div class="b-badge">
              <span class="date"><a href="#">02</a></span><br />
              <span class="month"><a href="#">dec</a></span>
            </div>
          </div>
          <div class="blog-meta d-flex justify-content-between">
            <span><a href="#"><i class="fas fa-tags"></i> chicken burger</a></span>
            <span><a href="#"><i class="fas fa-user-circle"></i> milone hridoy</a></span>
          </div>
          <h4>
            <a href="blog-single.html">Game day Burger with Homemade</a>
          </h4>
        </div>
        <div class="single-blog">
          <div class="blog-img">
            <a href="blog-single.html">
              <img src="{{asset('images/fontent')}}/blog/b-1.jpg" alt="" /></a>
            <div class="b-badge">
              <span class="date"><a href="#">02</a></span><br />
              <span class="month"><a href="#">dec</a></span>
            </div>
          </div>
          <div class="blog-meta d-flex justify-content-between">
            <span><a href="#"><i class="fas fa-tags"></i> chicken burger</a></span>
            <span><a href="#"><i class="fas fa-user-circle"></i> milone hridoy</a></span>
          </div>
          <h4>
            <a href="blog-single.html">Game day Burger with Homemade</a>
          </h4>
        </div>
        <div class="single-blog">
          <div class="blog-img">
            <a href="blog-single.html">
              <img src="{{asset('images/fontent')}}/blog/b-2.jpg" alt="" /></a>
            <div class="b-badge">
              <span class="date"><a href="#">02</a></span><br />
              <span class="month"><a href="#">dec</a></span>
            </div>
          </div>
          <div class="blog-meta d-flex justify-content-between">
            <span><a href="#"><i class="fas fa-tags"></i> pizza</a></span>
            <span><a href="#"><i class="fas fa-user-circle"></i> milone hridoy</a></span>
          </div>
          <h4>
            <a href="blog-single.html">Delicious pizza with on a wooden</a>
          </h4>
        </div>
        <div class="single-blog">
          <div class="blog-img">
            <a href="blog-single.html">
              <img src="{{asset('images/fontent')}}/blog/b-3.jpg" alt="" /></a>
            <div class="b-badge">
              <span class="date"><a href="#">02</a></span><br />
              <span class="month"><a href="#">dec</a></span>
            </div>
          </div>
          <div class="blog-meta d-flex justify-content-between">
            <span><a href="#"><i class="fas fa-tags"></i> chicken burger</a></span>
            <span><a href="#"><i class="fas fa-user-circle"></i> milone hridoy</a></span>
          </div>
          <h4>
            <a href="blog-single.html">Game day Burger with Homemade</a>
          </h4>
        </div>
      </div>
    </div>
  </section> --}}


@endsection
