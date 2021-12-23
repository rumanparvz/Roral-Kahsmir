$(document).ready(function() {

    $('.owl-carousel').owlCarousel({
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
                        items:2,
                        nav:true,
                        loop:true,
                        margin:5,
                    },
                    600:{
                        items:3,
                        nav:true,
                        loop:true,
                    },
                    1000:{
                        items:4,
                        loop:true,
                        
                    }
                }
            })




    // 'use strict';
  
    //   var owl = $('.owl-carousel'),
    //       item,
    //       itemsBgArray = [], // to store items background-image
    //       itemBGImg;
    
    //   owl.owlCarousel({  
    //       margin: 10,
    //       smartSpeed: 1000,
    //       autoplay: true,
    //       autoplayTimeout: 2000,
    //       autoplaySpeed: 1000,
    //       loop: true,
    //       nav: true,
    //       navText: false,
    //       responsiveClass:true,
    //           responsive:{
    //               0:{
    //                   items:2,
    //                   nav:true
    //               },
    //               600:{
    //                   items:2,
    //                   nav:false,
    //               },
    //               1000:{
    //                   items:4,
    //                   nav:true,
    //               }
    //           },
    //       onTranslated: function () {
    //           changeNavsThump();
    //       }
    //   });
    
    //   $('.active').addClass('anim');
    
    //   var owlItem = $('.owl-item'),
    //        owlLen = owlItem.length;
    //   // /* --------------------------------
    //   //   * store items bg images into array
    //   // --------------------------------- */
    //      $.each(owlItem, function( i, e ) {
    //      itemBGImg = $(e).find('.owl-item-bg').attr('src');
    //       itemsBgArray.push(itemBGImg);
    //   });
      /* --------------------------------------------
        * nav control thump
        * nav control icon
      --------------------------------------------- */
   
      
      
      /*-------------------------------------------
        Change control thump on each translate end
      ------------------------------------------- */
    //    function changeNavsThump() {
    //      var activeItemIndex = parseInt($('.owl-item.active').index()),
    //            // if active item is first item then set last item bg-image in .owl-prev-thump
    //   //         // else set previous item bg-image
    //   //         prevItemIndex = activeItemIndex != 0 ? activeItemIndex - 1 : owlLen - 1,
    //   //         // if active item is last item then set first item bg-image in .owl-next-thump
    //   //         // else set next item bg-image
    //   //         nextItemIndex = activeItemIndex != owlLen - 1 ? activeItemIndex + 1 : 0;
      
    //    }
    //    changeNavsThump();
  });


//   (function( $ ){
//     
//  })( jQuery );