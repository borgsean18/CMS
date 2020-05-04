<?php
/**
 * Plugin Name: shadowfiend: Ticker Module
 * Plugin URI: http://shadowfiend-design.info/zalora
 * Description: This widget displays the breaking news.
 * Version: 1.0
 * Author: shadowfiend
 * Author URI: http://shadowfiend-design.info
 *
 */
add_action( 'widgets_init', 'shadowfiend_register_ticker_widget' );
function shadowfiend_register_ticker_widget() {
	register_widget( 'shadowfiend_ticker' );
}
class shadowfiend_ticker extends WP_Widget {
	/**

	 * Widget setup.

	 */
	function __construct() {
	   
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'shadowfiend-ticker-module', 'description' => esc_html__('[Full-width module][Content module] Displays the ticker in full-width or content section.', 'zalora') );
        
		/* Create the widget. */
		parent::__construct( 'shadowfiend_ticker', esc_html__('*shadowfiend: Module Ticker', 'zalora'), $widget_ops );
	}
	/**

	 * How to display the widget on the screen.

	 */

	function widget( $args, $instance ) {	   
        $zalora_option = zalora_global_var_declare('shadowfiend_option');
        global $zalora_ticker;
		extract( $args );
        echo $before_widget;
        
		/* Our variables from the widget settings. */       
        $title = apply_filters('widget_title', $instance['title'] );
        if ( $title == '' ) { $title = 'Breaking News';}

		$cat_id = $instance['category'];      

		$entries_display = esc_attr($instance['ticker_num']);
        if ( $entries_display == '' ) { $entries_display = 5;}
        
        $ticker_ani = $instance['ticker_ani'];
        if ( $ticker_ani == '' ) { $ticker_ani = 'Slide';}
        
        $uid = uniqid('ticker-wrapper-');
        
        $zalora_ticker[$uid] = $ticker_ani;
        wp_localize_script( 'zalora-customjs', 'ticker', $zalora_ticker );
        
        if ($cat_id[0] == 'feat') {    
            $args = array(
    			'post__in'  => get_option( 'sticky_posts' ),
    			'post_status' => 'publish',
    			'ignore_sticky_posts' => 1,
    			'posts_per_page' => $entries_display,
            );  
        } else if ($cat_id[0] == 'all'){ 
  		    $args = array(
				'post_status' => 'publish',
				'ignore_sticky_posts' => 1,
				'posts_per_page' => $entries_display,
            );
        } else {
            $args = array(
                'category__in' => $cat_id,
                'post_status' => 'publish',
                'ignore_sticky_posts' => 1,
                'posts_per_page' => $entries_display,
            );
        }
        ?>
         
		<div id="<?php echo esc_attr($uid);?>" class="ticker-wrapper">
            <h3 class="ticker-header"><?php echo esc_html($title); ?></h3>
            <div class="ticker-header-arrow"></div>
            <ul class="ticker">
                <?php $ticker_news = new WP_Query($args); while($ticker_news->have_posts()) : $ticker_news->the_post();?>
                <li><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2></li>
                <?php endwhile; ?>
            </ul>
        
        </div><!--ticker-wrapper-->
 		<?php
        
        echo $after_widget;  
	}
	/**

	 * Update the widget settings.

	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags($new_instance['title']);        
        $instance['category'] = $new_instance['category'];
		$instance['ticker_num'] = absint((int) $new_instance['ticker_num']);       
        $instance['ticker_ani'] = $new_instance['ticker_ani'];      

		return $instance;

	}
       
	function form( $instance ) {
		/* Set up some default widget settings. */
        $widget_cat_id = $this->get_field_id( 'category' );
		$defaults = array( 'title' => 'Trending now', 'ticker_num' => 5, 'category' => 'feat', 'ticker_ani' => 'Scroll');
		$instance = wp_parse_args( $instance, $defaults ); ?>
        
		<!-- Ticker Title: Text Input -->     
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><strong><?php esc_attr_e('Title: ','zalora');?></strong></label>
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

		<!-- Number of ticker posts -->

		<p>
			<label for="<?php echo $this->get_field_id( 'ticker_num' ); ?>"><strong><?php esc_attr_e('Number of posts to show: ', 'zalora');?></strong></label>
			<input type="text" id="<?php echo $this->get_field_id( 'ticker_num' ); ?>" name="<?php echo $this->get_field_name( 'ticker_num' ); ?>" value="<?php echo $instance['ticker_num']; ?>" size="3" />
		</p>
        

        <!-- Animation Option -->        
        <p>     
            <label for="<?php echo $this->get_field_id( 'ticker_ani' ); ?>"><strong><?php esc_attr_e('Animation: ', 'zalora');?></strong></label>    		 	
            <select id="<?php echo $this->get_field_id( 'ticker_ani' ); ?>" name="<?php echo $this->get_field_name( 'ticker_ani' ); ?>">            
                <option value="Scroll" <?php if ($instance['ticker_ani'] == 'Scroll') echo 'selected="selected"'; ?>><?php esc_attr_e('Scroll', 'zalora');?></option>               
                <option value="Type" <?php if ($instance['ticker_ani'] == 'Type') echo 'selected="selected"'; ?>><?php esc_attr_e('Type', 'zalora');?></option>                
                <option value="Slide" <?php if ($instance['ticker_ani'] == 'Slide') echo 'selected="selected"'; ?>><?php esc_attr_e('Slide', 'zalora');?></option>               	
             </select>          
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
		<?php  
    } 
}