<?php
/* Plugin Name: YouTube metabox
 * Plugin URI: http://congbom.com/youtube-metabox
 * Description: Create YouTube meta-box for post with live preview
 * Author: Cong Bom
 * Author URI: http://congbom.com
 * Version: 1.0
 */
 

/* Add YouTube meta-box */
add_action( 'admin_init', 'add_youtube_meta_box' );
function add_youtube_meta_box() {
    add_meta_box(
		'youtube_metabox',
        'YouTube metabox',
        'display_youtube_meta_box',
        'post',
		'normal',
		'high'
    );
}


/* Display YouTube meta-box */
function display_youtube_meta_box( $post ) {
    $youtube_id = get_post_meta( $post->ID, 'youtube_id', true );?>
	
    <table class="form-table">
        <tr>
            <th>YouTube video ID</th>
            <td><input type="text" style="width: 100%;" name="youtube_id" value="<?php echo $youtube_id; ?>" id="youtube_id" /></td>
        </tr>
		<tr>
            <th>Preview</th>
            <td><iframe id="youtube_iframe" width="100%" height="332.4" src="http://www.youtube.com/embed/<?php echo $youtube_id; ?>" frameborder="0" allowfullscreen></iframe></td>
        </tr>
    </table> 
	<script>
		jQuery('#youtube_id').keyup(function () {
			var value = jQuery(this).val();
			jQuery('#youtube_iframe').attr('src', 'http://www.youtube.com/embed/' + value);
		}).keyup();
	</script>
	<?php 
}


/* Save YouTube meta-box */
add_action( 'save_post', 'save_youtube_meta_box' );
function save_youtube_meta_box( $post_id ) {
	if ( isset( $_POST['youtube_id'] ) && $_POST['youtube_id'] != '' )
	update_post_meta( $post_id, 'youtube_id', $_POST['youtube_id'] );
}
