<?php
/**
 * Plugin Name: shadowfiend: Facebook Widget
 * Plugin URI: http://shadowfiend-design.info/
 * Description: This widget displays the Facebook likebox in sidebar.
 * Version: 1.0
 * Author: shadowfiend
 * Author URI: http://shadowfiend-design.info/
 *
 */

/**
 * Add function to widgets_init that'll load our widget.
 */
add_action('widgets_init', 'shadowfiend_register_facebook_widget');

function shadowfiend_register_facebook_widget()
{
	register_widget('shadowfiend_facebook');
}

/**
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 */
class shadowfiend_facebook extends WP_Widget {
	
	/**
	 * Widget setup.
	 */
	function __construct()
	{
		/* Widget settings. */
		$widget_ops = array('classname' => 'widget-facebook', 'description' => esc_html__('[Sidebar widget] Displays the Facebook likebox in sidebar.','zalora'));
		
		/* Create the widget. */
		parent::__construct('shadowfiend_facebook', esc_html__('*shadowfiend: Widget Facebook','zalora'), $widget_ops);
	}
	
	/**
	 * display the widget on the screen.
	 */
	function widget($args, $instance)
	{
		
		extract($args);
		$page_url = $instance['page_url'];
		$title = apply_filters('widget_title', $instance['title'] );
		if($page_url): 
		echo $before_widget;
		if ( $title ) {
            echo $before_title .esc_html($title). $after_title;
        }
		?>
		
		<div class="fb-container">
			
			<div>
				<iframe src="http://www.facebook.com/plugins/likebox.php?href=<?php echo urlencode($page_url); ?>&amp;width=300&amp;border_color=%23ffffff&amp;show_faces=true&amp;show_border=false&amp;height=260" scrolling="no" style="border:none; overflow:hidden; width:300px; height: 260px; " allowTransparency="true" show-border="false"></iframe>
			</div>
		</div>
		<?php 
			echo $after_widget;
		endif;
	}
	
	/**
	 * update widget settings
	 */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		$instance['title'] = $new_instance['title'];
		$instance['page_url'] = $new_instance['page_url'];
		
		return $instance;
	}
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	function form($instance)
	{
		$defaults = array( 'title' => esc_html__('Find us on Facebook','zalora'), 'page_url' => '');
		$instance = wp_parse_args((array) $instance, $defaults); ?>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><strong><?php esc_attr_e('Title:', 'zalora'); ?></strong></label>
			<input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>
		
		
		<p>
			<label for="<?php echo $this->get_field_id('page_url'); ?>"><strong><?php esc_attr_e('Facebook Page URL:', 'zalora') ?></strong></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('page_url'); ?>" name="<?php echo $this->get_field_name('page_url'); ?>" value="<?php echo $instance['page_url']; ?>" style="width:100%;"/>
		</p>

		
	<?php
	}
}
?>