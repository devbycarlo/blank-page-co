<?php
/**
 * Main template file
 *
 * @package Blank_Page_Co
 */

get_header();
?>

<main id="primary" class="site-content" role="main">
    <div class="container">
        <div class="page-header">
            <h1><?php
                if ( is_home() && ! is_front_page() ) {
                    single_post_title();
                } elseif ( is_archive() ) {
                    the_archive_title();
                } elseif ( is_search() ) {
                    printf( esc_html__( 'Search Results for: %s', 'blank-page-co' ), get_search_query() );
                } else {
                    esc_html_e( 'Latest Posts', 'blank-page-co' );
                }
            ?></h1>
        </div>

        <?php if ( have_posts() ) : ?>

            <div class="post-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="post-card-image">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'bpco-product' ); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <div class="post-card-content">
                            <span class="post-card-date"><?php echo esc_html( get_the_date() ); ?></span>
                            <h3 class="post-card-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <p class="post-card-excerpt">
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
                <p style="color: var(--ink-muted);"><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for.', 'blank-page-co' ); ?></p>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php
get_footer();
