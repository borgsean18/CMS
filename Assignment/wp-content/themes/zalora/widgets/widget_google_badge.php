<?php
/**
 * Plugin Name: shadowfiend: Google Badge
 * Plugin URI: http://shadowfiend-design.info/
 * Description: This widget displays the google badge in the sidebar.
 * Version: 1.0
 * Author: shadowfiend
 * Author URI: http://shadowfiend-design.info/
 *
 */

/**
 * Add function to widgets_init that'll load our widget.
 */
add_action('widgets_init', 'shadowfiend_register_googlebadge_widget');

function shadowfiend_register_googlebadge_widget()
{
	register_widget('shadowfiend_googlebadge');
}

/**
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 */
class shadowfiend_googlebadge extends WP_Widget {
	
	/**
	 * Widget setup.
	 */
	function __construct()
	{
		/* Widget settings. */
		$widget_ops = array('classname' => 'widget_googlebadge', 'description' => esc_html__('[Sidebar widget] Displays google badge box in sidebar.','zalora'));
		
		/* Create the widget. */
		parent::__construct('shadowfiend_googlebadge', esc_html__('*shadowfiend: Widget Google Badge','zalora'), $widget_ops);
	}
	
	/**
	 * display the widget on the screen.
	 */
	function widget($args, $instance)
	{
		
		extract($args);
 		$title = apply_filters('widget_title', $instance['title'] );
		$gg_profileid = $instance['gg_profileid'];
		$layout = $instance['layout'];
		$coverphoto = $instance['coverphoto'];
        if($coverphoto == 'on'){
            $showcoverphoto = 'true';
        }else{
            $showcoverphoto = 'false';
        }
        
		$theme = $instance['theme'];
        ?>
        <?php
		echo $before_widget;
		if ( $title ) {
            echo $before_title .esc_html($title). $after_title;
        }
        ?>
		<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
            <div id="gplus-badge" class="g-person" data-href="https://plus.google.com/<?php echo esc_attr($gg_profileid);?>" data-layout="<?php echo esc_attr($layout);?>" data-showcoverphoto="<?php echo esc_attr($showcoverphoto);?>" data-theme="<?php echo esc_attr($theme);?>" data-width=335></div>
		<?php 
			echo $after_widget;

	}
	
	/**
	 * update widget settings
	 */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		$instance['title'] = $new_instance['title'];
		$instance['gg_profileid'] = $new_instance['gg_profileid'];
		$instance['layout'] = $new_instance['layout'];
		$instance['coverphoto'] = $new_instance['coverphoto'];
		$instance['theme'] = $new_instance['theme'];
		
		return $instance;
	}
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	function form($instance)
	{
		$defaults = array( 'title' => 'Find us on google', 'gg_profileid' => '', 'layout' => '', 'coverphoto' => 'on', 'theme' => '');
		$instance = wp_parse_args((array) $instance, $defaults); ?>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><strong><?php esc_attr_e('Title:', 'zalora'); ?></strong></label>
			<input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'gg_profileid' ); ?>"><strong><?php esc_attr_e('Google plus profile ID:', 'zalora'); ?></strong></label>
			<input type="text" id="<?php echo $this->get_field_id('gg_profileid'); ?>" name="<?php echo $this->get_field_name('gg_profileid'); ?>" value="<?php echo $instance['gg_profileid']; ?>" style="width:100%;" />
		</p>
        		
        <p>     
            <label for="<?php echo $this->get_field_id( 'layout' ); ?>"><strong><?php esc_attr_e('Layout: ','zalora'); ?></strong></label>    		 	
            <select id="<?php echo $this->get_field_id( 'layout' ); ?>" name="<?php echo $this->get_field_name( 'layout' ); ?>">            
                <option value="portrait" <?php if ($instance['layout'] == 'portrait') echo 'selected="selected"'; ?>><?php esc_attr_e('Portrait', 'zalora');?></option>               
                <option value="landscape" <?php if ($instance['layout'] == 'landscape') echo 'selected="selected"'; ?>><?php esc_attr_e('Landscape', 'zalora');?></option>                   	
             </select>          
        </p>
        

        <p>     
            <label for="<?php echo $this->get_field_id( 'theme' ); ?>"><strong><?php esc_attr_e('Theme: ','zalora'); ?></strong></label>    		 	
            <select id="<?php echo $this->get_field_id( 'theme' ); ?>" name="<?php echo $this->get_field_name( 'theme' ); ?>">            
                <option value="light" <?php if ($instance['theme'] == 'light') echo 'selected="selected"'; ?>>Light</option>               
                <option value="dark" <?php if ($instance['theme'] == 'dark') echo 'selected="selected"'; ?>>Dark</option>                   	
             </select>          
        </p>

        <p>
    		<input class="checkbox" type="checkbox" <?php checked( $instance['coverphoto'], 'on' ); ?> id="<?php echo $this->get_field_id( 'coverphoto' ); ?>" name="<?php echo $this->get_field_name( 'coverphoto' ); ?>" />
    		<label for="<?php echo $this->get_field_id( 'coverphoto' ); ?>"><?php esc_attr_e('Show cover photo', 'zalora'); ?></label>
		</p>
        
	<?php
	}
}
?>