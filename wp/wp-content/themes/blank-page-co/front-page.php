<?php
/**
 * Front page template
 *
 * @package Blank_Page_Co
 */

get_header();
?>

<main id="primary" class="site-content" role="main">

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1>
                <p><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p>
                <a href="#products" class="btn primary"><?php esc_html_e( 'Browse Collection', 'blank-page-co' ); ?></a>
            </div>
        </div>
    </section>

    <!-- Featured Section -->
    <section class="featured-section">
        <div class="container">
            <div class="section-header">
                <h2><?php esc_html_e( 'Why Choose Us', 'blank-page-co' ); ?></h2>
            </div>
            <div class="featured-grid">
                <div class="featured-card">
                    <div class="featured-card-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                    </div>
                    <h3><?php esc_html_e( 'Premium Templates', 'blank-page-co' ); ?></h3>
                    <p><?php esc_html_e( 'Professionally designed templates ready for immediate use.', 'blank-page-co' ); ?></p>
                </div>

                <div class="featured-card">
                    <div class="featured-card-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="2" y1="12" x2="22" y2="12"></line>
                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                        </svg>
                    </div>
                    <h3><?php esc_html_e( 'Instant Download', 'blank-page-co' ); ?></h3>
                    <p><?php esc_html_e( 'Get instant access to your files after purchase.', 'blank-page-co' ); ?></p>
                </div>

                <div class="featured-card">
                    <div class="featured-card-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                    </div>
                    <h3><?php esc_html_e( 'Quality Guaranteed', 'blank-page-co' ); ?></h3>
                    <p><?php esc_html_e( 'Every product is crafted with attention to detail.', 'blank-page-co' ); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="products-section" style="padding: var(--s-16) 0;">
        <div class="container">
            <div class="section-header">
                <h2><?php esc_html_e( 'All Products', 'blank-page-co' ); ?></h2>
            </div>

            <!-- Category Filter -->
            <div class="category-filter">
                <button class="filter-btn active" data-category="all"><?php esc_html_e( 'All', 'blank-page-co' ); ?></button>
                <button class="filter-btn" data-category="templates"><?php esc_html_e( 'Templates', 'blank-page-co' ); ?></button>
                <button class="filter-btn" data-category="branding"><?php esc_html_e( 'Branding', 'blank-page-co' ); ?></button>
                <button class="filter-btn" data-category="social"><?php esc_html_e( 'Social Media', 'blank-page-co' ); ?></button>
            </div>

            <!-- Product Grid -->
            <div class="product-grid">
                <?php
                // Product placeholder data
                $products = array(
                    array(
                        'title'    => __( 'Minimal Templates Pack', 'blank-page-co' ),
                        'price'    => '$29',
                        'category' => __( 'Templates', 'blank-page-co' ),
                        'cat_slug' => 'templates',
                        'color'    => '#F5DDA4',
                    ),
                    array(
                        'title'    => __( 'Brand Identity Kit', 'blank-page-co' ),
                        'price'    => '$49',
                        'category' => __( 'Branding', 'blank-page-co' ),
                        'cat_slug' => 'branding',
                        'color'    => '#F2EEE4',
                    ),
                    array(
                        'title'    => __( 'Social Media Bundle', 'blank-page-co' ),
                        'price'    => '$35',
                        'category' => __( 'Social Media', 'blank-page-co' ),
                        'cat_slug' => 'social',
                        'color'    => '#FFE9B5',
                    ),
                    array(
                        'title'    => __( 'Portfolio Starter Kit', 'blank-page-co' ),
                        'price'    => '$39',
                        'category' => __( 'Templates', 'blank-page-co' ),
                        'cat_slug' => 'templates',
                        'color'    => '#E5DFD2',
                    ),
                    array(
                        'title'    => __( 'Newsletter Template Set', 'blank-page-co' ),
                        'price'    => '$25',
                        'category' => __( 'Templates', 'blank-page-co' ),
                        'cat_slug' => 'templates',
                        'color'    => '#F5DDA4',
                    ),
                    array(
                        'title'    => __( 'Invoice & Proposal Pack', 'blank-page-co' ),
                        'price'    => '$45',
                        'category' => __( 'Templates', 'blank-page-co' ),
                        'cat_slug' => 'templates',
                        'color'    => '#F2EEE4',
                    ),
                );

                foreach ( $products as $product ) :
                ?>
                <article class="product-card" data-category="<?php echo esc_attr( $product['cat_slug'] ); ?>">
                    <div class="product-card-image" style="background: <?php echo esc_attr( $product['color'] ); ?>;">
                        <div style="display: grid; place-items: center; height: 100%; font-size: 48px; opacity: 0.3;">
                            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                <polyline points="21 15 16 10 5 21"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="product-card-content">
                        <span class="product-card-category"><?php echo esc_html( $product['category'] ); ?></span>
                        <h3 class="product-card-title">
                            <a href="#"><?php echo esc_html( $product['title'] ); ?></a>
                        </h3>
                        <div class="product-card-price"><?php echo esc_html( $product['price'] ); ?></div>
                        <a href="#" class="btn primary" style="width: 100%;"><?php esc_html_e( 'View Product', 'blank-page-co' ); ?></a>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="featured-section">
        <div class="container" style="text-align: center;">
            <h2><?php esc_html_e( 'Ready to Start Creating?', 'blank-page-co' ); ?></h2>
            <p style="color: var(--ink-muted); margin: var(--s-4) 0 var(--s-8); max-width: 50ch; margin-left: auto; margin-right: auto;">
                <?php esc_html_e( 'Join thousands of creators using our templates to build their brand.', 'blank-page-co' ); ?>
            </p>
            <a href="#products" class="btn accent"><?php esc_html_e( 'Shop Now', 'blank-page-co' ); ?></a>
        </div>
    </section>

</main>

<?php
get_footer();
