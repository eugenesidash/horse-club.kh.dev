<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage horseclub2
 * @since horseclub2 0.1
 */

get_header();
get_sidebar();
?>
	<div id="lead" role="main">
		<h1>Нет данных</h1>
		<p>Ссылка, по которой вы попали на эту страницу, является мертвой.</p>
		<p>Не хотите ли попробовать поискать что-нибудь?</p>
		<?php get_search_form();?>
		<div class="cl"></div>
	</div>
<?php get_footer();?>
