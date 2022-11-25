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
            <span class="contacts-info__desc"><?php the_field('our-contacts-info__desc', 13); ?></span>
            <div class="contacts-info__body">
                <div>
                    <div class="contacts-info__item">
                        <span class="contacts-info__icon">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/call-calling.svg">
                        </span>
                        <div class="contacts-info__text">
                            <span class="contacts-info__text-title">Телефон</span>
                            <span class="contacts-info__text-body"><?php the_field('phone', 13); ?></span>
                        </div>
                    </div>
                    <div class="contacts-info__item">
                        <span class="contacts-info__icon">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/sms_big.svg">
                        </span>
                        <div class="contacts-info__text">
                            <span class="contacts-info__text-title">Почта</span>
                            <span class="contacts-info__text-body"><?php the_field('email', 13); ?></span>
                        </div>
                    </div>
                    <div class="contacts-info__item">
                        <span class="contacts-info__icon">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/location.svg">
                        </span>
                        <div class="contacts-info__text">
                            <span class="contacts-info__text-title">Адрес</span>
                            <span class="contacts-info__text-body"><?php the_field('address', 13); ?></span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="contacts-info__item">
                        <span class="contacts-info__icon">
                            <a href="<?php the_field('instagram', 13); ?>" target="_blank">
                                <img src="<?php bloginfo('template_url') ?>/assets/img/Mini_Button_Instagram.svg">
                            </a>
                        </span>
                        <div class="contacts-info__text">
                            <span class="contacts-info__text-title">Instagram</span>
                        </div>
                    </div>
                    <div class="contacts-info__item">
                        <span class="contacts-info__icon">
                            <a href="<?php the_field('telegram', 13); ?>" target="_blank">
                                <img src="<?php bloginfo('template_url') ?>/assets/img/Mini_Button_TG.svg">
                            </a>
                        </span>
                        <div class="contacts-info__text">
                            <span class="contacts-info__text-title">Telegram</span>
                        </div>
                    </div>
                    <div class="contacts-info__item">
                        <span class="contacts-info__icon">
                            <a href="<?php the_field('whatsapp', 13); ?>" target="_blank">
                                <img src="<?php bloginfo('template_url') ?>/assets/img/Mini_Button_WhatsApp.svg">
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
            <?php the_field('our_contacts_map', 13); ?>
        </div>
        <div class="form-mail-to-us">
            <span class="form-mail-to-us__title">Напишите нам</span>
            <?php echo do_shortcode('[contact-form-7 id="179" title="Напишите нам"]'); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>