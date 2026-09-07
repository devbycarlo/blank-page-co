<?php
/**
 * Blank Page Co Customizer
 *
 * @package Blank_Page_Co
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Add customizer settings
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function bpco_customize_register( $wp_customize ) {

    // Hero Section
    $wp_customize->add_section( 'bpco_hero_section', array(
        'title'    => esc_html__( 'Hero Section', 'blank-page-co' ),
        'priority' => 30,
    ) );

    // Hero Headline
    $wp_customize->add_setting( 'bpco_hero_headline', array(
        'default'           => __( 'Your Story Starts Here', 'blank-page-co' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'bpco_hero_headline', array(
        'label'   => esc_html__( 'Hero Headline', 'blank-page-co' ),
        'section' => 'bpco_hero_section',
        'type'    => 'text',
    ) );

    // Hero Subheadline
    $wp_customize->add_setting( 'bpco_hero_subheadline', array(
        'default'           => __( 'Premium digital templates and resources for creators', 'blank-page-co' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'bpco_hero_subheadline', array(
        'label'   => esc_html__( 'Hero Subheadline', 'blank-page-co' ),
        'section' => 'bpco_hero_section',
        'type'    => 'textarea',
    ) );

    // Hero Button Text
    $wp_customize->add_setting( 'bpco_hero_button_text', array(
        'default'           => __( 'Browse Collection', 'blank-page-co' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'bpco_hero_button_text', array(
        'label'   => esc_html__( 'Hero Button Text', 'blank-page-co' ),
        'section' => 'bpco_hero_section',
        'type'    => 'text',
    ) );

    // Hero Button URL
    $wp_customize->add_setting( 'bpco_hero_button_url', array(
        'default'           => '#products',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'bpco_hero_button_url', array(
        'label'   => esc_html__( 'Hero Button URL', 'blank-page-co' ),
        'section' => 'bpco_hero_section',
        'type'    => 'url',
    ) );

    // Branding Colors
    $wp_customize->add_section( 'bpco_colors_section', array(
        'title'    => esc_html__( 'Brand Colors', 'blank-page-co' ),
        'priority' => 31,
    ) );

    // Primary Color
    $wp_customize->add_setting( 'bpco_primary_color', array(
        'default'           => '#1A1A1A',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bpco_primary_color', array(
        'label'   => esc_html__( 'Primary Color', 'blank-page-co' ),
        'section' => 'bpco_colors_section',
    ) ) );

    // Accent Color
    $wp_customize->add_setting( 'bpco_accent_color', array(
        'default'           => '#F5DDA4',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bpco_accent_color', array(
        'label'   => esc_html__( 'Accent Color', 'blank-page-co' ),
        'section' => 'bpco_colors_section',
    ) ) );

    // Background Color
    $wp_customize->add_setting( 'bpco_background_color', array(
        'default'           => '#FAF7F0',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bpco_background_color', array(
        'label'   => esc_html__( 'Background Color', 'blank-page-co' ),
        'section' => 'bpco_colors_section',
    ) ) );

    // Footer Section
    $wp_customize->add_section( 'bpco_footer_section', array(
        'title'    => esc_html__( 'Footer Settings', 'blank-page-co' ),
        'priority' => 32,
    ) );

    // Footer Copyright
    $wp_customize->add_setting( 'bpco_footer_copyright', array(
        'default'           => __( 'All rights reserved.', 'blank-page-co' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'bpco_footer_copyright', array(
        'label'   => esc_html__( 'Footer Copyright Text', 'blank-page-co' ),
        'section' => 'bpco_footer_section',
        'type'    => 'text',
    ) );
}
add_action( 'customize_register', 'bpco_customize_register' );

/**
 * Output custom colors to CSS
 */
function bpco_customizer_css() {
    $primary_color  = get_theme_mod( 'bpco_primary_color', '#1A1A1A' );
    $accent_color   = get_theme_mod( 'bpco_accent_color', '#F5DDA4' );
    $background_color = get_theme_mod( 'bpco_background_color', '#FAF7F0' );

    ?>
    <style type="text/css">
        :root {
            --ink-strong: <?php echo esc_attr( $primary_color ); ?>;
            --stroke-default: <?php echo esc_attr( $primary_color ); ?>;
            --surface-accent: <?php echo esc_attr( $accent_color ); ?>;
            --surface-blob: <?php echo esc_attr( $accent_color ); ?>;
            --surface-paper: <?php echo esc_attr( $background_color ); ?>;
        }
    </style>
    <?php
}
add_action( 'wp_head', 'bpco_customizer_css' );
