<?php
/**
 * Store custom field Mood meta box data
 *
 * @param int $post_id The post ID.
 */
function mdb_save_mood_meta_boxes( $post_id ) {
    // Verify nonce field
    if( !isset( $_POST['mood_meta_box_nonce'] ) || !wp_verify_nonce( $_POST['mood_meta_box_nonce'], basename( __FILE__ ) ) ) {
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
    // @string Tempo
    if( isset( $_REQUEST['tempo'] ) ) {
        update_post_meta( $post_id, '_mood_tempo', sanitize_text_field( $_POST['tempo'] ) );
    }

    // @string Thrills
    if( isset( $_REQUEST['thrills'] ) ) {
        update_post_meta( $post_id, '_mood_thrills', sanitize_text_field( $_POST['thrills'] ) );
    }

    // @string Sighs
    if( isset( $_REQUEST['sighs'] ) ) {
        update_post_meta( $post_id, '_mood_sighs', sanitize_text_field( $_POST['sighs'] ) );
    }

    // @string Laughs
    if( isset( $_REQUEST['laughs'] ) ) {
        update_post_meta( $post_id, '_mood_laughs', sanitize_text_field( $_POST['laughs'] ) );
    }

    // @string Look
    if( isset( $_REQUEST['look'] ) ) {
        update_post_meta( $post_id, '_mood_look', sanitize_text_field( $_POST['look'] ) );
    }

    // @string Food for Throught
    if( isset( $_REQUEST['foodforthought'] ) ) {
        update_post_meta( $post_id, '_mood_foodforthought', sanitize_text_field( $_POST['foodforthought'] ) );
    }



}
add_action( 'save_post_movie', 'mdb_save_mood_meta_boxes', 10, 2 );