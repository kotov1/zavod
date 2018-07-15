
/* My scripts */

$(function() {

	// открывание карты сайта в меню по клику на кнопку-"гамбургер"
	$('.sitemap-btn').click(function(){
		$(this).toggleClass('on');
	});


	// закрывание карты сайта в меню при наведении на одну и ссылок меню во избежание наложения
	$('.main-menu__link').mouseenter(function(){
		$('.sitemap-btn').removeClass('on');
	});


	// фиксирование линии навигации при прокрутке страницы
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


	// инициализация слайдера с логотипами клиентов на главной странице
	$('.clients-slider').slick({
		infinite: true,
		autoplay: true,
		slidesToShow: 3,
		responsive: [
			{
			  breakpoint: 1199,
			  settings: {
				slidesToShow: 2
			  }
			},
			{
			  breakpoint: 767,
			  settings: {
				slidesToShow: 1
			  }
			}
		  ]
	});













});