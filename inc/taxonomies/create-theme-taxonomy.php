<?php
function mdb_init_theme_tax() {
    $labels = array(
        'name'                  => __( 'Themes', 'mdb'),
        'singular_name'         => __( 'Theme', 'mdb'),
        'all_items'             => __( 'All Themes', 'mdb' ),
        'edit_item'             => __( 'Edit Theme', 'mdb'),
        'view_item'             => __( 'View Theme', 'mdb'),
        'update_item'           => __( 'Update Theme', 'mdb'),
        'add_new_item'          => __( 'Add New Theme', 'mdb'),
        'new_item_name'         => __( 'New Theme Name', 'mdb'),
        'search_items'          => __( 'Search Themes', 'mdb'),
        'popular_items'         => __( 'Popular Themes', 'mdb'),
        'add_or_remove_items'   => __( 'Add or remove Themes', 'mdb' )
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false
    );
    register_taxonomy( 'theme', 'movie', $args );
}
add_action( 'init', 'mdb_init_theme_tax' );