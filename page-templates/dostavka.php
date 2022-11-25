<?php
/*
Template Name: Доставка
*/
?>
<?php get_header(); ?>
<section>
    <div class="about-company">
        <div class="about-company-desc">
            <h2 class="about-company-desc__h2">
                <span>Условия доставки</span>
                <span class="underline-mark"></span>
            </h2>
            <div class="about-company-desc__p">
                <?php the_field('about-company-desc__p'); ?>
            </div>
        </div>
        <div class="about-company-banner">
            <img src="<?php echo get_field('about-company-banner')['url']; ?>" alt="<?php echo get_field('about-company-banner')['alt']; ?>" />
            <span class="about-company-banner__shadow"></span>
        </div>
    </div>
    <div class="form-mail-to-us">
        <span class="form-mail-to-us__title">Напишите нам</span>
        <?php echo do_shortcode('[contact-form-7 id="179" title="Напишите нам"]'); ?>
    </div>
</section>
<?php get_footer(); ?>