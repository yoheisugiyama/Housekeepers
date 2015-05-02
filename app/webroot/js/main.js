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



$('.btn-success').click(function(){
    $(this).hide();
})

$('.btn-primary').click(function(){
    $('.btn-success').show();
})


