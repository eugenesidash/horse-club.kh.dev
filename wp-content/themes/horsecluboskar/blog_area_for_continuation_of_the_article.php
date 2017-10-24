<!-- Область для превью -->
<div class="screen-4 screen-4-blog-4">
	<div class="container">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<div class="header-screen header-screen-page">
					<h1>Блог</h1>
				</div>
			</div>
			<div class="col-sm-2"></div>
		</div>
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<div class="head-2 head-page-2">
					<p>Последние новости</p>
					<div class="hr hr-2 hr-page-2 hr-page-blog">
						<hr>
					</div>
				</div>
			</div>
			<div class="col-sm-2"></div>
		</div>
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<div class="text-content text-page-content">
					<article>
						<?php
						$temp = $wp_query;
						$wp_query= null;
						$wp_query = new WP_Query(); $wp_query->query('showposts=2' . '&paged='.$paged);
						while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						<div class="post-img-blog">
							<a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail() ?></a>
							<h3><a href="<?php the_permalink(); ?>" title="Читать дальше"><?php the_title(); ?></a></h3>
							<?php the_date('F j, Y', '<p class="date-post date-post-2">', '</p>'); ?>
							<div class="share42init-prev">
								<div class="share42init" data-url="<?php the_permalink() ?>" data-title="<?php the_title() ?>"></div>
							</div>
							<?php the_excerpt(); ?>
						</div>
					<?php endwhile; ?>
					<?php if ($paged > 1) { ?>
					<nav id="nav-posts">
						<div class="prev1"><?php wp_pagenavi(); ?></div>
					</nav>
					<?php } else { ?>
					<nav id="nav-posts">
						<div class="prev1"><?php wp_pagenavi(); ?></div>
					</nav>
					<?php } ?>
					<?php wp_reset_postdata(); ?>
				</article>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>
</div>
<!-- Область для продолжения превью -->
<div class="screen-4 area-2-4">
</div>