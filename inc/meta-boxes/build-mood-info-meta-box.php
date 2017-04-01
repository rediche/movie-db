<?php
/**
 * Build custom Mood meta box for Movie post type
 *
 * @param post $post The post object
 */
function mdb_build_mood_meta_box( $post ) {
    // Including nonce field for security reasons
    wp_nonce_field( 'save-mood-info-meta-box.php', 'mood_meta_box_nonce' );

    // Retrieve the current values
    $current_tempo          = get_post_meta( $post->ID, '_mood_tempo', true );
    $current_thrills        = get_post_meta( $post->ID, '_mood_thrills', true );
    $current_sighs          = get_post_meta( $post->ID, '_mood_sighs', true );
    $current_laughs         = get_post_meta( $post->ID, '_mood_laughs', true );
    $current_look           = get_post_meta( $post->ID, '_mood_look', true );
    $current_foodforthought = get_post_meta( $post->ID, '_mood_foodforthought', true );
    ?>
    <div class="mdb-flex">
        <div class="mdb-inside">
            <label>
                <p><?php _e( 'Tempo', 'mdb' ); ?></p>
                <input type="number" min="0" max="100" step="1" name="tempo" value="<?php echo $current_tempo; ?>" />
            </label>
        </div>
        <div class="mdb-inside">
            <label>
                <p><?php _e( 'Thrills', 'mdb' ); ?></p>
                <input type="number" min="0" max="100" step="1" name="thrills" value="<?php echo $current_thrills; ?>" />
            </label>
        </div>
        <div class="mdb-inside">
            <label>
                <p><?php _e( 'Sighs', 'mdb' ); ?></p>
                <input type="number" min="0" max="100" step="1" name="sighs" value="<?php echo $current_sighs; ?>" />
            </label>
        </div>
        <div class="mdb-inside">
            <label>
                <p><?php _e( 'Laughs', 'mdb' ); ?></p>
                <input type="number" min="0" max="100" step="1" name="laughs" value="<?php echo $current_laughs; ?>" />
            </label>
        </div>
        <div class="mdb-inside">
            <label>
                <p><?php _e( 'Look', 'mdb' ); ?></p>
                <input type="number" min="0" max="100" step="1" name="look" value="<?php echo $current_look; ?>" />
            </label>
        </div>
        <div class="mdb-inside">
            <label>
                <p><?php _e( 'Food for Thought', 'mdb' ); ?></p>
                <input type="number" min="0" max="100" step="1" name="foodforthought" value="<?php echo $current_foodforthought; ?>" />
            </label>
        </div>
    </div>
    <?php
}
