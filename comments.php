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
    <?php comment_form(); ?>

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

    <ul class="comment-list comments">
        <?php
        wp_list_comments(array(
            'style'       => 'ul',
            'short_ping'  => true,
            'avatar_size' => 74
        ));
        ?>
    </ul><!-- .comment-list -->

    <?php if (!comments_open() && get_comments_number()) : ?>
        <p class="no-comments"><?php _e('Comments are closed.', 'cleanalien'); ?></p>
    <?php endif; ?>

    </div><!-- #comments -->

    <div class="pagination">
        <?php paginate_comments_links(); ?>
    </div>
</section>