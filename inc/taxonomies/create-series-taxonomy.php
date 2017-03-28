<?php
function mdb_init_series_tax() {
    $labels = array(
        'name'                  => __( 'Series', 'mdb'),
        'singular_name'         => __( 'Series', 'mdb'),
        'all_items'             => __( 'All Series', 'mdb' ),
        'edit_item'             => __( 'Edit Series', 'mdb'),
        'view_item'             => __( 'View Series', 'mdb'),
        'update_item'           => __( 'Update Series', 'mdb'),
        'add_new_item'          => __( 'Add New Series', 'mdb'),
        'new_item_name'         => __( 'New Series Name', 'mdb'),
        'search_items'          => __( 'Search Series', 'mdb'),
        'popular_items'         => __( 'Popular Series', 'mdb'),
        'add_or_remove_items'   => __( 'Add or remove Series', 'mdb' )
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'rewrite' => array (
            'slug' => 'serier',
            'with_front' => false
        )
    );
    register_taxonomy( 'series', 'movie', $args );
}
add_action( 'init', 'mdb_init_series_tax' );