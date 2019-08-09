$('.gallery').owlCarousel({
    loop: true,
    margin: 10,
    smartSpeed: 1100,
    dots: false,
    lazyLoad: true,
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
    lazyLoad: true,
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

$(document).ready(function(){
    $('#photo-gallery').css('display','block');
});

$('input[type=radio]').click(function(){
    $('.area').hide(1000);
    $('#' + $(this).val()).show(1000); 
});