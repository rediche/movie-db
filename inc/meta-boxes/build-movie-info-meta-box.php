<?php
/**
 * Build custom meta box for Movie post type
 *
 * @param post $post The post object
 */
function mdb_build_meta_box( $post ) {
    // Including nonce field for security reasons
    wp_nonce_field( 'save-movie-info-meta-box.php', 'movie_meta_box_nonce' );

    // Retrieve the current values
    $current_original_title = get_post_meta( $post->ID, '_movie_original_title', true );
    $current_title          = get_post_meta( $post->ID, '_movie_title', true );
    $current_country        = get_post_meta( $post->ID, '_movie_country', true );
    $current_year           = get_post_meta( $post->ID, '_movie_year', true );
    $current_duration       = get_post_meta( $post->ID, '_movie_duration', true );
    $current_director       = get_post_meta( $post->ID, '_movie_director', true );
    $current_producer       = get_post_meta( $post->ID, '_movie_producer', true );
    $current_manuscript     = get_post_meta( $post->ID, '_movie_manuscript', true );
    $current_actors         = get_post_meta( $post->ID, '_movie_actors', true );
    $current_camera         = get_post_meta( $post->ID, '_movie_camera', true );
    $current_editing        = get_post_meta( $post->ID, '_movie_editing', true );
    $current_sound          = get_post_meta( $post->ID, '_movie_sound', true );
    $current_music          = get_post_meta( $post->ID, '_movie_music', true );
    $current_production     = get_post_meta( $post->ID, '_movie_production', true );
    $current_version        = get_post_meta( $post->ID, '_movie_version', true );
    $current_subtitles      = get_post_meta( $post->ID, '_movie_subtitles', true );
    $current_subtitlelang   = get_post_meta( $post->ID, '_movie_subtitlelang', true );
    ?>
    <div class="mdb-flex">
        <div class="mdb-inside">
            <label>
                <p><?php _e( 'Original Title', 'mdb' ); ?></p>
                <input type="text" name="original_title" value="<?php echo $current_original_title; ?>" />
            </label>
        </div>
        <div class="mdb-inside">
            <label>
                <p><?php _e( 'Title', 'mdb' ); ?></p>
                <input type="text" name="title" value="<?php echo $current_title; ?>" />
            </label>
        </div>
        <div class="mdb-inside">
            <label>
                <p><?php _e( 'Country', 'mdb' ); ?></p>
                <input type="text" name="country" value="<?php echo $current_country; ?>" />
            </label>
        </div>
        <div class="mdb-inside">
            <label>
                <p><?php _e( 'Year', 'mdb' ); ?></p>
                <select name="year">
                    <?php 
                    for ($i = 1914; $i <= idate('Y'); $i++) {
                        echo '<option' . ($i == $current_year ? ' selected' : '') . '>' . $i . '</option>';
                    } 
                    ?>
                </select>
            </label>
        </div>
        <div class="mdb-inside">
            <label>
                <p><?php _e( 'Duration', 'mdb' ); ?></p>
                <input type="text" name="duration" value="<?php echo $current_duration; ?>" />
            </label>
        </div>
        <div class="mdb-inside">
            <label>
                <p><?php _e( 'Director', 'mdb' ); ?></p>
                <input type="text" name="director" value="<?php echo $current_director; ?>" />
            </label>
        </div>
        <div class="mdb-inside">
            <label>
                <p><?php _e( 'Producer', 'mdb' ); ?></p>
                <input type="text" name="producer" value="<?php echo $current_producer; ?>" />
            </label>
        </div>
        <div class="mdb-inside">
            <label>
                <p><?php _e( 'Manuscript', 'mdb' ); ?></p>
                <input type="text" name="manuscript" value="<?php echo $current_manuscript; ?>" />
            </label>
        </div>
        <div class="mdb-inside">
            <label>
                <p><?php _e( 'Actors & Actresses', 'mdb' ); ?></p>
                <input type="text" name="actors" value="<?php echo $current_actors; ?>" />
            </label>
        </div>
        <div class="mdb-inside">
            <label>
                <p><?php _e( 'Camera', 'mdb' ); ?></p>
                <input type="text" name="camera" value="<?php echo $current_camera; ?>" />
            </label>
        </div>
        <div class="mdb-inside">
            <label>
                <p><?php _e( 'Sound', 'mdb' ); ?></p>
                <input type="text" name="sound" value="<?php echo $current_sound; ?>" />
            </label>
        </div>
        <div class="mdb-inside">
            <label>
                <p><?php _e( 'Editing', 'mdb' ); ?></p>
                <input type="text" name="editing" value="<?php echo $current_editing; ?>" />
            </label>
        </div>
        <div class="mdb-inside">
            <label>
                <p><?php _e( 'Music', 'mdb' ); ?></p>
                <input type="text" name="music" value="<?php echo $current_music; ?>" />
            </label>
        </div>
        <div class="mdb-inside">
            <label>
                <p><?php _e( 'Production Company', 'mdb' ); ?></p>
                <input type="text" name="production" value="<?php echo $current_production; ?>" />
            </label>
        </div>
        <div class="mdb-inside">
            <label>
                <p><?php _e( 'Version', 'mdb' ); ?></p>
                <input type="text" name="version" value="<?php echo $current_version; ?>" />
            </label>
        </div>
        <div class="mdb-inside">
            <label>
                <p><?php _e( 'Subtitles', 'mdb' ); ?></p>
                <select name="subtitles">
                    <option value="yes" <?php ("yes" == $current_subtitles ? ' selected' : ''); ?>>Yes</option>
                    <option value="no" <?php ("no" == $current_subtitles ? ' selected' : ''); ?>>No</option>
                </select>
            </label>
        </div>
        <div class="mdb-inside">
            <label>
                <p><?php _e( 'Subtitle Language', 'mdb' ); ?></p>
                <input type="text" name="subtitlelang" value="<?php echo $current_subtitlelang; ?>" />
            </label>
        </div>
    </div>
    <?php
}
