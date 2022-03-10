$('.owl-carousel').owlCarousel({
    autoplay: true,
    autoplayHoverPause: true,
    items:4,
    nav: true,
    dots: true,
    loop: true,
    lazyLoad: true,
    margin:60,
    stagePadding:10,
    responsive: {
        0:{
            items:1,
            dots:false
        },
        485:{
            items:2,
            dots:false
        },
        728:{
            items:3,
            Loop:true
        },
        960:{
            items:3,
            loop:true
        },
        1200:{
            items:3,
            dots:false
        }
    }
});