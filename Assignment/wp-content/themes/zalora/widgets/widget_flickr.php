<?php
/**
 * Plugin Name: shadowfiend: Flickr Widget
 * Plugin URI: http://shadowfiend-design.info
 * Description: This widget allows to display flickr images.
 * Version: 1.0
 * Author: shadowfiend
 * Author URI: http://shadowfiend-design.info
 *
 */

/**
 * Add function to widgets_init that'll load our widget.
 */
add_action( 'widgets_init', 'shadowfiend_register_flickr_widget' );

function shadowfiend_register_flickr_widget() {
	register_widget( 'shadowfiend_flickr' );
}

/**
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 */ 
class shadowfiend_flickr extends WP_Widget {
	
	/**
	 * Widget setup.
	 */
	function __construct() {
		/* Widget settings. */		
		$widget_ops = array('classname' => 'widget_flickr', 'description' => esc_html__('[Sidebar widget] Displays Flickr images in sidebar.','zalora') );
		
		/* Create the widget. */
		parent::__construct('shadowfiend_flickr', esc_html__('*shadowfiend: Widget Flickr', 'zalora'), $widget_ops);
	}

	/**
	 * display the widget on the screen.
	 */
	function widget($args, $instance) {
		extract($args, EXTR_SKIP);
		$title = apply_filters('widget_title', $instance['title'] );
        $flickr_id = empty($instance['flickr_id']) ? ' ' : apply_filters('widget_user', $instance['flickr_id']);
        $flickr_counter = empty($instance['flickr_counter']) ? ' ' : apply_filters('widget_counter', $instance['flickr_counter']);

		echo $before_widget;

		if ( $title ) {
            echo $before_title .esc_html($title). $after_title;
        }
        ?>
        <?php
            $uid = uniqid();
        ?>
		<ul id="flickr-<?php echo esc_attr($uid);?>" class="clear-fix"></ul>
            <script type="text/javascript">
				jQuery(document).ready(function($){
					$.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?ids=<?php print $flickr_id; ?>&lang=en-us&format=json&jsoncallback=?", function(data){
				          $.each(data.items, function(index, item){
				                if(index >= <?php echo esc_attr($flickr_counter);?>){
                                    return false;
                                  }
				                $("<img/>").attr("src", item.media.m.replace('_m','_q')).appendTo("#flickr-<?php echo esc_attr($uid);?>")
                                .wrap("<li><div class='thumb hide-thumb'><a target='__blank' href='" + item.media.m.replace('_m','_b') + "'></a></div></li>");
				          });
				        });
				});
			</script>
			
		<?php
		
        echo $after_widget;
	}
	
	/**
	 * update widget settings
	 */
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
        $instance['flickr_id'] = strip_tags($new_instance['flickr_id']);
        $instance['flickr_counter'] = strip_tags($new_instance['flickr_counter']);
		return $instance;
	}
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */	 
	function form($instance) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => 'Flickr', 'flickr_id' => '', 'flickr_counter' => 9 ) );
	?>
			<p><label for="<?php echo $this->get_field_id('title'); ?>"><strong><?php esc_attr_e('Title:', 'zalora') ?></strong>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $instance['title']; ?>" /></label></p>
			
			<p><label for="<?php echo $this->get_field_id('flickr_id'); ?>"><strong><?php esc_attr_e('Flickr User ID ', 'zalora') ?></strong>( <a href="http://www.idgettr.com" target="_blank" >idGettr</a> ): 
            <input class="widefat" id="<?php echo $this->get_field_id('flickr_id'); ?>" name="<?php echo $this->get_field_name('flickr_id'); ?>" type="text" value="<?php echo $instance['flickr_id']; ?>" /></label></p>
			
			<p><label for="<?php echo $this->get_field_id('flickr_counter'); ?>"><strong><?php esc_attr_e('Number of images:', 'zalora') ?></strong>
            <input class="widefat" id="<?php echo $this->get_field_id('flickr_counter'); ?>" name="<?php echo $this->get_field_name('flickr_counter'); ?>" type="text" value="<?php echo $instance['flickr_counter']; ?>" /></label></p>
<?php
	}
}