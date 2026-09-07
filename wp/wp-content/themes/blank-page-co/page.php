<?php
/**
 * Page template
 *
 * @package Blank_Page_Co
 */

get_header();
?>

<main id="primary" class="site-content" role="main">
    <div class="container">
        <?php while ( have_posts() ) : the_post(); ?>
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

            <?php if ( comments_open() || get_comments_number() ) : ?>
                <?php comments_template(); ?>
            <?php endif; ?>
        <?php endwhile; ?>
    </div>
</main>

<?php
get_footer();
