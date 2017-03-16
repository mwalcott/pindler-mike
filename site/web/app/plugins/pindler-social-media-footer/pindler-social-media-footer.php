<?php
/* Plugin Name: Pindler Social Media Footer Widget
Plugin URI: http://www.pindler.com
Description: A widget area to display featured information in the footer
Version: 1.0
Author: Mustang Marketing
Author URI: http://www.mustangmktg.com
*/

class pindler_social_media_footer extends WP_Widget {
	
	//Constructor
	function pindler_social_media_footer() {
		parent::__construct(false, $name = __('Pindler Social Media Links', 'wp_widget_plugin') );
		
		add_action('admin_enqueue_scripts', array($this, 'upload_scripts'));
		add_action('admin_enqueue_styles', array($this, 'upload_styles'));
	}
	
	public function upload_scripts() {
		wp_enqueue_script('media-upload');
		wp_enqueue_script('thickbox');
		wp_enqueue_script('upload_media_widget', plugin_dir_url(__FILE__) . 'upload-media.js', array('jquery'));
	}
	
	public function upload_styles() {
		wp_enqueue_style('thickbox');
	}
	
	//Widget Form
	function form($instance) {
		
		if($instance) {
			$fbpagelink = $instance['fbpagelink'];
			$fbimage = $instance['fbimage'];
			$pinpagelink = $instance['pinpagelink'];
			$pinimage = $instance['pinimage'];
			$twpagelink = $instance['twpagelink'];
			$twimage = $instance['twimage'];
			$auxonepagelink = $instance['auxonepagelink'];
			$auxoneimage = $instance['auxoneimage'];
			$auxtwopagelink = $instance['auxtwopagelink'];
			$auxtwoimage = $instance['auxtwoimage'];
		} else {
			$fbpagelink = '';
			$fbimage = '';
			$pinpagelink = '';
			$pinimage = '';
			$twpagelink = '';
			$twimage = '';
			$auxonepagelink = '';
			$auxoneimage = '';
			$auxtwopagelink = '';
			$auxtwoimage = '';
		}
?>

<p>
	<label for="<?php echo $this->get_field_id('fbpagelink'); ?>"><?php _e('Facebook URL', 'wp_widget_plugin'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('fbpagelink'); ?>" name="<?php echo $this->get_field_name('fbpagelink'); ?>" type="text" value="<?php echo $fbpagelink; ?>" />
</p>
<p>
	<label for="<?php echo $this->get_field_name( 'fbimage' ); ?>"><?php _e( 'Facebook Icon', 'wp_widget_plugin'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id( 'fbimage' ); ?>" name="<?php echo $this->get_field_name( 'fbimage' ); ?>" type="text" size="36"  value="<?php echo esc_url( $fbimage ); ?>" />
	<input class="upload_image_button" type="button" value="Upload Image" />
</p>
<hr />
<p>
	<label for="<?php echo $this->get_field_id('pinpagelink'); ?>"><?php _e('Pinterest URL', 'wp_widget_plugin'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('pinpagelink'); ?>" name="<?php echo $this->get_field_name('pinpagelink'); ?>" type="text" value="<?php echo $pinpagelink; ?>" />
</p>
<p>
	<label for="<?php echo $this->get_field_name( 'pinimage' ); ?>"><?php _e( 'Facebook Icon', 'wp_widget_plugin'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id( 'pinimage' ); ?>" name="<?php echo $this->get_field_name( 'pinimage' ); ?>" type="text" size="36"  value="<?php echo esc_url( $pinimage ); ?>" />
	<input class="upload_image_button" type="button" value="Upload Image" />
</p>
<hr />
<p>
	<label for="<?php echo $this->get_field_id('twpagelink'); ?>"><?php _e('Twitter URL', 'wp_widget_plugin'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('twpagelink'); ?>" name="<?php echo $this->get_field_name('twpagelink'); ?>" type="text" value="<?php echo $pinpagelink; ?>" />
</p>
<p>
	<label for="<?php echo $this->get_field_name( 'twimage' ); ?>"><?php _e( 'Twitter Icon', 'wp_widget_plugin'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id( 'twimage' ); ?>" name="<?php echo $this->get_field_name( 'twimage' ); ?>" type="text" size="36"  value="<?php echo esc_url( $twimage ); ?>" />
	<input class="upload_image_button" type="button" value="Upload Image" />
</p>
<hr />
<p>
	<label for="<?php echo $this->get_field_id('auxonepagelink'); ?>"><?php _e('Extra URL 1', 'wp_widget_plugin'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('auxonepagelink'); ?>" name="<?php echo $this->get_field_name('auxonepagelink'); ?>" type="text" value="<?php echo $auxonepagelink; ?>" />
</p>
<p>
	<label for="<?php echo $this->get_field_name( 'auxoneimage' ); ?>"><?php _e( 'Extra Icon 1', 'wp_widget_plugin'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id( 'auxoneimage' ); ?>" name="<?php echo $this->get_field_name( 'auxoneimage' ); ?>" type="text" size="36"  value="<?php echo esc_url( $auxoneimage ); ?>" />
	<input class="upload_image_button" type="button" value="Upload Image" />
</p>
<hr />
<p>
	<label for="<?php echo $this->get_field_id('auxtwopagelink'); ?>"><?php _e('Extra URL 2', 'wp_widget_plugin'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('auxtwopagelink'); ?>" name="<?php echo $this->get_field_name('auxtwopagelink'); ?>" type="text" value="<?php echo $auxtwopagelink; ?>" />
</p>
<p>
	<label for="<?php echo $this->get_field_name( 'auxtwoimage' ); ?>"><?php _e( 'Extra Icon 2', 'wp_widget_plugin'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id( 'auxtwoimage' ); ?>" name="<?php echo $this->get_field_name( 'auxtwoimage' ); ?>" type="text" size="36"  value="<?php echo esc_url( $auxtwoimage ); ?>" />
	<input class="upload_image_button" type="button" value="Upload Image" />
</p>
<hr />

<?php
	}

	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		//Fields
		$instance['fbpagelink'] = strip_tags($new_instance['fbpagelink']);
		$instance['fbimage'] = strip_tags($new_instance['fbimage']);
		$instance['pinpagelink'] = strip_tags($new_instance['pinpagelink']);
		$instance['pinimage'] = strip_tags($new_instance['pinimage']);
		$instance['twpagelink'] = strip_tags($new_instance['twpagelink']);
		$instance['twimage'] = strip_tags($new_instance['twimage']);
		$instance['auxonepagelink'] = strip_tags($new_instance['auxonepagelink']);
		$instance['auxoneimage'] = strip_tags($new_instance['auxoneimage']);
		$instance['auxtwopagelink'] = strip_tags($new_instance['auxtwopagelink']);
		$instance['auxtwoimage'] = strip_tags($new_instance['auxtwoimage']);
		return $instance;
	}
	
	// display widget
	function widget($args, $instance) {
		extract( $args );
	
		// these are the widget options
		$fbpagelink = $instance['fbpagelink'];
		$fbimage = $instance['fbimage'];
		$pinpagelink = $instance['pinpagelink'];
		$pinimage = $instance['pinimage'];
		$twpagelink = $instance['twpagelink'];
		$twimage = $instance['twimage'];
		$auxonepagelink = $instance['auxonepagelink'];
		$auxoneimage = $instance['auxoneimage'];
		$auxtwopagelink = $instance['auxtwopagelink'];
		$auxtwoimage = $instance['auxtwoimage'];

		echo $before_widget;	
		// Display the widget
		echo '<p class="brown">Stay Connected</p>';
		echo '<ul>';
			// Check if image is set
			if ( $fbimage ) {
			    echo '<li><a href="'.$fbpagelink.'" target="_blank"><img src="'.$fbimage.'" /></a></li>' ;
			}
			// Check if image is set
			if ( $pinimage ) {
			    echo '<li><a href="'.$pinpagelink.'" target="_blank"><img src="'.$pinimage.'" /></a></li>' ;
			}
			// Check if image is set
			if ( $twimage ) {
			    echo '<li><a href="'.$twpagelink.'" target="_blank"><img src="'.$twimage.'" /></a></li>' ;
			}
			if ( $auxoneimage ) {
			    echo '<li><a href="'.$auxonepagelink.'" target="_blank"><img src="'.$auxoneimage.'" /></a></li>' ;
			}
			if ( $auxtwoimage ) {
			    echo '<li><a href="'.$auxtwopagelink.'" target="_blank"><img src="'.$auxtwoimage.'" /></a></li>' ;
			}
		echo '</ul>';
		echo $after_widget;
	}
}

// register widget
add_action('widgets_init', create_function('', 'return register_widget("pindler_social_media_footer");'));

?>