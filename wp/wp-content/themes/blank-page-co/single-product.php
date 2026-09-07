<?php
/**
 * Single Product template
 *
 * @package Blank_Page_Co
 */

get_header();

// Get product meta
$price = get_post_meta( get_the_ID(), '_bpco_product_price', true );
$sale_price = get_post_meta( get_the_ID(), '_bpco_product_sale_price', true );
$download_url = get_post_meta( get_the_ID(), '_bpco_product_download_url', true );
$file_format = get_post_meta( get_the_ID(), '_bpco_product_file_format', true );
$features_raw = get_post_meta( get_the_ID(), '_bpco_product_features', true );
$features = array_filter( explode( "\n", $features_raw ) );

// Get product categories
$product_categories = get_the_terms( get_the_ID(), 'product_category' );
?>

<main id="primary" class="site-content" role="main">

    <!-- Breadcrumb -->
    <div class="product-breadcrumb">
        <div class="container">
            <nav aria-label="<?php esc_attr_e( 'Breadcrumb', 'blank-page-co' ); ?>">
                <ol class="breadcrumb-list">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'blank-page-co' ); ?></a></li>
                    <li><a href="<?php echo esc_url( get_post_type_archive_link( 'product' ) ); ?>"><?php esc_html_e( 'Shop', 'blank-page-co' ); ?></a></li>
                    <?php if ( $product_categories && ! is_wp_error( $product_categories ) ) : ?>
                        <li><a href="<?php echo esc_url( get_term_link( $product_categories[0] ) ); ?>"><?php echo esc_html( $product_categories[0]->name ); ?></a></li>
                    <?php endif; ?>
                    <li class="current"><?php the_title(); ?></li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Product Detail -->
    <div class="product-detail">
        <div class="container">
            <div class="product-detail-grid">

                <!-- Product Gallery -->
                <div class="product-gallery">
                    <div class="product-gallery-main" style="background: var(--surface-soft);">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'large', array( 'class' => 'product-gallery-image' ) ); ?>
                        <?php else : ?>
                            <div class="product-gallery-placeholder">
                                <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                    <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                    <polyline points="21 15 16 10 5 21"></polyline>
                                </svg>
                                <span><?php esc_html_e( 'Product Preview', 'blank-page-co' ); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>

                    <?php if ( $file_format ) : ?>
                        <div class="product-format-badge">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                            </svg>
                            <span><?php echo esc_html( $file_format ); ?></span>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Product Info -->
                <div class="product-info">
                    <?php if ( $product_categories && ! is_wp_error( $product_categories ) ) : ?>
                        <div class="product-categories">
                            <?php foreach ( $product_categories as $category ) : ?>
                                <a href="<?php echo esc_url( get_term_link( $category ) ); ?>" class="product-card-category">
                                    <?php echo esc_html( $category->name ); ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <h1 class="product-title"><?php the_title(); ?></h1>

                    <div class="product-price-wrap">
                        <?php if ( $sale_price && $sale_price < $price ) : ?>
                            <span class="product-price-sale">$<?php echo esc_html( number_format( (float) $sale_price, 2 ) ); ?></span>
                            <span class="product-price-original">$<?php echo esc_html( number_format( (float) $price, 2 ) ); ?></span>
                        <?php elseif ( $price ) : ?>
                            <span class="product-price">$<?php echo esc_html( number_format( (float) $price, 2 ) ); ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="product-excerpt">
                        <?php the_excerpt(); ?>
                    </div>

                    <?php if ( ! empty( $features ) ) : ?>
                        <div class="product-features">
                            <h3><?php esc_html_e( 'What\'s Included', 'blank-page-co' ); ?></h3>
                            <ul class="features-list">
                                <?php foreach ( $features as $feature ) : ?>
                                    <li>
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"></polyline>
                                        </svg>
                                        <?php echo esc_html( trim( $feature ) ); ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <div class="product-actions">
                        <?php if ( $download_url ) : ?>
                            <a href="<?php echo esc_url( $download_url ); ?>" class="btn primary product-buy-btn" target="_blank" rel="noopener noreferrer">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                    <polyline points="7 10 12 15 17 10"></polyline>
                                    <line x1="12" y1="15" x2="12" y2="3"></line>
                                </svg>
                                <?php esc_html_e( 'Download Now', 'blank-page-co' ); ?>
                            </a>
                        <?php else : ?>
                            <a href="#" class="btn primary product-buy-btn">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                                <?php esc_html_e( 'Add to Cart', 'blank-page-co' ); ?>
                            </a>
                        <?php endif; ?>
                    </div>

                    <div class="product-meta-info">
                        <div class="meta-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line x1="12" y1="15" x2="12" y2="3"></line>
                            </svg>
                            <span><?php esc_html_e( 'Instant download after purchase', 'blank-page-co' ); ?></span>
                        </div>
                        <div class="meta-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg>
                            <span><?php esc_html_e( 'Secure payment', 'blank-page-co' ); ?></span>
                        </div>
                        <div class="meta-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                            <span><?php esc_html_e( 'Lifetime access', 'blank-page-co' ); ?></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Product Description -->
    <div class="product-description">
        <div class="container">
            <div class="section-header">
                <h2><?php esc_html_e( 'Product Details', 'blank-page-co' ); ?></h2>
            </div>
            <div class="post-content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>

    <!-- Related Products -->
    <section class="related-products">
        <div class="container">
            <div class="section-header">
                <h2><?php esc_html_e( 'You May Also Like', 'blank-page-co' ); ?></h2>
            </div>

            <?php
            $related_args = array(
                'post_type'      => 'product',
                'posts_per_page' => 4,
                'post__not_in'   => array( get_the_ID() ),
                'orderby'        => 'rand',
            );

            if ( $product_categories && ! is_wp_error( $product_categories ) ) {
                $related_args['tax_query'] = array(
                    array(
                        'taxonomy' => 'product_category',
                        'field'    => 'term_id',
                        'terms'    => wp_list_pluck( $product_categories, 'term_id' ),
                    ),
                );
            }

            $related_query = new WP_Query( $related_args );

            if ( $related_query->have_posts() ) :
            ?>
                <div class="product-grid">
                    <?php while ( $related_query->have_posts() ) : $related_query->the_post(); ?>
                        <?php get_template_part( 'template-parts/content', 'product-card' ); ?>
                    <?php endwhile; ?>
                </div>
            <?php
                wp_reset_postdata();
            else :
                // Show placeholder products if no related products found
                $placeholder_products = array(
                    array( 'title' => __( 'Minimal Templates Pack', 'blank-page-co' ), 'price' => '$29', 'color' => '#F5DDA4' ),
                    array( 'title' => __( 'Brand Identity Kit', 'blank-page-co' ), 'price' => '$49', 'color' => '#F2EEE4' ),
                    array( 'title' => __( 'Social Media Bundle', 'blank-page-co' ), 'price' => '$35', 'color' => '#FFE9B5' ),
                    array( 'title' => __( 'Portfolio Starter Kit', 'blank-page-co' ), 'price' => '$39', 'color' => '#E5DFD2' ),
                );
            ?>
                <div class="product-grid">
                    <?php foreach ( $placeholder_products as $product ) : ?>
                        <article class="product-card">
                            <div class="product-card-image" style="background: <?php echo esc_attr( $product['color'] ); ?>;">
                                <div style="display: grid; place-items: center; height: 100%; opacity: 0.3;">
                                    <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                        <polyline points="21 15 16 10 5 21"></polyline>
                                    </svg>
                                </div>
                            </div>
                            <div class="product-card-content">
                                <span class="product-card-category"><?php esc_html_e( 'Digital Product', 'blank-page-co' ); ?></span>
                                <h3 class="product-card-title">
                                    <a href="#"><?php echo esc_html( $product['title'] ); ?></a>
                                </h3>
                                <div class="product-card-price"><?php echo esc_html( $product['price'] ); ?></div>
                                <a href="#" class="btn primary" style="width: 100%;"><?php esc_html_e( 'View Product', 'blank-page-co' ); ?></a>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

</main>

<?php
get_footer();
