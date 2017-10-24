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
			<div id="entry-<?php the_ID();?>" class="preview_entry">
<?php if(has_post_thumbnail() and !post_password_required() and !is_attachment()):?>
				<a href="<?php the_permalink();?>" class="image">
					<?php the_post_thumbnail();?>
				</a>
<?php
else: echo '<div class="preview_placeholder"></div>';
endif;
if(is_single()):
?>
				<h3><?php the_title();?></h3>
<?php else:?>
				<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
<?php endif;?>
				<div class="preview_content">
					<?php the_excerpt();?>
				</div>
				<div class="fl preview_date">
					<?php echo esc_html(get_the_date());?>
				</div>
				<div class="fl preview_more">
					<a href="<?php the_permalink();?>">Подробнее</a>
				</div>
				<div class="cl"></div>
			</div>
			<!-- /ENTRY#<?php the_ID();?> -->
