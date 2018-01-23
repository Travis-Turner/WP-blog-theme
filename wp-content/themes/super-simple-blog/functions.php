<?php
/**
 * Replace the_excerpt "more" text with a link
 *
 */

function ld_new_excerpt_more($more) {
    global $post;
    return '...<p class="read-more-p"><a class="more-link read-more" href="'. get_permalink($post->ID) . '">Continue Reading</a></p>';
}
add_filter('excerpt_more', 'ld_new_excerpt_more');
?>
