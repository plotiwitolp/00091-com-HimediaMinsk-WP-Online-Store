<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header('shop'); ?>
<section>
    <?php do_action('woocommerce_before_main_content'); ?>
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <div class="product-custom">
            <?php wc_get_template_part('content', 'single-product'); ?>
        </div>
    <?php endwhile;
    do_action('woocommerce_after_main_content');
    ?>
</section>
<?php
get_footer('shop');
