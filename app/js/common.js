
/* My scripts */

$(function() {


	function bodyOverlay(val) {
		if(val) { $('.page').addClass('modal-active'); }
		else { $('.page').removeClass('modal-active'); }
	}
	
	
	// закрывание карты сайта в меню при наведении на одну и ссылок меню во избежание наложения
	$('.main-menu__link').mouseenter(function(){
		$('.sitemap-btn').removeClass('on');
		bodyOverlay(false);
	});
	
	// закрывание карты сайта в меню по клику за ее пределами
	$(document).mouseup(function (e){
		var div = $(".sitemap");
		var toggleBtn = $(".sitemap-btn");
		if ( (!div.is(e.target) && div.has(e.target).length === 0 && !toggleBtn.is(e.target)  && toggleBtn.has(e.target).length === 0) ) {
			$('.sitemap-btn').removeClass('on');
			if( $(window).width() > 767 ) bodyOverlay(false);
		}
	});
	
	// открывание и закрытие карты сайта в меню по клику на кнопку-"гамбургер"
	$('.sitemap-btn').click(function(){
		if( $(this).hasClass('on') ) {
			$(this).removeClass('on');
			bodyOverlay(false);
		} else {
			$(this).addClass('on');
			bodyOverlay(true);
		}
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
		bodyOverlay(true);
	});
	$('.mobile-nav__close, .overlay').click(function() {
		$('.header').removeClass('mob-menu');
		bodyOverlay(false);
	});

	// акордеон из ссылок на мобильных устройствах
	$('.sitemap__links-title .toggle-ic').click(function() {
		if ( $(window).width() < 767 ) {

			if ( $(this).hasClass('opened') ) {
				$(this).removeClass('opened');
				$(this).parent().next().slideUp();
			}
			else {
				$('.sitemap__links').slideUp();
				$('.sitemap__links-title .toggle-ic').removeClass('opened');
				$(this).addClass('opened');
				$(this).parent().next().slideDown();
				return false;
			}
		}
	});



	// modal call

	$('.modal-call').magnificPopup({
		items: {
			src: '#popupCallback',
			type: 'inline'
		}
	  });


	  $('.mob-modal-call').click(function() {
		$('.header').removeClass('mob-menu');
		$('.form-mobile-popup').show();
	  });

	  $(document).mouseup(function (e){
		if( $(window).width() < 768 ) {
			var div = $(".header");
			if ( (!div.is(e.target) && div.has(e.target).length === 0)) {
				$('.form-mobile-popup').hide();
				bodyOverlay(false);
			}
		}
	});




	  // тестовый вызов модального окна благодарности
	  $('.callbackForm form').submit(function(event ) {
		  
		$.magnificPopup.open({
			items: {
			  src: '#popupCallbackThanks'
			},
			type: 'inline'
		  });

		event.preventDefault();

	  });

	  $('.form-mobile-popup form').submit(function(event ) {
		  
		$.magnificPopup.open({
			items: {
			  src: '#popupCallbackThanks'
			},
			type: 'inline'
		  });

		event.preventDefault();

	  });


	/*PRODUCT CART BEGIN*/
	$('.productCart__buttonOrder').magnificPopup({
		type:'inline'
	  });
  
	  $('.productCart__buttonQuiz').magnificPopup({
		type:'inline',
		alignTop: true
	  });
  
	  /*PRODUCT CART END*/



		// preloader
		var hellopreloader = document.getElementById("preloader");
		function fadeOutnojquery(el){
			el.style.opacity = 1;
			var interhellopreloader = setInterval(function(){el.style.opacity = el.style.opacity - 0.05;
				if (el.style.opacity <=0.05){
					clearInterval(interhellopreloader);
					$(hellopreloader).addClass('hide');
				}
			},16);
		}
		window.onload = function(){setTimeout(function(){fadeOutnojquery(hellopreloader);},1000);};


});

