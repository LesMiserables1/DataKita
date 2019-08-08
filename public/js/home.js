 // owlCarousel activator and customization
 $('.owl-carousel').owlCarousel({
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

// toggle hamburger
$(document).ready(function(){
    $('#nav-mhweb-hamburger').click(function(){
        $('#navbar').toggleClass('navbar-bg');
    });

    //fullpage activator
    $('#fullpage').fullpage({
        responsiveWidth: 2000,
        navigation: true,
        scrollBar: true,
        autoScrolling: true,
        scrollingSpeed: 1000,
        // scrollOverflow: true,
        navigationPosition: 'left',
        navigationTooltips: ['Main Category', 'Events & Experiences', 'Infographics', 'Footer'],
        onLeave: function(origin, destination, direction){
            //change indicator color
            var destIndex = destination.index;
            if(destIndex >= 1){
                $('.fp-tooltip').addClass('blue-color');
                $('#fp-nav ul li a span').addClass('blue-background');
                $('.home-nav').css('background', 'rgba(33, 37, 41, 0.9)');

                if(destIndex != 3) $('#fp-nav').addClass('fp-nav-bottom');
                else $('#fp-nav').removeClass('fp-nav-bottom');
            }
            else{
                $('.fp-tooltip').removeClass('blue-color');
                $('#fp-nav ul li a span').removeClass('blue-background');
                $('.home-nav').css('background', 'transparent');
            }

            if(destIndex != 3) $('#fp-nav').addClass('fp-nav-bottom');
            else $('#fp-nav').removeClass('fp-nav-bottom');
  
        },
        afterLoad: function(origin, destination, direction){
            var dest = destination.index;
            if(dest == 0) $('#fp-nav').addClass('fp-nav-bottom');
        }
    });
    $.fn.fullpage.setAllowScrolling(true);

    $('.fp-prev').append("<i class='fa fa-long-arrow-alt-left fp-controlArrow'></i>");
    $('.fp-next').append("<i class='fa fa-long-arrow-alt-right fp-controlArrow'></i>");
});