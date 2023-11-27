<?php
  // Add stylesheets
    function custom_styles() {
        wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/style.css' );
    }
    add_action( 'wp_enqueue_scripts', 'custom_styles' );

    function remove_gutenberg() {
        remove_post_type_support( 'page', 'editor' );
        remove_post_type_support( 'post', 'editor' );
    }
    add_action( 'init', 'remove_gutenberg' );

    // title of single product page is not displaying write code to display title of single product page
    add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 9);
    // I don't whant to display word sale on single product page
    remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
    // I don't whant to display sku, categories, tags on single product page
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

    add_filter( 'show_admin_bar', '__return_false' );

    function display_menu_items_on_product_page() {
        // Get the current post object
        global $post;
    
        // Check if it's a single product page
        if (is_product()) {
            // Query the custom post type
            $menu_items = new WP_Query(array(
                'post_type' => 'menu_item', // Replace with your custom post type
                'posts_per_page' => -1,
                'post_status' => 'publish',
            ));
    
            // Check if there are menu items
            if ($menu_items->have_posts()) {
                echo '<div class="menu-items">';
                echo '<h3>This menu includes:</h3>';

                // Loop through the menu items
                while ($menu_items->have_posts()) {
                    // Set up the post data
                    $menu_items->the_post();
    
                    // Get custom fields
                    $item_image = get_field('item_image'); // Replace with the actual field name
                    $description = get_field('description'); // Replace with the actual field name
    
                    // Display title
                    echo '<h4>' . get_the_title() . '</h4>';

                    // Display image if available
                    if ($item_image) {
                        echo '<img src="' . esc_url($item_image['url']) . '" alt="' . esc_attr(get_the_title()) . '">';
                    }
    
                    // Display description if available
                    if ($description) {
                        echo '<p>' . esc_html($description) . '</p>';
                    }
    
                }
    
                echo '</div>';
            }
    
            // Reset the post data
            wp_reset_postdata();
        }
    }
    
    // Hook to display custom post type content on single product page
    add_action('woocommerce_after_single_product_summary', 'display_menu_items_on_product_page');

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
    
    // Hook to remove upsell heading
    add_action('wp_head', 'remove_upsell_heading');
    
    
    function enqueue_custom_scripts() {
        wp_enqueue_script('custom-script', get_template_directory_uri() . '/custom-script.js', array('jquery'), null, true);
    }
    add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');



    
    // Add a link to the checkout page displayed on single product page after add to cart button
function add_checkout_link() {
    // Check if the cart is not empty
    if (WC()->cart->get_cart_contents_count() > 0) {
        // Get the checkout URL
        $checkout_url = wc_get_checkout_url();

        // Display the link
        echo '<a href="' . esc_url($checkout_url) . '" class="checkout-link button alt">Checkout</a>';
    }
}
add_action('woocommerce_after_add_to_cart_button', 'add_checkout_link');



  
    
    
    
    

