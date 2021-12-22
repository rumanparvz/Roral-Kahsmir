
@extends('layouts.app')
@section('container')


<style>
    .img_pro img {
      height: 121px;
  }

  span.title_pro {
      color: #e3e3e3;
      float: left !important;
  }

  .wrap {
     /* height: 100%; */
     /*overflow: auto;*/
     /* padding: 1em 2.5em; */
     text-align: center;
     width: 100%;
     z-index: 10000;
     /* background: #04bd51; */
     display: block;
     font-weight: bold;
     border-radius: 16px;
     /* width: 25px; */
     position: relative;
     bottom: 2px;
     /* right: -18px; */
     left: 0%;
     /* text-align: center; */
     font-weight: bold;
     color: #fff;
     height: 25px;
  }




  /*== start of code for tooltips ==*/
  .tool {
      cursor: help;
      position: relative;
      /* bottom: 23px; */
      background: red;
      padding: 2px 9px;
      margin-left: 5px;
      border-radius: 10px;
  }


  /*== common styles for both parts of tool tip ==*/
  .tool::before,
  .tool::after {
      /* left: 100%; */
      opacity: 0;
      position: absolute;
      z-index: -100;
      /* right: 51%; */
      /* right: 100%; */
  }

  .tool:hover::before,
  .tool:focus::before,
  .tool:hover::after,
  .tool:focus::after {
      opacity: 1;
      transform: scale(1) translateY(0);
      z-index: 1000000;
  }


  /*== pointer tip ==*/
  .tool::before {
      /* border-style: solid; */
      /* border-width: 1em 0.75em 0 0.75em; */
      /* border-color: #3E474F transparent transparent transparent; */
      /* bottom: 100%; */
      /* content: ""; */
      /* margin-left: -0.5em; */
      /* transition: all .65s cubic-bezier(.84,-0.18,.31,1.26), opacity .65s .5s; */
      /* transform:  scale(.6) translateY(-90%); */
  }

  .tool:hover::before,
  .tool:focus::before {
      transition: all .65s cubic-bezier(.84,-0.18,.31,1.26) .2s;
  }


  /*== speech bubble ==*/
  .tool::after {
      background: #3E474F;
      border-radius: .25em;
      bottom: 151%;
      color: #EDEFF0;
      content: attr(data-tip);
      margin-left: -8.75em;
      padding: 2px;
      transition: all .65s cubic-bezier(.84,-0.18,.31,1.26) .2s;
      transform:  scale(.6) translateY(50%);
      width: 17.5em;
      z-index: 100000;
      /* left: 22%; */
      /* right: 100%; */
  }

  .tool:hover::after,
  .tool:focus::after  {
      transition: all .65s cubic-bezier(.84,-0.18,.31,1.26);
      left: -24px;
  }

  @media (max-width: 760px) {
    .tool::after {
          font-size: .75em;
          margin-left: -5em;
          width: 10em;
          right: 100%;
          /* top: 67%; */
    }
  }

  </style>
        <style>
      .cart-total-item {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding: 15px 100px;
    margin-top: -5px;
  }

  .Card-Style{
    border-radius: 25px 0px 25px 0px !important;
    }
    .header-Card{
        border-radius: 25px 0px 25px 0px !important;
        background-color:#CD0404 !important;
    }
    .Card-header-text{
        font-size: 23px;
        font-weight: bold;
    }
    .product-name p{
        color: #000000;
        font-weight: bold;
        font-size: 20px;
    }
  </style>


<section class="page-banner" style="background: #121619 url({{asset('images/fontent/blog-1.jpg')}}) no-repeat center / cover;">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="page-title">
                    <h1 class="page-headding">SHOPPING CART</h1>
                    <ul>
                        <li><a href="index.html" class="page-name">Home</a></li>
                        <li>SHOPPING CART</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="shopping-cart ptb">
    <div class="container">
                   <div wire:id="HSR52kPql7mEGhPF9fgX">
