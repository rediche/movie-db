<?php
/**
 * Store custom field meta box data
 *
 * @param int $post_id The post ID.
 */
function mdb_save_meta_boxes( $post_id ) {
    // Verify nonce field
    if( !isset( $_POST['movie_meta_box_nonce'] ) || !wp_verify_nonce( $_POST['movie_meta_box_nonce'], basename( __FILE__ ) ) ) {
        return;
    }

    // Return if autosave
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Check the users permissions
    if ( !current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    // Store custom field values
    // @string Original Title
    if( isset( $_REQUEST['original_title'] ) ) {
        update_post_meta( $post_id, '_movie_original_title', sanitize_text_field( $_POST['original_title'] ) );
    }

    // @string Title
    if( isset( $_REQUEST['title'] ) ) {
        update_post_meta( $post_id, '_movie_title', sanitize_text_field( $_POST['title'] ) );
    }

    // @string Country
    if( isset( $_REQUEST['country'] ) ) {
        update_post_meta( $post_id, '_movie_country', sanitize_text_field( $_POST['country'] ) );
    }

    // @string Year
    if( isset( $_REQUEST['year'] ) ) {
        update_post_meta( $post_id, '_movie_year', sanitize_text_field( $_POST['year'] ) );
    }

    // @string Duration
    if( isset( $_REQUEST['duration'] ) ) {
        update_post_meta( $post_id, '_movie_duration', sanitize_text_field( $_POST['duration'] ) );
    }

    // @string Director
    if( isset( $_REQUEST['director'] ) ) {
        update_post_meta( $post_id, '_movie_director', sanitize_text_field( $_POST['director'] ) );
    }

    // @string Producer
    if( isset( $_REQUEST['producer'] ) ) {
        update_post_meta( $post_id, '_movie_producer', sanitize_text_field( $_POST['producer'] ) );
    }

    // @string Manuscript
    if( isset( $_REQUEST['manuscript'] ) ) {
        update_post_meta( $post_id, '_movie_manuscript', sanitize_text_field( $_POST['manuscript'] ) );
    }

    // @string Actors
    if( isset( $_REQUEST['actors'] ) ) {
        update_post_meta( $post_id, '_movie_actors', sanitize_text_field( $_POST['actors'] ) );
    }

    // @string Camera
    if( isset( $_REQUEST['camera'] ) ) {
        update_post_meta( $post_id, '_movie_camera', sanitize_text_field( $_POST['camera'] ) );
    }

    // @string Editing
    if( isset( $_REQUEST['editing'] ) ) {
        update_post_meta( $post_id, '_movie_editing', sanitize_text_field( $_POST['editing'] ) );
    }

    // @string Sound
    if( isset( $_REQUEST['sound'] ) ) {
        update_post_meta( $post_id, '_movie_sound', sanitize_text_field( $_POST['sound'] ) );
    }

    // @string Music
    if( isset( $_REQUEST['music'] ) ) {
        update_post_meta( $post_id, '_movie_music', sanitize_text_field( $_POST['music'] ) );
    }

    // @string Production
    if( isset( $_REQUEST['production'] ) ) {
        update_post_meta( $post_id, '_movie_production', sanitize_text_field( $_POST['production'] ) );
    }

    // @string Version
    if( isset( $_REQUEST['version'] ) ) {
        update_post_meta( $post_id, '_movie_version', sanitize_text_field( $_POST['version'] ) );
    }

    // @string Subtitles
    if( isset( $_REQUEST['subtitles'] ) ) {
        update_post_meta( $post_id, '_movie_subtitles', sanitize_text_field( $_POST['subtitles'] ) );
    }

    // @string SubtitleLang
    if( isset( $_REQUEST['subtitlelang'] ) ) {
        update_post_meta( $post_id, '_movie_subtitlelang', sanitize_text_field( $_POST['subtitlelang'] ) );
    }

    // @string Trailer
    if( isset( $_REQUEST['trailer'] ) ) {
        update_post_meta( $post_id, '_movie_trailer', sanitize_text_field( $_POST['trailer'] ) );
    }

}
add_action( 'save_post_movie', 'mdb_save_meta_boxes', 10, 2 );