<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage horseclub2
 * @since horseclub2 0.1
 */

get_header();
if(is_front_page()):?>
		<div id="home_slider" style="background-image: url('/wp-content/themes/horseclub2/slider/01.jpg');background-repeat: no-repeat;background-position: center;">
			<div id="home_wrap">
				<div id="home_description">
					<h1>Конный клуб «Оскар»</h1>
					<br><br>
					<p>Наш конный клуб расположен в г.Харьков. В красивом районе Холодная гора. Приехав к нам на занятие, Вы останетесь довольны живописными местами и послушными лошадьми.</p>
				</div>
				<div class="fr" id="home_more">
					<a href="#">Узнать подробнее</a>
				</div>
				<div class="cl"></div>
			</div>
		</div>
		<!-- CONTENT -->
		<div id="lead">
			<div class="fl" id="home_video">
				<iframe width="420" height="236" src="https://www.youtube.com/embed/TWBvuAuyg34" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="fl" id="home_content">
				<h2>Наш клуб - наша гордость!</h2>
				<br>
				<div class="lead_spacer"></div>
				<p><?php if(have_posts()){the_post();the_content();}?></p>
			</div>
			<div class="cl"></div>
			<div id="home_selector">
				<h2>Услуги конного клуба «Оскар»</h2>
				<br>
				<div class="lead_spacer"></div>
				<div class="fl sd" id="home_selector_a">
					<h3><a href="/konnie-progulki-v-harkove">Конные прогулки</a></h3>
					<br>
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
				</div>
				<div class="fl sd" id="home_selector_b">
					<h3><a href="/obuchenie-verhovoy-ezde">Уроки верховой езды</a></h3>
					<br>
					<ul>
						<li><a href="/uroki-verhovoy-ezdy-dlya-nachinayuschih">Занятия верховой ездой для начинающих</a></li>
						<li><a href="/uroki-verhovoy-ezdy-dlya-opitnih">Занятия верховой ездой для опытных</a></li>
						<li><a href="/zanyatiya-verhovoy-ezdoy-na-poni">Занятия верховой ездой на пони</a></li>
						<li><a href="/individualnyie-uroki-verhovoy-ezdy">Индивидуальные уроки верховой езды</a></li>
						<li><a href="/ekspress-kursy-po-obucheniy-verhovoy-ezde">Экспресс-курсы по обучению верховой езды на лошадях</a></li>
						<li><a href="/zanyatiya-verhovoy-ezdoy-dlya-detey">Индивидуальные занятия верховой ездой для детей</a></li>
						<li><a href="/obuchenie-verhovoy-ezde-vzroslyih">Обучения верховой езды взрослых</a></li>
					</ul>
				</div>
				<div class="cl"></div>
				<div class="fl sd" id="home_selector_c">
					<h3><a href="/loshadi-dlya-zdorovya">Лошади для здоровья</a></h3>
					<br>
					<ul>
						<li><a href="/ippoterapiya">Иппотермия</a></li>
						<li><a href="/gimnastika-na-loshadyah-dlya-vzroslyih">Гимнастика на лошадях для взрослых</a></li>
						<li><a href="/gimnastika-na-loshadyah-dlya-detey">Гимнастика на лошадях для детей</a></li>
						<li><a href="/konnyiy-fitnes">Конный фитнес</a></li>
					</ul>
				</div>
				<div class="fl sd" id="home_selector_d">
					<h3><a href="/loshadi-na-prazdnik">Лошади на праздник</a></h3>
					<br>
					<ul>
						<li><a href="/loshadi-na-svadbu">Заказ свадебного экипажа</a></li>
						<li><a href="/predlozhenie-ruki-i-serdtsa-kone">Предложение руки и сердца на белом коне</a></li>
						<li><a href="/loshadi-na-detskiy-prazdnik">Лошади на детский праздник</a></li>
					</ul>
				</div>
				<div class="cl"></div>
				<div class="fl sd" id="home_selector_e">
					<h3><a href="/katanie-v-zapryazhkah">Катания в запряжках</a></h3>
					<br>
					<ul>
						<li><a href="/arenda-karetyi">Аренда кареты (фаэтона)</a></li>
						<li><a href="/katanie-v-sanyah">Катание в санях или экипаже</a></li>
					</ul>
				</div>
				<div class="fl sd" id="home_selector_f">
					<h3><a href="/abonementy">Наши абонименты</a></h3>
					<br>
					<ul>
						<li><a href="/abonement-na-mesyats">Абонимент на месяц</a></li>
						<li><a href="/abonement-na-gruppovyie-zanyatiya">Абонимент на грпповые занятие</a></li>
					</ul>
				</div>
				<div class="cl"></div>
				<div class="sd" id="home_selector_g">
					<h3><a href="/katanie-v-povodu">Катание на поводу</a></h3>
					<br>
					<ul>
						<li><a href="/katanie-detey-verhom-v-povodu">Катание на поводу</a></li>
						<li><a href="/katanie-vzroslyih-verhom-v-povodu">Катание на поводу</a></li>
					</ul>
				</div>
				<div class="sd" id="home_selector_h">
					<h3><a href="/kupanie-s-loshadmi">Купание с лошадьми</a></h3><br>
					<h3><a href="/prostoy-loshadey">Постой лошадей</a></h3><br>
					<h3><a href="/loshadi-dlya-semok">Лошади для съемок</a></h3><br>
					<h3><a href="/dopolnitelnyie-uslugi">Дополнительные услуги</a></h3><br>
					<ul>
						<li><a href="/koneperevozki">Конеперевозки</a></li>
						<li><a href="/prodazha-loshadey">Продажа лошадей</a></li>
						<li><a href="/pomosch-v-pokupke-i-prodazhe-loshadey">Помощь в покупке и продаже лошадей</a></li>
						<li><a href="/konskiy-navoz-kompost-peregnoy-mulcha">Конский навоз, компост, перегной, мульча, органическое удобрение</a></li>
						<li><a href="/podarochnyiy-sertifikat">Подарочный сертификат</a></li>
					</ul>
				</div>
			</div>
			<div id="home_footer">
				<h2>Последние новости</h2>
				<br>
				<div class="lead_spacer"></div>
				<div id="home_latest">
<?php
$Q = new WP_Query(array(
	'post_type'				=> array('post'),
	'posts_per_page'		=> 3,
	'ignore_sticky_posts'	=> 1,
));
while($Q->have_posts()){
	$Q->the_post();
	get_template_part('preview');
}
wp_reset_postdata();
?>
				<div class="fr" id="home_sidebar">
					<h2>Категории блога</h2>
					<br>
					<?php wp_list_categories(array('title_li'=>''));?>
					<br>
					<h3>Поиск по блогу</h3>
					<?php get_search_form();?>
				</div>
				<div class="cl"></div>
				</div>
			</div>
		</div>
<?php else:?>
		<!-- CONTENT -->
		<div id="lead">

<br><?php dimox_breadcrumbs();?><br>
<?php
$__have_posts = have_posts();
if(!$__have_posts)
	get_template_part('content','none');
#
while(have_posts()){
	the_post();
	get_template_part('content');
}
if($__have_posts)
	the_posts_pagination(array(
		'prev_text'          => '«',
		'next_text'          => '»',
		'before_page_number' => ''
	));
	#get_sidebar();
?>
		</div>
<?php
endif;
get_footer();
?>
