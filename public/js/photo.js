//wow.js activator
new WOW().init();

$('#tags').tagsinput({
    maxTags: 6
});
//custom file input activator
$(document).ready(function () {
    bsCustomFileInput.init();
    $('#nav-mhweb-hamburger').click(function(){
    $(this).toggleClass('open');
    });
});

//to activate tooltip
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});

//UI control on file input > 10
var warning = document.getElementById("upload-warning");
$("#uploadfile").on("change", function() {
    if ($("#uploadfile")[0].files.length > 10) {
        warning.innerHTML = "You can only upload up to 10 photos at once.";
        $('.custom-file').addClass("wrong");
        $('input[type="submit"]').attr("disabled", true);
    } else {
        warning.innerHTML = "";
        $('.custom-file').removeClass("wrong");
        $('input[type="submit"]').removeAttr("disabled");
    }
});

//controlling UI if the tags entered more than 6
var warn = document.getElementById("tags-warning");
$('#tags').on("change", function(){
    //var to be stored
    var len = $('#tags').val().split(',');
    console.log(len);
    if(len.length >= 6) warn.innerHTML = "You can't add more tags.";
    else warn.innerHTML = "";
});

var prevScrollpos = window.pageYOffset;
$(window).on("scroll", function(){
    if($(window).scrollTop() > $(window).height()*0.25){
        $('nav').css('box-shadow', '0 1px 30px 12px rgba(33, 37, 41, 0.3)')
    }
    else{
        $('nav').css('box-shadow', '0 1px 30px 12px rgba(33, 37, 41, 0)')
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