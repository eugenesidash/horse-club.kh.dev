<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage horseclub2
 * @since horseclub2 0.1
 */
?>

		<!-- /CONTENT -->
		<div id="footerex">
			<div id="footer">
				<div id="footer_toprow">
					<div id="posi">
						<div class="fl" id="footer_logo">
							<a href="<?php echo esc_url(home_url('/'));?>
								">
								<img src="<?php echo get_template_directory_uri();?>/images/logo_bottom.png" alt="logo"></a>
						</div>
						<div class="fl" id="footer_desc">
							<div>Прокат лошадей в г. Харьков от КК «Оскар»</div>
						</div>
						<div class="fl" id="footer_mail">
							<div>
								<img src="<?php echo get_template_directory_uri();?>					
								/images/icon_mail_b.png" alt="mail">&nbsp;info@horse-club.kh.ua
							</div>
						</div>
						<div class="fl" id="footer_phone">
							<div>
								<img src="<?php echo get_template_directory_uri();?>/images/icon_phone_b.png" alt="phone">&nbsp;(093) 202-07-58</div>
						</div>
					</div>
					</div>
				<div id="footer_midrow">
					<div id="footer_linx" class="fl">
						<div class="footer_separator ac">&nbsp;</div>
						<br>
						<div id="footer_map">
							<div class="fl">
								<a href="/konnie-progulki-v-harkove">Конные прогулки</a><br>
								<a href="/obuchenie-verhovoy-ezde">Уроки по верховой езде</a><br>
								<a href="/loshadi-dlya-zdorovya">Лошади для здоровья</a><br>
								<a href="/loshadi-na-prazdnik">Лошади на праздник</a><br>
							</div>
							<div class="fl">
								<a href="/katanie-v-zapryazhkah">Катание в запряжках</a><br>
								<a href="/kupanie-s-loshadmi">Купание с лошадьми</a><br>
								<a href="/prostoy-loshadey">Постой лошадей</a><br>
								<a href="/katanie-v-povodu">Катание в поводе</a><br>
							</div>
							<div class="fl">
								<a href="/loshadi-dlya-semok">Лошади для сьемок</a><br>
								<a href="/katanie-na-poni">Мини-пони</a><br>
								<a href="/abonementy">Наши абонименты</a><br>
								<a href="/dopolnitelnyie-uslugi">Дополнительные услуги</a><br>
							</div>
							<div class="cl"></div>
						</div>
						<br>
						<div class="footer_separator ac">&nbsp;</div>
						<div>
							<div class="fl" id="footer_menu">
								<a href="<?php echo esc_url(home_url('/'));?>">Главная</a>
								<a href="<?php echo esc_url(home_url('/'));?>">Услуги</a>
								<a href="<?php echo esc_url(home_url('/blog'));?>">Блог</a>
								<a href="<?php echo esc_url(home_url('/about-us'));?>">О нас</a>
								<a href="<?php echo esc_url(home_url('/contacts'));?>">Контакты</a>
								<div class="cl"></div>
							</div>
							<div class="fl" id="footer_socials">
								<a href="https://vk.com/club74065591" target="_blank">
									<img src="<?php echo get_template_directory_uri();?>/images/footer_social/vk.png" alt="vk">
								</a>
								<a href="https://www.facebook.com/horse.club.kh" target="_blank">
									<img src="<?php echo get_template_directory_uri();?>/images/footer_social/fb.png" alt="fb">
								</a>
								<a href="https://www.instagram.com/horseclubkh/" target="_blank">
									<img src="<?php echo get_template_directory_uri();?>/images/footer_social/ig.png" alt="ig">
								</a>
								<a href="https://plus.google.com/103503062850093298961" target="_blank">
									<img src="<?php echo get_template_directory_uri();?>/images/footer_social/gp.png" alt="gp">
								</a>
								<a href="https://www.ok.ru/horseclub" target="_blank">
									<img src="<?php echo get_template_directory_uri();?>/images/footer_social/ok.png" alt="ok">
								</a>
								<a href="https://twitter.com/horse_club_kh" target="_blank">
									<img src="<?php echo get_template_directory_uri();?>/images/footer_social/tw.png" alt="tw">
								</a>
							</div>
						</div>
					</div>
					<div id="footer_form" class="fl">
						<h4>Форма жалоб и предложений</h4>
						<br>
						<form action="#" method="post">
							<input type="hidden" name="csrf" value="1">
							<select name="kind">
								<option value="1">Жалоба</option>
								<option value="2" selected>Предложение</option>
							</select>
							&nbsp;
							<input type="email" name="email" placeholder="me@example.com" size="15">
							<br>
							<textarea name="content" cols="37" rows="3" placeholder="Введите Ваш текст"></textarea>
							<br>
							<div class="fr">
								<input type="submit" class="btn" value="Отправить" style="position: relative; left: -15px;">
							</div>
							<div class="cl"></div>
						</form>
					</div>
					<div class="cl"></div>
				</div>
				<div id="footer_credits">
					<p>&copy;&nbsp;<?php echo date('Y');?>&nbsp;<?php bloginfo('name');?> Весь контент на данном вебсайте - авторский. Копирование любого контента разрешинно только с цитированием ссылки сайта</p>
				</div>
			</div>
		</div>
<?php wp_footer();?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-81116710-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
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
	</body>
</html>