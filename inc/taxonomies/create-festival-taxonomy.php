<?php
function mdb_init_festival_tax() {
    $labels = array(
        'name'                  => __( 'Festivals', 'mdb'),
        'singular_name'         => __( 'Festival', 'mdb'),
        'all_items'             => __( 'All Festivals', 'mdb' ),
        'edit_item'             => __( 'Edit Festival', 'mdb'),
        'view_item'             => __( 'View Festival', 'mdb'),
        'update_item'           => __( 'Update Festival', 'mdb'),
        'add_new_item'          => __( 'Add New Festival', 'mdb'),
        'new_item_name'         => __( 'New Festival Name', 'mdb'),
        'search_items'          => __( 'Search Festivals', 'mdb'),
        'popular_items'         => __( 'Popular Festivals', 'mdb'),
        'add_or_remove_items'   => __( 'Add or remove Festivals', 'mdb' )
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true
    );
    register_taxonomy( 'festival', 'movie', $args );
}
add_action( 'init', 'mdb_init_festival_tax' );