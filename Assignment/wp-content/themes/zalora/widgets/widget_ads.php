<?php
/**
 * Plugin Name: shadowfiend: Ads-Banner Widget
 * Plugin URI: http://shadowfiend-design.info
 * Description: Displays ads banner in any section.
 * Version: 1.0
 * Author: shadowfiend
 * Author URI: http://shadowfiend-design.info
 *
 */
/**
 * Add function to widgets_init that'll load our widget.
 */
add_action('widgets_init', 'shadowfiend_register_ads_banner_widget');

function shadowfiend_register_ads_banner_widget(){
	register_widget('shadowfiend_ads_banner');
}

class shadowfiend_ads_banner extends WP_Widget {
    
/**
 * Widget setup.
 */
	function __construct() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'widget-ads', 'description' => esc_html__('Displays ads banner in any section.', 'zalora') );

		/* Create the widget. */
		parent::__construct( 'shadowfiend_ads_banner', esc_html__('*shadowfiend: Widget Ads', 'zalora'), $widget_ops);
	}

	function widget( $args, $instance ) {
		extract($args);
		
		echo $before_widget;
		?>
			<a class="ads-banner-link" target="_blank" href="<?php echo esc_url( $instance['linkurl'] ); ?>">
				<img class="ads-banner" src="<?php echo esc_url( $instance['imgurl'] ); ?>" alt="">
			</a>
		<?php

		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$new_instance = wp_parse_args( (array) $new_instance, $this->default );
		$instance['imgurl'] = strip_tags( $new_instance['imgurl'] );
		$instance['linkurl'] = strip_tags( $new_instance['linkurl'] );

		return $instance;
	}

	function form( $instance ) {
        $defaults = array('imgurl' => 'http://', 'linkurl' => 'http://');
		$instance = wp_parse_args((array) $instance, $defaults);

		$imgurl = strip_tags( $instance['imgurl'] );
		$linkurl = strip_tags( $instance['linkurl'] );
?>
		<!-- Ads Image URL -->
		<p>
			<label for="<?php echo $this->get_field_id('imgurl'); ?>"><?php esc_attr_e('Ads-Banner Image Url:','zalora'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('imgurl'); ?>" name="<?php echo $this->get_field_name('imgurl'); ?>" type="text" value="<?php echo esc_attr($imgurl); ?>" />
		</p>

		<!-- link url -->
		<p>
			<label for="<?php echo $this->get_field_id('linkurl'); ?>"><?php esc_attr_e('Link Url:','zalora'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('linkurl'); ?>" name="<?php echo $this->get_field_name('linkurl'); ?>" type="text" value="<?php echo esc_attr($linkurl); ?>" />
		</p>
<?php
	}
}
