<!-- Page content-->
<div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article id="article">
                            <!-- Post header -->
                        <header id="article-header" class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">Welcome to Blog Post!</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Published <?php the_date(); ?> 
                            <span class="comments mx-3"><a href="#comments"><i class="fa fa-comment mx-1"></i><?php comments_number(); ?></a></span>
                            </div>
                            <!-- Post categories-->
                            <?php
                                the_tags('<span id="tag-text" class="badge rounded-pill text-nowrap mx-1" type="button">', '</span><span id="tag-text" class="mx-1 badge rounded-pill text-nowrap" type="button">', '</span>');
                            ?>
                        </header>
                            <!-- Preview image figure-->
                        <figure class="mb-4 px-3"><img class="img-fluid rounded" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." /></figure>
                        <!-- Post content-->

                        <section class="mb-5">
                        <?php the_content('<span class="fs-5 mb-4">', '</span><<span class="fs-5 mb-4">','</span>');?>
                        </section>
                        <section>
                            <?php
                            comments_template();
                            ?>
                        </section>

                    

