<?php

// AmarStyle Theme Setup
function amarstyle_setup() {
    // Add support for dynamic title tags
    add_theme_support('title-tag');
    // Add support for featured images
    add_theme_support('post-thumbnails');
    // Register nav menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'amarstyle'),
    ));
}
add_action('after_setup_theme', 'amarstyle_setup');

// WooCommerce Configuration
function amarstyle_woocommerce_setup() {
    // Enable support for WooCommerce
    add_theme_support('woocommerce');
    // Disable WooCommerce styles if desired
    // add_filter('woocommerce_enqueue_styles', '__return_empty_array');
}
add_action('after_setup_theme', 'amarstyle_woocommerce_setup');

// Enqueue Theme Styles and Scripts
function amarstyle_enqueue_scripts() {
    wp_enqueue_style('amarstyle-main', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('amarstyle-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'amarstyle_enqueue_scripts');

// Custom Functionality
function amarstyle_custom_functionality() {
    // Add custom functionality here.
}
add_action('init', 'amarstyle_custom_functionality');

?>