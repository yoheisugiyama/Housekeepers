
$('body').append("<div id='glayLayer'></div>");

$(document).ready(function() {

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({

        googleCalendarApiKey: 'AIzaSyDuLapAUV9qq9eK2YOXVGQDzexx6-KplSM',
        events: {
            googleCalendarId: 'yoheisugiyamameister@gmail.com'
        },

        // put your options and callbacks here
        editable: true, //trueでスケジュールを編集可能にする

//ヘッダーの書式
        columnFormat: {
            month: 'ddd', // 月
            week: 'D[(]ddd[)]', // 7(月)
            day: 'D[(]ddd[)]' // 7(月)

        },
// タイトルの書式
        titleFormat: {
            month: 'YYYY年 M月', // 2014年9月
            week: 'YYYY年 M月 D日',
            day: 'YYYY年 M月 D日[(]ddd[)]', // 2014年9月7日(火)
        },
//more表示の書式
        dayPopoverFormat:'YYYY年 M月 D日[(]ddd[)]',
// 月名称
        monthNames: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
// 月略称
        monthNamesShort: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
// 曜日名称
        dayNames: ['日曜日', '月曜日', '火曜日', '水曜日', '木曜日', '金曜日', '土曜日'],
// 曜日略称
        dayNamesShort: ['日', '月', '火', '水', '木', '金', '土'],
// スロットの時間の書式
        axisFormat: 'H:mm',
// 時間の書式
        timeFormat: 'H:mm',
// ボタン文字列
        buttonText: {
            prev: '前',
            next: '次',
            prevYear: '前年',
            nextYear: '翌年',
            today: '今日',
            month: '月',
            week: '週',
            day: '日'
        }

    })

});


$('.register').click(function(){

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


$('.owner_register').click(function(){

    $("#overLayer").fadeOut();

    $("#ownerLayer").fadeIn().css({
        "margin-top": "-" + $("#ownerLayer").height() / 2 + "px",
        "margin-left": "-" + $("#ownerLayer").width() / 2 + "px"
    });


});



$("#glayLayer").click(function(){
    $(this).hide();
    $("#overLayer").hide();
    $("#ownerLayer").hide();
});




$(function(){
    $("ul.panel li:not("+$("ul.tab li a.selected").attr("href")+")").hide()
    $("ul.tab li a").click(function(){
        $("ul.tab li a.selected").removeClass("selected");
        $(this).addClass("selected");
        $("ul.panel li").hide();
        $($(this).attr("href")).show();
        return false;
    });
});


$(function(){

    $("ul.nav-right_2").hover(function(){
            $("ul.custom_dropdown:not(:animated)").show();
        },
        function(){
            $("ul.custom_dropdown:not(:animated)").hide();
        });

});

$(function() {
    $( '#leanModal').leanModal({
        top: 50,                     // モーダルウィンドウの縦位置を指定
        overlay : 0.5,               // 背面の透明度
        closeButton: ".modal_close"  // 閉じるボタンのCSS classを指定
    });
});










