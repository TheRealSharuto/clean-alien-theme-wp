<!-- Page content-->
<div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                            <!-- Post header -->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">Welcome to Blog Post!</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Published <?php the_date(); ?></div>
                            <!-- Post categories-->
                            <?php
                                the_tags('<span class="tag-text">', '</span><span class="tag-text">', '</span>');
                            ?>
                            <a class="badge" href="#!">Web Design</a>
                            <a class="badge tag-text" href="#!">Freebies</a>
                        </header>
<?php
the_content();
?>
</article>
</div>
</div>
</div>