<section class="hero-section">
        <div class="container">
            <div class="rounded-container container">
                <h2 class="text-center hero-text"><?php the_title(); ?></h2>
                <form class="input-container container">
                    <i class="fa-solid fa-magnifying-glass" id="search-icon"></i>
                    <input type="search" placeholder="Search" aria-label="Search">
                    <button class="btn" type="submit">
                        <i class="fa-solid fa-arrow-right" id="search-submission"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>
<style>
    .rounded-container {
        background: <?php 
$image_attributes = wp_get_attachment_image_src( $attachment->ID );
if ( $image_attributes ) : ?>
    <img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" />
<?php endif; ?>;
    }
    </style>