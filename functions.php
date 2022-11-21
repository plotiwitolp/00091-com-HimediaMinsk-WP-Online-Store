<?php

add_action('wp_enqueue_scripts', function () {
    // slick styles
    wp_enqueue_style('style-slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

    // main.css
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/main.css');

    //jquery
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js');
    wp_enqueue_script('jquery');

    // slick script
    wp_enqueue_script('script-slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), 'null', true);

    // main.js
    wp_enqueue_script('script-name', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true);
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_action('wp_head', 'wp_site_icon', 99);

function dco_pre_get_posts($query)
{
    if (!is_admin() && $query->is_main_query()) {
        if ($query->is_search) {
            $query->set('post_type', 'product');
        }
    }
}

add_action('pre_get_posts', 'dco_pre_get_posts');
