<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_site_icon(); ?>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <section>
            <div class="header-top">
                <div class="header-top__logo">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="header-top__search">
                    <?php aws_get_search_form(true); ?>
                </div>
                <div class="header-top__socials">
                    <a href="<?php the_field('instagram', 13) ?>" target="_blank">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/socials_white/akar-icons_instagram-fill.svg">
                    </a>
                    <a href="<?php the_field('telegram', 13) ?>" target="_blank">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/socials_white/bxl_telegram.svg">
                    </a>
                    <a href="<?php the_field('whatsapp', 13) ?>" target="_blank">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/socials_white/akar-icons_whatsapp-fill.svg">
                    </a>
                </div>
                <div class="header-top__phone">
                    <div class="header-top__tel">
                        <a href="tel:<?php the_field('phone', 13) ?>">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/call-calling.svg">
                        </a>
                    </div>
                    <div class=" header-top__quest-num">
                        <span class="header-top__quest">Появились вопросы?</span>
                        <span class="header-top__num">
                            <a href="tel:<?php the_field('phone', 13) ?>">
                                <?php the_field('phone', 13) ?>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </section>
        <span class="underline-dark-mark"></span>
        <section class="header-nav">
            <div class="header-bottom">
                <div class="navigation">
                    <div class="navigation__catalog">
                        <a class="navigation__catalog-btn" href="javascript: void(0)">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/menu_open_white.svg" class="navigation__btn ">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/menu_close_white.svg" class="navigation__btn navigation_active">
                        </a>
                        <a href="/all-cat">
                            <span>
                                Весь каталог
                            </span>
                        </a>
                        <div class="navigation__cat-nav">
                            <?php wp_nav_menu([
                                'theme_location'  => 'top_1',
                            ]);
                            ?>
                        </div>
                    </div>
                    <div class="navigation__main-menu">
                        <?php wp_nav_menu([
                            'theme_location'  => 'top_2',
                        ]);
                        ?>
                    </div>
                </div>
                <div class="basket-btns">
                    <div class="basket-btns__bag">
                        <a href="<?php echo esc_url(wc_get_cart_url()); ?>">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/Cart.png">
                        </a>
                    </div>
                    <div class="basket-btns__heart">
                        <a href="/wishlist">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/Mini_Button.png">
                        </a>
                    </div>
                    <div class="basket-btns__repeat">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/Mini_Button_3.png">
                    </div>
                </div>
            </div>
        </section>
    </header>
    <main>