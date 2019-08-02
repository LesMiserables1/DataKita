$(document).ready(function(){
    $('#photo-search').css('display','block');
});

$('input[type=radio]').click(function(){
    $('.area').hide(1000);
    $('#' + $(this).val()).show(1000); 
});