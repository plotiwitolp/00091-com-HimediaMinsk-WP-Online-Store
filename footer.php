</main>
<footer class="footer">
    <section>
        <div class="footer-top">
            <div class="footer-top-left">
                <div class="footer-top-left__logo">
                    <?php the_custom_logo(); ?>
                </div>
                <span class="footer-top-left__desc">
                    <?php the_field('footer-top-left__desc', 13); ?>
                </span>
                <div class="footer-top-left-contact">
                    <div class="footer-top-left-contact__tel">
                        <span class="footer-top-left-contact__tel-img">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/Button_tel.svg" alt="">
                        </span>
                        <div class="footer-top-left-contact__tel-body">
                            <span class="footer-top-left-contact__tel-title">Появились вопросы?</span>
                            <span class="footer-top-left-contact__tel-text"><?php the_field('phone', 13); ?></span>
                        </div>
                    </div>
                    <div class="footer-top-left-contact__mail">
                        <span class="footer-top-left-contact__mail-img">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/Button_sms.svg" alt="">
                        </span>
                        <div class="footer-top-left-contact__mail-body">
                            <span class="footer-top-left-contact__mail-title">Email</span>
                            <span class="footer-top-left-contact__mail-text"><?php the_field('email', 13); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-top-right">
                <div class="footer-top-right__title">Подпишитесь на рассылку</div>
                <div class="footer-top-right__desc">
                    <?php the_field('footer-top-right__desc', 13); ?>
                </div>
                <?php
                if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('bottom-sidebar');
                ?>
            </div>
        </div>
    </section>
    <span class="footer-underline-mark"></span>
    <section>
        <div class="footer-bottom">
            <div class="footer-bottom-left">
                <div class="footer-bottom-menu">
                    <?php wp_nav_menu([
                        'theme_location'  => 'bottom',
                    ]);
                    ?>
                </div>
                <div class="footer-bottom-social">
                    <span class="footer-bottom-social__item">
                        <a href="<?php the_field('instagram', 13); ?>" target="_blank">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/Mini_Button_Instagram.svg">
                        </a>
                    </span>
                    <span class="footer-bottom-social__item">
                        <a href="<?php the_field('telegram', 13); ?>" target="_blank">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/Mini_Button_TG.svg">
                        </a>
                    </span>
                    <span class="footer-bottom-social__item">
                        <a href="<?php the_field('whatsapp', 13); ?>" target="_blank">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/Mini_Button_WhatsApp.svg">
                        </a>
                    </span>
                </div>
            </div>
            <div class="footer-bottom-right">
                <span class="footer-bottom-right__copyright">
                    <?php the_field('footer-bottom-right__copyright', 13); ?>
                </span>
            </div>
        </div>
    </section>
</footer>
<?php wp_footer(); ?>
</body>

</html>