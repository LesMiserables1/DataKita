var prevScrollpos = window.pageYOffset;
    $(window).on("scroll", function(){
        if($(window).scrollTop() > $(window).height()*0.25){
            $('nav').css('box-shadow', '0 1px 30px 12px rgba(33, 37, 41, 0.3)');
        }
        else{
            $('nav').css('box-shadow', '0 1px 30px 12px rgba(33, 37, 41, 0)');
        }
       
        //to hide navbar after user scrolling down 100vw-50px from top and redisplay it when user scrolls up
        var currentScrollPos = window.pageYOffset;
        if($(window).scrollTop() > $(window).height() - 400){
            if(prevScrollpos > currentScrollPos){
                document.getElementById("navbar").style.opacity = "1";
            } else{
                document.getElementById("navbar").style.opacity = "0";
            }
            prevScrollpos = currentScrollPos;
        }
    });

$(document).ready(function(){
    $('#nav-mhweb-hamburger').click(function(){
        $(this).toggleClass('open');
    });
});