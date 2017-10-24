var count_elements_gal = 15,
current_element_gal = 0,
width_gal = 500,
height_gal = 440,
duration_gal = 500;

var screen_gal = jQuery('#screen-gal');

function move_screen_gal (x) {
	current_element_gal = (current_element_gal + x) % count_elements_gal;
	if (current_element_gal < 0) {current_element_gal += count_elements_gal;}
	screen_gal.animate({
		marginLeft: - width_gal * current_element_gal
	}, duration_gal);
}
jQuery("#prev-gal").click(function () {
	move_screen_gal(-1);
})
jQuery("#next-gal").click(function () {
	move_screen_gal(1);
})