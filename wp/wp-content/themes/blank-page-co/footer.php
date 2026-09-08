<?php
/**
 * Footer template
 *
 * @package Blank_Page_Co
 */

?>

    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <h2 class="site-title">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <?php bloginfo( 'name' ); ?>
                        </a>
                    </h2>
                    <p><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p>
                </div>

                <div class="footer-nav">
                    <h3 class="footer-heading"><?php esc_html_e( 'Quick Links', 'blank-page-co' ); ?></h3>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer',
                        'menu_class'     => 'footer-links',
                        'container'      => false,
                        'depth'          => 1,
                        'fallback_cb'    => false,
                    ) );
                    ?>
                </div>

                <div class="footer-nav">
                    <h3 class="footer-heading"><?php esc_html_e( 'Resources', 'blank-page-co' ); ?></h3>
                    <ul class="footer-links">
                        <li><a href="<?php echo esc_url( home_url( '/help' ) ); ?>"><?php esc_html_e( 'Help Center', 'blank-page-co' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>"><?php esc_html_e( 'Privacy Policy', 'blank-page-co' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/terms' ) ); ?>"><?php esc_html_e( 'Terms of Service', 'blank-page-co' ); ?></a></li>
                    </ul>
                </div>

                <div class="footer-social-wrap">
                    <h3 class="footer-heading"><?php esc_html_e( 'Connect', 'blank-page-co' ); ?></h3>
                    <div class="footer-social">
                        <?php
                        $twitter_url = get_theme_mod( 'bpco_social_twitter', '' );
                        if ( $twitter_url ) :
                        ?>
                        <a href="<?php echo esc_url( $twitter_url ); ?>" aria-label="<?php esc_attr_e( 'Twitter', 'blank-page-co' ); ?>" target="_blank" rel="noopener noreferrer">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                        </a>
                        <?php endif; ?>
                        <?php
                        $instagram_url = get_theme_mod( 'bpco_social_instagram', '' );
                        if ( $instagram_url ) :
                        ?>
                        <a href="<?php echo esc_url( $instagram_url ); ?>" aria-label="<?php esc_attr_e( 'Instagram', 'blank-page-co' ); ?>" target="_blank" rel="noopener noreferrer">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                            </svg>
                        </a>
                        <?php endif; ?>
                        <?php
                        $pinterest_url = get_theme_mod( 'bpco_social_pinterest', '' );
                        if ( $pinterest_url ) :
                        ?>
                        <a href="<?php echo esc_url( $pinterest_url ); ?>" aria-label="<?php esc_attr_e( 'Pinterest', 'blank-page-co' ); ?>" target="_blank" rel="noopener noreferrer">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.401.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987C23.97 5.367 18.633 0 12.017 0z"/>
                            </svg>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. <?php echo esc_html( get_theme_mod( 'bpco_footer_copyright', 'All rights reserved' ); ); ?></p>
            </div>
        </div>
    </footer>
</div>

<script defer src="/_vercel/insights/script.js"></script>
<?php wp_footer(); ?>
</body>
</html>
