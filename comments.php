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

    <ul class="comment-list">
        <?php
        wp_list_comments(array(
            'style'       => 'ul',
            'short_ping'  => true,
            'avatar_size' => 74,
        ));
        ?>
    </ul><!-- .comment-list -->
    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>

        <nav class="navigation comment-navigation" role="navigation">

            <h3 class="screen-reader-text section-heading"><?php _e('Comment navigation', 'cleanalien'); ?></h3>
            <div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'cleanalien')); ?></div>
            <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'cleanalien')); ?></div>

        </nav><!-- .comment-navigation -->

    <?php endif; // Check for comment navigation 
    ?>
    Top ↑

    <?php if (!comments_open() && get_comments_number()) : ?>
        <p class="no-comments"><?php _e('Comments are closed.', 'cleanalien'); ?></p>
    <?php endif; ?>



    <?php comment_form(); ?>

    </div><!-- #comments -->
    Top ↑

    <div class="pagination">
        <?php paginate_comments_links(); ?>
    </div>
</section>