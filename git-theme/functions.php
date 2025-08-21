<?php

// Enqueue styles
function theme_styles() {
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_styles');

// Register navigation menus
function theme_menus() {
    register_nav_menus(array(
        'primary' => 'Primary Menu'
    ));
}
add_action('init', 'theme_menus');

// Add theme support
function theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list'));
}
add_action('after_setup_theme', 'theme_setup');

// Widget areas
function theme_widgets() {
    register_sidebar(array(
        'name' => 'Main Sidebar',
        'id' => 'main-sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'theme_widgets');