jQuery(function(f){
	var element = f('.left-menu');
	f(window).scroll(function(){
		element['fade'+ (f(this).scrollTop() > 540 ? 'In': 'Out')](350);
	});
});