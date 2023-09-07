<!-- Head -->
<?php require('template-partials/head.php'); 
get_header();?>
<!-- Head End -->
<body>
     <!-- Navbar -->
     <?php require('template-partials/nav.php'); ?>
    <!--  Navbar End -->
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
    <?php require('template-partials/footer.php'); ?>
    <!-- Footer end -->

</body>
<!-- Scripts -->
<?php require('template-partials/scripts.php'); ?>