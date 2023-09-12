<?php
/**
 * Template for article post header
 * 
 * @package CleanAlien
 * 
 * 
 */
$the_post_id = get_the_ID();
$has_featured_img = get_the_featured_img( $the_post_id );
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
                                the_tags('<span id="tag-text" class="badge rounded-pill text-nowrap mx-1" type="button">', '</span><span id="tag-text" class="mx-1 badge rounded-pill text-nowrap" type="button">', '</span>');
                        //featured image
                        if ( $has_featured_img ) {
                            ?>
                        <figure class="mb-4 px-3">
                            <a href="<?php echo esc_url( get_permalink() ); ?>">
                            <img class="img-fluid rounded" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." />
                            </a>
                        </figure>
                            <?php
                        }
                        ?>
                </header>