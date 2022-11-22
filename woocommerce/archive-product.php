<?php
defined('ABSPATH') || exit;
get_header('shop');
?>
<section>
	<?php do_action('woocommerce_before_main_content'); ?>
	<?php if (is_shop()) : ?>
		<h1 class="woocommerce-products-header__title page-title categoriya__title">
			<span>Категории товаров</span>
			<span class="underline-mark"></span>
		</h1>
		<div class="categoriya-nav">
			<?php echo get_categories_product(); ?>
		</div>
	<?php else : ?>
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
				<span class="products-filter__title">Фильтры</span>
				<ul class="products-filter-cat">
					<li class="products-filter-cat__li">
						<span class="products-filter-cat__span">Диаметр</span>
						<ul class="products-filter-sub">
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 1</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 3</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 4</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 5</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 6</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 7</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 8</span>
							</li>
						</ul>
					</li>
					<li class="products-filter-cat__li">
						<span class="products-filter-cat__span">Длина</span>
						<ul class="products-filter-sub">
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 1</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 3</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 4</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 5</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 6</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 7</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 8</span>
							</li>
						</ul>
					</li>
					<li class="products-filter-cat__li">
						<span class="products-filter-cat__span">Цвет</span>
						<ul class="products-filter-sub">
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 1</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 3</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 4</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 5</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 6</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 7</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 8</span>
							</li>
						</ul>
					</li>
					<li class="products-filter-cat__li">
						<span class="products-filter-cat__span">Бренд</span>
						<ul class="products-filter-sub">
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 1</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 3</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 4</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 5</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 6</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 7</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 8</span>
							</li>
						</ul>
					</li>
					<li class="products-filter-cat__li">
						<span class="products-filter-cat__span">Упаковка</span>
						<ul class="products-filter-sub">
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 1</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 3</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 4</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 5</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 6</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 7</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 8</span>
							</li>
						</ul>
					</li>
					<li class="products-filter-cat__li">
						<span class="products-filter-cat__span">Размер под ключ(мм)</span>
						<ul class="products-filter-sub">
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 1</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 3</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 4</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 5</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 6</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 7</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">пример 8</span>
							</li>
						</ul>
					</li>
					<li class="products-filter-cat__li">
						<span class="products-filter-cat__span">Страна производства</span>
						<ul class="products-filter-sub">
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">Россия</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">Китай</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">Тайвань</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">Вьетнам</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">Индонезия</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">Германия</span>
							</li>
							<li class="products-filter-sub__li">
								<span class="products-filter-sub__span">Польша</span>
							</li>
						</ul>

					</li>
				</ul>
				<span class="products-filter__submit">Применить</span>
				<span class="products-filter__reset">Сбросить</span>
			</div>
			<div class="products-goods-cart-wrap">
				<?php
				if (woocommerce_product_loop()) {
					woocommerce_product_loop_start();
					if (wc_get_loop_prop('total')) {
						while (have_posts()) {
				?>
							<!-- <div class="products-goods-cart"> -->
							<?php
							the_post(); ?>
							<?php do_action('woocommerce_shop_loop'); ?>
							<?php wc_get_template_part('content', 'product'); ?>
							<!-- </div> -->
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
	<?php endif; ?>
</section>
<?php get_footer('shop'); ?>