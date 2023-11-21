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

