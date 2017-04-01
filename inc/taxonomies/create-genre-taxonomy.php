<?php
function mdb_init_genre_tax() {
    $labels = array(
        'name'                  => __( 'Genre', 'mdb'),
        'singular_name'         => __( 'Genre', 'mdb'),
        'all_items'             => __( 'All Genres', 'mdb' ),
        'edit_item'             => __( 'Edit Genre', 'mdb'),
        'view_item'             => __( 'View Genre', 'mdb'),
        'update_item'           => __( 'Update Genre', 'mdb'),
        'add_new_item'          => __( 'Add New Genre', 'mdb'),
        'new_item_name'         => __( 'New Genre Name', 'mdb'),
        'search_items'          => __( 'Search Genres', 'mdb'),
        'popular_items'         => __( 'Popular Genres', 'mdb'),
        'add_or_remove_items'   => __( 'Add or remove Genres', 'mdb' )
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false
    );
    register_taxonomy( 'genre', 'movie', $args );
}
add_action( 'init', 'mdb_init_genre_tax' );