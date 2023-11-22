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

// Display quantity input for simple products
function display_quantity_input_for_simple_products($input, $product) {
  // Check if the product is a simple product
  if ($product->is_type('simple')) {
      // Set the default quantity to 1
      $input = sprintf(
          '<input type="number" step="%s" min="%s" max="%s" name="%s" value="%s" title="%s" class="%s" inputmode="%s" />',
          esc_attr($product->get_stock_quantity() ? apply_filters('woocommerce_quantity_input_step', '1', $product) : 0.1),
          esc_attr(1), // Set the minimum quantity to 1
          esc_attr($product->get_max_purchase_quantity()),
          esc_attr($input['name']),
          esc_attr(1), // Set the default quantity to 1
          esc_html__('Qty', 'woocommerce'),
          esc_attr(isset($input['class']) ? $input['class'] : 'input-text qty text'),
          esc_attr(apply_filters('woocommerce_quantity_input_inputmode', 'numeric', $product))
      );
  }

  return $input;
}

add_filter('woocommerce_quantity_input', 'display_quantity_input_for_simple_products', 10, 2);


  