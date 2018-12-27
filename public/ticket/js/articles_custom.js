$( "#arrowToggle" ).click(function() {
  $( ".centerBarToggle" ).slideToggle( "slow" );
});

$('.change-arrow-category').click(function(){
    if($(this).find('.arrow-category').hasClass("fa fa-angle-down")){
        $(this).find('.arrow-category').removeClass("fa fa-angle-down").addClass("fa fa-angle-up");
    }else{
        $(this).find('.arrow-category').removeClass("fa fa-angle-up").addClass("fa fa-angle-down");
    }
});

$('.change-arrow-topic').click(function(){
    if($(this).find('.arrow-topic').hasClass("fa fa-angle-down")){
        $(this).find('.arrow-topic').removeClass("fa fa-angle-down").addClass("fa fa-angle-up");
    }else{
        $(this).find('.arrow-topic').removeClass("fa fa-angle-up").addClass("fa fa-angle-down");
    }
});

$("#arrowbtntoggle").click(function(){ 
    $("#mobile_column_left").animate({width: "60vw", left: "0vw"});
    // $("body").css({"background-color":"rgba(0,0,0,0.4)", "opacity":"0.5"});
});

$(".closebtn").click(function(){ 
    $("#mobile_column_left").animate({left: "-70vw"}, 200);
    // $("body").css({"background-color":"rgba(0,0,0,0.4)", "opacity":"1"});
});

$(document).unbind('click');

$(window).resize(function() {
    if ($(document).width() > 800) {
        $("#mobile_column_left").css("display", "none");
    }else{
        $("#mobile_column_left").css("display", "block");
    }
});

if ($(document).height() > 1300) {
    if ($(document).width() > 800) {
        $(window).scroll(function() {
            var scrollTop = ($('#header').outerHeight(true) - 100);
            if($(window).scrollTop() > scrollTop)
            	if($(window).scrollTop() + $(window).height() < $(document).height() - $('#footer-widgets').height()) {
                	$('#column_left').css({'position':'fixed','top':(scrollTop+10)+'px', 'width':'auto'});
                }else{
                    var tambah = ($('#footer-widgets').outerHeight(true) + $(window).height());
                    var size = ($(document).height() - tambah);
                	$("#column_left").css({'position':'absolute', 'top': (size + 90) + 'px'});
                }
            else
                $('#column_left').css({'position':'absolute','top':'30px'});
        });
    }
}
if ($(document).height() > 1300) {
    $(window).scroll(function(){
        var scrollTop = ($('#header').outerHeight(true) - 100);
        if($(window).scrollTop() > scrollTop)
        	if($(window).scrollTop() + $(window).height() < $(document).height() - $('#footer-widgets').height()) {
            	$('.bs-docs-sidebar').css({'position':'fixed','top':(scrollTop+10)+'px', 'width': 'auto'});
            }else{
                var tambah = ($('#footer-widgets').outerHeight(true) + $(window).height())
                var size = ($(document).height() - tambah);
            	$(".bs-docs-sidebar").css({'position':'absolute', 'top': (size + 90) + 'px'});
            }
        else
            $('.bs-docs-sidebar').css({'position':'absolute','top':'30px', 'width':'auto'});
    });
}
 

$("body").attr({ "data-target": ".bs-docs-sidebar", "data-offset": 150 });

$(".btnTrigger").click(function(){
   $("#submitTriggered").click();
});

$('.main-navigation a[href*=\\#]:not([href=\\#]), .scrollDibawahNav').click(function() {
    if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
			$(".navbar-collapse.collapse.in").removeClass("in");
            $('html,body').animate({
                scrollTop: target.offset().top - 140
            }, 1000, function(){
              
            });
            return false;
        }
    }
});