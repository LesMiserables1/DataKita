$('#tags').tagsinput({
    maxTags: 6
});
//custom file input activator
$(document).ready(function () {
    bsCustomFileInput.init();
});

//to activate tooltip
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
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