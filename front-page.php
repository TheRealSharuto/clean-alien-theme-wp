<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<!-- Head -->
<?php require('template-partials/head.php'); ?>
<!-- Head End -->
<body>
     <!-- Navbar -->
     <?php require('template-partials/nav.php'); ?>
    <!--  Navbar End -->

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
    <?php require('template-partials/footer.php'); ?>
    <!-- Footer end -->

</body>
<!-- Scripts -->
<?php require('template-partials/scripts.php'); ?>
</html>