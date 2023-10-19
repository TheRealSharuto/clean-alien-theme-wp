<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package CleanAlien
 * 
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<?php global $current_user; wp_get_current_user(); ?>
<!-- Comments section-->

<section class="mb-5">
    <h2>
        <?php
        if (!have_comments()) {
            echo "Leave a Comment";
        } else {
            echo get_comments_number() . " Comments";
        }
        ?>
    </h2>
    <article class="snazzy-comment">
    <?php 
    comment_form(array(
    'comment_field' => '
                <section id="comment-section" class="p-3 m-0 border-0 bd-example">
                    <div class="card bg-light">
                            <header class="card-header border-0 bg-transparent">
                                <img class="rounded-circle me-2 user_pfp" src="' . get_avatar_url(get_current_user_id(), 64) . '"/>
                                    <a class="fw-semibold text-decoration-none user_display_name">' . $current_user->display_name . '</a>
                            </header>
                            <div class="card-body py-1">
                                <form>
                                    <div>
                                        <label for="exampleFormControlTextarea1" class="visually-hidden">
                                            Comment</label
                                            >
                                        <textarea
                                            class="form-control form-control-sm border border-2 rounded-1"
                                                id="exampleFormControlTextarea1"
                                                style="height: 80px"
                                                placeholder="Add a comment..."
                                                minlength="3"
                                                maxlength="255"
                                                required
                                        ></textarea>
                                    </div>
                                </form>
                            </div>
                        <footer class="card-footer bg-transparent border-0 text-end">
',
                        'comment_notes_before' => '',
                        'comment_notes_after' => '',
                        '</footer>
                        </div>',
    'name_submit' => 'submit',
    'label_submit' => 'Submit'
        )); 
?>
    </article>
    <!-- This is a comment form -->

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>

        <nav class="navigation comment-navigation" role="navigation">

            <h2 class="screen-reader-text"><?php esc_html_e('Comment navigation', 'cleanalien'); ?></h2>
            <h2 class="screen-reader-text"><?php esc_html_e('Comment navigation', 'cleanalien'); ?></h2>
            <div class="nav-links">

                <div class="nav-previous"><?php previous_comments_link(esc_html__('Older Comments', 'cleanalien')); ?></div>
                <div class="nav-previous"><?php previous_comments_link(esc_html__('Older Comments', 'cleanalien')); ?></div>
                <div class="nav-next"><?php next_comments_link(esc_html__('Newer Comments', 'cleanalien')); ?></div>
                <div class="nav-next"><?php next_comments_link(esc_html__('Newer Comments', 'cleanalien')); ?></div>

            </div>

        </nav><!-- .comment-navigation -->

    <?php endif; // Check for comment navigation 
    ?>

    <ol class="comment-list comments">
        <?php
        wp_list_comments(array(
            'style'       => 'ol',
            'short_ping'  => true,
            'avatar_size' => 74,
            'callback' => 'sleek_block_comments'
        ));
        ?>
    </ol><!-- .comment-list -->

    <?php if (!comments_open() && get_comments_number()) : ?>
        <p class="no-comments"><?php _e('Comments are closed.', 'cleanalien'); ?></p>
    <?php endif; ?>

    </div><!-- #comments -->

    <div class="pagination">
        <?php paginate_comments_links(); ?>
    </div>
</section>