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
require_once('inc/post-types/create-movie-post-type.php');

// Add meta box: Movie Info
require_once('inc/meta-boxes/add-movie-info-meta-box.php');

// Add meta box: Mood Info
require_once('inc/meta-boxes/add-mood-info-meta-box.php');

// Add Taxonomy: Series (Tag)
require_once('inc/taxonomies/create-series-taxonomy.php');

// Add Taxonomy: Theme (Tag)
require_once('inc/taxonomies/create-theme-taxonomy.php');

// Add Taxonomy: Genre (Tag)
require_once('inc/taxonomies/create-genre-taxonomy.php');

// Add Taxonomy: Language (Tag)
require_once('inc/taxonomies/create-language-taxonomy.php');

// Add Taxonomy: Venue (Tag)
require_once('inc/taxonomies/create-venue-taxonomy.php');

// Add Taxonomy: Festival (Category)
require_once('inc/taxonomies/create-festival-taxonomy.php');

// Load css/admin-style.css
function mdb_movie_enqueue_style($hook) {
    if ( 'post.php' != $hook ) {
        return;
    }

    wp_enqueue_style( 'mdb_admin_styles', plugins_url('css/admin-style.css', __FILE__) );
}
add_action( 'admin_enqueue_scripts', 'mdb_movie_enqueue_style' );



