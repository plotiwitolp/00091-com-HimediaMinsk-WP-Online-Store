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
            <p class="about-company-desc__p">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
            </p>
            <p class="about-company-desc__p">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
            </p>
            <p class="about-company-desc__p">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
            </p>
        </div>
        <div class="about-company-banner">
            <img src="<?php bloginfo('template_url') ?>/assets/img/dostavka.png" alt="">
            <span class="about-company-banner__shadow"></span>
        </div>
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
</section>
<?php get_footer(); ?>