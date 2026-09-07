<?php
/**
 * Search form template
 *
 * @package Blank_Page_Co
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'blank-page-co' ); ?></span>
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search&hellip;', 'placeholder', 'blank-page-co' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <button type="submit" class="search-submit"><?php echo esc_html_x( 'Search', 'submit button', 'blank-page-co' ); ?></button>
</form>
