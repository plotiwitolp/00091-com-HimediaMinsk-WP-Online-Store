<?php
/*
Template Name: Категории товаров
*/
?>
<?php get_header(); ?>
<section>
    <h1 class="woocommerce-products-header__title page-title categoriya__title">
        <span>Категории товаров</span>
        <span class="underline-mark"></span>
    </h1>
    <div class="categoriya-nav">
        <?php echo get_categories_product(); ?>
    </div>
</section>
<?php get_footer(); ?>