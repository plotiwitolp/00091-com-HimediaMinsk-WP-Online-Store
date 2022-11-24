<?php
/*
Template Name: Главная страница
*/
?>

<?php get_header(); ?>

<!-- START HOME -->
<!-- main-banner -->
<section>
    <div class="main-banner">
        <div class="main-banner__item">
            <div class="main-banner-definition">
                <h1 class="main-banner-definition__h1">
                    <span><?php the_field('main-banner-definition__h1'); ?></span>
                    <span class="underline-mark"></span>
                </h1>
                <p class="main-banner-definition__desc">
                    <?php the_field('main-banner-definition__desc'); ?>
                </p>
                <div class="main-banner-definition__btns">
                    <a class="main-banner-definition__cat" href="/shop">Каталог</a>
                    <a class="main-banner-definition__call" href="/kontakty">Связаться с нами</a>
                </div>
            </div>
            <div class="main-banner-pic">
                <img src="<?php echo get_field('main-banner-pic')['url']; ?>" alt="<?php echo get_field('main-banner-pic')['alt']; ?>" />
            </div>
        </div>
    </div>
</section>
<!-- products -->
<section>
    <div class="products">
        <div class="products-filter">
            <span class="products-filter__title">Фильтры</span>
            <?php
            if (function_exists('dynamic_sidebar'))
                dynamic_sidebar('right-sidebar');
            ?>
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

                    <?php echo do_shortcode('[products]'); ?>

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
                <span><?php the_field('about-company-desc__h2'); ?></span>
                <span class="underline-mark"></span>
            </h2>
            <div class="about-company-desc__p">
                <?php the_field('about-company-desc__p'); ?>
            </div>
            <span class="about-company-desc__btn">
                <a href="/o-kompanii">Подробнее</a>
            </span>
        </div>
        <div class="about-company-banner">
            <img src="<?php echo get_field('about-company-banner')['url']; ?>" alt="<?php echo get_field('about-company-banner')['alt']; ?>" />
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
                <div class="our-advantages-item__desc"><?php the_field('our-advantages-item__desc_1'); ?></div>
            </div>
            <div class="our-advantages-item">
                <img src="<?php bloginfo('template_url') ?>/assets/img/baseline-loyalty.svg">
                <span class="our-advantages-item__title">Лояльность</span>
                <div class="our-advantages-item__desc"><?php the_field('our-advantages-item__desc_2'); ?></div>
            </div>
            <div class="our-advantages-item">
                <img src="<?php bloginfo('template_url') ?>/assets/img/miscellaneous-services.svg">
                <span class="our-advantages-item__title">Сервис</span>
                <div class="our-advantages-item__desc"><?php the_field('our-advantages-item__desc_3'); ?></div>
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
            <?php the_field('our_contacts_map'); ?>
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

<?php get_footer(); ?>