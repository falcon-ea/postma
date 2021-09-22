<?php
/*
Template Name: Главная страница
*/
get_header();
?>

<div class="about">
			<div class="about__body">
				<div class="about__header">
					<div class="about__title title">ABOUT</div>
				<div class="about__description">We specialize in contemporary, functional, and stunning websites with design that really brings that "WOW" factor. 
					In our design process, we make sure to stay one step ahead of the latest trends, 
					never forgetting to abide by key web standards.</div>
				</div>
				<div class="about__row">
					<div class="about__column">
						<div class="item-about">
							<div class="item-about__icon">
								<img src="<?php echo get_template_directory_uri();?>/img/about/01.png" alt="">
							</div>
							<div class="item-about__title">WEB</div>
							<div class="item-about__text">We tend to deliver unique and 
								functional design, through 
								innovation and creativity.</div>
						</div>
					</div>
					<div class="about__column">
						<div class="item-about">
							<div class="item-about__icon">
								<img src="<?php echo get_template_directory_uri();?>/img/about/02.png" alt="">
							</div>
							<div class="item-about__title">iOS AND ANDROID</div>
							<div class="item-about__text">We seek to bring new businesses and 
								customers closer together through valuable 
								insights and proper targeting.</div>
						</div>
					</div>
					<div class="about__column"><div class="item-about"><div class="item-about__icon">
						<img src="<?php echo get_template_directory_uri();?>/img/about/03.png" alt="">
					</div>
					<div class="item-about__title">MARKETING</div>
					<div class="item-about__text">We’ll help you establish the right goals and build the right paths. Success depends on setting the right intention.
					</div>
					</div></div>
				</div>
			</div>
		</div>
		<div class="portfolio">
			<div class="portfolio__body">
				<div class="portfolio__title title">PORTFOLIO</div>
				<div class="portfolio__section-menu section-menu">
					<div class="section-menu__item">ALL</div>
					<div class="section-menu__item">WEB</div>
					<div class="section-menu__item">APPS</div>
					<div class="section-menu__item">OTHER</div>
				</div>
				<div class="portfolio__gallery">
					<div class="portfolio__row">
						<div class="portfolio__column">
							<a href="https://google.com">
								<div class="portfolio__image">
									<img src="<?php echo get_template_directory_uri();?>/img/portfolio/Background.jpg" alt="">
								</div>
							</a>
						</div>
						<div class="portfolio__column">
							<a href="https://google.com">
								<div class="portfolio__image">
									<img src="<?php echo get_template_directory_uri();?>/img/portfolio/Background.jpg" alt="">
								</div>
							</a>
						</div>
					</div>
					<div class="portfolio__row">
						<div class="portfolio__column">
							<a href="https://google.com">
								<div class="portfolio__image">
									<img src="<?php echo get_template_directory_uri();?>/img/portfolio/Background.jpg" alt="">
								</div>
							</a>
						</div>
						<div class="portfolio__column">
							<a href="https://google.com">
								<div class="portfolio__image">
									<img src="<?php echo get_template_directory_uri();?>/img/portfolio/Background.jpg" alt="">
								</div>
							</a>
						</div>
					</div>
					<div class="portfolio__row">
						<div class="portfolio__column">
							<a href="https://google.com">
								<div class="portfolio__image">
									<img src="<?php echo get_template_directory_uri();?>/img/portfolio/Background.jpg" alt="">
								</div>
							</a>
						</div>
						<div class="portfolio__column">
							<a href="https://google.com">
								<div class="portfolio__image">
									<img src="<?php echo get_template_directory_uri();?>/img/portfolio/Background.jpg" alt="">
								</div>
							</a>
						</div>
					</div>
				</div>

				</div>
				<div class="portfolio__button button">READ MORE</div>
			</div>
		</div>
		<div class="partners">
			<div class="partners__body">
				<div class="partners__title">Our partners</div>
				<div class="partners__row">
					<div class="partners__icon icon">
							<a href="https://google.com"><img src="<?php echo get_template_directory_uri();?>/img/partners/partner-1.svg" alt="">
							</a>
						</a>
					</div>
					<div class="partners__icon icon">
						<a href="https://google.com">
							<img src="<?php echo get_template_directory_uri();?>/img/partners/partner-2.svg" alt="">
						</a>
					</div>
					<div class="partners__icon icon">
						<a href="https://google.com">
							<img src="<?php echo get_template_directory_uri();?>/img/partners/partner-3.svg" alt="">
						</a>
					</div>
					<div class="partners__icon icon">
						<a href="https://google.com">
							<img src="<?php echo get_template_directory_uri();?>/img/partners/partner-4.svg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="contact">
			<div class="contact__body">
				<div class="contact__title title">CONTACT</div>
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
						<div class="contact__button button">SEND</div>
					</div>
					<div class="contact__info">
						<div class="contact__text">Have an idea for a project? Just looking to explore and see the possibilities? I'm here to help. <span>Postma Elena</span></div>
						<div class="contact__social social">
							<div class="contact__item-social">
								<a href="https://instagram.com">
									<img src="<?php echo get_template_directory_uri();?>/img/contact/instagram-brands.svg" alt="">
								</a>
							</div>
							<div class="contact__item-social">
								<a href="https://facebook.com">
									<img src="<?php echo get_template_directory_uri();?>/img/contact/facebook-square-brands.svg" alt="">
								</a>
							</div>
						</div>
						<div class="contact__contact"><a href="mailto:e-mail: postmaelena@gmail.com">e-mail: <span>postmaelena@gmail.com</span></a></div>
					</div>
				</div>
			</div>
		</div>

<?php
get_footer();
