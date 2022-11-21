<?php get_header(); ?>
<section>
    <?php


    $s = get_search_query();
    $args = array(
        's' => $s
    );
    // The Query
    $the_query = new WP_Query($args);
    if ($the_query->have_posts() &&  $s != '') {
        _e("<h2>Поиск по запросу: " . get_query_var('s') . "</h2>");
        while ($the_query->have_posts()) {
            $the_query->the_post();
    ?>
            <li>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
        <?php
        }
    } else {
        ?>
        <h2 style='font-weight:bold;color:#000'>Ничего не найдено</h2>
        <div class="alert alert-info">
            <p>Извините, но ничто не соответствовало вашим критериям поиска. Пожалуйста, попробуйте еще раз с несколькими другими ключевыми словами.</p>
        </div>
    <?php } ?>
</section>
<?php get_footer(); ?>