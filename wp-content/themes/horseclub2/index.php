<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage horseclub2
 * @since horseclub2 0.1
 */

get_header();
?>
		<!-- CONTENT -->
		<div id="lead" role="main">
<br><?php dimox_breadcrumbs();?><br>
<?php
$__have_posts = have_posts();
if(!$__have_posts)
	get_template_part('content','none');
#
while(have_posts()){
	the_post();
	get_template_part('content');
}
if($__have_posts)
	the_posts_pagination(array(
		'prev_text'          => '«',
		'next_text'          => '»',
		'before_page_number' => ''
	));
	#get_sidebar();
?>
		</div>
		<!-- /CONTENT -->
<?php
get_footer();
?>
