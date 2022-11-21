<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
get_header('shop'); ?>
<section>
    <?php do_action('woocommerce_before_main_content'); ?>
    ловралвыорал
    <?php while (have_posts()) : ?>
        <?php the_post();
        ?>

        <?php wc_get_template_part('content', 'single-product'); ?>

    <?php endwhile; // end of the loop. 
    do_action('woocommerce_after_main_content');
    ?>
</section>
<?php
get_footer('shop');
