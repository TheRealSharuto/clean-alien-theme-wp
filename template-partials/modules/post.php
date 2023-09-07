<div class="col-md-4 mb-4">
                    <div class="blog-post-listing">
                        <a href="<?php the_permalink(); ?>" class="link-overlay" aria-label="Read this article">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="Blog Post Thumbnail"
                                class="img-fluid">
                            <div class="overlay">
                                <i class="fas fa-arrow-circle-right"></i>
                            </div>
                        </a>
                        <div class="category">
                            <?php 
                            $args = array(
                                'style'      => 'list',
                                'hide_empty' => 1,
                                );
                                get_categories($args);
                            get_categories();
                                ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="link-dark">
                        <h3 class="title">
                            <?php 
                            the_title(); 
                            ?>
                            </h3>
                        <p class="excerpt">
                            <?php 
                                the_excerpt('<span class="fs-5 mb-4">', '</span><span class="fs-5 mb-4">','</span>');
                            ?>
                        </p>
                        </a>
                        <div class="author-info">
                            <img src="<?php get_avatar_url($author->ID, array("size"=>260 )); ?>" alt="Author Photo" class="author-photo">
                            <div class="author-details">
                                <div class="author-name"><?php the_author_posts_link(); ?></div>
                                <div class="published-date">
                                    <?php the_date();
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
</div>