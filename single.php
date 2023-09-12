<?php
/**
 * Single Post template file
 * @package CleanAlien
 * 
 */
get_header(); 
?>
<body>
    <!-- Blog listings -->
    <?php
        if( have_posts()){

            while( have_posts() ){

                the_post();
                get_template_part( 'template-partials/content', 'article');
            }
        }
    ?>

    <!-- End of blog listings -->

    <!-- Footer -->
    <?php get_footer(); ?>
    <!-- Footer end -->