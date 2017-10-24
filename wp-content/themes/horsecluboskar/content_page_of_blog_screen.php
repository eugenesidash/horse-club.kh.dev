<div class="row">
	<div class="col-lg-2"></div>
	<div class="col-lg-10">
		<div class="header-screen header-screen-page">
			<h1><?php single_post_title(); ?></h1>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-2 col-md-2 col-sm-2"></div>
	<div class="col-lg-10 col-md-10 col-sm-8">
		<div class="head-2 head-page-2">
			<p>Последние новости</p>
			<div class="hr hr-2 hr-page-2">
				<hr>
			</div>
		</div>
	</div>
</div>
<div class="row contetnt-page-padd-left">
	<div class="col-lg-2"></div>
	<div class="col-lg-7 col-md-9 col-sm-9">
		<div class="text-content text-page-content">
			<article>
				<?php
					$temp = $wp_query;
					$wp_query= null;
					$wp_query = new WP_Query(); $wp_query->query('showposts=2' . '&paged='.$paged);
					while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
					<div class="post-img-blog">
						<a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail() ?></a>
						<h3><a href="<?php the_permalink(); ?>" title="Читать дальше"><?php the_title(); ?></a>
						<br>
						<?php the_date('F j, Y', '<p class="date-post">', '</p>'); ?>
					<?php the_excerpt(); ?>
					</div>
					<?php endwhile; ?>
					<?php if ($paged > 1) { ?>
					<nav id="nav-posts">
						<div class="prev1"><?php next_posts_link('&laquo; Назад'); ?></div>
						<div class="next1"><?php previous_posts_link('Вперёд &raquo;'); ?></div>
					</nav>
					<?php } else { ?>
					<nav id="nav-posts">
						<div class="prev1"><?php next_posts_link('&laquo; Назад'); ?></div>
					</nav>
				<?php } ?>
				<?php wp_reset_postdata(); ?>
			</article>
		</div>
	</div>
	<!-- <div class="col-lg-3 col-md-3"></div> -->
</div>