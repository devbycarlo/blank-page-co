<?php
/**
 * Product Archive template
 *
 * @package Blank_Page_Co
 */

get_header();
?>

<main id="primary" class="site-content" role="main">
    <div class="container">
        <div class="page-header">
            <h1><?php esc_html_e( 'All Products', 'blank-page-co' ); ?></h1>
            <?php if ( is_tax( 'product_category' ) ) : ?>
                <p style="color: var(--ink-muted); margin-top: var(--s-3);">
                    <?php printf( esc_html__( 'Browse our %s collection', 'blank-page-co' ), single_term_title( '', false ) ); ?>
                </p>
            <?php endif; ?>
        </div>

        <!-- Category Filter -->
        <div class="category-filter">
            <a href="<?php echo esc_url( get_post_type_archive_link( 'product' ) ); ?>" class="filter-btn <?php echo ! is_tax( 'product_category' ) ? 'active' : ''; ?>">
                <?php esc_html_e( 'All', 'blank-page-co' ); ?>
            </a>
            <?php
            $product_categories = get_terms( array(
                'taxonomy'   => 'product_category',
                'hide_empty' => false,
            ) );

            if ( ! is_wp_error( $product_categories ) && ! empty( $product_categories ) ) :
                foreach ( $product_categories as $category ) :
                    $is_active = is_tax( 'product_category', $category->slug );
            ?>
                <a href="<?php echo esc_url( get_term_link( $category ) ); ?>" class="filter-btn <?php echo $is_active ? 'active' : ''; ?>">
                    <?php echo esc_html( $category->name ); ?>
                </a>
            <?php
                endforeach;
            endif;
            ?>
        </div>

        <?php if ( have_posts() ) : ?>

            <div class="product-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/content', 'product-card' ); ?>
                <?php endwhile; ?>
            </div>

            <div class="pagination" style="margin-top: var(--s-8); text-align: center;">
                <?php
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => esc_html__( '&laquo; Previous', 'blank-page-co' ),
                    'next_text' => esc_html__( 'Next &raquo;', 'blank-page-co' ),
                ) );
                ?>
            </div>

        <?php else : ?>
            <div class="no-results" style="text-align: center; padding: var(--s-16) 0;">
                <h2><?php esc_html_e( 'No products found', 'blank-page-co' ); ?></h2>
                <p style="color: var(--ink-muted); margin-bottom: var(--s-6);">
                    <?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for.', 'blank-page-co' ); ?>
                </p>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn primary"><?php esc_html_e( 'Back to Home', 'blank-page-co' ); ?></a>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php
get_footer();
