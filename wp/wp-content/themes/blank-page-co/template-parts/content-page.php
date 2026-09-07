<?php
/**
 * Template part for displaying page content
 *
 * @package Blank_Page_Co
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'page-content' ); ?>>
    <header class="page-header">
        <h1><?php the_title(); ?></h1>
    </header>

    <div class="post-content">
        <?php
        the_content();

        wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blank-page-co' ),
            'after'  => '</div>',
        ) );
        ?>
    </div>

    <?php if ( get_edit_post_link() ) : ?>
        <footer style="margin-top: var(--s-8);">
            <?php
            edit_post_link(
                sprintf(
                    wp_kses( __( 'Edit <span class="screen-reader-text">%s</span>', 'blank-page-co' ), array( 'span' => array( 'class' => array() ) ) ),
                    get_the_title()
                ),
                '<span class="edit-link">',
                '</span>'
            );
            ?>
        </footer>
    <?php endif; ?>
</article>
