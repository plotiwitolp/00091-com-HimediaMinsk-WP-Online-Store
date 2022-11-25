<?php
defined('ABSPATH') || exit;
get_header('shop');
?>

<?php if (is_shop()) { ?>

	<!-- START HOME -->
	<!-- main-banner -->
	<section>
		<div class="main-banner">
			<div class="main-banner__item">
				<div class="main-banner-definition">
					<h1 class="main-banner-definition__h1">
						<span><?php the_field('main-banner-definition__h1', 13); ?></span>
						<span class="underline-mark"></span>
					</h1>
					<p class="main-banner-definition__desc">
						<?php the_field('main-banner-definition__desc', 13); ?>
					</p>
					<div class="main-banner-definition__btns">
						<a class="main-banner-definition__cat" href="/all-cat">Каталог</a>
						<a class="main-banner-definition__call" href="/kontakty">Связаться с нами</a>
					</div>
				</div>
				<div class="main-banner-pic">
					<img src="<?php echo get_field('main-banner-pic', 13)['url']; ?>" alt="<?php echo get_field('main-banner-pic', 13)['alt']; ?>" />
				</div>
			</div>
		</div>
	</section>
	<!-- products -->
	<section>
		<div class="products">
			<div class="products-filter">
				<span class="products-filter__title">Фильтр</span>
				<?php // echo do_shortcode('[woof]'); 
				?>
				<?php
				if (function_exists('dynamic_sidebar'))
					dynamic_sidebar('right-sidebar');
				?>
				<span class="products-filter__reset"><a href="?">Сбросить</a></span>
			</div>
			<div class="products-goods">
				<div class="products-goods-top">
					<span class="products-goods-top__title">Популярные товары</span>
					<div class="products-goods-cart-wrap">
						<?php echo do_shortcode('[products limit="3" order="asc" orderby="rating" visibility="featured"]'); ?>
					</div>
				</div>
				<div class="products-goods-catalog">
					<span class="products-goods-catalog__title">Каталог товаров</span>
					<div class="products-goods-cart-wrap">
						<?php
						// echo do_shortcode('[products]');
						?>
						<?php
						if (woocommerce_product_loop()) {
							woocommerce_product_loop_start();
							if (wc_get_loop_prop('total')) {
								while (have_posts()) {
						?>
									<?php
									the_post();
									?>
									<?php
									do_action('woocommerce_shop_loop');
									?>
									<?php
									wc_get_template_part('content', 'product');
									?>
						<?php
								}
							}
							woocommerce_product_loop_end();
							do_action('woocommerce_after_shop_loop');
						} else {
							do_action('woocommerce_no_products_found');
						}
						// do_action('woocommerce_after_main_content');
						?>
					</div>
					<div class="products-goods-catalog__show-more">
						<span class="products-goods-catalog__show-more-span">Загрузить еще</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- about-company -->
	<section>
		<div class="about-company">
			<div class="about-company-desc">
				<h2 class="about-company-desc__h2">
					<span><?php the_field('about-company-desc__h2', 13); ?></span>
					<span class="underline-mark"></span>
				</h2>
				<div class="about-company-desc__p">
					<?php the_field('about-company-desc__p', 13); ?>
				</div>
				<span class="about-company-desc__btn">
					<a href="/o-kompanii">Подробнее</a>
				</span>
			</div>
			<div class="about-company-banner">
				<img src="<?php echo get_field('about-company-banner', 13)['url']; ?>" alt="<?php echo get_field('about-company-banner', 13)['alt']; ?>" />
				<span class="about-company-banner__shadow"></span>
			</div>
		</div>
	</section>
	<!-- our-advantages -->
	<div class="our-advantages">
		<section>
			<h2 class="our-advantages__title">Наши преимущества</h2>
			<div class="our-advantages-item-wrap">
				<div class="our-advantages-item">
					<img src="<?php bloginfo('template_url') ?>/assets/img/shopping-cart.svg">
					<span class="our-advantages-item__title">Ассортимент</span>
					<div class="our-advantages-item__desc"><?php the_field('our-advantages-item__desc_1', 13); ?></div>
				</div>
				<div class="our-advantages-item">
					<img src="<?php bloginfo('template_url') ?>/assets/img/baseline-loyalty.svg">
					<span class="our-advantages-item__title">Лояльность</span>
					<div class="our-advantages-item__desc"><?php the_field('our-advantages-item__desc_2', 13); ?></div>
				</div>
				<div class="our-advantages-item">
					<img src="<?php bloginfo('template_url') ?>/assets/img/miscellaneous-services.svg">
					<span class="our-advantages-item__title">Сервис</span>
					<div class="our-advantages-item__desc"><?php the_field('our-advantages-item__desc_3', 13); ?></div>
				</div>
			</div>
		</section>
	</div>
	<!-- our-clients -->
	<section class="our-clients-wrap">
		<div class="our-clients">
			<h2 class="our-clients__title">
				<span>Наши клиенты</span>
				<span class="underline-mark"></span>
			</h2>
			<div class="our-clients-slider">
				<div class="our-clients-slider__track">
					<?php
					$query = new WP_Query('cat=44&nopaging=1');
					if ($query->have_posts()) {
						while ($query->have_posts()) {
							$query->the_post(); ?>
							<div class="our-clients-slider__item">
								<div class="our-clients-slider__avatar">
									<?php the_post_thumbnail(); ?>
								</div>
								<div class="our-clients-slider__body">
									<span class="our-clients-slider__body-title">
										<?php the_title(); ?>
									</span>
									<span class="our-clients-slider__body-date">
										<?php echo get_the_date(); ?>
									</span>
									<div class="our-clients-slider__body-desc">
										<?php the_content(); ?>
									</div>
								</div>
							</div>
					<?php
						}
						wp_reset_postdata();
					} else
						echo 'Отзывов ещё нет.';
					?>
				</div>
				<div class="our-clients-slider__remote">
				</div>
			</div>
		</div>
	</section>
	<!-- our-contacts -->
	<section>
		<div class="our-contacts">
			<div class="our-contacts-map">
				<?php the_field('our_contacts_map', 13); ?>
			</div>
			<div class="our-contacts-info">
				<h2 class="our-contacts-info__h2">Наши контакты</h2>
				<span class="our-contacts-info__desc"><?php the_field('our-contacts-info__desc', 13); ?></span>
				<div class="our-contacts-info__body">
					<div class="our-contacts-info__item">
						<span class="our-contacts-info__icon">
							<img src="<?php bloginfo('template_url') ?>/assets/img/call-calling.svg">
						</span>
						<div class="our-contacts-info__text">
							<span class="our-contacts-info__text-title">Телефон</span>
							<span class="our-contacts-info__text-body"><?php the_field('phone', 13) ?></span>
						</div>
					</div>
					<div class="our-contacts-info__item">
						<span class="our-contacts-info__icon">
							<img src="<?php bloginfo('template_url') ?>/assets/img/sms_big.svg">
						</span>
						<div class="our-contacts-info__text">
							<span class="our-contacts-info__text-title">Почта</span>
							<span class="our-contacts-info__text-body"><?php the_field('email', 13) ?></span>
						</div>
					</div>
					<div class="our-contacts-info__item">
						<span class="our-contacts-info__icon">
							<img src="<?php bloginfo('template_url') ?>/assets/img/location.svg">
						</span>
						<div class="our-contacts-info__text">
							<span class="our-contacts-info__text-title">Адрес</span>
							<span class="our-contacts-info__text-body"><?php the_field('address', 13) ?></span>
						</div>
					</div>
					<span class="underline-mark"></span>
				</div>

			</div>
		</div>
	</section>
	<script src="<?php bloginfo('template_url'); ?>/assets/js/home.js"></script>
	<!-- END HOME -->

<?php } else { ?>

	<!-- START CATEGORY -->
	<section>
		<h1 class="woocommerce-products-header__title page-title categoriya__title">
			<span><?php woocommerce_page_title(); ?></span>
			<span class="underline-mark"></span>
		</h1>
		<p>
			<?php do_action('woocommerce_archive_description'); ?>
		</p>
		<div>
			<?php do_action('woocommerce_before_shop_loop'); ?>
		</div>
		<div class="products">
			<div class="products-filter">
				<span class="products-filter__title">Фильтр</span>
				<?php // echo do_shortcode('[woof]'); 
				?>
				<?php
				if (function_exists('dynamic_sidebar'))
					dynamic_sidebar('right-sidebar');
				?>
				<span class="products-filter__reset"><a href="?">Сбросить</a></span>
			</div>
			<div class="products-goods-cart-wrap">
				<?php
				if (woocommerce_product_loop()) {
					woocommerce_product_loop_start();
					if (wc_get_loop_prop('total')) {
						while (have_posts()) {
				?>
							<?php
							the_post(); ?>
							<?php do_action('woocommerce_shop_loop'); ?>
							<?php wc_get_template_part('content', 'product'); ?>
				<?php
						}
					}
					woocommerce_product_loop_end();
					do_action('woocommerce_after_shop_loop');
				} else {
					do_action('woocommerce_no_products_found');
				}
				do_action('woocommerce_after_main_content');
				?>
			</div>
		</div>
	</section>
	<!-- END CATEGORY -->

<?php } ?>

<?php get_footer('shop'); ?>