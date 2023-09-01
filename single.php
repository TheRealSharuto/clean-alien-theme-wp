<!-- Head -->
<?php require('template-partials/head.php'); ?>
<!-- Head End -->
<body>
     <!-- Navbar -->
     <?php require('template-partials/nav.php'); ?>
    <!--  Navbar End -->

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
    <?php require('template-partials/footer.php'); ?>
    <!-- Footer end -->

</body>
<!-- Scripts -->
<?php require('template-partials/scripts.php'); ?>
