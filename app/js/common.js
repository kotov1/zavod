
/* My scripts */

$(function() {

	
	
	// закрывание карты сайта в меню при наведении на одну и ссылок меню во избежание наложения
	$('.main-menu__link').mouseenter(function(){
		$('.sitemap-btn').removeClass('on');
	});
	
	// закрывание карты сайта в меню по клику за ее пределами
	$(document).mouseup(function (e){
		var div = $(".sitemap");
		var toggleBtn = $(".sitemap-btn");
		if ( (!div.is(e.target) && div.has(e.target).length === 0 && !toggleBtn.is(e.target)  && toggleBtn.has(e.target).length === 0) ) {
			$('.sitemap-btn').removeClass('on');
		}
	});
	
	// открывание и закрытие карты сайта в меню по клику на кнопку-"гамбургер"
	$('.sitemap-btn').click(function(){
		$(this).toggleClass('on');
	});


	// фиксирование линии навигации при прокрутке страницы на дексктопе
	$(document).ready(function() {
		var navHeight = $('.desktop-nav').height();
		$(window).bind('scroll', function() {
		  if( $(window).scrollTop() > $('.top-line').height() && $(window).width() > 767 ){
			$('.desktop-nav').addClass('fixed');
			$('.content').css('padding-top', navHeight + 'px');
		  }else {
			$('.desktop-nav').removeClass('fixed');
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


	$('.header-btn').click(function() {
		$('.header').addClass('mob-menu');
	});
	$('.mobile-nav__close').click(function() {
		$('.header').removeClass('mob-menu');
	});

	$('.sitemap__links-title').click(function() {
		if ( $(this).hasClass('opened') ) {
			$(this).removeClass('opened');
			$(this).next().slideUp();
		}
		else {
			$('.sitemap__links').slideUp();
			$('.sitemap__links-title').removeClass('opened');
			$(this).addClass('opened');
			$(this).next().slideDown();
			return false;
		}
	});













});