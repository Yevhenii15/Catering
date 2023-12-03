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
        if (is_page('menus')) {
            wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/shop.css');
        }
        if (is_product()) {
            wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/product.css', array(), null, 'all');
        }
        if (is_page('checkout')) {
            wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/checkout.css');
        }
        if (is_page(array('terms-of-service', 'privacy-policy', 'copyrights'))) {
            wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/terms.css');
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



    // Shop page

    // Adding top image and title to woocommerce shop
    function add_top_image_and_title_to_woocommerce_shop() {
        echo '<img class="top-bg-nav" src="' . get_template_directory_uri() . '/assets/topmenu.webp" alt="Background for menu page">';
        echo '<p class="title"><span class="top-text-one">Savor the Flavor,</span><span class="top-text-two">Explore Our Menus</span></p>';
    }
    add_action('woocommerce_before_shop_loop', 'add_top_image_and_title_to_woocommerce_shop');

    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10 );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

    // Adding background image to item woocommerce shop
    function add_bg_item_image_to_woocommerce_shop() {
        echo '<img class="item-bg" src="' . get_template_directory_uri() . '/assets/item-bg.svg" alt="Background for item">';    }
    add_action('woocommerce_shop_loop_item_title', 'add_bg_item_image_to_woocommerce_shop');

    // Price img
    function add_price_image_to_woocommerce_shop() {
        echo '<img class="icon-price" src="' . get_template_directory_uri() . '/assets/price.svg" alt="Price logo">';    }
    add_action('woocommerce_after_shop_loop_item', 'add_price_image_to_woocommerce_shop');



    // Single product page

    // title of single product page is not displaying write code to display title of single product page
    add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 9);
    // I don't want to display word sale on single product page
    remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
    // I don't whant to display sku, categories, tags on single product page
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
    // Remove related products
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );


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
        // make if the add to cart button is clicked
        if (isset($_POST['add-to-cart'])) {
            // Check if the cart is not empty
            if (WC()->cart->get_cart_contents_count() > 0) {
                wp_redirect(wc_get_checkout_url());
                exit;
            }
        }
    }
    add_action('template_redirect', 'redirect_to_checkout_if_cart_not_empty_single_product');
    
     // Adding background image to item woocommerce shop
     function add_bg_item_image_to_woocommerce_product() {
        echo '<img class="item-bg" src="' . get_template_directory_uri() . '/assets/product-page-item-bg.svg" alt="Background for item">';    }
    add_action('woocommerce_single_product_summary', 'add_bg_item_image_to_woocommerce_product');

   // Price img
    function add_price_image_to_woocommerce_product() {
        echo '<img class="icon-price" src="' . get_template_directory_uri() . '/assets/product-price.svg" alt="Price logo">';
    }
    add_action('woocommerce_before_add_to_cart_form', 'add_price_image_to_woocommerce_product');


    // Including item div
    function add_including_div_woocommerce_product() {
        echo '<div class="including-section">';    }
    add_action('woocommerce_before_add_to_cart_form', 'add_including_div_woocommerce_product');

    // Including item text
    function add_item_text_to_woocommerce_product() {
        echo '<h2 class="item-text">Including</h2>';    }
    add_action('woocommerce_before_add_to_cart_form', 'add_item_text_to_woocommerce_product');



    // Default products
    function display_related_products() {
        // Get the current product ID
        $product_id = get_the_ID();
    
        // Get the related products using the 'product' field
        $related_products = get_field('product', $product_id);
    
        if ($related_products) {
            // Organize related products by category
            $main_course_products = array();
            $sides_products = array();
    
            foreach ($related_products as $related_product) {
                // Get the categories for the related product
                $categories = get_the_category($related_product);
    
                if ($categories) {
                    foreach ($categories as $category) {
                        $category_name = $category->slug;
    
                        // Add the related product to the respective category array
                        if ($category_name === 'main-course') {
                            $main_course_products[] = $related_product;
                        } elseif ($category_name === 'sides') {
                            $sides_products[] = $related_product;
                        }
                    }
                }
            }
    
            // Display 'main-course' products
            if (!empty($main_course_products)) {
                echo '<h3 class="category">Main Course</h3>';
                display_products_by_category($main_course_products);
            }
    
            // Display 'sides' products if there are any
            if (!empty($sides_products)) {
                echo '<h3 class="category">Sides</h3>';
                display_products_by_category($sides_products);
            }
        }
    }
    
    add_action('woocommerce_before_add_to_cart_form', 'display_related_products');
    
    // Display products by category
    function display_products_by_category($products) {
        echo '<div class="including-items">';
        foreach ($products as $related_product) {
            // Set up post data for the current related product
            setup_postdata($related_product);
    
            // Get custom fields for the related product
            $item_image = get_field('item_image', $related_product);
            $description = get_field('description', $related_product);
    
            echo '<div class="including-item">';
             // Display image if available

             if ($item_image) {
                echo '<img src="' . esc_url($item_image['url']) . '" alt="' . esc_attr(get_the_title($related_product)) . '">';
            }
            echo '<div class="title-description">';
            // Display title
            echo '<h4>' . get_the_title($related_product) . '</h4>';
            // Display description if available
            if ($description) {
                echo '<p>' . esc_html($description) . '</p>';
            }
            echo '</div>';
            echo '</div>';
            // Reset post data
            wp_reset_postdata();
        }
        echo '</div>';
    }
    
    add_action('woocommerce_before_add_to_cart_form', 'display_related_products');


    // Adding div end
    function add_div_end_to_woocommerce_product() {
        echo '</div>';    }
    add_action('woocommerce_before_add_to_cart_form', 'add_div_end_to_woocommerce_product');

    //  Adding booking section div
    function add_booking_section_to_woocommerce_product() {
        echo '<div class="booking-section">';    }
    add_action('woocommerce_before_add_to_cart_form', 'add_booking_section_to_woocommerce_product');
    
    // Adding booking Title 
    function add_booking_text_to_woocommerce_product() {
        echo '<h5 class="booking">Book</h5>';    }
    add_action('woocommerce_before_add_to_cart_form', 'add_booking_text_to_woocommerce_product');
    
    // Adding date Title
    function add_time_text_to_woocommerce_product() {
        echo '<h6 class="time">When?</h6>';    }
    add_action('woocommerce_before_add_to_cart_form', 'add_time_text_to_woocommerce_product');

    // Change text for exra services
    function change_div_text() {
        ?>
        <script type="text/javascript">
            document.addEventListener("DOMContentLoaded", function() {
                // Replace 'your-new-text' with the desired text
                var newText = 'Add More To Your Order';
                
                // Find the div by its class name
                var divElement = document.querySelector('.mwb_mbfw_included_service_title');
                
                // Check if the div element is found
                if (divElement) {
                    // Update the text content of the div
                    divElement.textContent = newText;
                }
            });
        </script>
        <?php
    }
    
    add_action('wp_footer', 'change_div_text');
    
    
    // Adding booking section close div
    function add_booking_section_close_to_woocommerce_product() {
        echo '</div>';    }
    add_action('woocommerce_after_single_product', 'add_booking_section_close_to_woocommerce_product');


    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

    // Adding top image to woocommerce product
    function add_top_image_to_woocommerce_product() {
        echo '<img class="top-bg-nav" src="' . get_template_directory_uri() . '/assets/topmenu.webp" alt="Background for menu page">';
    }
    add_action('woocommerce_before_single_product_summary', 'add_top_image_to_woocommerce_product');
    
    

    // Redirect user after successful order to home page and set a session variable
    function custom_redirect_after_checkout( $order_id ) {
        $order = wc_get_order( $order_id );
    
        // Check if the order is valid
        if ( ! $order ) {
            return;
        }
    
        // Set a session variable to indicate a successful order
        WC()->session->set( 'order_placed', true );
    
        // Redirect to the home page
        wp_redirect( home_url() );
        exit;
    }
    add_action( 'woocommerce_thankyou', 'custom_redirect_after_checkout', 10, 1 );
    
    // Add JavaScript to show a popup message
    function custom_show_popup_message() {
        // Check if the order was placed successfully
        if ( WC()->session->get( 'order_placed' ) ) {
            ?>
            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    // Display your popup message here
                    alert("Got it! We'll confirm your booking shortly.");
                });
            </script>
            <?php
    
            // Reset the session variable
            WC()->session->set( 'order_placed', false );
        }
    }
    add_action( 'wp_footer', 'custom_show_popup_message' );
    

