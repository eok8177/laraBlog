$('.partners__carousel__items').owlCarousel({
        items:5,
        margin:20,
        nav:true,
        navText : ["<img src='../img/carousel__prev.png' height='32' width='21'/>","<img src='../img/carousel__next.png' height='32' width='21'/>"],
        dots:false,
        loop:true,
        responsive:{
             0:{
               margin: 0,
               items:1,
            },
            550:{
               margin: 20,
               items:2,
            },
            700:{
               items:3,
            },
            951:{
               items:4,
            },
            1200:{
               items:5,
            }
        }
    });

 $('.slider-review').owlCarousel({
        items:3,
        margin:30,
        nav:true,
        dots:false,
        loop:true,
        responsive:{
               0:{
               margin: 0,
               items:1,
            },
            550:{
               margin: 20,
               items:1,
            },
            700:{
               items:2,
            },
            951:{
               items:2,
            },
            1200:{
               items:3,
            }
        }
    })
    $('.slider-review__desc').scrollbar();