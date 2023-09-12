<?php

function get_the_post_custom_featured_img( $post_id, $size = 'featured-image', $additional_attributes = []) {
    $custom_featured_img = '';

    if ( null === $post_id ) {
        $post_id = get_the_ID();
    }
};

?>