$(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass:true,
				autoplay:true,
				autoplayTimeout:4000,
				autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:true
        },
        1000:{
            items:3,
            nav:true,
            loop:true
        }
    }
              });
              
            })