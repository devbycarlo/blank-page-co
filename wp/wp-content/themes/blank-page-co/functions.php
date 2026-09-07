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
    if ( is_singular( 'product' ) ) {
        $classes[] = 'single-product-page';
    }
    return $classes;
}
add_filter( 'body_class', 'bpco_body_classes' );

/**
 * Register Product Custom Post Type
 */
function bpco_register_product_post_type() {
    $labels = array(
        'name'                  => _x( 'Products', 'Post type general name', 'blank-page-co' ),
        'singular_name'         => _x( 'Product', 'Post type singular name', 'blank-page-co' ),
        'menu_name'             => _x( 'Products', 'Admin Menu text', 'blank-page-co' ),
        'add_new'               => __( 'Add New Product', 'blank-page-co' ),
        'add_new_item'          => __( 'Add New Product', 'blank-page-co' ),
        'edit_item'             => __( 'Edit Product', 'blank-page-co' ),
        'new_item'              => __( 'New Product', 'blank-page-co' ),
        'view_item'             => __( 'View Product', 'blank-page-co' ),
        'search_items'          => __( 'Search Products', 'blank-page-co' ),
        'not_found'             => __( 'No products found', 'blank-page-co' ),
        'not_found_in_trash'    => __( 'No products found in Trash', 'blank-page-co' ),
        'all_items'             => __( 'All Products', 'blank-page-co' ),
        'featured_image'        => __( 'Product Cover Image', 'blank-page-co' ),
        'set_featured_image'    => __( 'Set cover image', 'blank-page-co' ),
        'remove_featured_image' => __( 'Remove cover image', 'blank-page-co' ),
        'use_featured_image'    => __( 'Use as cover image', 'blank-page-co' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'product' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-cart',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
    );

    register_post_type( 'product', $args );
}
add_action( 'init', 'bpco_register_product_post_type' );

/**
 * Register Product Category Taxonomy
 */
function bpco_register_product_taxonomy() {
    $labels = array(
        'name'              => _x( 'Product Categories', 'taxonomy general name', 'blank-page-co' ),
        'singular_name'     => _x( 'Product Category', 'taxonomy singular name', 'blank-page-co' ),
        'search_items'      => __( 'Search Product Categories', 'blank-page-co' ),
        'all_items'         => __( 'All Product Categories', 'blank-page-co' ),
        'parent_item'       => __( 'Parent Product Category', 'blank-page-co' ),
        'parent_item_colon' => __( 'Parent Product Category:', 'blank-page-co' ),
        'edit_item'         => __( 'Edit Product Category', 'blank-page-co' ),
        'update_item'       => __( 'Update Product Category', 'blank-page-co' ),
        'add_new_item'      => __( 'Add New Product Category', 'blank-page-co' ),
        'new_item_name'     => __( 'New Product Category Name', 'blank-page-co' ),
        'menu_name'         => __( 'Categories', 'blank-page-co' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'product-category' ),
    );

    register_taxonomy( 'product_category', array( 'product' ), $args );
}
add_action( 'init', 'bpco_register_product_taxonomy' );

/**
 * Add Product Meta Boxes
 */
function bpco_add_product_meta_boxes() {
    add_meta_box(
        'bpco_product_details',
        __( 'Product Details', 'blank-page-co' ),
        'bpco_product_details_callback',
        'product',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'bpco_add_product_meta_boxes' );

/**
 * Product Details Meta Box Callback
 */
function bpco_product_details_callback( $post ) {
    wp_nonce_field( 'bpco_product_details', 'bpco_product_details_nonce' );

    $price = get_post_meta( $post->ID, '_bpco_product_price', true );
    $sale_price = get_post_meta( $post->ID, '_bpco_product_sale_price', true );
    $download_url = get_post_meta( $post->ID, '_bpco_product_download_url', true );
    $file_format = get_post_meta( $post->ID, '_bpco_product_file_format', true );
    $features = get_post_meta( $post->ID, '_bpco_product_features', true );
    ?>
    <table class="form-table">
        <tr>
            <th><label for="bpco_product_price"><?php esc_html_e( 'Price ($)', 'blank-page-co' ); ?></label></th>
            <td><input type="text" id="bpco_product_price" name="bpco_product_price" value="<?php echo esc_attr( $price ); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="bpco_product_sale_price"><?php esc_html_e( 'Sale Price ($)', 'blank-page-co' ); ?></label></th>
            <td><input type="text" id="bpco_product_sale_price" name="bpco_product_sale_price" value="<?php echo esc_attr( $sale_price ); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="bpco_product_download_url"><?php esc_html_e( 'Download URL', 'blank-page-co' ); ?></label></th>
            <td><input type="url" id="bpco_product_download_url" name="bpco_product_download_url" value="<?php echo esc_url( $download_url ); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="bpco_product_file_format"><?php esc_html_e( 'File Format', 'blank-page-co' ); ?></label></th>
            <td><input type="text" id="bpco_product_file_format" name="bpco_product_file_format" value="<?php echo esc_attr( $file_format ); ?>" class="regular-text" placeholder="e.g., PSD, AI, PDF, ZIP" /></td>
        </tr>
        <tr>
            <th><label for="bpco_product_features"><?php esc_html_e( 'Features', 'blank-page-co' ); ?></label></th>
            <td><textarea id="bpco_product_features" name="bpco_product_features" class="large-text" rows="5" placeholder="One feature per line"><?php echo esc_textarea( $features ); ?></textarea></td>
        </tr>
    </table>
    <?php
}

/**
 * Save Product Meta
 */
function bpco_save_product_meta( $post_id ) {
    if ( ! isset( $_POST['bpco_product_details_nonce'] ) || ! wp_verify_nonce( $_POST['bpco_product_details_nonce'], 'bpco_product_details' ) ) {
        return;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    $fields = array(
        'bpco_product_price'       => '_bpco_product_price',
        'bpco_product_sale_price'  => '_bpco_product_sale_price',
        'bpco_product_download_url'=> '_bpco_product_download_url',
        'bpco_product_file_format' => '_bpco_product_file_format',
        'bpco_product_features'    => '_bpco_product_features',
    );

    foreach ( $fields as $field => $meta_key ) {
        if ( isset( $_POST[ $field ] ) ) {
            $value = sanitize_text_field( wp_unslash( $_POST[ $field ] ) );
            update_post_meta( $post_id, $meta_key, $value );
        }
    }
}
add_action( 'save_post_product', 'bpco_save_product_meta' );
