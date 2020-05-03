<?php
/**
 * Plugin Name: shadowfiend: Masonry Module
 * Plugin URI: http://shadowfiend-design.info
 * Description: This module displays posts with masonry layout
 * Version: 1.0
 * Author: shadowfiend
 * Author URI: http://shadowfiend-design.info
 *
 */

/**
 * Add function to widgets_init that'll load our widget.
 */
add_action('widgets_init', 'shadowfiend_register_masonry_module');

function shadowfiend_register_masonry_module(){
	register_widget('shadowfiend_masonry');
}

/**
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 */ 
class shadowfiend_masonry extends WP_Widget {
	
	/**
	 * Widget setup.
	 */
	function __construct(){
		/* Widget settings. */	
		$widget_ops = array('classname' => 'module-masonry', 'description' => esc_html__('[Full-width module][Content module] Displays posts with masonry layout in content section.', 'zalora'));
		
		/* Create the widget. */
		parent::__construct('shadowfiend_masonry', esc_html__('*shadowfiend: Module Masonry', 'zalora'), $widget_ops);
	}
	
	/**
	 * display the widget on the screen.
	 */
	function widget($args, $instance){
        global $shadowfiend_ajax, $shadowfiend_ajax_btnstr;
        wp_localize_script( 'zalora-module-load-post', 'ajax_btn_str', $shadowfiend_ajax_btnstr );
        
		extract($args);
        $uid = uniqid('masonry-', true);
        $title = apply_filters('widget_title', $instance['title'] );
        $entries_display = esc_attr($instance['entries_display']);
        $entries_loadmore = esc_attr($instance['entries_loadmore']);
        $post_offset = esc_attr($instance['post_offset']);
        if(!isset($post_offset) || ($post_offset == null)) {
            $post_offset = 0;
        }
        $cat_id = $instance['category'];
         
        $shadowfiend_ajax[$uid]['entries'] = $entries_loadmore;
        
        $shadowfiend_ajax[$uid]['offset'] = $post_offset;
        
        $args = array();
        echo $before_widget;  
        if ( $title ) {
            $shadowfiend_title = '<div class="main-title"><h3>'.esc_html($title).'</h3></div>';
            echo $before_title .$shadowfiend_title. $after_title;
        }	
            
        if ($cat_id[0] == 'feat') {    
            $args = array(
				'post__in'  => get_option( 'sticky_posts' ),
				'post_status' => 'publish',
				'ignore_sticky_posts' => 1,
                'offset' => $post_offset,
				'posts_per_page' => $entries_display,
                );  
        } else if ($cat_id[0] == 'all'){ 
      		    $args = array(
    				'post_status' => 'publish',
    				'ignore_sticky_posts' => 1,
                    'offset' => $post_offset,
    				'posts_per_page' => $entries_display,
                );
        } else {
		$args = array(
				'category__in' => $cat_id,
				'post_status' => 'publish',
				'ignore_sticky_posts' => 1,
                'offset' => $post_offset,
				'posts_per_page' => $entries_display,
                );
        }
        $shadowfiend_ajax[$uid]['args'] = $args;
        wp_localize_script( 'zalora-module-load-post', 'shadowfiend_ajax', $shadowfiend_ajax );
        $query = new WP_Query( $args ); ?>
        <?php if ($query -> have_posts()) {?>
        <div id="<?php echo esc_attr($uid);?>" class="module-masonry-wrapper clear-fix">
            <div class="masonry-content-container">
                <?php while ( $query -> have_posts() ) : $query -> the_post(); ?>
                    <?php echo zalora_masonry_render(get_the_ID());?>
                <?php endwhile;?>
            </div>	
            <div class="masonry-ajax loadmore-button">
                <div class="ajaxtext ajax-load-btn"><span></span><?php esc_attr_e("Load More","zalora");?></div>
                <div class="loading-animation"></div>
            </div>
        </div>	<!-- End content-wrap -->	
        <?php }?>
					
		<?php
		echo $after_widget;
	}
	
