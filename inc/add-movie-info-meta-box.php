<?php
require_once('build-movie-info-meta-box.php');

/**
 * Add custom meta box to Movie post type
 *
 * @param post $post The post object
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/add_meta_boxes
 */
function mdb_add_meta_boxes( $post ) {
    add_meta_box( 
        'movie_meta_box', 
        __( 'Movie Meta Info', 'mdb' ), 
        'mdb_build_meta_box', 
        'movie',
        'normal',
        'low'
    );
}
add_action( 'add_meta_boxes_movie', 'mdb_add_meta_boxes' );