<?php
/**
 * Search form template
 *
 * @package WordPress
 * @subpackage horseclub2
 * @since horseclub2 0.1
 */

?>
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<div id="search-inner">
		<input type="search" class="search-field"
			placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
			value="<?php echo get_search_query() ?>" name="s"
			title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
		<input type="submit" class="search-submit" value="" />
	</div>
</form>
