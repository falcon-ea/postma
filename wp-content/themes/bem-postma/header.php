<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bem-postma
 */

?>

<!DOCTYPE html>
<!-- Оболочка документа, указываем язык содержимого -->
<html lang="ru">
	<!-- Заголовок страницы, контейнер для других важных данных (не отображается) -->
	<head>
		<!-- Заголовок страницы в браузере -->
		<title>BEM POSTMA</title>
		<!-- Кодировка страницы -->
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<?php wp_head(); ?> 
	</head>
	<!-- Отображаемое тело страницы -->
	<body>
		<div class="cover">
			<div class="cover__body">
				<div class="cover__logo">
					<a href="https://google.com">
						<img src="<?php echo get_template_directory_uri();?>/img/cover/cover-logo.svg" alt="">
					</a>
				</div>
				<div class="cover__title">Clear, smart, attractive design</div>
				<div class="cover__description">for your app, logo, website</div>
				<div class="cover__line"></div>
				<div class="cover__button button">READ MORE</div>
				<div class="cover__arrow-down"></div>
			</div>
		</div>
		<div class="header">
			<div class="header__section-menu section-menu">
				<div class="section-menu__item">HOME</div>
				<div class="section-menu__item">ABOUT US</div>
				<div class="section-menu__item">PORTFOLIO</div>
				<div class="section-menu__item">CONTACT</div>
			</div>
		</div>