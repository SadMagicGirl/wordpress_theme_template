<?php
// Подключение стилей и скриптов
function my_theme_enqueue_scripts() {
    wp_enqueue_style(
        'my-theme-style', 
        get_stylesheet_uri()
    ); // style.css

    wp_enqueue_style( //load styles
        'my-theme-main', //identifier
        get_template_directory_uri() . '/assets/css/main.css', //path
        array(), //dependencies
        wp_get_theme()->get('Version') //get theme version for cache
    );

    wp_enqueue_script( //load js scripts
        'my-theme-main-js',
        get_template_directory_uri() . '/assets/js/main.js', 
        array('jquery'), 
        wp_get_theme()->get('Version'), 
        true
    );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

// Регистрация меню и поддержка тем
function my_theme_setup() {
    add_theme_support('title-tag');        // динамический <title>
    add_theme_support('post-thumbnails');  // миниатюры записей
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-theme'),
    ));
}
add_action('after_setup_theme', 'my_theme_setup');
