</main>
<footer class="footer">
    <section>
        <div class="footer-top">
            <div class="footer-top-left">
                <div class="footer-top-left__logo">
                    <?php the_custom_logo(); ?>
                </div>
                <span class="footer-top-left__desc">
                    We ara a lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun.
                </span>
                <div class="footer-top-left-contact">
                    <div class="footer-top-left-contact__tel">
                        <span class="footer-top-left-contact__tel-img">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/Button_tel.svg" alt="">
                        </span>
                        <div class="footer-top-left-contact__tel-body">
                            <span class="footer-top-left-contact__tel-title">Появились вопросы?</span>
                            <span class="footer-top-left-contact__tel-text">310-437-2766</span>
                        </div>
                    </div>
                    <div class="footer-top-left-contact__mail">
                        <span class="footer-top-left-contact__mail-img">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/Button_sms.svg" alt="">
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
                            <img src="<?php bloginfo('template_url') ?>/assets/img/Mini_Button_Instagram.svg" alt="">
                        </a>
                    </span>
                    <span class="footer-bottom-social__item">
                        <a href="">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/Mini_Button_TG.svg" alt="">
                        </a>
                    </span>
                    <span class="footer-bottom-social__item">
                        <a href="">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/Mini_Button_WhatsApp.svg" alt="">
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

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
<!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
<!-- <script src="<?php // bloginfo('template_url') 
                    ?>/assets/js/main.js"></script> -->
<?php wp_footer(); ?>
</body>

</html>