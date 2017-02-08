<?php
function mdb_init_country_tax() {
    $labels = array(
        'name'                  => __( 'Countries', 'mdb'),
        'singular_name'         => __( 'Country', 'mdb'),
        'all_items'             => __( 'All Countries', 'mdb' ),
        'edit_item'             => __( 'Edit Country', 'mdb'),
        'view_item'             => __( 'View Country', 'mdb'),
        'update_item'           => __( 'Update Country', 'mdb'),
        'add_new_item'          => __( 'Add New Country', 'mdb'),
        'new_item_name'         => __( 'New Country Name', 'mdb'),
        'search_items'          => __( 'Search Countries', 'mdb'),
        'popular_items'         => __( 'Popular Countries', 'mdb'),
        'add_or_remove_items'   => __( 'Add or remove countries', 'mdb' )
    );

    $args = array(
        'labels' => $labels
    );
    register_taxonomy( 'country', 'movie', $args );
}
add_action( 'init', 'mdb_init_country_tax' );