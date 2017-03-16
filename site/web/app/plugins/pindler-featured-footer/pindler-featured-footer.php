<?php
/* Plugin Name: Pindler Featured Footer Widget
Plugin URI: http://www.pindler.com
Description: A widget area to display featured information in the footer
Version: 1.0
Author: Mustang Marketing
Author URI: http://www.mustangmktg.com
*/

class pindler_featured_footer extends WP_Widget {
	
	//Constructor
	function pindler_featured_footer() {
		parent::__construct(false, $name = __('Pindler Featured Footer', 'wp_widget_plugin') );
		
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
			$title = esc_attr($instance['title']);
			$subtitle = esc_attr($instance['subtitle']);
			$textarea = $instance['textarea'];
			$pagelink = $instance['pagelink'];
			$image = $instance['image'];
		} else {
			$title = '';
			$subtitle = '';
			$textarea = '';
			$pagelink = '';
			$image = '';
		}
?>

<p>
	<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'wp_widget_plugin'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>
<p>
	<label for="<?php echo $this->get_field_id('subtitle'); ?>"><?php _e('Sub Title', 'wp_widget_plugin'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('subtitle'); ?>" name="<?php echo $this->get_field_name('subtitle'); ?>" type="text" value="<?php echo $subtitle; ?>" />
</p>
<p>
	<label for="<?php echo $this->get_field_id('textarea'); ?>"><?php _e('Description:', 'wp_widget_plugin'); ?></label>
	<textarea class="widefat" id="<?php echo $this->get_field_id('textarea'); ?>" name="<?php echo $this->get_field_name('textarea'); ?>" rows="7" cols="20" ><?php echo $textarea; ?></textarea>
</p>
<p>
	<label for="<?php echo $this->get_field_id('pagelink'); ?>"><?php _e('Link to Page', 'wp_widget_plugin'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('pagelink'); ?>" name="<?php echo $this->get_field_name('pagelink'); ?>" type="text" value="<?php echo $pagelink; ?>" />
</p>
<p>
	<label for="<?php echo $this->get_field_name( 'image' ); ?>"><?php _e( 'Image', 'wp_widget_plugin'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id( 'image' ); ?>" name="<?php echo $this->get_field_name( 'image' ); ?>" type="text" size="36"  value="<?php echo esc_url( $image ); ?>" />
	<input class="upload_image_button" type="button" value="Upload Image" />
</p>

<?php
	}

	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		//Fields
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['subtitle'] = strip_tags($new_instance['subtitle']);
		$instance['textarea'] = strip_tags($new_instance['textarea']);
		$instance['pagelink'] = strip_tags($new_instance['pagelink']);
		$instance['image'] = strip_tags($new_instance['image']);
		return $instance;
	}
	
	// display widget
	function widget($args, $instance) {
		extract( $args );
	
		// these are the widget options
		$title = apply_filters('widget_title', $instance['title']);
		$subtitle = $instance['subtitle'];
		$textarea = $instance['textarea'];
		$pagelink = $instance['pagelink'];
		$image = $instance['image'];

		echo $before_widget;	
		// Display the widget
		echo '<div class="flex-content grid-50">';
			echo '<div class="flex-image left"><img src="'.$image.'" /></div>';
			echo '<div class="flex-content-details right">';
	
				// Check if title is set
				if ( $title ) {
					echo '<h5 class="blue"><a href="'.$pagelink.'">'.$title.'</a></h5>' ;
				}
	
				// Check if textarea is set
				if ( $subtitle ) {
					echo '<h6 class="brown">'.$subtitle.'</h6>';
				}
				
				if( $textarea ) {
					echo '<p>'.$textarea.'</p>';
				}
			echo '</div>';
		echo '</div>';
		echo $after_widget;
	}
}

// register widget
add_action('widgets_init', create_function('', 'return register_widget("pindler_featured_footer");'));

?>