	/**
	 * update widget settings
	 */
	function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['category'] = $new_instance['category'];
        $instance['entries_display'] = $new_instance['entries_display'];
        $instance['post_offset'] = $new_instance['post_offset'];
        $instance['entries_loadmore'] = $new_instance['entries_loadmore'];
		return $instance;
	}
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */	
	function form($instance){
        $widget_cat_id = $this->get_field_id( 'category' );
		$defaults = array('title' => '', 'category' => 'all', 'entries_display' => 6, 'entries_loadmore' => 4, 'post_offset' => 0);
		$instance = wp_parse_args((array) $instance, $defaults); ?>
        
		<!-- Title: Text Input -->     
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><strong><?php esc_attr_e('Title: ', 'zalora'); ?></strong></label>
            <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>
        <!-- Categories
        --------------------------------------------->
		<p>
			<label for="<?php echo $this->get_field_id('category'); ?>"><strong><?php esc_attr_e('Post Source:', 'zalora'); ?></strong></label> 
			<select id="<?php echo $this->get_field_id('category'); ?>" name="<?php echo $this->get_field_name('category'); ?>[]" class="widefat categories tn-category-field" size="5" multiple='multiple' style="width:100%;">
				<option value='feat'><?php esc_attr_e( 'Featured Posts', 'zalora' ); ?></option>
                <option value='all'><?php esc_attr_e( 'All Categories', 'zalora' ); ?></option>
				<?php $categories = get_categories('hide_empty=0&depth=1&type=post'); ?>
				<?php foreach($categories as $category) { ?>
				<option value='<?php echo $category->term_id; ?>'><?php echo $category->cat_name; ?></option>
				<?php } ?>
			</select>
		</p>
        
        <p>
            <label for="<?php echo $this->get_field_id( 'entries_display' ); ?>"><strong><?php esc_attr_e('Number of entries to display', 'zalora'); ?></strong></label>
            <input type="text" id="<?php echo $this->get_field_id('entries_display'); ?>" name="<?php echo $this->get_field_name('entries_display'); ?>" value="<?php echo $instance['entries_display']; ?>" style="width:100%;" />
        </p>
        
        <p>
            <label for="<?php echo $this->get_field_id( 'post_offset' ); ?>"><strong><?php esc_attr_e('Post Offset', 'zalora'); ?></strong></label>
            <input type="text" id="<?php echo $this->get_field_id('post_offset'); ?>" name="<?php echo $this->get_field_name('post_offset'); ?>" value="<?php echo $instance['post_offset']; ?>" style="width:100%;" />
        </p>
        
        <p>
            <label for="<?php echo $this->get_field_id( 'entries_loadmore' ); ?>"><strong><?php esc_attr_e('Number of entries to load more', 'zalora'); ?></strong></label>
            <input type="text" id="<?php echo $this->get_field_id('entries_loadmore'); ?>" name="<?php echo $this->get_field_name('entries_loadmore'); ?>" value="<?php echo $instance['entries_loadmore']; ?>" style="width:100%;" />
        </p>
        
        <script>
        jQuery(document).ready(function($){
                <?php
                    $cat_array = json_encode($instance['category']);
                    echo "var instant = ". $cat_array . ";\n";
                ?>
                var status = 0;
                var widget_cat_id = "<?php echo esc_attr($widget_cat_id); ?>";
                $("#"+widget_cat_id).find("option").each(function(){
                    $this = $(this);
                    if (($(instant).length == 0) && ($this.attr('value') == 'all')) {
                        $this.attr('selected','selected');
                        return false;
                    }
                    $(instant).each(function(index, value){
                        if(value == $this.attr('value')){
                            $this.attr('selected','selected');
                        }
                    });
                    if ((($this.attr('value') == 'feat') || ($this.attr('value') == 'all')) && ($this.is(':selected'))){
                        return false;
                    }
                });

        });
        </script>
	<?php }
}
?>