$(document).ready(function() {
    $('.owl-products').owlCarousel({
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
            });

            $('.owl-banner').owlCarousel({
                loop:true,
                margin:0,
                autoplay:true,
                autoplayTimeout: 3500,
                autoplaySpeed: 2000,
                responsiveClass:true,
                autWidth: true,
                autoHeight:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true
                    },
                    600:{
                        items:1,
                        nav:false
                    },
                    1000:{
                        items:1,
                        nav:true,
                        loop:true,
                    }
                }
            })

           
            
  });

