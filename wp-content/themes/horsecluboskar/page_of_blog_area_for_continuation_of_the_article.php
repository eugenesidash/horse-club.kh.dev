<!-- Область для статьи -->
<div class="screen-4 screen-4-g">
	<div class="container">
		<div class="row row-xs-12-before">
			<div class="col-md-3 col-xs-2"></div>
			<div class="col-md-6 col-xs-8">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">
						<?php
						while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', get_post_type() );
						the_post_navigation();
							// If comments are open or we have at least one comment, load up the comment template.
						endwhile; 
						?>
					</main>
					<div class="share42init-all">
						<div class="share42init" data-url="<?php the_permalink() ?>" data-title="<?php the_title() ?>"></div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-xs-2"></div>
		</div>
		<div class="row row-xs-12-after">
			<div class="col-md-6 col-xs-12 xs-post-12">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">
						<?php
						while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', get_post_type() );
						the_post_navigation();
							// If comments are open or we have at least one comment, load up the comment template.
						endwhile; 
						?>
					</main>
					<div class="share42init-all">
						<div class="share42init" data-url="<?php the_permalink() ?>" data-title="<?php the_title() ?>"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- Область для продолжения статьи -->
<div class="screen-4 area-2-4">
</div>