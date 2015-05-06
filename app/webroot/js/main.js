

$('body').append("<div id='glayLayer'></div>");


$('.login:nth-child(2)').click(function(){

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





