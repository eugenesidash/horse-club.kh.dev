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
					<div class="fl" id="footer_logo">
						<a href="<?php echo esc_url(home_url('/'));?>">
							<img src="<?php echo get_template_directory_uri();?>/images/logo_bottom.png" alt="logo">
						</a>
					</div>
					<div class="fl" id="footer_desc">
						<div>Прокат лошадей в г. Харьков от КК «Оскар»</div>
					</div>
					<div class="fl" id="footer_mail">
						<div><img src="<?php echo get_template_directory_uri();?>/images/icon_mail_b.png" alt="mail">&nbsp;info@horse-club.kh.ua</div>
					</div>
					<div class="fl" id="footer_phone">
						<div><img src="<?php echo get_template_directory_uri();?>/images/icon_phone_b.png" alt="phone">&nbsp;(093) 202-07-58</div>
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
								<input type="submit" class="btn" value="Отправить">
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
	</body>
</html>