var count_elements_gal_resp = 15,
current_element_gal_resp = 0,
width_gal_resp = 300,
height_gal_resp = 440,
duration_gal_resp = 500;

var screen_gal_resp = jQuery('#screen-gal_resp');

function move_screen_gal_resp (x) {
	current_element_gal_resp = (current_element_gal_resp + x) % count_elements_gal_resp;
	if (current_element_gal_resp < 0) {current_element_gal_resp += count_elements_gal_resp;}
	screen_gal_resp.animate({
		marginLeft: - width_gal_resp * current_element_gal_resp
	}, duration_gal_resp);
}
jQuery("#prev-gal_resp").click(function () {
	move_screen_gal_resp(-1);
})
jQuery("#next-gal_resp").click(function () {
	move_screen_gal_resp(1);
})