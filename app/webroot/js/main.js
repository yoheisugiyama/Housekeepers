
$('body').append("<div id='glayLayer'></div>");

$(document).ready(function(){
    $('.bxslider').bxSlider();
});


$('.login .btn').click(function(){
    if($(this).hasClass("btn-success")){
        $("#group_id").val("1");

    }else{
        $("#group_id").val("2");

    }


    $("#glayLayer").fadeIn();
    $("#overLayer").fadeIn().css({
        "margin-top":"-"+$("#overLayer").height()/2+"px" ,
        "margin-left":"-"+$("#overLayer").width()/2+"px"
    });



});


$("#glayLayer").click(function(){
    $(this).hide();
    $("#overLayer").hide();
});


$(document).ready(function() {
    $('#fc1').fullCalendar({})
});






