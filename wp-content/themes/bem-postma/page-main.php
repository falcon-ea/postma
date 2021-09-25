<?php
/*
Template Name: Главная страница
*/
get_header();
?>

<div class="about">
			<div class="about__body">
				<div class="about__header">
					<div class="about__title title"><?php the_field('about_title', 'options'); ?></div>
				<div class="about__description"><?php the_field('about_description', 'options'); ?></div>
				</div>
				<div class="about__row">
					<div class="about__column">
						<div class="item-about">
							<div class="item-about__icon">
								<img src="<?php the_field('item-about_icon_1', 'options'); ?>" alt="">
							</div>
							<div class="item-about__title"><?php the_field('item-about_title_1', 'options'); ?></div>
							<div class="item-about__text"><?php the_field('item-about_text_1', 'options'); ?></div>
						</div>
					</div>
					<div class="about__column">
						<div class="item-about">
							<div class="item-about__icon">
								<img src="<?php the_field('item-about_icon_2', 'options'); ?>" alt="">
							</div>
							<div class="item-about__title"><?php the_field('item-about_title_2', 'options'); ?></div>
							<div class="item-about__text"><?php the_field('item-about_text_2', 'options'); ?></div>
						</div>
					</div>
					<div class="about__column"><div class="item-about"><div class="item-about__icon">
						<img src="<?php the_field('item-about_icon_3', 'options'); ?>" alt="">
					</div>
					<div class="item-about__title"><?php the_field('item-about_title_3', 'options'); ?></div>
					<div class="item-about__text"><?php the_field('item-about_text_3', 'options'); ?></div>
					</div></div>
				</div>
			</div>
		</div>
		<div class="portfolio">
			<div class="portfolio__body">
				<div class="portfolio__title title"><?php the_field('portfolio_title', 'options'); ?></div>
				<div class="portfolio__section-menu section-menu">
					<div class="section-menu__item"><?php the_field('section-menu_item_1', 'options'); ?></div>
					<div class="section-menu__item"><?php the_field('section-menu_item_2', 'options'); ?></div>
					<div class="section-menu__item"><?php the_field('section-menu_item_3', 'options'); ?></div>
					<div class="section-menu__item"><?php the_field('section-menu_item_4', 'options'); ?></div>
				</div>
				<div class="portfolio__gallery">
					<div class="portfolio__row">
						<div class="portfolio__column">
							<a href="https://google.com">
								<div class="portfolio__image">
									<img src="<?php the_field('portfolio_image_1', 'options'); ?>" alt="">
								</div>
							</a>
						</div>
						<div class="portfolio__column">
							<a href="https://google.com">
								<div class="portfolio__image">
									<img src="<?php the_field('portfolio_image_2', 'options'); ?>" alt="">
								</div>
							</a>
						</div>
					</div>
					<div class="portfolio__row">
						<div class="portfolio__column">
							<a href="https://google.com">
								<div class="portfolio__image">
									<img src="<?php the_field('portfolio_image_3', 'options'); ?>" alt="">
								</div>
							</a>
						</div>
						<div class="portfolio__column">
							<a href="https://google.com">
								<div class="portfolio__image">
									<img src="<?php the_field('portfolio_image_4', 'options'); ?>" alt="">
								</div>
							</a>
						</div>
					</div>
					<div class="portfolio__row">
						<div class="portfolio__column">
							<a href="https://google.com">
								<div class="portfolio__image">
									<img src="<?php the_field('portfolio_image_5', 'options'); ?>" alt="">
								</div>
							</a>
						</div>
						<div class="portfolio__column">
							<a href="https://google.com">
								<div class="portfolio__image">
									<img src="<?php the_field('portfolio_image_6', 'options'); ?>" alt="">
								</div>
							</a>
						</div>
					</div>
				</div>

				</div>
				<div class="portfolio__button button"><?php the_field('portfolio_button', 'options'); ?></div>
			</div>
		</div>
		<div class="partners">
			<div class="partners__body">
				<div class="partners__title"><?php the_field('partners_title', 'options'); ?></div>
				<div class="partners__row">
					<div class="partners__icon icon">
							<a href="https://google.com">
							<img src="<?php the_field('partners_icon_1', 'options'); ?>" alt="">
							</a>
						</a>
					</div>
					<div class="partners__icon icon">
						<a href="https://google.com">
							<img src="<?php the_field('partners_icon_2', 'options'); ?>" alt="">
						</a>
					</div>
					<div class="partners__icon icon">
						<a href="https://google.com">
							<img src="<?php the_field('partners_icon_3', 'options'); ?>" alt="">
						</a>
					</div>
					<div class="partners__icon icon">
						<a href="https://google.com">
							<img src="<?php the_field('partners_icon_4', 'options'); ?>" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="contact">
			<div class="contact__body">
				<div class="contact__title title"><?php the_field('contact_title', 'options'); ?></div>
				<div class="contact__column">
					<div class="contact__form">
						<div class="contact__name">
							<input type="text" name="first_name" placeholder="YOUR NAME">
						</div>
						<div class="contact__email">
							<input type="email" name="email" placeholder="YOUR E-MAIL">
						</div>
						<div class="contact__message">
							<input type="text" name="message" placeholder="MESSAGE">
						</div>
						<div class="contact__button button"><?php the_field('contact_button', 'options'); ?></div>
					</div>
					<div class="contact__info">
						<div class="contact__text"><?php the_field('contact_text', 'options'); ?><span><?php the_field('contact_text_name', 'options'); ?></span></div>
						<div class="contact__social social">
							<div class="contact__item-social">
								<a href="https://instagram.com">
									<img src="<?php the_field('contact_item-social_insta', 'options'); ?>" alt="">
								</a>
							</div>
							<div class="contact__item-social">
								<a href="https://facebook.com">
									<img src="<?php the_field('contact_item-social_facebook', 'options'); ?>" alt="">
								</a>
							</div>
						</div>
						<div class="contact__contact"><a href="mailto:e-mail: <?php the_field('contact_contact', 'options'); ?>">e-mail: <span><?php the_field('contact_contact', 'options'); ?></span></a></div>
					</div>
				</div>
			</div>
		</div>

<?php
get_footer();
