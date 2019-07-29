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
                    anchors: ['first', 'second', 'third', 'fourth', 'fifth', 'sixth'],
                    navigation: true,
                    autoScrolling: true,
                    scrollingSpeed: 900,
                    navigationPosition: 'left',
                    navigationTooltips: ['Agriculture & Mining', 'Social & Population', 'Economy & Trade', 'Events & Experiences', 'Infographics', 'Footer'],
                    onLeave: function(origin, destination, direction){
                        //change indicator color
                        var destIndex = destination.index;
                        if(destIndex >= 3){
                            $('.fp-tooltip').addClass('blue-color');
                            $('#fp-nav ul li a span').addClass('blue-background');
                        }
                        else{
                            $('.fp-tooltip').removeClass('blue-color');
                            $('#fp-nav ul li a span').removeClass('blue-background');
                        }

                        //change navbar opacity
                        if(direction == "down") $('#navbar').css("opacity", "0");
                        else $('#navbar').css("opacity", "1");
                    }
                });
                $.fn.fullpage.setAllowScrolling(true);
            });