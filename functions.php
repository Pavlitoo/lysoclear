<?php
// Захист від прямого доступу
if (!defined('ABSPATH')) {
    exit; // Вихід, якщо доступ здійснюється напряму.
}

/**
 * Тема Lysoclear: Functions.php
 */

/**
 * 1. ПІДКЛЮЧЕННЯ СТИЛІВ І СКРИПТІВ
 */
function lysoclear_enqueue_scripts() {
    // Основний стиль теми
    wp_enqueue_style('lysoclear-style', get_stylesheet_uri(), array(), '1.0.0');

    // Основний стиль main.css
    //wp_enqueue_style('lysoclear-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0');

    // Підключення Font Awesome (CDN)
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', array(), null);

    // Підключення slick.js (CDN)
    wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', array(), null);
    wp_enqueue_style('slick-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css', array(), null);
    wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), null, true);

    // Основний скрипт теми
    wp_enqueue_script('lysoclear-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'slick-js'), '1.1.0', true);

    // Скрипти для головної сторінки
    if (is_front_page()) {
        wp_enqueue_style('home-style', get_template_directory_uri() . '/assets/css/style-home.css', array(), '1.0.0');
        //wp_enqueue_script('home-scripts', get_template_directory_uri() . '/assets/js/scripts-home.js', array('jquery'), '1.0.0', true);
    }

    // Стилі для сторінки запису (single.php)
    if (is_single()) {
        wp_enqueue_style('lysoclear-single', get_template_directory_uri() . '/assets/css/single.css', array(), '1.0.0');
    }

    // Стилі для футера
    wp_enqueue_style('lysoclear-footer', get_template_directory_uri() . '/assets/css/footer.css', array(), '1.0.0');

    // Стилі для хедера
    wp_enqueue_style('lysoclear-header', get_template_directory_uri() . '/assets/css/header.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'lysoclear_enqueue_scripts');

/**
 * 2. РЕЄСТРАЦІЯ МЕНЮ
 */
function lysoclear_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'lysoclear'),
        'footer'  => __('Footer Menu', 'lysoclear'),
    ));
}
add_action('init', 'lysoclear_register_menus');

/**
 * 3. ПІДТРИМКА ТЕМИ
 */
function lysoclear_theme_support() {
    // Логотип
    add_theme_support('custom-logo', array(
        'height'      => 50,
        'width'       => 150,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Тег <title>
    add_theme_support('title-tag');

    // Мініатюри для записів
    add_theme_support('post-thumbnails');

    // HTML5 підтримка
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'lysoclear_theme_support');

/**
 * 4. РЕЄСТРАЦІЯ ВІДЖЕТІВ
 */
function lysoclear_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'lysoclear'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'lysoclear'),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'lysoclear_widgets_init');

/**
 * 5. ACF (ADVANCED CUSTOM FIELDS) ПІДТРИМКА
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug'  => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect'   => false
    ));
    acf_add_options_sub_page(array(
        'page_title'  => 'Theme Header Settings',
        'menu_title'  => 'Header',
        'parent_slug' => 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'  => 'Theme Footer Settings',
        'menu_title'  => 'Footer',
        'parent_slug' => 'theme-general-settings',
    ));
}

/**
 * 6. ВИМКНЕННЯ GUTENBERG EDITOR
 */
add_filter('use_block_editor_for_post', '__return_false');

/**
 * 7. ОЧИЩЕННЯ <head>
 */
function lysoclear_cleanup_wp_head() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wp_shortlink_wp_head');
}
add_action('init', 'lysoclear_cleanup_wp_head');

/**
 * 8. РЕЄСТРАЦІЯ КОСТИЛІВ ДЛЯ ЗОБРАЖЕНЬ
 */
function lysoclear_image_sizes() {
    add_image_size('news-thumbnail', 300, 200, true); // 300x200px, обрізати до центру
}
add_action('after_setup_theme', 'lysoclear_image_sizes');




