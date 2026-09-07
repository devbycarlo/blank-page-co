<?php
/**
 * Comments template
 *
 * @package Blank_Page_Co
 */

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area" style="max-width: 720px; margin: var(--s-8) auto; padding: var(--s-8) var(--s-6);">

    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title" style="margin-bottom: var(--s-6);">
            <?php
            $comment_count = get_comments_number();
            printf(
                esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'blank-page-co' ) ),
                number_format_i18n( $comment_count ),
                '<span>' . wp_kses_post( get_the_title() ) . '</span>'
            );
            ?>
        </h2>

        <ol class="comment-list" style="list-style: none; padding: 0;">
            <?php
            wp_list_comments( array(
                'style'      => 'ol',
                'short_ping' => true,
                'avatar_size'=> 50,
            ) );
            ?>
        </ol>

        <?php the_comments_navigation(); ?>

        <?php if ( ! comments_open() ) : ?>
            <p class="no-comments" style="color: var(--ink-muted); margin-top: var(--s-6);">
                <?php esc_html_e( 'Comments are closed.', 'blank-page-co' ); ?>
            </p>
        <?php endif; ?>

    <?php endif; ?>

    <?php comment_form( array(
        'class_form'    => 'comment-form',
        'title_reply'   => esc_html__( 'Leave a Comment', 'blank-page-co' ),
        'label_submit'  => esc_html__( 'Post Comment', 'blank-page-co' ),
        'class_submit'  => 'btn primary',
        'cancel_reply_link' => esc_html__( 'Cancel reply', 'blank-page-co' ),
    ) ); ?>

</div>
