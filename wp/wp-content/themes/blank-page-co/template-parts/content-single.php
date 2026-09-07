<?php
/**
 * Template part for displaying single post content
 *
 * @package Blank_Page_Co
 */
?>

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
