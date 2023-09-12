<?php
/**
 * ARCHIVE template file
 * @package CleanAlien
 * 
 */
get_header(); 
?>
<!--  in archive template -->
    <!-- Blog listings -->
    <section class="blog-listing-section" id="blog">
                <div class="container">
                    <div class="row">
    <?php
        if( have_posts()){ 
            ?>
            <?php while( have_posts() ){

                the_post();
                get_template_part( 'template-partials/content', 'archive');
            } ?> 
        <?php }
?>
                    </div>
                </div>
    </section>
    <!-- End of blog listings -->
<!-- Footer -->
<?php get_footer(); ?>
<!-- Footer end -->