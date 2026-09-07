<?php
/**
 * Template part for displaying a message when no posts are found
 *
 * @package Blank_Page_Co
 */
?>

<section class="no-results not-found" style="text-align: center; padding: var(--s-16) 0;">
    <header class="page-header">
        <h1><?php esc_html_e( 'Nothing Found', 'blank-page-co' ); ?></h1>
    </header>

    <div class="page-content">
        <?php if ( is_search() ) : ?>
            <p style="color: var(--ink-muted); margin-bottom: var(--s-6);">
                <?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'blank-page-co' ); ?>
            </p>
            <?php get_search_form(); ?>
        <?php else : ?>
            <p style="color: var(--ink-muted); margin-bottom: var(--s-6);">
                <?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'blank-page-co' ); ?>
            </p>
            <?php get_search_form(); ?>
        <?php endif; ?>
    </div>
</section>
