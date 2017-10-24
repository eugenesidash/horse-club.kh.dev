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

/*
konnie-progulki-v-harkove
	konnie-progulki-po-lesu
	konnie-progulki-v-pole
	konnie-progulki-vdol-plyazha
	konnie-progulki-po-gorodu
	verhovaya-ezda-po-parku
	verhovaya-ezda-zimoy
	verhovaya-ezda-na-otkryitom-platsu
	romanticheskaya-progulka-na-loshadyah
	gruppovaya-poezdka-na-loshadyah
	verhovaya-ezda-bez-sedla-i-uzdechki
obuchenie-verhovoy-ezde
	uroki-verhovoy-ezdy-dlya-nachinayuschih
	uroki-verhovoy-ezdy-dlya-opitnih
	zanyatiya-verhovoy-ezdoy-na-poni
	individualnyie-uroki-verhovoy-ezdy
	ekspress-kursy-po-obucheniy-verhovoy-ezde
	zanyatiya-verhovoy-ezdoy-dlya-detey
	obuchenie-verhovoy-ezde-vzroslyih
loshadi-dlya-zdorovya
	ippoterapiya
	gimnastika-na-loshadyah-dlya-vzroslyih
	gimnastika-na-loshadyah-dlya-detey
	konnyiy-fitnes
loshadi-na-prazdnik
	loshadi-na-svadbu
	predlozhenie-ruki-i-serdtsa-kone
	loshadi-na-detskiy-prazdnik
kupanie-s-loshadmi
katanie-v-zapryazhkah
	arenda-karetyi
	katanie-v-sanyah
prostoy-loshadey
katanie-v-povodu
	katanie-detey-verhom-v-povodu
	katanie-vzroslyih-verhom-v-povodu
loshadi-dlya-semok
katanie-na-poni
abonementy
	abonement-na-mesyats
	abonement-na-gruppovyie-zanyatiya
dopolnitelnyie-uslugi
	koneperevozki
	prodazha-loshadey
	pomosch-v-pokupke-i-prodazhe-loshadey
	konskiy-navoz-kompost-peregnoy-mulcha
	podarochnyiy-sertifikat
*/
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset');?>" />
		<meta charset="<?php bloginfo('charset');?>">
		<?php wp_get_document_title();/*wp_title('|',true,'right');*/?>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url');?>">
		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri();?>/js/html5.js"></script>
		<![endif]-->
		<?php wp_head();?>
	</head>
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
				<nav class="fl" id="menu">
					<ul>
						<li><a href="<?php echo esc_url(home_url('/'));?>">Главная</a></li>
						<li>
							<a href="<?php echo esc_url(home_url('/'));?>">Услуги</a>
							<ul>
								<li>
									<a href="/konnie-progulki-v-harkove">Конные прогулки</a>
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
										<li><a href="/katanie-detey-verhom-v-povodu">Катание на поводу</a></li>
										<li><a href="/katanie-vzroslyih-verhom-v-povodu">Катание на поводу</a></li>
									</ul>
								</li>
								<li><a href="/kupanie-s-loshadmi">Купание с лошадьми</a></li>
								<li><a href="/prostoy-loshadey">Постой лошадей</a></li>
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
				<!--
				<div class="fl" id="menu">
					<span>Главная</span>
					<a href="#">Услуги</a>
					<a href="#">Блог</a>
					<a href="#">О нас</a>
					<a href="#">Контакты</a>
					<div class="cl"></div>
				</div>
				-->
				<div class="fl" id="header_linx">
					<div id="header_socials">
						<a href="#">
							<img src="<?php echo get_template_directory_uri();?>/images/social_vk.png" alt="vk">
						</a>
						<a href="#">
							<img src="<?php echo get_template_directory_uri();?>/images/social_fb.png" alt="fb">
						</a>
						<a href="#">
							<img src="<?php echo get_template_directory_uri();?>/images/social_ig.png" alt="ig">
						</a>
						<a href="#">
							<img src="<?php echo get_template_directory_uri();?>/images/social_gp.png" alt="gp">
						</a>
						<a href="#">
							<img src="<?php echo get_template_directory_uri();?>/images/social_ok.png" alt="ok">
						</a>
					</div>
					<div id="header_map">
						<a href="#">Карта проезда</a>
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
		</div>
		<!-- CONTENT -->
