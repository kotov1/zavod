// Video at main page
$(document).on('click', '.videoPoster', function(e) {
	e.preventDefault();
	var poster = $(this);
	var wrapper = poster.closest('.video');
	videoPlay(wrapper);
});
function videoPlay(wrapper) {
	var iframe = wrapper.find('.relation-video');
	var src = iframe.data('src') + "&autoplay=1";
	wrapper.addClass('video--active');
	iframe.attr('src',src);
}