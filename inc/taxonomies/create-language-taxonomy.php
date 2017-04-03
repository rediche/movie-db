<?php
function mdb_init_language_tax() {
    $labels = array(
        'name'                  => __( 'Language', 'mdb'),
        'singular_name'         => __( 'Language', 'mdb'),
        'all_items'             => __( 'All Languages', 'mdb' ),
        'edit_item'             => __( 'Edit Language', 'mdb'),
        'view_item'             => __( 'View Language', 'mdb'),
        'update_item'           => __( 'Update Language', 'mdb'),
        'add_new_item'          => __( 'Add New Language', 'mdb'),
        'new_item_name'         => __( 'New Language Name', 'mdb'),
        'search_items'          => __( 'Search Languages', 'mdb'),
        'popular_items'         => __( 'Popular Languages', 'mdb'),
        'add_or_remove_items'   => __( 'Add or remove Languages', 'mdb' )
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false
    );
    register_taxonomy( 'language', 'movie', $args );
}
add_action( 'init', 'mdb_init_language_tax' );