<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лидер крепёж</title>
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
    <header class="header">
        <section>
            <div class="header-top">
                <div class="header-top__logo">
                    <a href="#">
                        <img src="./assets/img/Logo_2_1.png" alt="Лидер крепёж">
                    </a>
                </div>
                <div class="header-top__search">
                    <form id="search" action="">
                        <input type="text" placeholder="Поиск в каталоге">
                    </form>
                </div>
                <div class="header-top__socials">
                    <a href="#">
                        <img src="./assets/img/socials_white/akar-icons_instagram-fill.svg">
                    </a>
                    <a href="#">
                        <img src="./assets/img/socials_white/bxl_telegram.svg">
                    </a>
                    <a href="#">
                        <img src="./assets/img/socials_white/akar-icons_whatsapp-fill.svg">
                    </a>
                </div>
                <div class="header-top__phone">
                    <div class="header-top__tel">
                        <a href="tel:+73104372766">
                            <img src="./assets/img/call-calling.svg" alt="">
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
        <section>
            <div class="header-bottom">
                <div class="navigation">
                    <div class="navigation__catalog">
                        <!-- открывать/скрывать navigation__cat-nav -->
                        <a href="#">
                            <img src="./assets/img/menu_open_white.svg" class="navigation__btn ">
                            <img src="./assets/img/menu_close_white.svg" class="navigation__btn navigation_active">
                        </a>
                        <!-- на страницу каталог -->
                        <a href="#">
                            <span>Весь каталог</span>
                        </a>
                        <div class="navigation__cat-nav">
                            <ul>
                                <li><a href="#">Саморезы - шурупы</a></li>
                                <li><a href="#">Анкеры</a></li>
                                <li><a href="#">Кровельные саморезы</a></li>
                                <li><a href="#">Заклёпки</a></li>
                                <li><a href="#">Метрический крепёж</a></li>
                                <li><a href="#">Такелаж</a></li>
                                <li><a href="#">Дюбельная техника</a></li>
                                <li><a href="#">Гвозди и скобы</a></li>
                                <li><a href="#">Крепёж KENNER</a></li>
                                <li><a href="#">Химический крепёж</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="navigation__main-menu">
                        <ul>
                            <li><a href="#">Доставка</a></li>
                            <li><a href="#">Контакты</a></li>
                            <li><a href="#">О компании</a></li>
                        </ul>
                    </div>
                </div>
                <div class="basket-btns">
                    <div class="basket-btns__bag">
                        <img src="./assets/img/Cart.png" alt="">
                    </div>
                    <div class="basket-btns__heart">
                        <img src="./assets/img/Mini_Button.png" alt="">
                    </div>
                    <div class="basket-btns__repeat">
                        <img src="./assets/img/Mini_Button_3.png" alt="">
                    </div>
                </div>
            </div>
        </section>
    </header>

    <main>
        <!-- main-banner -->
        <section>
            <div class="main-banner">
                <div class="main-banner__item">
                    <div class="main-banner-definition">
                        <h1 class="main-banner-definition__h1">
                            <span>Пример заголовка УТП</span>
                            <span class="underline-mark"></span>
                        </h1>
                        <p class="main-banner-definition__desc">
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                        </p>
                        <div class="main-banner-definition__btns">
                            <a class="main-banner-definition__cat" href="#">Каталог</a>
                            <a class="main-banner-definition__call" href="#">Связаться с нами</a>
                        </div>
                    </div>
                    <div class="main-banner-pic">
                        <img src="./assets/img/banner-top.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- products -->
        <section>
            <div class="products">
                <div class="products-filter">
                    <span class="products-filter__title">Фильтры</span>
                    <ul class="products-filter-cat">
                        <li class="products-filter-cat__li">
                            <span>Диаметр</span>
                        </li>
                        <li class="products-filter-cat__li">
                            <span>Длина</span>
                        </li>
                        <li class="products-filter-cat__li">
                            <span>Цвет</span>
                        </li>
                        <li class="products-filter-cat__li">
                            <span>Бренд</span>
                        </li>
                        <li class="products-filter-cat__li">
                            <span>Упаковка</span>
                        </li>
                        <li class="products-filter-cat__li">
                            <span>Размер под ключ(мм)</span>
                        </li>
                        <li class="products-filter-cat__li products-filter-cat__li_active">
                            <span>Страна производства</span>
                            <ul class="products-filter-sub">
                                <li class="products-filter-sub__li">
                                    <span>Россия</span>
                                </li>
                                <li class="products-filter-sub__li products-filter-sub__li_active">
                                    <span>Китай</span>
                                </li>
                                <li class="products-filter-sub__li">
                                    <span>Тайвань</span>
                                </li>
                                <li class="products-filter-sub__li">
                                    <span>Вьетнам</span>
                                </li>
                                <li class="products-filter-sub__li">
                                    <span>Индонезия</span>
                                </li>
                                <li class="products-filter-sub__li">
                                    <span>Германия</span>
                                </li>
                                <li class="products-filter-sub__li">
                                    <span>Польша</span>
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
                            <div class="products-goods-cart">
                                <div class="products-goods-cart__img-wrap">
                                    <img class="products-goods-cart__img" src="./assets/img/fastener_store/GM_07350 копия.JPG" alt="">
                                </div>
                                <h3 class="products-goods-cart__title">Саморезы кровельные RAL по металлу</h3>
                                <div class="products-goods-cart__rank">
                                    <div class="products-goods-cart__stars">
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                    </div>
                                    <span class="products-goods-cart__count-reviews">(67)</span>
                                </div>
                                <div class="products-goods-cart__parameters">
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Бренд</span>
                                        <span class="products-goods-cart__parameter-body">KENNER</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Покрытие</span>
                                        <span class="products-goods-cart__parameter-body">Окрашенные RAL</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Головка</span>
                                        <span class="products-goods-cart__parameter-body">Шестигранная (8мм)</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Шаг резьбы</span>
                                        <span class="products-goods-cart__parameter-body">Мелкий (по металлу)</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Наконечник</span>
                                        <span class="products-goods-cart__parameter-body">Со сверлом (РТ-3)</span>
                                    </div>
                                </div>
                                <div class="products-goods-cart__cost">
                                    <span class="products-goods-cart__cost-title">Цена:</span>
                                    <span class="products-goods-cart__cost-count">469.46</span>
                                    <span class="products-goods-cart__cost-currency ">₽</span>
                                </div>
                                <div class="products-goods-cart__btns">
                                    <span class="products-goods-cart__buy">Купить</span>
                                    <span class="products-goods-cart__basket">
                                        <img src="./assets/img/bag_dark.svg" alt="">
                                    </span>
                                    <span class="products-goods-cart__heart">
                                        <img src="./assets/img/heart_dark.svg" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="products-goods-cart">
                                <div class="products-goods-cart__img-wrap">
                                    <img class="products-goods-cart__img" src="./assets/img/fastener_store/GM_07350 копия.JPG" alt="">
                                </div>
                                <h3 class="products-goods-cart__title">Саморезы кровельные RAL по металлу</h3>
                                <div class="products-goods-cart__rank">
                                    <div class="products-goods-cart__stars">
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                    </div>
                                    <span class="products-goods-cart__count-reviews">(67)</span>
                                </div>
                                <div class="products-goods-cart__parameters">
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Бренд</span>
                                        <span class="products-goods-cart__parameter-body">KENNER</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Покрытие</span>
                                        <span class="products-goods-cart__parameter-body">Окрашенные RAL</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Головка</span>
                                        <span class="products-goods-cart__parameter-body">Шестигранная (8мм)</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Шаг резьбы</span>
                                        <span class="products-goods-cart__parameter-body">Мелкий (по металлу)</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Наконечник</span>
                                        <span class="products-goods-cart__parameter-body">Со сверлом (РТ-3)</span>
                                    </div>
                                </div>
                                <div class="products-goods-cart__cost">
                                    <span class="products-goods-cart__cost-title">Цена</span>
                                    <span class="products-goods-cart__cost-count">469.46</span>
                                    <span class="products-goods-cart__cost-currency ">₽</span>
                                </div>
                                <div class="products-goods-cart__btns">
                                    <span class="products-goods-cart__buy">Купить</span>
                                    <span class="products-goods-cart__basket">
                                        <img src="./assets/img/bag_dark.svg" alt="">
                                    </span>
                                    <span class="products-goods-cart__heart">
                                        <img src="./assets/img/heart_dark.svg" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="products-goods-cart">
                                <div class="products-goods-cart__img-wrap">
                                    <img class="products-goods-cart__img" src="./assets/img/fastener_store/GM_07350 копия.JPG" alt="">
                                </div>
                                <h3 class="products-goods-cart__title">Саморезы кровельные RAL по металлу</h3>
                                <div class="products-goods-cart__rank">
                                    <div class="products-goods-cart__stars">
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                    </div>
                                    <span class="products-goods-cart__count-reviews">(67)</span>
                                </div>
                                <div class="products-goods-cart__parameters">
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Бренд</span>
                                        <span class="products-goods-cart__parameter-body">KENNER</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Покрытие</span>
                                        <span class="products-goods-cart__parameter-body">Окрашенные RAL</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Головка</span>
                                        <span class="products-goods-cart__parameter-body">Шестигранная (8мм)</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Шаг резьбы</span>
                                        <span class="products-goods-cart__parameter-body">Мелкий (по металлу)</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Наконечник</span>
                                        <span class="products-goods-cart__parameter-body">Со сверлом (РТ-3)</span>
                                    </div>
                                </div>
                                <div class="products-goods-cart__cost">
                                    <span class="products-goods-cart__cost-title">Цена</span>
                                    <span class="products-goods-cart__cost-count">469.46</span>
                                    <span class="products-goods-cart__cost-currency ">₽</span>
                                </div>
                                <div class="products-goods-cart__btns">
                                    <span class="products-goods-cart__buy">Купить</span>
                                    <span class="products-goods-cart__basket">
                                        <img src="./assets/img/bag_dark.svg" alt="">
                                    </span>
                                    <span class="products-goods-cart__heart">
                                        <img src="./assets/img/heart_dark.svg" alt="">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="products-goods-catalog">
                        <span class="products-goods-catalog__title">Каталог товаров</span>
                        <div class="products-goods-cart-wrap">
                            <div class="products-goods-cart">
                                <div class="products-goods-cart__img-wrap">
                                    <img class="products-goods-cart__img" src="./assets/img/fastener_store/GM_07350 копия.JPG" alt="">
                                </div>
                                <h3 class="products-goods-cart__title">Саморезы кровельные RAL по металлу</h3>
                                <div class="products-goods-cart__rank">
                                    <div class="products-goods-cart__stars">
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                    </div>
                                    <span class="products-goods-cart__count-reviews">(67)</span>
                                </div>
                                <div class="products-goods-cart__parameters">
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Бренд</span>
                                        <span class="products-goods-cart__parameter-body">KENNER</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Покрытие</span>
                                        <span class="products-goods-cart__parameter-body">Окрашенные RAL</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Головка</span>
                                        <span class="products-goods-cart__parameter-body">Шестигранная (8мм)</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Шаг резьбы</span>
                                        <span class="products-goods-cart__parameter-body">Мелкий (по металлу)</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Наконечник</span>
                                        <span class="products-goods-cart__parameter-body">Со сверлом (РТ-3)</span>
                                    </div>
                                </div>
                                <div class="products-goods-cart__cost">
                                    <span class="products-goods-cart__cost-title">Цена</span>
                                    <span class="products-goods-cart__cost-count">469.46</span>
                                    <span class="products-goods-cart__cost-currency ">₽</span>
                                </div>
                                <div class="products-goods-cart__btns">
                                    <span class="products-goods-cart__buy">Купить</span>
                                    <span class="products-goods-cart__basket">
                                        <img src="./assets/img/bag_dark.svg" alt="">
                                    </span>
                                    <span class="products-goods-cart__heart">
                                        <img src="./assets/img/heart_dark.svg" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="products-goods-cart">
                                <div class="products-goods-cart__img-wrap">
                                    <img class="products-goods-cart__img" src="./assets/img/fastener_store/GM_07350 копия.JPG" alt="">
                                </div>
                                <h3 class="products-goods-cart__title">Саморезы кровельные RAL по металлу</h3>
                                <div class="products-goods-cart__rank">
                                    <div class="products-goods-cart__stars">
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                    </div>
                                    <span class="products-goods-cart__count-reviews">(67)</span>
                                </div>
                                <div class="products-goods-cart__parameters">
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Бренд</span>
                                        <span class="products-goods-cart__parameter-body">KENNER</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Покрытие</span>
                                        <span class="products-goods-cart__parameter-body">Окрашенные RAL</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Головка</span>
                                        <span class="products-goods-cart__parameter-body">Шестигранная (8мм)</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Шаг резьбы</span>
                                        <span class="products-goods-cart__parameter-body">Мелкий (по металлу)</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Наконечник</span>
                                        <span class="products-goods-cart__parameter-body">Со сверлом (РТ-3)</span>
                                    </div>
                                </div>
                                <div class="products-goods-cart__cost">
                                    <span class="products-goods-cart__cost-title">Цена</span>
                                    <span class="products-goods-cart__cost-count">469.46</span>
                                    <span class="products-goods-cart__cost-currency ">₽</span>
                                </div>
                                <div class="products-goods-cart__btns">
                                    <span class="products-goods-cart__buy">Купить</span>
                                    <span class="products-goods-cart__basket">
                                        <img src="./assets/img/bag_dark.svg" alt="">
                                    </span>
                                    <span class="products-goods-cart__heart">
                                        <img src="./assets/img/heart_dark.svg" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="products-goods-cart">
                                <div class="products-goods-cart__img-wrap">
                                    <img class="products-goods-cart__img" src="./assets/img/fastener_store/GM_07350 копия.JPG" alt="">
                                </div>
                                <h3 class="products-goods-cart__title">Саморезы кровельные RAL по металлу</h3>
                                <div class="products-goods-cart__rank">
                                    <div class="products-goods-cart__stars">
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                    </div>
                                    <span class="products-goods-cart__count-reviews">(67)</span>
                                </div>
                                <div class="products-goods-cart__parameters">
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Бренд</span>
                                        <span class="products-goods-cart__parameter-body">KENNER</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Покрытие</span>
                                        <span class="products-goods-cart__parameter-body">Окрашенные RAL</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Головка</span>
                                        <span class="products-goods-cart__parameter-body">Шестигранная (8мм)</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Шаг резьбы</span>
                                        <span class="products-goods-cart__parameter-body">Мелкий (по металлу)</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Наконечник</span>
                                        <span class="products-goods-cart__parameter-body">Со сверлом (РТ-3)</span>
                                    </div>
                                </div>
                                <div class="products-goods-cart__cost">
                                    <span class="products-goods-cart__cost-title">Цена</span>
                                    <span class="products-goods-cart__cost-count">469.46</span>
                                    <span class="products-goods-cart__cost-currency ">₽</span>
                                </div>
                                <div class="products-goods-cart__btns">
                                    <span class="products-goods-cart__buy">Купить</span>
                                    <span class="products-goods-cart__basket">
                                        <img src="./assets/img/bag_dark.svg" alt="">
                                    </span>
                                    <span class="products-goods-cart__heart">
                                        <img src="./assets/img/heart_dark.svg" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="products-goods-cart">
                                <div class="products-goods-cart__img-wrap">
                                    <img class="products-goods-cart__img" src="./assets/img/fastener_store/GM_07350 копия.JPG" alt="">
                                </div>
                                <h3 class="products-goods-cart__title">Саморезы кровельные RAL по металлу</h3>
                                <div class="products-goods-cart__rank">
                                    <div class="products-goods-cart__stars">
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                    </div>
                                    <span class="products-goods-cart__count-reviews">(67)</span>
                                </div>
                                <div class="products-goods-cart__parameters">
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Бренд</span>
                                        <span class="products-goods-cart__parameter-body">KENNER</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Покрытие</span>
                                        <span class="products-goods-cart__parameter-body">Окрашенные RAL</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Головка</span>
                                        <span class="products-goods-cart__parameter-body">Шестигранная (8мм)</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Шаг резьбы</span>
                                        <span class="products-goods-cart__parameter-body">Мелкий (по металлу)</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Наконечник</span>
                                        <span class="products-goods-cart__parameter-body">Со сверлом (РТ-3)</span>
                                    </div>
                                </div>
                                <div class="products-goods-cart__cost">
                                    <span class="products-goods-cart__cost-title">Цена</span>
                                    <span class="products-goods-cart__cost-count">469.46</span>
                                    <span class="products-goods-cart__cost-currency ">₽</span>
                                </div>
                                <div class="products-goods-cart__btns">
                                    <span class="products-goods-cart__buy">Купить</span>
                                    <span class="products-goods-cart__basket">
                                        <img src="./assets/img/bag_dark.svg" alt="">
                                    </span>
                                    <span class="products-goods-cart__heart">
                                        <img src="./assets/img/heart_dark.svg" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="products-goods-cart">
                                <div class="products-goods-cart__img-wrap">
                                    <img class="products-goods-cart__img" src="./assets/img/fastener_store/GM_07350 копия.JPG" alt="">
                                </div>
                                <h3 class="products-goods-cart__title">Саморезы кровельные RAL по металлу</h3>
                                <div class="products-goods-cart__rank">
                                    <div class="products-goods-cart__stars">
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                    </div>
                                    <span class="products-goods-cart__count-reviews">(67)</span>
                                </div>
                                <div class="products-goods-cart__parameters">
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Бренд</span>
                                        <span class="products-goods-cart__parameter-body">KENNER</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Покрытие</span>
                                        <span class="products-goods-cart__parameter-body">Окрашенные RAL</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Головка</span>
                                        <span class="products-goods-cart__parameter-body">Шестигранная (8мм)</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Шаг резьбы</span>
                                        <span class="products-goods-cart__parameter-body">Мелкий (по металлу)</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Наконечник</span>
                                        <span class="products-goods-cart__parameter-body">Со сверлом (РТ-3)</span>
                                    </div>
                                </div>
                                <div class="products-goods-cart__cost">
                                    <span class="products-goods-cart__cost-title">Цена</span>
                                    <span class="products-goods-cart__cost-count">469.46</span>
                                    <span class="products-goods-cart__cost-currency ">₽</span>
                                </div>
                                <div class="products-goods-cart__btns">
                                    <span class="products-goods-cart__buy">Купить</span>
                                    <span class="products-goods-cart__basket">
                                        <img src="./assets/img/bag_dark.svg" alt="">
                                    </span>
                                    <span class="products-goods-cart__heart">
                                        <img src="./assets/img/heart_dark.svg" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="products-goods-cart">
                                <div class="products-goods-cart__img-wrap">
                                    <img class="products-goods-cart__img" src="./assets/img/fastener_store/GM_07350 копия.JPG" alt="">
                                </div>
                                <h3 class="products-goods-cart__title">Саморезы кровельные RAL по металлу</h3>
                                <div class="products-goods-cart__rank">
                                    <div class="products-goods-cart__stars">
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                        <span>
                                            <img src="./assets/img/star-full.png" alt="">
                                        </span>
                                    </div>
                                    <span class="products-goods-cart__count-reviews">(67)</span>
                                </div>
                                <div class="products-goods-cart__parameters">
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Бренд</span>
                                        <span class="products-goods-cart__parameter-body">KENNER</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Покрытие</span>
                                        <span class="products-goods-cart__parameter-body">Окрашенные RAL</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Головка</span>
                                        <span class="products-goods-cart__parameter-body">Шестигранная (8мм)</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Шаг резьбы</span>
                                        <span class="products-goods-cart__parameter-body">Мелкий (по металлу)</span>
                                    </div>
                                    <div class="products-goods-cart__parameter-item">
                                        <span class="products-goods-cart__parameter-title">Наконечник</span>
                                        <span class="products-goods-cart__parameter-body">Со сверлом (РТ-3)</span>
                                    </div>
                                </div>
                                <div class="products-goods-cart__cost">
                                    <span class="products-goods-cart__cost-title">Цена</span>
                                    <span class="products-goods-cart__cost-count">469.46</span>
                                    <span class="products-goods-cart__cost-currency ">₽</span>
                                </div>
                                <div class="products-goods-cart__btns">
                                    <span class="products-goods-cart__buy">Купить</span>
                                    <span class="products-goods-cart__basket">
                                        <img src="./assets/img/bag_dark.svg" alt="">
                                    </span>
                                    <span class="products-goods-cart__heart">
                                        <img src="./assets/img/heart_dark.svg" alt="">
                                    </span>
                                </div>
                            </div>

                        </div>
                        <div class="products-goods-catalog__show-more">
                            <span>Загрузить еще</span>
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
                        <span>О компании</span>
                        <span class="underline-mark"></span>
                    </h2>
                    <p class="about-company-desc__p">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    </p>
                    <span class="about-company-desc__btn">
                        Подробнее
                    </span>
                </div>
                <div class="about-company-banner">
                    <img src="./assets/img/about_company.png" alt="">
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
                        <img src="./assets/img/shopping-cart.svg" alt="">
                        <span class="our-advantages-item__title">Ассортимент</span>
                        <p class="our-advantages-item__desc">Наш ассортимент состоит из более чем 20000 позиций. Товар всегда есть в наличии и постоянно обновляется</p>
                    </div>
                    <div class="our-advantages-item">
                        <img src="./assets/img/baseline-loyalty.svg" alt="">
                        <span class="our-advantages-item__title">Лояльность</span>
                        <p class="our-advantages-item__desc">У нас есть гибкая система скидок. Сумма скидки увеличивается с каждой покупкой</p>
                    </div>
                    <div class="our-advantages-item">
                        <img src="./assets/img/miscellaneous-services.svg" alt="">
                        <span class="our-advantages-item__title">Сервис</span>
                        <p class="our-advantages-item__desc">В нашей компании работает только обученный и лояльный персонал.</p>
                    </div>
                </div>
            </section>
        </div>

        <!-- our-clients -->
        <section>
            <div class="our-clients">
                <h2 class="our-clients__title">
                    <span>Наши клиенты</span>
                    <span class="underline-mark"></span>
                </h2>
                <div class="our-clients-slider">
                    <div class="our-clients-slider__track">
                        <div class="our-clients-slider__item">
                            <div class="our-clients-slider__avatar">
                                <img src="./assets/img/Avatar_1.png" alt="">
                            </div>
                            <div class="our-clients-slider__body">
                                <span class="our-clients-slider__body-title">Наименование</span>
                                <span class="our-clients-slider__body-date">08.09.2022</span>
                                <p class="our-clients-slider__body-desc">Dots provided reliable system for our food ordering company and I couldn’t be happy more</p>
                            </div>
                        </div>
                        <div class="our-clients-slider__item">
                            <div class="our-clients-slider__avatar">
                                <img src="./assets/img/Avatar_2.png" alt="">
                            </div>
                            <div class="our-clients-slider__body">
                                <span class="our-clients-slider__body-title">Наименование</span>
                                <span class="our-clients-slider__body-date">08.09.2022</span>
                                <p class="our-clients-slider__body-desc">Professional, responsive, and able to keep up with ever-changing demand and tight deadlines: That's how I would describe Dots!</p>
                            </div>
                        </div>
                        <div class="our-clients-slider__item">
                            <div class="our-clients-slider__avatar">
                                <img src="./assets/img/Avatar_3.png" alt="">
                            </div>
                            <div class="our-clients-slider__body">
                                <span class="our-clients-slider__body-title">Наименование</span>
                                <span class="our-clients-slider__body-date">08.09.2022</span>
                                <p class="our-clients-slider__body-desc">We have seen a notable increase in our leads since we began using their services in 2018</p>
                            </div>
                        </div>
                        <div class="our-clients-slider__item">
                            <div class="our-clients-slider__avatar">
                                <img src="./assets/img/Avatar_4.png" alt="">
                            </div>
                            <div class="our-clients-slider__body">
                                <span class="our-clients-slider__body-title">Наименование</span>
                                <span class="our-clients-slider__body-date">08.09.2022</span>
                                <p class="our-clients-slider__body-desc">Dots not only revitalized our brand, but saved our business from the brink of ruin by optimizing our website for search</p>
                            </div>
                        </div>
                    </div>
                    <div class="our-clients-slider__remote">
                        <span class="our-clients-slider__prev">
                            <img src="./assets/img/bi_arrow-down_prev.svg" alt="">
                        </span>
                        <span class="our-clients-slider__next">
                            <img src="./assets/img/bi_arrow-down_next.svg" alt="">
                        </span>
                    </div>
                </div>
            </div>
        </section>


        <!-- our-contacts -->
        <section>
            <div class="our-contacts">
                <div class="our-contacts-map">
                    <img src="./assets/img/MAP.svg" alt="">
                </div>
                <div class="our-contacts-info">
                    <h2 class="our-contacts-info__h2">Наши контакты</h2>
                    <span class="our-contacts-info__desc">Свяжитесь с нами любым удобным пособом или посетите наш магазин</span>
                    <div class="our-contacts-info__body">
                        <div class="our-contacts-info__item">
                            <span class="our-contacts-info__icon">
                                <img src="./assets/img/call-calling.svg" alt="">
                            </span>
                            <div class="our-contacts-info__text">
                                <span class="our-contacts-info__text-title">Телефон</span>
                                <span class="our-contacts-info__text-body">310-437-2766</span>
                            </div>
                        </div>
                        <div class="our-contacts-info__item">
                            <span class="our-contacts-info__icon">
                                <img src="./assets/img/sms_big.svg" alt="">
                            </span>
                            <div class="our-contacts-info__text">
                                <span class="our-contacts-info__text-title">Почта</span>
                                <span class="our-contacts-info__text-body">unreal@outlook.com</span>
                            </div>
                        </div>
                        <div class="our-contacts-info__item">
                            <span class="our-contacts-info__icon">
                                <img src="./assets/img/location.svg" alt="">
                            </span>
                            <div class="our-contacts-info__text">
                                <span class="our-contacts-info__text-title">Адрес</span>
                                <span class="our-contacts-info__text-body">706 Campfire Ave. Meriden, CT 06450</span>
                            </div>
                        </div>
                        <span class="underline-mark"></span>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <!-- footer -->
    <footer class="footer">
        <section>
            <div class="footer-top">
                <div class="footer-top-left">
                    <div class="footer-top-left__logo">
                        <img src="./assets/img/Logo_2_2.png" alt="">
                    </div>
                    <span class="footer-top-left__desc">
                        We ara a lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun.
                    </span>
                    <div class="footer-top-left-contact">
                        <div class="footer-top-left-contact__tel">
                            <span class="footer-top-left-contact__tel-img">
                                <img src="./assets/img/Button_tel.svg" alt="">
                            </span>
                            <div class="footer-top-left-contact__tel-body">
                                <span class="footer-top-left-contact__tel-title">Появились вопросы?</span>
                                <span class="footer-top-left-contact__tel-text">310-437-2766</span>
                            </div>
                        </div>
                        <div class="footer-top-left-contact__mail">
                            <span class="footer-top-left-contact__mail-img">
                                <img src="./assets/img/Button_sms.svg" alt="">
                            </span>
                            <div class="footer-top-left-contact__mail-body">
                                <span class="footer-top-left-contact__mail-title">Email</span>
                                <span class="footer-top-left-contact__mail-text">mail@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-top-right">
                    <div class="footer-top-right__title">Подпишитесь на рассылку</div>
                    <div class="footer-top-right__desc">Узнавайте первым о скидках, предложениях и событиях еженедельно.</div>
                    <form class="subscribe-form" action="">
                        <input type="email" name="subscribe-form-email" id="" placeholder="Ваш Email">
                        <input type="submit" value="Подписаться">
                    </form>
                </div>
            </div>
        </section>
        <span class="footer-underline-mark"></span>
        <section>
            <div class="footer-bottom">
                <div class="footer-bottom-left">
                    <div class="footer-bottom-menu">
                        <ul>
                            <li><a href="">Каталог</a></li>
                            <li><a href="">Доставка</a></li>
                            <li><a href="">О компании</a></li>
                            <li><a href="">Контакты</a></li>
                        </ul>
                    </div>
                    <div class="footer-bottom-social">
                        <span class="footer-bottom-social__item">
                            <a href="">
                                <img src="./assets/img/Mini_Button_Instagram.svg" alt="">
                            </a>
                        </span>
                        <span class="footer-bottom-social__item">
                            <a href="">
                                <img src="./assets/img/Mini_Button_TG.svg" alt="">
                            </a>
                        </span>
                        <span class="footer-bottom-social__item">
                            <a href="">
                                <img src="./assets/img/Mini_Button_WhatsApp.svg" alt="">
                            </a>
                        </span>
                    </div>
                </div>
                <div class="footer-bottom-right">
                    <span class="footer-bottom-right__copyright">
                        © 2000-2021, ОсОО Лидер-Крепёж
                    </span>
                </div>
            </div>
        </section>
    </footer>

    <script src="./assets/js/main.js"></script>
</body>

</html>