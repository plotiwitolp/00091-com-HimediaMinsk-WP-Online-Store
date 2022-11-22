<?php

add_action('wp_enqueue_scripts', function () {
    // slick styles
    wp_enqueue_style('style-slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

    // main.css
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/main.css');

    // woocomm.css
    wp_enqueue_style('style-woocomm', get_template_directory_uri() . '/assets/css/woocomm.css');

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

add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields');

function custom_override_checkout_fields($fields)
{
    //unset($fields['billing']['billing_first_name']);// имя
    unset($fields['billing']['billing_last_name']); // фамилия
    //unset($fields['billing']['billing_company']); // компания
    unset($fields['billing']['billing_address_1']); //
    unset($fields['billing']['billing_address_2']); //
    //unset($fields['billing']['billing_city']);
    //unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
    //unset($fields['billing']['billing_phone']);
    //unset($fields['order']['order_comments']);
    //unset($fields['billing']['billing_email']);
    //unset($fields['account']['account_username']);
    //unset($fields['account']['account_password']);
    //unset($fields['account']['account_password-2']);
    $fields["billing"]["billing_email"]["required"] = false;

    unset($fields['billing']['billing_company']); // компания
    unset($fields['billing']['billing_postcode']); // индекс 
    return $fields;
}

register_nav_menus(array(
    'top_1'    => 'Верхнее меню 1',
    'top_2'    => 'Верхнее меню 2',
    'bottom' => 'Нижнее меню'
));

// подключение woocommerce
add_theme_support('woocommerce');

// Категории товаров
function get_categories_product($categories_list = '')
{
    $get_categories_product = get_terms('product_cat', [
        'orderby' => 'name',
        'order' => 'ASC',
        'hide_empty' => 0,
        'exclude'       => array(15),
    ]);
    if (count($get_categories_product) > 0) {
        foreach ($get_categories_product as $categories_item) {
            $woo_cat_id = $categories_item->term_id;
            $category_thumbnail_id = get_woocommerce_term_meta($woo_cat_id, 'thumbnail_id', true);
            $thumbnail_image_url = wp_get_attachment_url($category_thumbnail_id);
            $categories_list .= '
				<li>
					<a href="' . esc_url(get_term_link((int)$categories_item->term_id)) . '">' . esc_html($categories_item->name) .
                '<img src="' . $thumbnail_image_url . '"></a>
				</li>
			';
        }
    }
    return ($categories_list == '' ? '' : '<ul>' . $categories_list . '</ul>');
}
// отключение хлебных крошек
add_action('init', 'true_woo_no_breadcrumbs');
function true_woo_no_breadcrumbs()
{
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
}

// переопределение шаблона wc_get_template_part для product
add_filter('wc_get_template_part', 'custom_wc_template_part', 10, 3);
function custom_wc_template_part($template, $slug, $name)
{
    $custom_template_name = 'content-product-custom.php';
    if ($slug == 'content' && $name == 'product') {
        $template = trailingslashit(get_stylesheet_directory()) . 'woocommerce/' . $custom_template_name;
    }
    return $template;
}


function woocommerce_set_cart_qty_action()
{
    global $woocommerce;
    foreach ($_REQUEST as $key => $quantity) {
        // only allow integer quantities
        if (!is_numeric($quantity)) continue;

        // attempt to extract product ID from query string key
        $update_directive_bits = preg_split('/^set-cart-qty_/', $key);
        if (count($update_directive_bits) >= 2 and is_numeric($update_directive_bits[1])) {
            $product_id = (int) $update_directive_bits[1];
            $cart_id = $woocommerce->cart->generate_cart_id($product_id);
            // See if this product and its options is already in the cart
            $cart_item_key = $woocommerce->cart->find_product_in_cart($cart_id);
            // If cart_item_key is set, the item is already in the cart
            if ($cart_item_key) {
                $woocommerce->cart->set_quantity($cart_item_key, $quantity);
            } else {
                // Add the product to the cart 
                $woocommerce->cart->add_to_cart($product_id, $quantity);
            }
        }
    }
}

add_action('init', 'woocommerce_set_cart_qty_action');
