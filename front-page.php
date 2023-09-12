
<?php
/**
 * Front Page template file
 * @package CleanAlien
 * 
 */
get_header(); 
?>

    <!-- HERO -->
    <?php require('template-partials/hero.php'); ?>
    <!-- HERO END -->

    <!-- Categories -->
    <?php require('template-partials/category-list.php'); ?>
    <!-- Categories END -->

    <!-- Featured blog list section -->
    <?php require('template-partials/featured-post.php'); ?>
    <!-- End of featured blog section -->

    <!-- Blog listings -->
    <?php
        if( have_posts()){

            while( have_posts() ){

                the_post();
                the_content();
            }
        }
    ?>

    <!-- End of blog listings -->

    <!-- Footer -->
    <?php get_footer(); ?>
    <!-- Footer end -->