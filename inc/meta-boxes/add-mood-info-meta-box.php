<?php
require_once('build-mood-info-meta-box.php');
require_once('save-mood-info-meta-box.php');

/**
 * Add custom meta box (Mood) to Movie post type
 *
 * @param post $post The post object
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/add_meta_boxes
 */
function mdb_add_mood_meta_boxes( $post ) {
    add_meta_box( 
        'movie_mood_meta_box', 
        __( 'Mood Info', 'mdb' ), 
        'mdb_build_mood_meta_box', 
        'movie',
        'side',
        'low'
    );
}
add_action( 'add_meta_boxes_movie', 'mdb_add_mood_meta_boxes' );