<?php
/*
Template Name: Контакты
*/
?>

<?php get_header(); ?>
<section>
    <div class="contacts">
        <div class="contacts-info">
            <h2 class="contacts-info__h2">
                <span>Наши контакты</span>
                <span class="underline-mark"></span>
            </h2>
            <span class="contacts-info__desc">Свяжитесь с нами любым удобным пособом или посетите наш магазин</span>
            <div class="contacts-info__body">
                <div>
                    <div class="contacts-info__item">
                        <span class="contacts-info__icon">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/call-calling.svg" alt="">
                        </span>
                        <div class="contacts-info__text">
                            <span class="contacts-info__text-title">Телефон</span>
                            <span class="contacts-info__text-body">310-437-2766</span>
                        </div>
                    </div>
                    <div class="contacts-info__item">
                        <span class="contacts-info__icon">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/sms_big.svg" alt="">
                        </span>
                        <div class="contacts-info__text">
                            <span class="contacts-info__text-title">Почта</span>
                            <span class="contacts-info__text-body">unreal@outlook.com</span>
                        </div>
                    </div>
                    <div class="contacts-info__item">
                        <span class="contacts-info__icon">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/location.svg" alt="">
                        </span>
                        <div class="contacts-info__text">
                            <span class="contacts-info__text-title">Адрес</span>
                            <span class="contacts-info__text-body">706 Campfire Ave. Meriden, CT 06450</span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="contacts-info__item">
                        <span class="contacts-info__icon">
                            <a href="">
                                <img src="<?php bloginfo('template_url') ?>/assets/img/Mini_Button_Instagram.svg" alt="">
                            </a>
                        </span>
                        <div class="contacts-info__text">
                            <span class="contacts-info__text-title">Instagram</span>
                        </div>
                    </div>
                    <div class="contacts-info__item">
                        <span class="contacts-info__icon">
                            <a href="">
                                <img src="<?php bloginfo('template_url') ?>/assets/img/Mini_Button_TG.svg" alt="">
                            </a>
                        </span>
                        <div class="contacts-info__text">
                            <span class="contacts-info__text-title">Telegram</span>
                        </div>
                    </div>
                    <div class="contacts-info__item">
                        <span class="contacts-info__icon">
                            <a href="">
                                <img src="<?php bloginfo('template_url') ?>/assets/img/Mini_Button_WhatsApp.svg" alt="">
                            </a>
                        </span>
                        <div class="contacts-info__text">
                            <span class="contacts-info__text-title">WhatsApp</span>
                        </div>
                    </div>
                </div>
                <span class="underline-mark"></span>
            </div>

        </div>
        <div class="contacts-map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A858bf867a9fd75df1eadf6406ab518ad30f9de27118daddb6ea4b9181dc588da&amp;width=100%25&amp;height=455&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
        <div class="form-mail-to-us">
            <span class="form-mail-to-us__title">Напишите нам</span>
            <form action="">
                <div>
                    <label for="form-mail-to-us__name">Ваше имя:*</label>
                    <input id="form-mail-to-us__name" type="text" name="name" placeholder="Ваше имя">
                </div>
                <div>
                    <label for="form-mail-to-us__name">Номер телефона:*</label>
                    <input id="form-mail-to-us__name" type="tel" name="number" placeholder="+7 777 77 77">
                </div>
                <div>
                    <label for="form-mail-to-us__name">E-mail: (необязательное поле)</label>
                    <input id="form-mail-to-us__name" type="mail" name="mail" placeholder="E-mail">
                </div>
                <div>
                    <textarea name="" placeholder="Ваш вопрос. (необязательное поле)"></textarea>
                </div>
                <input type="submit" value="Отправить">
            </form>
        </div>
    </div>
</section>
<?php get_footer(); ?>