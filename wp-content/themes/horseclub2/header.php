<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage horseclub2
 * @since horseclub2 0.1
 */
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset');?>" />
		<meta charset="<?php bloginfo('charset');?>">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<?php wp_get_document_title();?>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url');?>">
		<!--[if lt IE 9]>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/html5.js"></script>
		<![endif]-->
		<script type="text/javascript">
			window.onload = function(){
				$ = jQuery;
				var xmap = null;
				var slide_base_url = '/wp-content/themes/horseclub2/slider/';
				var slide_ext = '.jpg';
				var slide_idx = 0;
				var slide_int = null;
				var slides = ['01','02','03','04'];
				$('a#trigger_map_open').click(function(e){
					e.preventDefault();
					$('.b-popup').fadeIn(200);
				});
				$('a#trigger_map_close').click(function(e){
					e.preventDefault();
					$('.b-popup').fadeOut(200);
				});
				if($('#home_slider').length){
					slide_int = setInterval(function (){if(slides.length <= slide_idx){slide_idx = 0;}$('#home_slider').css('background-image','url(\''+slide_base_url+slides[slide_idx]+slide_ext+'\')');slide_idx++;console.log('slide = '+slide_idx);},4000);
				}
				if($('#gallerya').length){
					$('#gallerya').nanoGallery({
						itemsBaseURL:'<?php echo get_template_directory_uri();?>/gallerya/'
					});
				}
				if($('#contacts_map').length){
					/*
					xmap = new google.maps.Map(document.getElementById('contacts_map'),{
						zoom: 17,
						center: new google.maps.LatLng('55.9891','37.322'),
						navigationControlOptions: {style: google.maps.NavigationControlStyle.ZOOM_PAN},
						mapTypeId: google.maps.MapTypeId.HYBRID
					});
					xmap.scrollwheel = true;
					xmap.setOptions({mapTypeControl:true});
					*/
					ymaps.ready(function(){
						xmap = new ymaps.Map('contacts_map',{
							center: [49.974819, 36.284086],
							zoom: 15,
							behaviors: ['default', 'scrollZoom']
						});
						/*var newPoint = new ymaps.Placemark([49.974819, 36.284086],{}, {
							iconImageHref: '/images/map_mark_home.png',
							iconImageSize: [46, 53],
							iconImageOffset: [-16, -40],
							hasBaloon: false
						});
						mapObj.geoObjects.add(newPoint);
						mapObj.setCenter(newPoint, 14);*/
					});
				}
			};
		</script>
		<?php wp_head();?>
	</head>
	<div class="topas">
	<body <?php body_class();?>><div id="headerex">
			<div id="header">
				<div class="fl" id="header_logo">
					<a href="<?php echo esc_url(home_url('/'));?>">
						<img src="<?php echo get_template_directory_uri();?>/images/logo_top.png" alt="logo">
					</a>
				</div>
				<div class="fl" id="header_title">
					<h3>Оскар</h3>
					<p>Конный клуб</p>
				</div>
				<nav class="fl" id="menu1">
					<ul style="height: 18px;">
						<li><a href="<?php echo esc_url(home_url('/'));?>">Главная</a></li>
						<li>
							<a href="#">Услуги</a>
							<ul>
								<li>
									<a href="/konnyie-progulki-v-harkove/">Конные прогулки</a>
									<ul>
										<li><a href="/konnie-progulki-po-lesu">По лесу</a></li>
										<li><a href="/konnie-progulki-v-pole">В поле</a></li>
										<li><a href="/konnie-progulki-vdol-plyazha">Вдоль пляжа</a></li>
										<li><a href="/konnie-progulki-po-gorodu">В городе</a></li>
										<li><a href="/verhovaya-ezda-po-parku">По парку</a></li>
										<li><a href="/verhovaya-ezda-zimoy">Верховая езда зимой</a></li>
										<li><a href="/verhovaya-ezda-na-otkryitom-platsu">На открытом плацу</a></li>
										<li><a href="/romanticheskaya-progulka-na-loshadyah">Романтическая прогулка</a></li>
										<li><a href="/gruppovaya-poezdka-na-loshadyah">Групповая поездка на лошадях</a></li>
										<li><a href="/verhovaya-ezda-bez-sedla-i-uzdechki">Верховая езда</a></li>
									</ul>
								</li>
								<li>
									<a href="/obuchenie-verhovoy-ezde">Уроки верховой езды</a>
									<ul>
										<li><a href="/uroki-verhovoy-ezdy-dlya-nachinayuschih">Занятия верховой ездой для начинающих</a></li>
										<li><a href="/uroki-verhovoy-ezdy-dlya-opitnih">Занятия верховой ездой для опытных</a></li>
										<li><a href="/zanyatiya-verhovoy-ezdoy-na-poni">Занятия верховой ездой на пони</a></li>
										<li><a href="/individualnyie-uroki-verhovoy-ezdy">Индивидуальные уроки верховой езды</a></li>
										<li><a href="/ekspress-kursy-po-obucheniy-verhovoy-ezde">Экспресс-курсы по обучению верховой езды на лошадях</a></li>
										<li><a href="/zanyatiya-verhovoy-ezdoy-dlya-detey">Индивидуальные занятия верховой ездой для детей</a></li>
										<li><a href="/obuchenie-verhovoy-ezde-vzroslyih">Обучения верховой езды взрослых</a></li>
									</ul>
								</li>
								<li>
									<a href="/loshadi-dlya-zdorovya">Лошади для здоровья</a>
									<ul>
										<li><a href="/ippoterapiya">Иппотермия</a></li>
										<li><a href="/gimnastika-na-loshadyah-dlya-vzroslyih">Гимнастика на лошадях для взрослых</a></li>
										<li><a href="/gimnastika-na-loshadyah-dlya-detey">Гимнастика на лошадях для детей</a></li>
										<li><a href="/konnyiy-fitnes">Конный фитнес</a></li>
									</ul>
								</li>
								<li>
									<a href="/loshadi-na-prazdnik">Лошади на праздник</a>
									<ul>
										<li><a href="/loshadi-na-svadbu">Заказ свадебного экипажа</a></li>
										<li><a href="/predlozhenie-ruki-i-serdtsa-kone">Предложение руки и сердца на белом коне</a></li>
										<li><a href="/loshadi-na-detskiy-prazdnik">Лошади на детский праздник</a></li>
									</ul>
								</li>
								<li>
									<a href="/katanie-v-zapryazhkah">Катания в запряжках</a>
									<ul>
										<li><a href="/arenda-karetyi">Аренда кареты (фаэтона)</a></li>
										<li><a href="/katanie-v-sanyah">Катание в санях или экипаже</a></li>
									</ul>
								</li>
								<li>
									<a href="/abonementy">Наши абонименты</a>
									<ul>
										<li><a href="/abonement-na-mesyats">Абонимент на месяц</a></li>
										<li><a href="/abonement-na-gruppovyie-zanyatiya">Абонимент на грпповые занятие</a></li>
									</ul>
								</li>
								<li>
									<a href="/katanie-v-povodu">Катание на поводу</a>
									<ul>
										<li><a href="/katanie-detey-verhom-v-povodu">Катание детей на поводу</a></li>
										<li><a href="/katanie-vzroslyih-verhom-v-povodu">Катание взрослых на поводу</a></li>
									</ul>
								</li>
								<li><a href="/kupanie-s-loshadmi">Купание с лошадьми</a></li>
								<li><a href="/prostoy-loshadey">Простой лошадей</a></li>
								<li><a href="/loshadi-dlya-semok">Лошади для съемок</a></li>
								<li><a href="/katanie-na-poni">Мини-пони</a></li>
								<li>
									<a href="/dopolnitelnyie-uslugi">Дополнительные услуги</a>
									<ul>
										<li><a href="/koneperevozki">Конеперевозки</a></li>
										<li><a href="/prodazha-loshadey">Продажа лошадей</a></li>
										<li><a href="/pomosch-v-pokupke-i-prodazhe-loshadey">Помощь в покупке и продаже лошадей</a></li>
										<li><a href="/konskiy-navoz-kompost-peregnoy-mulcha">Конский навоз, компост, перегной, мульча, органическое удобрение</a></li>
										<li><a href="/podarochnyiy-sertifikat">Подарочный сертификат</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="<?php echo esc_url(home_url('/blog'));?>">Блог</a></li>
						<li><a href="<?php echo esc_url(home_url('/about-us'));?>">О нас</a></li>
						<li><a href="<?php echo esc_url(home_url('/contacts'));?>">Контакты</a></li>
					</ul>
				</nav>
