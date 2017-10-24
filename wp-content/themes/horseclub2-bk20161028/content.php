<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage horseclub2
 * @since horseclub2 0.1
 */
?>
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
				<div class="fl entry_content">
					<?php the_excerpt();?>
				</div>
				<div class="cl"></div>
			</div>
			<!-- /ENTRY#<?php the_ID();?> -->
