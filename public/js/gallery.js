$('.gallery').owlCarousel({
    loop: true,
    margin: 10,
    smartSpeed: 1100,
    dots: false,
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

$('.carousel-modal').owlCarousel({
    loop: true,
    margin: 10,
    smartSpeed: 1100,
    dots: true,
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

var prevScrollpos = window.pageYOffset;
$(window).on("scroll", function () {
    if ($(window).scrollTop() > $(window).height() * 0.25) {
        $('nav').css('box-shadow', '0 1px 30px 12px rgba(33, 37, 41, 0.3)')
    }
    else {
        $('nav').css('box-shadow', '0 1px 30px 12px rgba(33, 37, 41, 0)')
    }
    //to hide navbar after user scrolling down 100vw-50px from top and redisplay it when user scrolls up
    var currentScrollPos = window.pageYOffset;
    if ($(window).scrollTop() > $(window).height() - 400) {
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("navbar").style.opacity = "1";
        } else {
            document.getElementById("navbar").style.opacity = "0";
        }
        prevScrollpos = currentScrollPos;
    }
});

$(document).ready(function () {
    $('#nav-mhweb-hamburger').click(function () {
        $(this).toggleClass('open');
    });
    $('#photo-gallery').css('display', 'block');
});

$('input[type=radio]').click(function () {
    $('.area').hide(1000);
    $('#' + $(this).val()).show(1000);
});