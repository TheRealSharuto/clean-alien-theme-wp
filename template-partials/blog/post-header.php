<?php
/**
 * Template for article post header
 * 
 * @package CleanAlien
 * 
 * 
 */
?>

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
                        if (has_tag()) {
                                the_tags('<span id="tag-text" class="badge rounded-pill text-nowrap mx-1" type="button">', '</span><span id="tag-text" class="mx-1 badge rounded-pill text-nowrap" type="button">', '</span>');
                        }?>
                        <?php 
                        //featured image
                            if (has_post_thumbnail()) {
                            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
                            ?>
                        <figure class="pt-5 pb-5">
                            <a href="<?php echo esc_url( get_permalink() ); ?>">
                            <img class="img-fluid rounded" src="<?php echo $url ?>" alt="..." />
                            </a>
                        </figure>
                        <?php } ?>
                </header>