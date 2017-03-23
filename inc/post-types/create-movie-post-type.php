<?php
/**
 * Create Movie custom post type
 *
 * @link https://codex.wordpress.org/Post_Types#Custom_Post_Types
 */
function mdb_create_post_type() {
    $labels = array(
        'name'          => __( 'Movies', 'mdb' ),
        'singular_name' => __( 'Movie', 'mdb' ),
        'all_items'     => __( 'All Movies', 'mdb' ),
        'add_new_item'  => __( 'Add New Movie', 'mdb' ),
        'new_item'      => __( 'New Movie', 'mdb' ),
        'edit_item'     => __( 'Edit Movie', 'mdb' ),
        'update_item'   => __( 'Update Movie', 'mdb' )
    );

    $args = array(
        'label'         => __( 'Movies', 'mdb' ),
        'description'   => __( 'Movie Database', 'mdb' ),
        'labels'        => $labels,
        'hierarchical'  => false,
        'public'        => true,
        'menu_position' => 5,
        'has_archive'   => true,
        'menu_icon'     => 'dashicons-video-alt',
        'supports'      => array( 'title', 'editor', 'thumbnail' )
    );

    register_post_type( 'movie', $args );
}
add_action( 'init', 'mdb_create_post_type', 0 );