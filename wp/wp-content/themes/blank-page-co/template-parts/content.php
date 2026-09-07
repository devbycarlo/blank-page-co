<?php
/**
 * Template part for displaying posts
 *
 * @package Blank_Page_Co
 */
?>

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
