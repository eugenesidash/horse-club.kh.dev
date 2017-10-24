<div class="row">
	<div class="col-lg-1"></div>
	<div class="col-lg-11">
		<div class="header-screen header-screen-page header-page-top">
			<h1><?php single_post_title(); ?></h1>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-2 col-md-2 col-sm-2"></div>
	<div class="col-lg-10 col-md-10 col-sm-8">
		<div class="head-2 head-page-2">
			<!-- <p>О нас</p> -->
			<div class="hr hr-2 hr-page-2" id="hr-223-page">
				<hr>
			</div>
		</div>
	</div>
</div>
<div class="row contetnt-page-padd-left">
	<div class="col-lg-2"></div>
	<div class="col-lg-7 col-md-9 col-sm-9">
		<div class="text-content text-page-content text-page-top">
			<?php the_post(); ?>
			<?php the_content(); ?>
		</div>
	</div>
	<!-- <div class="col-lg-3 col-md-3"></div> -->
</div>