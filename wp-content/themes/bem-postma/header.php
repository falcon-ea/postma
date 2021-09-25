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
						<img src="<?php the_field('cover_logo', 'options'); ?>" alt="">
					</a>
				</div>
				<div class="cover__title"><?php the_field('cover_title', 'options'); ?></div>
				<div class="cover__description"><?php the_field('cover_description', 'options'); ?></div>
				<div class="cover__line"></div>
				<div class="cover__button button"><?php the_field('cover_button', 'options'); ?></div>
				<div class="cover__arrow-down"></div>
				<style>
					.cover__body {
						background-image: url(<?php the_field('cover_body-bg', 'options'); ?>);
					}
				</style>
			</div>
		</div>
		<div class="header">
			<div class="header__section-menu section-menu">
				<div class="section-menu__item"><?php the_field('section-menu_item_1', 'options'); ?></div>
				<div class="section-menu__item"><?php the_field('section-menu_item_2', 'options'); ?></div>
				<div class="section-menu__item"><?php the_field('section-menu_item_3', 'options'); ?></div>
				<div class="section-menu__item"><?php the_field('section-menu_item_4', 'options'); ?></div>
			</div>
		</div>