{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
          <!-- Favicon Icon -->
        <link rel="shortcut icon" href="favicon.png" />
        <!-- Fonts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.x/dist/alpine.min.js" defer></script>
        <script src="{{asset('js/app.js')}}"></script>
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/fontent/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/fontent/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/fontent/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/fontent/font-awsome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/fontent/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/fontent/slick.css')}}">
        <link rel="stylesheet" href="{{asset('css/fontent/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{asset('css/fontent/style.css')}}">
        @livewireStyles
        </head>
        <body>

  <header>
    <!-- header-top -->
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="
                col-lg-12 col-md-12 col-12
                d-flex
                flex-wrap
                justify-content-between
              ">
            <div class="contact-box">
              <span>
                <a href="#"><i class="fas fa-phone-square-alt"></i> 123-58794069</a>
              </span>
              <span>
                <a href="#"><i class="fas fa-envelope-open-text"></i>
                  supportfoodkhan@.com</a></span>
            </div>
            <div class="social-box">
              <span><a href="#"><i class="fab fa-twitter"></i></a></span>
              <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
              <span><a href="#"><i class="fab fa-linkedin-in"></i></a></span>
              <span><a href="#"><i class="fab fa-instagram"></i></a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- header-bottom -->
    <div class="header-bottom margin-top-20">
      <div class="container position-relative">
        <div class="row d-flex align-items-center">
          <div class="col-lg-2 col-md-2 col-sm-2 col-3">
            <div class="logo">
              <a href="/">
                <img src="{{asset('images/fontent/logo/logo.png')}}" alt="logo" /></a>
            </div>
          </div>
          <div class="col-lg-6 d-none d-lg-block">
            <nav id="mobile-menu">
              <ul class="main-menu">
                <li><a href="/">home </a> </li>
                <li><a href="menu">menu</a></li>
                <li><a href="/reservation">Reservation</a></li>
                <li><a href="/about-us">about us</a></li>
                <li><a href="/contact-us">contact us</a></li>
              </ul>
            </nav>
          </div>
          <div class="col-lg-4 col-md-9 col-8">
            <div class="customer-area">
              {{-- <span>
                <a href="#"><i class="fas fa-heart"></i></a>
              </span> --}}
              <span>
                <a href="#"><i class="fas fa-user"></i></a>
              </span>
              <span>
                <a href="/shopping-cart"><i class="fas fa-shopping-basket"></i></a>
              </span>
              @auth
                  <a class="btn" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

              @endauth
              @guest

              <a href="/login" class="btn">login</a>

              @endguest
            </div>
          </div>
        </div>
        <!-- mobile-menu -->
        <div class="mobile-menu"></div>
      </div>
    </div>
  </header>

   @yield('content')
      <!-- footer area -->
      <footer class="padding-top-40 padding-bottom-40">
        <div class="fo-shapes">
          <span class="fs-1"><img src="{{asset('images/fontent')}}/gallery/26.png" alt="" /></span>
          <span class="fs-2 item-bounce"><img src="{{asset('images/fontent')}}/shapes/25.png" alt="" /></span>
          <span class="fs-3 item-bounce"><img src="{{asset('images/fontent')}}/shapes/26.png" alt="" /></span>
          <span class="fs-4 item-bounce"><img src="{{asset('images/fontent')}}/shapes/27.png" alt="" /></span>
          <span class="fs-5 item-animateTwo"><img src="{{asset('images/fontent')}}/shapes/3.png" alt="" /></span>
          <span class="fs-6"><img src="{{asset('images/fontent')}}/shapes/22.png" alt="" /></span>
          <span class="fs-7"><img src="{{asset('images/fontent')}}/shapes/30.png" alt="" /></span>
        </div>
        <div class="footer-top d-none d-md-block">
          <div class="container">
            <div class="
                  row
                  align-items-center
                  justify-content-between
                  padding-bottom-25
                ">
              <div class="col-lg-3 col-md-3">
                <div class="f-logo">
                  <a href="/">
                    <img src="{{asset('images/fontent')}}/logo/logo.png" alt="" /></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="f-title">
                  <h4>Feel Hunger! Order Your<span> Like Food.</span></h4>
                </div>
              </div>
              <div class="col-lg-2 col-md-3">
                <a href="shopping-cart.html" class="btn">order now</a>
              </div>
            </div>
            <hr />
          </div>
        </div>
        <div class="footer-bottom padding-top-22 padding-bottom-30">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-12 margin-bottom-20">
                <div class="widget">
                  <h6>address</h6>
                  <p>570 8th Ave,New York, NY 10018 United States</p>
                  <a href="#" class="f-link">view google map</a>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12 margin-bottom-20">
                <div class="widget">
                  <h6>book a table</h6>
                  <p>Dogfood och Sliders foodtruck. Under Om oss kan ni läsa</p>
                  <a href="#" class="f-link">make a call</a>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12 margin-bottom-20">
                <div class="widget">
                  <h6>opening hours</h6>
                  <p>
                    <span>monday-friday: 8am - 4pm</span> <br /><span>saturday: 9am - 5pm</span>
                  </p>

                  <a href="#" class="f-link">make a call</a>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12 margin-bottom-20">
                <div class="widget">
                  <h6>newsletter</h6>
                  <div class="newsletter d-flex">
                    <form action="#">
                      <input type="email" placeholder="enter your email" />
                      <button type="submit">
                        <i class="fas fa-paper-plane"></i>
                      </button>
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

        @livewireScripts
        <script src="{{asset('js/fontent/jquery-2.2.4.min.js')}}"></script>
        <script src="{{asset('js/fontent/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/fontent/jquery.meanmenu.min.js')}}"></script>
        <script src="{{asset('js/fontent/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/fontent/slick.min.js')}}"></script>
        <script src="{{ asset('js/fontent/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/fontent/owl.autoplay.js') }}"></script>
        <script src="{{asset('js/fontent/counterup.min.js')}}"></script>
        <script src="{{asset('js/fontent/countdown.js')}}"></script>
        <script src="{{asset('js/fontent/waypoints.min.js')}}"></script>
        <script src="{{asset('js/fontent/jquery-ui.js')}}"></script>
        <script src="{{asset('js/fontent/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('js/fontent/easing.min.js')}}"></script>
        <script src="{{asset('js/fontent/wow.min.js')}}"></script>
        <script src="{{asset('js/fontent/main.js')}}"></script>
        <script src="{{asset('js/fontent/custom.js')}}"></script>

        <script>
          $(document).ready(function(){
            var owl = $('#BannerSlider')
                  owl.owlCarousel({
                      loop:true,
                      margin:8,
                      autoplay:true,
                      responsiveClass:true,
                      autoplayTimeout: 2500,
                      autoplaySpeed: 1000,
                      dots:false,
                      autWidth:true,
                      responsive:{
                          0:{
                              items:1,
                              nav:true,
                              loop:true,
                             
                          },
                          600:{
                              items:1,
                              nav:true,
                              loop:true,
                          },
                          1000:{
                              items:6,
                              loop:true,
                              
                          }
                      }
                  });
          })
      </script>
    </body>
</html>

