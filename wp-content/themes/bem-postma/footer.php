<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bem-postma
 */

?>

	<div class="footer">
			<div class="footer__body">
				<div class="footer__logo">
					<a href="https://google.com">
						<img src="<?php the_field('footer_logo', 'options'); ?>" alt="">
					</a>
				</div>
				<div class="footer__menu">
					<a href="https://google.com">
						<div class="footer__menu-item"><?php the_field('footer_menu-item_1', 'options'); ?></div>
					</a>
					<a href="https://facebook.com">
						<div class="footer__menu-item"><?php the_field('footer_menu-item_2', 'options'); ?></div>
					</a>
					<a href="https://ru.linkedin.com/"><div class="footer__menu-item"><?php the_field('footer_menu-item_3', 'options'); ?></div>
					</a>
					<a href="https://google.com"><div class="footer__menu-item"><?php the_field('footer_menu-item_4', 'options'); ?></div>
					</a>
				</div>
				<div class="footer__rights">© <?php echo date("Y");?>. All Rights Reserved </div>
			</div>
		</div>
	

	<?php wp_footer(); ?>
	</body>
</html>