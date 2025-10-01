<?php
// Theme setup
function yke_ohara_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'yke_ohara_setup');

// Enqueue styles and scripts
function yke_ohara_enqueue_scripts() {
    wp_enqueue_style('yke-ohara-style', get_stylesheet_uri());
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', [], null, true);
    wp_enqueue_script('gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js', ['gsap'], null, true);
    wp_enqueue_script('yke-ohara-main', get_template_directory_uri() . '/main.js', ['gsap', 'gsap-scrolltrigger'], '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'yke_ohara_enqueue_scripts');

// Register custom post type for galleries
function yke_ohara_gallery_cpt() {
    $labels = array(
        'name' => 'Galleries',
        'singular_name' => 'Gallery',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Gallery',
        'edit_item' => 'Edit Gallery',
        'new_item' => 'New Gallery',
        'view_item' => 'View Gallery',
        'search_items' => 'Search Galleries',
        'not_found' => 'No galleries found',
        'not_found_in_trash' => 'No galleries found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'Galleries'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-format-gallery',
    );
    register_post_type('gallery', $args);
}
add_action('init', 'yke_ohara_gallery_cpt');
