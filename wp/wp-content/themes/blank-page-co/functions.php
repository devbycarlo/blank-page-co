<?php
/**
 * Blank Page Co Theme Functions
 *
 * @package Blank_Page_Co
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'BPCO_VERSION', '1.0.0' );
define( 'BPCO_DIR', get_template_directory() );
define( 'BPCO_URI', get_template_directory_uri() );

/**
 * Theme Setup
 */
function bpco_setup() {
    load_theme_textdomain( 'blank-page-co', BPCO_DIR . '/languages' );

    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script',
    ) );
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'editor-styles' );

    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'blank-page-co' ),
        'footer'  => esc_html__( 'Footer Menu', 'blank-page-co' ),
    ) );

    add_image_size( 'bpco-product', 600, 600, true );
    add_image_size( 'bpco-hero', 1920, 800, true );
}
add_action( 'after_setup_theme', 'bpco_setup' );

/**
 * Enqueue Scripts and Styles
 */
function bpco_scripts() {
    wp_enqueue_style( 'bpco-design-system', BPCO_URI . '/assets/css/design-system.css', array(), BPCO_VERSION );
    wp_enqueue_style( 'bpco-theme', BPCO_URI . '/assets/css/theme.css', array( 'bpco-design-system' ), BPCO_VERSION );

    wp_enqueue_script( 'bpco-theme', BPCO_URI . '/assets/js/theme.js', array(), BPCO_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'bpco_scripts' );

/**
 * Register Widget Areas
 */
function bpco_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'blank-page-co' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'blank-page-co' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widgets', 'blank-page-co' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Footer widget area.', 'blank-page-co' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'bpco_widgets_init' );

/**
 * Custom excerpt length
 */
function bpco_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'bpco_excerpt_length' );

/**
 * Custom excerpt more
 */
function bpco_excerpt_more( $more ) {
    return '&hellip;';
}
add_filter( 'excerpt_more', 'bpco_excerpt_more' );

/**
 * Add custom body classes
 */
function bpco_body_classes( $classes ) {
    if ( is_singular() ) {
        $classes[] = 'singular';
    }
    if ( is_front_page() && ! is_home() ) {
        $classes[] = 'front-page';
    }
    return $classes;
}
add_filter( 'body_class', 'bpco_body_classes' );
