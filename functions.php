<?php

    // Add stylesheets
    function custom_styles() {
        wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/style.css' );
    }
    add_action( 'wp_enqueue_scripts', 'custom_styles' );

    // Add custom stylesheets
    function enqueue_custom_styles() {
        // Check if it's the specific page where you want to apply the styles
        if (is_page('homepage')) {
            wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/homepage.css');
        }
        if (is_page('contact-us')) {
            wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/contact-us.css');
        }
        if (is_page('about-us')) {
            wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/about-us.css');
        }
        if (is_page('shop')) {
            wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/shop.css');
        }
        if (is_page('cart')) {
            wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/cart.css');
        }
        if (is_page('checkout')) {
            wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/checkout.css');
        }
        if (is_page('terms-of-service')) {
            wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/terms-of-service.css');
        }
        if (is_page('privacy-policy')) {
            wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/privacy-policy.css');
        }
        if (is_page('copyrigths')) {
            wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/copyrigths.css');
        }
    }
    add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

    // Add scripts
    function my_custom_scripts() {
        wp_register_script('custom-script', get_template_directory_uri() . '/custom-script.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('custom-script');
    }
    add_action('wp_enqueue_scripts', 'my_custom_scripts');

    // Add remove gutenberg
    function remove_gutenberg() {
        remove_post_type_support( 'page', 'editor' );
        remove_post_type_support( 'post', 'editor' );
    }
    add_action( 'init', 'remove_gutenberg' );

    // Remove wordpress bar
    add_filter( 'show_admin_bar', '__return_false' );

    // Shop
    // Adding top image and title to woocommerce shop
    function add_top_image_and_title_to_woocommerce_shop() {
        echo '<img class="top-bg-nav" src="http://cateringbbq.local/wp-content/themes/catering/Catering/assets/top-menu.png" alt="Background for menu page">';
        echo '<p class="title"><span class="top-text-one">Savor the Flavor,</span><span class="top-text-two">Explore Our Menus</span></p>';
    }
    add_action('woocommerce_before_shop_loop', 'add_top_image_and_title_to_woocommerce_shop');

    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10 );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

    // Adding background image to item woocommerce shop
    function add_bg_item_image_to_woocommerce_shop() {
        echo '<img class="item-bg" src="http://cateringbbq.local/wp-content/themes/catering/Catering/assets/item-bg.svg" alt="Background for item">';    }
    add_action('woocommerce_shop_loop_item_title', 'add_bg_item_image_to_woocommerce_shop');

    
    function add_price_image_to_woocommerce_shop() {
        echo '<img class="icon-price" src="http://cateringbbq.local/wp-content/themes/catering/Catering/assets/price.svg" alt="Price logo">';    }
    add_action('woocommerce_after_shop_loop_item', 'add_price_image_to_woocommerce_shop');
























    // Single product page

    // title of single product page is not displaying write code to display title of single product page
    add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 9);
    // I don't want to display word sale on single product page
    remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
    // I don't whant to display sku, categories, tags on single product page
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
   
    // Display custom post type content on single product page (Default ones)
    function display_related_products() {
    // Get the current product ID
        $product_id = get_the_ID();

        // Get the related products using the 'product' field
        $related_products = get_field('product', $product_id);

        if ($related_products) {
            foreach ($related_products as $related_product) {
                // Set up post data for the current related product
                setup_postdata($related_product);

                // Get custom fields for the related product
                $item_image = get_field('item_image', $related_product);
                $description = get_field('description', $related_product);

                // Display title
                echo '<h4>' . get_the_title($related_product) . '</h4>';

                // Display image if available
                if ($item_image) {
                    echo '<img src="' . esc_url($item_image['url']) . '" alt="' . esc_attr(get_the_title($related_product)) . '">';
                }

                // Display description if available
                if ($description) {
                    echo '<p>' . esc_html($description) . '</p>';
                }

                // Reset post data
                wp_reset_postdata();
            }
        }
    }
    add_action('woocommerce_after_single_product_summary', 'display_related_products');

    // Remove upsell heading
    function remove_upsell_heading() {
        ?>
        <style>
            .upsells.products h2 {
                display: none !important;
            }
            .upsells.products h2.woocommerce-loop-product__title{
                display: block !important;
            }
            
        </style>
        <?php
    }
    add_action('wp_head', 'remove_upsell_heading');

    // Redirect to checkout if added to cart from single product page
    function redirect_to_checkout_if_cart_not_empty_single_product() {
        // Check if on a single product page
        if (is_product() && WC()->cart->get_cart_contents_count() > 0) {
            wp_redirect(wc_get_checkout_url());
            exit;
        }
    }
    add_action('template_redirect', 'redirect_to_checkout_if_cart_not_empty_single_product');














