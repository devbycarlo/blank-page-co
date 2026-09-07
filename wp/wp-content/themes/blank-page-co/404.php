<?php
/**
 * 404 template
 *
 * @package Blank_Page_Co
 */

get_header();
?>

<main id="primary" class="site-content" role="main">
    <div class="container">
        <div class="error-404">
            <h1>404</h1>
            <p><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'blank-page-co' ); ?></p>
            <p style="color: var(--ink-muted); margin-bottom: var(--s-8);">
                <?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'blank-page-co' ); ?>
            </p>
            <?php get_search_form(); ?>
            <div style="margin-top: var(--s-8);">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn primary">
                    <?php esc_html_e( 'Back to Home', 'blank-page-co' ); ?>
                </a>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
