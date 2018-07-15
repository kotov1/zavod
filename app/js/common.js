$(function() {

	
	$('.sitemap-btn').click(function(){
		$(this).toggleClass('on');
	});

	$('.main-menu__link').mouseenter(function(){
		$('.sitemap-btn').removeClass('on');
	});

	$(document).ready(function() {
		var navHeight = $('.nav').height();
		$(window).bind('scroll', function() {
		  if( $(window).scrollTop() > $('.top-line').height() ){
			$('.nav').addClass('fixed');
			$('.content').css('padding-top', navHeight + 'px');
		  }else{
			$('.nav').removeClass('fixed');
			$('.content').css('padding-top', '0px');
		  }
		});
	  });


});