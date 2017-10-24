<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage horseclub2
 * @since horseclub2 0.1
 */

if(post_password_required())
	return;
?>
	<!-- comments -->
		<div id="post_comment">
			<?php if(get_comments_number()):?>
			<h3>Комментарии <span>(<?php echo get_comments_number();?>)</span></h3>
			<?php else:?>
			<h3>Без комментариев</h3>
			<?php endif;?>
			<?php if(comments_open()):?>
			<div id="comment_form">
				<?php
					comment_form(array(
						'title_reply' => '',
						/*'class_submit' => '',*/
						'label_submit' => '&raquo;',
						'comment_field' => '<textarea name="comment" rows="1" scroll="no"></textarea>',
						'fields' => array(
							'author' => '<div class="label">Ваше имя:</div><input type="text" name="username" ><br />',
							'email' => '<div class="label">E-mail:</div><input type="text" name="email" ><br />'
						)
					));
				?>
			</div>
			<?php endif;?>
			<?php if(get_comments_number()):?>
			<div id="comments_list">
				<?php
				wp_list_comments(array(
					'style'       => 'div',
					'short_ping'  => true,
					'avatar_size' => 48
				));
				?>
			</div>
			<?php endif;?>
		</div>
	<!-- /comments -->