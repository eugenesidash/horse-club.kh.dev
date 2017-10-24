jQuery(document).ready(function ($) {
	$("#left-menu, #scroll-img, #butt-order, #map-2").on("click","a", function (event) {
		event.preventDefault();
		var id  = $(this).attr('href'),
		top = $(id).offset().top;
		$('body,html').animate({scrollTop: top}, 1500);
	});
});