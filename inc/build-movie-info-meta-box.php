<?php
/**
 * Build custom meta box for Movie post type
 *
 * @param post $post The post object
 */
function mdb_build_meta_box( $post ) {
    // Including nonce field for security reasons
    wp_nonce_field( basename( __FILE__ ), 'movie_meta_box_nonce' );

    // Retrieve the current values
    $current_original_title = get_post_meta( $post->ID, '_movie_original_title', true );
    $current_title          = get_post_meta( $post->ID, '_movie_title', true );
    $current_country        = get_post_meta( $post->ID, '_movie_country', true );
    $current_year           = get_post_meta( $post->ID, '_movie_year', true);
    $current_duration       = get_post_meta( $post->ID, '_movie_duration', true);
    $current_director       = get_post_meta( $post->ID, '_movie_director', true);
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
                <!--<input type="text" name="year" value="<?php echo $current_year; ?>" />-->
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
    </div>
    <?php
}
