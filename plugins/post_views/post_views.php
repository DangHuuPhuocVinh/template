<?php 
/*
*Plugin Name: Post views
*Author: Vinh
*Description: Count the views of the post
*Version: 1.0.0
*/
?>

<?php

function set_post_view() {
    $key = 'post_views_count';
    $post_id = get_the_ID();
    $count =(int) get_post_meta( $post_id, $key, true );
    $count++;
    update_post_meta( $post_id, $key, $count );
}

function get_post_view() {
    $count = get_post_meta( get_the_ID(), 'post_views_count', true );
    return $count . " views";
}

// add_action( 'manage_posts_custom_column', 'posts_custom_column_views' );
?>