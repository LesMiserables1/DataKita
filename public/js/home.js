 // owlCarousel activator and customization
 $('.info-carousel').owlCarousel({
    loop: true,
    margin: 10,
    animateOut: 'rollOut',
    animateIn: 'jackInTheBox',
    nav: true,
    navText: [
        "<i class='fa fa-long-arrow-alt-left'></i>",
        "<i class='fa fa-long-arrow-alt-right'></i>"
    ],
    autoplay: false,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        576: {
            items: 2
        },
        768: {
            items: 3
        },
        992: {
            items: 4
        }
    }
});

$('.category-carousel').owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    navText: [
        "<i class='fa fa-long-arrow-alt-left'></i>",
        "<i class='fa fa-long-arrow-alt-right'></i>"
    ],
    autoplay: false,
    responsive: {
        0: {
            items: 1
        }
    }
});

// toggle hamburger
$(document).ready(function(){
    $('#nav-mhweb-hamburger').click(function(){
        $(this).toggleClass('open');
        $('.home-nav').toggleClass('navbar-bg');
    });
});

var prevScrollpos = window.pageYOffset;
    $(window).on("scroll", function(){
        if($(window).scrollTop() > $(window).height()*0.25){
            $('.home-nav').css('background', 'rgba(27, 27, 27, 0.83)');
        }
        else{
            $('.home-nav').css('background', 'transparent');
        }

        var currentScrollPos = window.pageYOffset;
        if($(window).scrollTop() > $(window).height()){
            if(prevScrollpos > currentScrollPos){
                $('.home-nav').css('opacity', '1');
            } else{
                $('.home-nav').css('opacity', '0');
            }
            prevScrollpos = currentScrollPos;
        }
    });