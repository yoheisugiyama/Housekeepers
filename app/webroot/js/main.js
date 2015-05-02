$(function() {

  
    $('h1').hide().fadeIn('slow');
  
});


$(document).ready(function(){
  $('.bxslider').bxSlider({
  mode: 'horizontal',
  captions: true,
  auto:true
    });
});


$("body").append("<div id='glayLayer'></div>");


$('.btn-success').click(function(){

    $("#glayLayer").show();

    return false;
})

$("#glayLayer").click(function(){
    $(this).hide();
});

