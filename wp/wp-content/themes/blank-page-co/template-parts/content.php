<?php
/**
 * Template part for displaying posts
 *
 * @package Blank_Page_Co
 */
?>

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
