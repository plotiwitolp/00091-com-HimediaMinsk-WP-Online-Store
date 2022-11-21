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
                    <!-- id="searchform"-->
                    <?php // get_search_form(); 
                    ?>
                    <?php aws_get_search_form(true); ?>
                </div>
                <div class="header-top__socials">
                    <a href="#">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/socials_white/akar-icons_instagram-fill.svg">
                    </a>
                    <a href="#">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/socials_white/bxl_telegram.svg">
                    </a>
                    <a href="#">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/socials_white/akar-icons_whatsapp-fill.svg">
                    </a>
                </div>
                <div class="header-top__phone">
                    <div class="header-top__tel">
                        <a href="tel:+73104372766">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/call-calling.svg" alt="">
                        </a>
                    </div>
                    <div class="header-top__quest-num">
                        <span class="header-top__quest">Появились вопросы?</span>
                        <span class="header-top__num">
                            <a href="tel:+73104372766">
                                310-437-2766
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
                        <!-- открывать/скрывать navigation__cat-nav -->
                        <a class="navigation__catalog-btn" href="javascript: void(0)">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/menu_open_white.svg" class="navigation__btn ">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/menu_close_white.svg" class="navigation__btn navigation_active">
                        </a>
                        <!-- на страницу каталог -->
                        <a href="http://00091-com-himediaminsk-wp-online-store/shop/">
                            <span>Весь каталог</span>
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
                        <img src="<?php bloginfo('template_url') ?>/assets/img/Cart.png" alt="">
                    </div>
                    <div class="basket-btns__heart">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/Mini_Button.png" alt="">
                    </div>
                    <div class="basket-btns__repeat">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/Mini_Button_3.png" alt="">
                    </div>
                </div>
            </div>
        </section>
    </header>
    <main>