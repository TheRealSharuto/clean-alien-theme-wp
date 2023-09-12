<?php 
/**
 *  The template part for displaying a message that posts cannot be found
 * 
 * @package CleanAlien
 */

 ?>

 <section class="no-content">
    <h1 class="page-header page-title">
        <?php esc_html_e( 'No posts have been found.' ); ?>
    </h1>

    <div class="page-content">
        <?php 
        if ( is_home() && current_user_can( 'publish_posts' )) { ?>
        <p>
            <?php
            printf(
                wp_kses(
                    __('Are you ready to publish your first post? <a href="%s"> Get started here</a>', 'CleanAlien'),
                    [
                        'a' => [
                            'href' => []
                        ]
                    ]               
                        ),
                        esc_url( admin_url( 'post-new.php'))
            )
            ?>
            </p>
            <?php
        } elseif ( is_search() ) {
            ?>
            <p><?php esc_html_e( 'Sorry! We do not have any posts for your search query yet. Please try again with different keywords :). ', 'CleanAlien' ); ?></p>
        <?php 
    get_search_form();
    } else {
        ?>
            <p><?php esc_html_e( 'It seems that we can not find what you are looking for. Maybe search can help?', 'CleanAlien' ); ?></p>
        <?php 
    get_search_form();
    } ?>
    </div>
 </section>