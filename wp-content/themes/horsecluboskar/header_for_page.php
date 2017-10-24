<!DOCTYPE html>
<html lang="ru" id="html">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo get_post_meta($post->ID, 'description', true); ?>">
	<link href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_directory') ?>/css/style.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_directory') ?>/css/media.css" rel="stylesheet" type="text/css">
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body>
	<!-- Шапка -->
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-1 col-md-1"></div>
				<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
					<div class="map" id="map-2">
						<img src="<?php bloginfo('template_directory') ?>/img/map.png" alt="Map">
						<a href="#li-6-anh-page"><p>Карта проезда</p></a>
					</div>
				</div>
				<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
					<div class="phones">
						<div class="kyiev">
							<img src="<?php bloginfo('template_directory') ?>/img/kyievstar.png" alt="Kuyievstar">
							<a href="tel:+380684077397"><p>(068) ‎‎40-77-397</p></a>
						</div>
						<div class="vodafon">
							<img src="<?php bloginfo('template_directory') ?>/img/vodafon.png" alt="Vodafon">
							<a href="tel:+380504077397"><p>(050) ‎‎40-77-397</p></a>
						</div>
						<div class="lifecell">
							<img src="<?php bloginfo('template_directory') ?>/img/lifecell.png" alt="Lifecell">
							<a href="tel:+380634077397"><p>(063) ‎‎40-77-397</p></a>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
					<div class="social-head">
						<a href="https://twitter.com/horse_club_kh" target="_blank"><img src="<?php bloginfo('template_directory') ?>/img/tw.png" alt="Twitter" id="tw"></a>
						<a href="https://www.facebook.com/horse.club.kh" target="_blank"><img src="<?php bloginfo('template_directory') ?>/img/fb.png" alt="Facebook" id="fb"></a>
						<a href="https://www.instagram.com/oscar.horse.club/"><img src="<?php bloginfo('template_directory') ?>/img/inst.png" alt="Instagram" id="inst"></a>
						<a href="https://vk.com/club74065591" target="_blank"><img src="<?php bloginfo('template_directory') ?>/img/vk.png" alt="VK" id="vk"></a>
						<a href="https://www.youtube.com/channel/UClsfFA0AiGW3ZuEIL4_6u5w" target="_blank"><img src="<?php bloginfo('template_directory') ?>/img/youtube.png" alt="YouTube" id="youtube"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Первый экран до 991-->
	<div class="screen-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="logo-head">
						<a href="/"><img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt="Horse Club"></a>
					</div>
					<div class="butt" id="butt-order">
						<a href="#order"><button>Забронировать дату</button></a>
					</div>
					<div class="menu">
						<ul>
							<li id="hhh-1"><span><a href="/">Главная</a></span></li>
							<li id="hhh-2"><span><a href="/o-nas/">О нас</a></span></li>
							<li id="hhh-3"><span><a href="/uslugi/">Услуги</a></span></li>
							<li id="hhh-4"><span><a href="/blog/">Блог</a></span></li>
							<li id="hhh-5"><span><a href="/kontaktyi/">Контакты</a></span></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-2"></div>
				<div class="col-lg-9 col-md-9 pos-991">
					<?php get_template_part( 'content_page_screen' ); ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Первый экран после 991-->
	<div class="screen-1 for-page-blog-screen-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="logo-head">
						<a href="/"><img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt="Horse Club"></a>
					</div>
					<div class="butt" id="butt-order">
						<a href="#order"><button>Забронировать дату</button></a>
					</div>
					<div class="menu">
						<ul>
							<li id="hhh-1"><span><a href="/">Главная</a></span></li>
							<li id="hhh-2"><span><a href="/o-nas/">О нас</a></span></li>
							<li id="hhh-3"><span><a href="/uslugi/">Услуги</a></span></li>
							<li id="hhh-4"><span><a href="/blog/">Блог</a></span></li>
							<li id="hhh-5"><span><a href="/contacts/">Контакты</a></span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>