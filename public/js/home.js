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
        $(this).toggleClass('open');
    });

    //fullpage activator
    $('#fullpage').fullpage({
        scrollHorizontally: true,
        navigation: true,
        autoScrolling: true,
        scrollingSpeed: 1200,
        scrollOverflow: true,
        navigationPosition: 'left',
        navigationTooltips: ['Main Content', 'Events & Experiences', 'Infographics', 'Footer'],
        onLeave: function(origin, destination, direction){
            //change indicator color
            var destIndex = destination.index;
            if(destIndex >= 1){
                $('.fp-tooltip').addClass('blue-color');
                $('#fp-nav ul li a span').addClass('blue-background');

                if(destIndex != 3) $('#fp-nav').addClass('fp-nav-bottom');
                else $('#fp-nav').removeClass('fp-nav-bottom');
            }
            else{
                $('.fp-tooltip').removeClass('blue-color');
                $('#fp-nav ul li a span').removeClass('blue-background');
            }

            if(destIndex != 3) $('#fp-nav').addClass('fp-nav-bottom');
            else $('#fp-nav').removeClass('fp-nav-bottom');

            //change navbar opacity
            if(direction == "down") $('#navbar').css("opacity", "0");
            else $('#navbar').css("opacity", "1");
        },
        afterLoad: function(origin, destination, direction){
            var dest = destination.index;
            console.log(dest);
            if(dest == 0) $('#fp-nav').addClass('fp-nav-bottom');
        }
    });
    $.fn.fullpage.setAllowScrolling(true);

    $('.fp-prev').append("<i class='fa fa-long-arrow-alt-left fp-controlArrow'></i>");
    $('.fp-next').append("<i class='fa fa-long-arrow-alt-right fp-controlArrow'></i>");
});