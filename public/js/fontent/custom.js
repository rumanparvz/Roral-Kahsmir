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
            });


            var owl = $('#TopBanner')
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
                        items:1,
                        loop:true,
                        
                    }
                }
            });
            
  });
