<?php
/**
 * Search results template
 *
 * @package Blank_Page_Co
 */

get_header();
?>

<main id="primary" class="site-content" role="main">
    <div class="container">
        <div class="page-header">
            <h1><?php printf( esc_html__( 'Search Results for: %s', 'blank-page-co' ), '<span style="color: var(--ink-muted);">' . get_search_query() . '</span>' ); ?></h1>
        </div>

        <?php if ( have_posts() ) : ?>

            <div class="product-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'product-card' ); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="product-card-image">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'bpco-product' ); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <div class="product-card-content">
                            <span class="product-card-category"><?php echo esc_html( get_the_date() ); ?></span>
                            <h3 class="product-card-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <p style="color: var(--ink-muted); font-size: var(--fs-small); margin-bottom: var(--s-4);">
                                <?php echo esc_html( wp_trim_words( get_the_excerpt(), 15 ) ); ?>
                            </p>
                            <a href="<?php the_permalink(); ?>" class="btn"><?php esc_html_e( 'Read More', 'blank-page-co' ); ?></a>
                        </div>
                    </article>
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
                <h2><?php esc_html_e( 'Nothing found', 'blank-page-co' ); ?></h2>
                <p style="color: var(--ink-muted); margin-bottom: var(--s-6);">
                    <?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'blank-page-co' ); ?>
                </p>
                <?php get_search_form(); ?>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php
get_footer();
