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
						<img src="<?php echo get_template_directory_uri();?>/img/footer/footer-logo.svg" alt="">
					</a>
				</div>
				<div class="footer__menu">
					<a href="https://google.com">
						<div class="footer__menu-item">Home</div>
					</a>
					<a href="https://facebook.com">
						<div class="footer__menu-item">Facebook</div>
					</a>
					<a href="https://ru.linkedin.com/"><div class="footer__menu-item">LinkedIn</div>
					</a>
					<a href="https://google.com"><div class="footer__menu-item">Contact</div>
					</a>
				</div>
				<div class="footer__rights">© <?php echo date("Y");?>. All Rights Reserved </div>
			</div>
		</div>
	

	<?php wp_footer(); ?>
	</body>
</html>