<div class="cart-item-table commun-table">
            <div class="table-responsive">
                {{-- <table class="table border mb-0">
                    <thead>
                        <tr>
                            <th class="align-left">Product</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Action/ 7</th>
                        </tr>
                    </thead>
                    <tbody>
                                                                    <tr>
                            <td class="align-left">
                                <a href="shop-detail.html">
                                    <div class="product-image">
                                        <img alt="Eshoper" src="asset/images/product/product--1632836286.png">
                                    </div>
                                    </a><div class="product-title"><a href="shop-detail.html">
                                    </a><a href="shop-detail.html">Poulet Tikka</a>
                                                                            </div>

                            </td>
                            <td>
                                                                                                <div class="quantity">
                                <a class="quantity__minus" wire:click="decreament(93)" disabled="">
                                    <span>-</span>
                                </a>
                                <input name="quantity" type="text" class="quantity__input" value="1">

                                <a class="quantity__plus" wire:click="increament(93)">
                                    <span>+</span>
                                </a>
                            </div>

                            </td>
                            <td>
                                <div class="total-price price-box">
                                                                               <span class="price">€7</span>


                                </div>
                            </td>
                            <td>
                                <a wire:click="removeCart(93)" class="btn small btn-color">
                                    <i title="Remove Item From Cart" data-id="100" class="fa fa-trash cart-remove-item" aria-hidden="true"></i><span class="sr-only">Remove Item From Cart</span>
                                </a>
                            </td>
                        </tr>
                                                                </tbody>
                </table> --}}

                <div class="card Card-Style">
                    <div class="card-header bg-primary text-center text-white header-Card">
                        <span class="Card-header-text">Cart Products</span>
                    </div>
                    <div class="card-body p-3">
                        <table class="w-100 table table-responsive-sm table-striped">
                            <tr class="text-dark">
                                <th>Picture</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Action</th>
                            </tr>

                            <tr>
                                <td>
                                    <div class="product-body">
                                        <a href="">
                                            <img class="product-image" src="{{ asset('images/fontent/product/product--1632836286.png') }}" alt="">
                                        </a>
                                    </div>
                                </td>

                                <td>
                                    <div class="product-name">
                                        <p>Briyani</p>
                                    </div>
                                </td>


                                <td>
                                    <div class="quantity">
                                        <a class="quantity__minus" wire:click="decreament(93)" disabled="">
                                            <span>-</span>
                                        </a>
                                        <input name="quantity" type="text" class="quantity__input" value="1">
        
                                        <a class="quantity__plus" wire:click="increament(93)">
                                            <span>+</span>
                                        </a>
                                    </div>
                                </td>

                                <td>
                                    <a wire:click="removeCart(93)" class="btn small btn-color">
                                        <i title="Remove Item From Cart" data-id="100" class="fa fa-trash cart-remove-item" aria-hidden="true"></i><span class="sr-only">Remove Item From Cart</span>
                                    </a>
                                </td>
                            </tr>




                            <tr>
                                <td>
                                    <div class="product-body">
                                        <a href="">
                                            <img class="product-image" src="{{ asset('images/fontent/product/product--1632836286.png') }}" alt="">
                                        </a>
                                    </div>
                                </td>

                                <td>
                                    <div class="product-name">
                                        <p>Briyani</p>
                                    </div>
                                </td>


                                <td>
                                    <div class="quantity">
                                        <a class="quantity__minus" wire:click="decreament(93)" disabled="">
                                            <span>-</span>
                                        </a>
                                        <input name="quantity" type="text" class="quantity__input" value="1">
        
                                        <a class="quantity__plus" wire:click="increament(93)">
                                            <span>+</span>
                                        </a>
                                    </div>
                                </td>

                                <td>
                                    <a wire:click="removeCart(93)" class="btn small btn-color">
                                        <i title="Remove Item From Cart" data-id="100" class="fa fa-trash cart-remove-item" aria-hidden="true"></i><span class="sr-only">Remove Item From Cart</span>
                                    </a>
                                </td>
                            </tr>

                        </table>
                        
                    </div>
                </div>

            </div>
        </div>
        <hr>
        <div class="mtb-30">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-6 pb-30 offset-lg-3 offset-md-2 mb-sm-20">
                    <div class="estimate">
                        <div class="heading-part mb-20 text-center">
                            <h3 class="sub-heading text-center-r">Estimate shipping and tax</h3>
                        </div>
<div class="row text-center">
                        <div class="col-md-12">
                            <div class="input-box mb-20">
                                <label class="cusLabel">Order Type</label>
                               <div class="cart-total-item">
                                <div class="cart-check-box">
                                    <input type="radio" class="form-control" wire:model="tempOrderType" name="ship1" id="checko32" value="takeway">
                                     <label id="left1" for="checko32">A Emporter
                                    </label>
                                </div>

                                <div class="cart-check-box">
                                    <input type="radio" class="form-control" wire:model="tempOrderType" name="ship1" id="checko322" value="order">
                                     <label id="left1" for="checko322"> En Livraison
                                    </label>
                                </div>
                                </div>
                            </div>
                        </div>


                        <!-- Deliver Details -->
                        <div class="col-md-12">
                          <div class="input-box mb-20">
                                <select wire:model.lazy="zip" name="customer_zip" class="form-control">
                                          <option value="1">--Code postal*--</option>
                                                                                             <option value="18">Nice 06000</option>
                                                                                         </select>
                                                              </div>
                          <div class="input-box mb-20">
                             <input type="text" wire:model="address" required="" placeholder="Num de la rue*" name="address" class="form-control">
                                                              </div>
                          <div class="input-box mb-20">
                              <input type="text" wire:model="customer_city" name="customer_city" class="form-control" required="" placeholder="Nom de la rue*">
                                                              </div>

                      </div>

                       <!-- Cart total -->
                       <div class="col-md-12">
                            <div class="cart-total-table commun-table mt-5">
                                <div class="table-responsive">
                                <table class="table border">
                                    <thead>
                                        <tr>
                                            <th colspan="2" class="text-center-r">Cart Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Item(s) Subtotal</td>
                                            <td>
                                                <div class="price-box">
                                                    <span class="price">€ 7</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Remise (15%)</td>
                                            <td>
                                                <div class="price-box">
                                                    <span class="price">€ 1.05</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Amount Payable</b></td>
                                            <td>
                                                <div class="price-box">
                                                    <span class="price"><b>€ 5.95</b></span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                                </div>
                            </div>
                            <!-- Cart total -->
                            <div class="col-12 mt-30">
                                <div class="right-side float-none-xs text-center-r float-none-sm">
                                    <a href="/checkout" class="btn btn-color">JE VALIDE MA COMMANDE
                                        <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                    </a>
                                </div>
                        </div>




                    </div>
                    </div>
                </div>

            </div>
        </div>

</div>
    </div>
</section>
@endsection

