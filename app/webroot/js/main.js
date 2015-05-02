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


$('body').append("<div id='glayLayer'></div>");


$('.login:nth-child(2)').click(function(){

    $("#glayLayer").show();
    $("#overLayer").show().css({
        "margin-top":"-"+$("#overLayer").height()/2+"px" ,
        "margin-left":"-"+$("#overLayer").width()/2+"px"
    });


    return false;
});


$("#glayLayer").click(function(){
    $(this).hide();
    $("#overLayer").hide();
});

