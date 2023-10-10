<?php 

function ems_files() {
    wp_enqueue_style('ems_main_styles', get_stylesheet_uri());
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css');
    
}

add_action('wp_enqueue_scripts', 'ems_files');

function ems_features() {
    register_nav_menu('footerMenuLocation', 'Footer Menu Location');
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'ems_features');