<nav class="fl" id="menu2">
					<ul style="height: 18px;">
						<li>
							<a href="#" id="touch-menu">МЕНЮ</a>
							<ul>
						<li><a href="<?php echo esc_url(home_url('/'));?>">Главная</a></li>
						<li>
							<a href="#">Услуги</a>
							<ul>
								<li>
									<a href="/konnyie-progulki-v-harkove/">Конные прогулки</a>
									<ul>
										<li><a href="/konnie-progulki-po-lesu">По лесу</a></li>
										<li><a href="/konnie-progulki-v-pole">В поле</a></li>
										<li><a href="/konnie-progulki-vdol-plyazha">Вдоль пляжа</a></li>
										<li><a href="/konnie-progulki-po-gorodu">В городе</a></li>
										<li><a href="/verhovaya-ezda-po-parku">По парку</a></li>
										<li><a href="/verhovaya-ezda-zimoy">Верховая езда зимой</a></li>
										<li><a href="/verhovaya-ezda-na-otkryitom-platsu">На открытом плацу</a></li>
										<li><a href="/romanticheskaya-progulka-na-loshadyah">Романтическая прогулка</a></li>
										<li><a href="/gruppovaya-poezdka-na-loshadyah">Групповая поездка на лошадях</a></li>
										<li><a href="/verhovaya-ezda-bez-sedla-i-uzdechki">Верховая езда</a></li>
									</ul>
								</li>
								<li>
									<a href="/obuchenie-verhovoy-ezde">Уроки верховой езды</a>
									<ul>
										<li><a href="/uroki-verhovoy-ezdy-dlya-nachinayuschih">Занятия верховой ездой для начинающих</a></li>
										<li><a href="/uroki-verhovoy-ezdy-dlya-opitnih">Занятия верховой ездой для опытных</a></li>
										<li><a href="/zanyatiya-verhovoy-ezdoy-na-poni">Занятия верховой ездой на пони</a></li>
										<li><a href="/individualnyie-uroki-verhovoy-ezdy">Индивидуальные уроки верховой езды</a></li>
										<li><a href="/ekspress-kursy-po-obucheniy-verhovoy-ezde">Экспресс-курсы по обучению верховой езды на лошадях</a></li>
										<li><a href="/zanyatiya-verhovoy-ezdoy-dlya-detey">Индивидуальные занятия верховой ездой для детей</a></li>
										<li><a href="/obuchenie-verhovoy-ezde-vzroslyih">Обучения верховой езды взрослых</a></li>
									</ul>
								</li>
								<li>
									<a href="/loshadi-dlya-zdorovya">Лошади для здоровья</a>
									<ul>
										<li><a href="/ippoterapiya">Иппотермия</a></li>
										<li><a href="/gimnastika-na-loshadyah-dlya-vzroslyih">Гимнастика на лошадях для взрослых</a></li>
										<li><a href="/gimnastika-na-loshadyah-dlya-detey">Гимнастика на лошадях для детей</a></li>
										<li><a href="/konnyiy-fitnes">Конный фитнес</a></li>
									</ul>
								</li>
								<li>
									<a href="/loshadi-na-prazdnik">Лошади на праздник</a>
									<ul>
										<li><a href="/loshadi-na-svadbu">Заказ свадебного экипажа</a></li>
										<li><a href="/predlozhenie-ruki-i-serdtsa-kone">Предложение руки и сердца на белом коне</a></li>
										<li><a href="/loshadi-na-detskiy-prazdnik">Лошади на детский праздник</a></li>
									</ul>
								</li>
								<li>
									<a href="/katanie-v-zapryazhkah">Катания в запряжках</a>
									<ul>
										<li><a href="/arenda-karetyi">Аренда кареты (фаэтона)</a></li>
										<li><a href="/katanie-v-sanyah">Катание в санях или экипаже</a></li>
									</ul>
								</li>
								<li>
									<a href="/abonementy">Наши абонименты</a>
									<ul>
										<li><a href="/abonement-na-mesyats">Абонимент на месяц</a></li>
										<li><a href="/abonement-na-gruppovyie-zanyatiya">Абонимент на грпповые занятие</a></li>
									</ul>
								</li>
								<li>
									<a href="/katanie-v-povodu">Катание на поводу</a>
									<ul>
										<li><a href="/katanie-detey-verhom-v-povodu">Катание детей на поводу</a></li>
										<li><a href="/katanie-vzroslyih-verhom-v-povodu">Катание взрослых на поводу</a></li>
									</ul>
								</li>
								<li><a href="/kupanie-s-loshadmi">Купание с лошадьми</a></li>
								<li><a href="/prostoy-loshadey">Простой лошадей</a></li>
								<li><a href="/loshadi-dlya-semok">Лошади для съемок</a></li>
								<li><a href="/katanie-na-poni">Мини-пони</a></li>
								<li>
									<a href="/dopolnitelnyie-uslugi">Дополнительные услуги</a>
									<ul>
										<li><a href="/koneperevozki">Конеперевозки</a></li>
										<li><a href="/prodazha-loshadey">Продажа лошадей</a></li>
										<li><a href="/pomosch-v-pokupke-i-prodazhe-loshadey">Помощь в покупке и продаже лошадей</a></li>
										<li><a href="/konskiy-navoz-kompost-peregnoy-mulcha">Конский навоз, компост, перегной, мульча, органическое удобрение</a></li>
										<li><a href="/podarochnyiy-sertifikat">Подарочный сертификат</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="<?php echo esc_url(home_url('/blog'));?>">Блог</a></li>
						<li><a href="<?php echo esc_url(home_url('/about-us'));?>">О нас</a></li>
						<li><a href="<?php echo esc_url(home_url('/contacts'));?>">Контакты</a></li>
					</ul>
					</li>
					</ul>
				</nav>
				<div class="fl" id="header_linx">
					
					<div class="fl" id="header_map" style="margin-top: 2px;">
						<a href="http://www.horse-club.kh.ua/contacts/" alt="Карта проезда" id="trigger_map_open"><img src="<?php echo get_template_directory_uri();?>/images/maphead.png" alt="Карта проезда"></a>
						<br>
						<a href="http://www.horse-club.kh.ua/contacts/" id="trigger_map_open">Карта проезда</a>
					</div>
					<div id="header_socials">
						<a href="https://vk.com/club74065591" target="_blank">
							<img src="<?php echo get_template_directory_uri();?>/images/social_vk.png" alt="vk">
						</a>
						<a href="https://www.facebook.com/horse.club.kh" target="_blank">
							<img src="<?php echo get_template_directory_uri();?>/images/social_fb.png" alt="fb">
						</a>
						<a href="https://www.instagram.com/horseclubkh/" target="_blank">
							<img src="<?php echo get_template_directory_uri();?>/images/social_ig.png" alt="ig">
						</a>
						<br>
						<a href="https://twitter.com/horse_club_kh" target="_blank">
							<img src="<?php echo get_template_directory_uri();?>/images/social_tw.png" alt="tw">
						</a>
						<a href="https://plus.google.com/103503062850093298961" target="_blank">
							<img src="<?php echo get_template_directory_uri();?>/images/social_gp.png" alt="gp">
						</a>
						<a href="https://www.ok.ru/horseclub" target="_blank">
							<img src="<?php echo get_template_directory_uri();?>/images/social_ok.png" alt="ok">
						</a>
					</div>
				</div>
				<div class="fl" id="header_contacts">
					<div>
						<img src="<?php echo get_template_directory_uri();?>/images/icon_phone.png" alt="phone">&nbsp;<span id="header_phone">(093) <span class="header_active">202-07-58</span></span>
					</div>
					<div>
						<img src="<?php echo get_template_directory_uri();?>/images/icon_mail.png" alt="mail">&nbsp;<span id="header_email"><span class="header_active">info</span>@horse-club.kh.ua</span>
					</div>
				</div>
				<div class="cl"></div>
			</div>
			<div class="b-popup">
				<div class="b-popup-content">
					<a class="fr" href="#" id="trigger_map_close">×</a>
					<img src="<?php echo get_template_directory_uri();?>/images/map.png" alt="map">
				</div>
			</div>
		</div>
	</div>
		<!-- CONTENT -->