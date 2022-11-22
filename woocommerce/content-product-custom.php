<?php
require_once(ABSPATH . 'wp-admin/includes/template.php');
?>
<div class="products-goods-cart">
    <div class="products-goods-cart__img-wrap">
        <a href="<?php echo esc_url(get_permalink($product_id)); ?>">
            <?php echo get_the_post_thumbnail(); ?>
        </a>
    </div>
    <h3 class="products-goods-cart__title">
        <a href="<?php echo esc_url(get_permalink($product_id)); ?>">
            <?php echo get_the_title($comment->comment_post_ID); ?>
        </a>
    </h3>
    <div class="products-goods-cart__rank">
        <div class="products-goods-cart__stars">
            <?php
            global $product;
            if ('no' === get_option('woocommerce_enable_review_rating')) {
                return;
            }
            $review_count = $product->get_review_count();
            $average = $product->get_average_rating();
            ?>
            <?php wp_star_rating(['rating' => $average]); ?>
        </div>
        <span class="products-goods-cart__count-reviews">
            <?php echo '(' . $review_count . ')'; ?>
        </span>
    </div>
    <div class="products-goods-cart__parameters">
        <?php $product->list_attributes(); ?>
    </div>
    <div class="products-goods-cart__cost">
        <span class="products-goods-cart__cost-title">Цена:</span>
        <span class="products-goods-cart__cost-count"><?php echo $product->get_price_html(); ?></span>
    </div>
    <div class="products-goods-cart__btns">
        <span class="products-goods-cart__buy">
            <a href="/checkout?set-cart-qty_<?php echo $product->get_id();  ?>=1">Купить</a>
        </span>
        <span class="products-goods-cart__basket">
            <a href="<?php echo do_shortcode('[add_to_cart_url id="' . get_the_ID() . '"]'); ?>">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/bag_dark.svg">
            </a>
        </span>
        <span class="products-goods-cart__heart">
            <?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
        </span>
    </div>
</div>