<?php
/**
 * Template part for displaying a product card
 *
 * @package Blank_Page_Co
 */

$price = get_post_meta( get_the_ID(), '_bpco_product_price', true );
$sale_price = get_post_meta( get_the_ID(), '_bpco_product_sale_price', true );
$product_categories = get_the_terms( get_the_ID(), 'product_category' );
?>

<article class="product-card">
    <a href="<?php the_permalink(); ?>" class="product-card-link">
        <div class="product-card-image">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'bpco-product' ); ?>
            <?php else : ?>
                <div style="display: grid; place-items: center; height: 100%; background: var(--surface-soft); opacity: 0.3;">
                    <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                        <polyline points="21 15 16 10 5 21"></polyline>
                    </svg>
                </div>
            <?php endif; ?>
        </div>

        <div class="product-card-content">
            <?php if ( $product_categories && ! is_wp_error( $product_categories ) ) : ?>
                <span class="product-card-category"><?php echo esc_html( $product_categories[0]->name ); ?></span>
            <?php endif; ?>

            <h3 class="product-card-title"><?php the_title(); ?></h3>

            <div class="product-card-price">
                <?php if ( $sale_price && $sale_price < $price ) : ?>
                    <span class="price-sale">$<?php echo esc_html( number_format( (float) $sale_price, 2 ) ); ?></span>
                    <span class="price-original">$<?php echo esc_html( number_format( (float) $price, 2 ) ); ?></span>
                <?php elseif ( $price ) : ?>
                    <span>$<?php echo esc_html( number_format( (float) $price, 2 ) ); ?></span>
                <?php endif; ?>
            </div>
        </div>
    </a>
</article>
