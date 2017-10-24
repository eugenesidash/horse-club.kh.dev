<?php wp_footer(); ?>
<!-- Карта проезда -->
<div id="li-6-anh-page"></div>
<div class="screen-7">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="header-30-2"><span id="karta-pr">Схема и способы проезда к нам</span></h3>
				<p><span id="kak-dobra">Как к нам добраться</span></p>
				<div class="hr hr-5">
					<hr>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="car-car">
					<img src="<?php bloginfo('template_directory') ?>/img/car.png" alt="">
					<h3>На авто </h3>
					<p>От Метро Площадь Конституции (быв. Советская) до "ОСКАРА" - 19 км (25 мин)</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="train-tarin">
					<img src="<?php bloginfo('template_directory') ?>/img/train.png" alt="">
					<h3>На электричке</h3>
					<p>(Гагарина/Левада - Удянская) - 15 км (30 мин)</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="bus-bus">
					<img src="<?php bloginfo('template_directory') ?>/img/bus.png" alt="">
					<h3>На автобусе</h3>
					<p>№1167 (метро Спортивная - Удянская) - 14 км (45 мин)</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="map-proezs">
					<img src="<?php bloginfo('template_directory') ?>/img/karta-proezda.png" alt="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="two-butt">
					<div class="butt butt-screen-1-7">
						<a href="https://www.google.com.ua/maps/place/Конный+клуб+Оскар/@49.8622607,36.231608,17z/data=!3m1!4b1!4m5!3m4!1s0x412774153f098e13:0xbd3b10bfc9a438a!8m2!3d49.8622607!4d36.233802?hl=ru&authuser=0" target="_blank"><button>Маршрут на Google карте</button></a>
					</div>
					<div class="butt butt-screen-2-7">
						<a href="<?php bloginfo('template_directory') ?>/img/karta-proezda.png" target="_blank" download><button>Скачать карту проезда</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Подвал -->
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
				<div class="left-logo-foot">
					<a href="/"><img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt=""></a>
				</div>
				<div class="phopho">
					<img src="<?php bloginfo('template_directory') ?>/img/phone-foot.png" alt="">
					<a href="tel:+380684077397"><p>(068) ‎‎40-77-397</p></a>
					<a href="tel:+380504077397"><p>(050) ‎‎40-77-397</p></a>
					<a href="tel:+380634077397"><p>(063) ‎‎40-77-397</p></a>
				</div>
				<div class="map-ma">
					<img src="<?php bloginfo('template_directory') ?>/img/geo-mark.png" alt="">
					<p>Харьковская обл. пос. Безлюдовка<br>ул. Победы 310а </p>
				</div>
			</div>
			<div class="col-lg-1 col-md-1 bor-bor-r"></div>
			<div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
				<div class="serv">
					<h3>Услуги</h3>
					<div class="lserv">
						<ul>
							<li><a href="/konnyie-progulki/">Конные прогулки</a></li>
							<li><a href="/uroki-verhovoy-ezdy/">Уроки верховой езды</a></li>
							<li><a href="/ippoterapiya/">Иппотерапия</a></li>
							<li><a href="/katanie-na-poni/">Катание на пони</a></li>
							<li><a href="/katanie-v-povodu/">Катание в поводу</a></li>
						</ul>
					</div>
					<div class="rserv">
						<ul>
							<li><a href="/loshadi-dlya-semok/">Лошади для съемок</a></li>
							<li><a href="/kupanie-s-loshadmi/">Купание с лошадьми</a></li>
							<li><a href="/katanie-v-zapryazhkah/">Катание в запряжках</a></li>
							<li><a href="/prostoy-loshadey/">Простой лошадей</a></li>
						</ul>
					</div>
					<h3>Последние новости</h3>
					<div class="last-news-foot">
						<div class="last-n-1">
							<a href="/dlya-romanticheskih-progulok/">
								<img src="<?php bloginfo('template_directory') ?>/img/1-new.jpg" alt="">
								<p>Конный прокат<br>в Харькове<br>для прогулок</p>
							</a>
						</div>
						<div class="last-n-2">
							<a href="/na-otkrytom-placu/">
								<img src="<?php bloginfo('template_directory') ?>/img/2-new.jpg" alt="">
								<p>Верховая езда<br>на открытом плацу</p>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="menu-foot">
					<h3>Меню</h3>
					<ul>
						<li><a href="/">Главная</a></li>
						<li><a href="/o-nas/">О нас</a></li>
						<li><a href="/uslugi/">Услуги</a></li>
						<li><a href="/blog/">Блог</a></li>
						<li><a href="/kontaktyi/">Контакты</a></li>
					</ul>
				</div>
				<div class="search">
					<?php get_search_form(); ?>
				</div>
				<div class="soc-foot">
					<h3>Мы в социальных сетях</h3>
					<div class="soc-foot-img">
						<a href="https://twitter.com/horse_club_kh" target="_blank"><img src="<?php bloginfo('template_directory') ?>/img/tw-foot.png" alt=""></a>
						<a href="https://www.facebook.com/horse.club.kh" target="_blank"><img src="<?php bloginfo('template_directory') ?>/img/fb-foot.png" alt=""></a>
						<a href="https://www.instagram.com/oscar.horse.club/" target="_blank"><img src="<?php bloginfo('template_directory') ?>/img/inst-foot.png" alt=""></a>
						<a href="https://vk.com/club74065591" target="_blank"><img src="<?php bloginfo('template_directory') ?>/img/vk-foot.png" alt=""></a>
						<a href="https://www.youtube.com/channel/UClsfFA0AiGW3ZuEIL4_6u5w" target="_blank"><img src="<?php bloginfo('template_directory') ?>/img/youtube-foot.png" alt=""></a>
					</div>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="soc-foot-2">
					<h3>Мы в социальных сетях</h3>
					<div class="soc-foot-img">
						<a href="https://twitter.com/horse_club_kh" target="_blank"><img src="<?php bloginfo('template_directory') ?>/img/tw-foot.png" alt=""></a>
						<a href="https://www.facebook.com/horse.club.kh" target="_blank"><img src="<?php bloginfo('template_directory') ?>/img/fb-foot.png" alt=""></a>
						<a href="https://www.instagram.com/oscar.horse.club/" target="_blank"><img src="<?php bloginfo('template_directory') ?>/img/inst-foot.png" alt=""></a>
						<a href="https://vk.com/club74065591" target="_blank"><img src="<?php bloginfo('template_directory') ?>/img/vk-foot.png" alt=""></a>
						<a href="https://www.youtube.com/channel/UClsfFA0AiGW3ZuEIL4_6u5w" target="_blank"><img src="<?php bloginfo('template_directory') ?>/img/youtube-foot.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-81116710-1', 'auto');
	ga('send', 'pageview');
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
	(function (d, w, c) {
		(w[c] = w[c] || []).push(function() {
			try {
				w.yaCounter38608205 = new Ya.Metrika({
					id:38608205,
					clickmap:true,
					trackLinks:true,
					accurateTrackBounce:true,
					webvisor:true
				});
			} catch(e) { }
		});

		var n = d.getElementsByTagName("script")[0],
		s = d.createElement("script"),
		f = function () { n.parentNode.insertBefore(s, n); };
		s.type = "text/javascript";
		s.async = true;
		s.src = "https://mc.yandex.ru/metrika/watch.js";

		if (w.opera == "[object Opera]") {
			d.addEventListener("DOMContentLoaded", f, false);
		} else { f(); }
	})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/38608205" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script src="<?php bloginfo('template_directory') ?>/js/scroll.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory') ?>/js/carusel.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory') ?>/js/carusel_max_500.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory') ?>/js/fade-menu.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory') ?>/js/share42/share42.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory') ?>/js/arrow27.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory') ?>/fancybox/jquery.fancybox-1.2.1.pack.js" type="text/javascript"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery("a.gallery").fancybox();
		jQuery("a.modalbox").fancybox(
		{								  
			"frameWidth" : 400,	 
			"frameHeight" : 400,
		});
	});
</script>
</body>
</html>