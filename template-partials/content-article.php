<!-- Page content-->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Post content-->
            <article id="article">
                            <!-- Post header -->
          <?php get_template_part( 'template-partials/blog/post-header'); ?>
                        <!-- Post content-->

                    <section class="mb-5">
                        <?php 
                            the_content('<span class="fs-5 mb-4">', '</span><span class="fs-5 mb-4">','</span>');
                        ?>
                    </section>
            </article>
                    <section>
                        <?php
                            comments_template();
                        ?>
                    </section>
        </div>
    </div>
</div>