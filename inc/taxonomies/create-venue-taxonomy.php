<?php
function mdb_init_venue_tax() {
    $labels = array(
        'name'                  => __( 'Venue', 'mdb'),
        'singular_name'         => __( 'Venue', 'mdb'),
        'all_items'             => __( 'All Venues', 'mdb' ),
        'edit_item'             => __( 'Edit Venue', 'mdb'),
        'view_item'             => __( 'View Venue', 'mdb'),
        'update_item'           => __( 'Update Venue', 'mdb'),
        'add_new_item'          => __( 'Add New Venue', 'mdb'),
        'new_item_name'         => __( 'New Venue Name', 'mdb'),
        'search_items'          => __( 'Search Venues', 'mdb'),
        'popular_items'         => __( 'Popular Venues', 'mdb'),
        'add_or_remove_items'   => __( 'Add or remove Venues', 'mdb' )
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false
    );
    register_taxonomy( 'venue', 'movie', $args );
}
add_action( 'init', 'mdb_init_venue_tax' );