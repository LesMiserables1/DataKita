$('#tags').tagsinput({
    maxTags: 8
});
//custom file input activator
$(document).ready(function () {
    bsCustomFileInput.init();
});

//controlling UI if the tags entered more than 8
var warn = document.getElementById("tags-warning");
$('#tags').on("change", function(){
    //var to be stored
    var len = $('#tags').val().split(',');
    console.log(len);
    if(len.length >= 8) warn.innerHTML = "You can't add more tags.";
    else warn.innerHTML = "";
});