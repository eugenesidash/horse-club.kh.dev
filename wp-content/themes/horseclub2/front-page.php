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
?>

<style type="text/css">
.letter {
color: #FF9200;
font-size: 200%;
1}
</style>
		<div id="home_slider" style="background-image: url('/wp-content/themes/horseclub2/slider/01.jpg');background-repeat: no-repeat;background-position: center;">
			<div id="home_wrap">
				<div id="home_description">
					<h1 id="honeslide">Конный клуб «Оскар»</h1>
					<br>
					<p>«Оскар» – это современный конный клуб в Харькове, где Вы сможете отдохнуть от городской суеты, прогуляться на лошадях по лесу или парку, взять уроки верховой езды или провести <a href="http://www.horse-club.kh.ua/loshadi-dlya-semok">фотосессию</a>. К Вашим услугам воспитанные, умные и ухоженные лошади, выращенные в любви и заботе, а также опытные инструктора, которые позаботятся о Вашей безопасности, комфорте и хорошем настроении.</p>
				</div>
				<div class="fr" id="home_more">
					<a href="#">Узнать подробнее</a>
				</div>
				<div class="cl"></div>
			</div>
		</div>
		<!-- CONTENT -->
		<div id="lead" role="main">
			<div class="fl" id="home_content">
				<h2>Наш конный клуб – лучший в Харькове!</h2>
				<div class="lead_spacer"></div>
				<p><?php if(have_posts()){the_post();the_content();}?></p>
			</div>
			<div class="cl"></div>
			<div id="home_selector">
				<h2 id="qaz">Услуги конного клуба «Оскар»</h2>
				<div class="lead_spacer"></div>
				<div id="qwe">
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
			</div>
			<div id="home_footer">
				<div>
				<h2>Достижения конного клуба Оскар</h2>
				<div class="lead_spacer"></div>
				<p style="text-align: justify;"><span class="letter">Л</span>ошади в конном клубе Харькова «Оскар» – это добрые, умные, красивые и грациозные животные, которые не оставят равнодушным ни одного посетителя. Общение с ними поможет расслабиться, зарядится положительной энергией и возобновить жизненные силы. У нас есть лошади и мини-пони для разных направлений со своими особенностями и разными чертами характера. Лошади конного клуба регулярно принимают участие в различных соревнованиях, где за последнее время Рада заняла первое место в пробеге на 13 км, а Ночка – второе.
				</p>
				<br>
				<img src="<?php echo get_template_directory_uri();?>/images/koni2.png" alt="" width="70%" height="auto">
				</div>
<br>
<table border='0' cellspacing='0' cellpadding='2' style='border-top:solid 1px #000000; border-left:solid 1px #000000;'>
<tr>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; font-weight: bold; text-align: center;'>№</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; font-weight: bold; text-align: center;'>Имя</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; font-weight: bold; text-align: center;'>Год рождения</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; font-weight: bold; text-align: center;'>Высота в холке, см</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; font-weight: bold; text-align: center;'>Пол</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; font-weight: bold; text-align: center;'>Характер</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; font-weight: bold; text-align: center;'>Направление</td>
</tr>
<tr>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>1</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>Ночка</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>2007</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>160</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>кобыла</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>Добрая дружелюбная лошадка. Любит внимание и вкусняшки.</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>Идеально подходит для фотосессий и шаговых прогулок.</td>
</tr>
<tr>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>2</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>Рада</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>2008</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>160</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>кобыла</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>Строптивая, очень резвая, любит побегать. Послушная в умелых руках.</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>Конные прогулки, пробеги на длинные дистанции, конкур. Подходит для опытных всадников.</td>
</tr>
<tr>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>3</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>Кристал</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>2006</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>147</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>мерин</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>Очень дружелюбный, легко идёт на контакт. Любит внимание и заботу.</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>Уроки верховой езды, конные прогулки, катание на поводу.</td>
</tr>
<tr>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>4</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>Фактор (Федя)</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>2006</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>170</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>мерин</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>Дружелюбный, милый мерин. Любит сладости.</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000;'>Уроки верховой езды, катание на поводу, конные прогулки и пробеги.</td>
</tr>
<tr>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>5</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>Ненси</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>2013</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>135</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>кобыла</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>Добрая как кошка. Любит сладости и вкусняшки. Дружелюбно относится к деткам.</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000;'>Управляется двумя пальцами. Подходит для занятий, катания на поводу, прогулок.</td>
</tr>
<tr>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>6</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>Малыш</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>2013</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>90</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>пони, мерин</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>Активный резвый малыш. Любит детей, прогулки и когда с ним играют.</td>
<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align: center;'>Прогулки, фотосессии.</td>
</tr>
</table>
<br>
				<h2>Последние новости</h2>
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
		<!-- /CONTENT -->
<?php
get_footer();
?>
