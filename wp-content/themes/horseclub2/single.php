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
			<!-- ENTRY #<?php the_ID();?> -->
			<div id="entry-<?php the_ID();?>" class="blog_entry">
<?php if(is_single()):?>
				<h1><?php the_title();?></h1>
<?php else:?>
				<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
<?php endif;?>
<?php if(has_post_thumbnail() and !post_password_required() and !is_attachment()):?>
				<a href="<?php the_permalink();?>" class="image">
					<?php the_post_thumbnail();?>
				</a>
<?php endif;?>
				<div class="fl entry_date">
					<?php echo esc_html(get_the_date());?>
				</div>
				<div class="fl entry_content wlead">
					<?php the_content();?>
				</div>
				<div class="cl"></div>
				<div id="entry_share"></div>
				<div id="entry_comments">
					<?php
					if(comments_open() or get_comments_number())
						comments_template();
					?>
				</div>
			</div>
			<!-- /ENTRY#<?php the_ID();?> -->
		</div>
		<!-- /CONTENT -->
<?php
else:
	get_template_part('content','none');#get_template_part('404');
endif;
get_footer();
?>