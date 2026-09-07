<?php
/**
 * Single post template
 *
 * @package Blank_Page_Co
 */

get_header();
?>

<main id="primary" class="site-content" role="main">
    <article id="post-<?php the_ID(); ?>" <?php post_class( 'single-post' ); ?>>
        <header class="page-header">
            <h1><?php the_title(); ?></h1>
            <div class="post-meta">
                <span><?php echo esc_html( get_the_date() ); ?></span>
                <span>&middot;</span>
                <span><?php echo esc_html( get_the_author() ); ?></span>
                <?php if ( has_category() ) : ?>
                    <span>&middot;</span>
                    <span><?php the_category( ', ' ); ?></span>
                <?php endif; ?>
            </div>
        </header>

        <?php if ( has_post_thumbnail() ) : ?>
            <div style="margin-bottom: var(--s-8); border-radius: var(--r-lg); overflow: hidden; border: var(--stroke-bold) solid var(--stroke-default);">
                <?php the_post_thumbnail( 'large' ); ?>
            </div>
        <?php endif; ?>

        <div class="post-content">
            <?php
            the_content();

            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blank-page-co' ),
                'after'  => '</div>',
            ) );
            ?>
        </div>

        <footer class="post-footer" style="margin-top: var(--s-8); padding-top: var(--s-6); border-top: var(--stroke-width) solid var(--stroke-soft);">
            <?php
            $tags = get_the_tags();
            if ( $tags ) :
            ?>
                <div style="display: flex; flex-wrap: wrap; gap: var(--s-2);">
                    <?php foreach ( $tags as $tag ) : ?>
                        <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" class="product-card-category">
                            <?php echo esc_html( $tag->name ); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </footer>
    </article>

    <nav class="post-navigation" style="max-width: 720px; margin: 0 auto; padding: var(--s-8) var(--s-6);">
        <div style="display: flex; justify-content: space-between; gap: var(--s-4);">
            <?php
            $prev = get_previous_post();
            $next = get_next_post();
            ?>
            <?php if ( $prev ) : ?>
                <a href="<?php echo esc_url( get_permalink( $prev->ID ) ); ?>" style="text-align: left;">
                    <span style="font-size: var(--fs-tiny); color: var(--ink-muted); text-transform: uppercase; letter-spacing: 0.04em;"><?php esc_html_e( 'Previous', 'blank-page-co' ); ?></span><br>
                    <span style="font-weight: 600;"><?php echo esc_html( $prev->post_title ); ?></span>
                </a>
            <?php else : ?>
                <div></div>
            <?php endif; ?>

            <?php if ( $next ) : ?>
                <a href="<?php echo esc_url( get_permalink( $next->ID ) ); ?>" style="text-align: right;">
                    <span style="font-size: var(--fs-tiny); color: var(--ink-muted); text-transform: uppercase; letter-spacing: 0.04em;"><?php esc_html_e( 'Next', 'blank-page-co' ); ?></span><br>
                    <span style="font-weight: 600;"><?php echo esc_html( $next->post_title ); ?></span>
                </a>
            <?php endif; ?>
        </div>
    </nav>

    <?php if ( comments_open() || get_comments_number() ) : ?>
        <?php comments_template(); ?>
    <?php endif; ?>
</main>

<?php
get_footer();
