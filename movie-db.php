<?php
/*
Plugin Name: Movie DB
Description: Registers a custom post type for movies. Bascially, make your own movie database.
Version: 0.0.1
Author: Marcus Asbæk Geil
Author URI: http://marcusis.me
License: MIT
Text Domain: mdb
*/

// Create custom post type: movie
require_once('inc/create-movie-post-type.php');

// Add meta box: Movie Info
require_once('inc/add-movie-info-meta-box.php');

function mdb_movie_enqueue_style($hook) {
    if ( 'post.php' != $hook ) {
        return;
    }

    wp_enqueue_style( 'mdb_admin_styles', plugins_url('css/admin-style.css', __FILE__) );
}
add_action( 'admin_enqueue_scripts', 'mdb_movie_enqueue_style' );



