<?php
/**
 * The default template for displaying single entry
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage horseclub2
 * @since horseclub2 0.1
 */
get_header();
if(have_posts()):
	the_post();
?>
		<!-- CONTENT -->
		<div id="lead" role="main">
			<br><?php dimox_breadcrumbs();?><br>
			<div class="wlead">
				<?php the_content();?>
			</div>
		</div>
		<!-- /CONTENT -->
<?php
else:
	get_template_part('content','none');
endif;
get_footer();
?>