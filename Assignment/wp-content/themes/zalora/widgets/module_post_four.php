<?php
/**
 * Plugin Name: shadowfiend: Module Post Four
 * Plugin URI: http://shadowfiend-design.info
 * Description: This module displays one main posts on left side and list of four posts on right side
 * Version: 1.0
 * Author: shadowfiend
 * Author URI: http://shadowfiend-design.info
 *
 */

/**
 * Add function to widgets_init that'll load our widget.
 */
add_action('widgets_init', 'shadowfiend_register_module_post_four');

function shadowfiend_register_module_post_four(){
	register_widget('shadowfiend_module_post_four');
}

/**
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 */ 
class shadowfiend_module_post_four extends WP_Widget {
	
	/**
	 * Widget setup.
	 */
	function __construct(){
		/* Widget settings. */	
		$widget_ops = array('classname' => 'module-post-four', 'description' => esc_html__('[Content module] Displays one main posts on left side and list of four posts on right side in content section', 'zalora'));
		
		/* Create the widget. */
		parent::__construct('shadowfiend_module_post_four', esc_html__('*shadowfiend: Module Posts Four', 'zalora'), $widget_ops);
	}
	
	
	/**
	 * display the widget on the screen.
	 */
	function widget($args, $instance){
        $zalora_option = zalora_global_var_declare('shadowfiend_option');
        extract($args);
        $title = apply_filters('widget_title', $instance['title'] );
        $cat_id = $instance['category'];
        $entries_display = 5;
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
        $query = new WP_Query( $args ); 
        ?>
		<div class="module-post-four-wrap section">
            <?php if ( $query -> have_posts() ) : $query -> the_post(); $post_id = get_the_ID();?>
            <div class="large-post classic-blog-style clear-fix">
                <div class="thumb hide-thumb">
    				<a href="<?php the_permalink() ?>">
                        <?php echo (zalora_get_thumbnail($post_id, 'zalora_630_400'));?>
                    </a>
                    <?php 
                        echo zalora_review_score($post_id);
                    ?>
                </div>
                <div class="post-details  table">
    
                    <div class="table-cell">
                        <div class="post-cat">
							<?php echo zalora_get_category_link($post_id);?>
						</div>
    					<h3 class="post-title">
    						<a href="<?php the_permalink() ?>">
    							<?php 
    								$shadowfiend_title = get_the_title();
    								echo zalora_the_excerpt_limit($shadowfiend_title, 10);
    							?>
    						</a>
    					</h3>                                
    					<div class="entry-excerpt">
                        <?php 
                        $string = get_the_excerpt();
                        echo zalora_the_excerpt_limit($string, 20); ?>
                        </div>
                        
                        <div class="meta-bottom clear-fix">
                            <div class="read-more">
                                <a href="<?php the_permalink() ?>"><?php esc_attr_e('Read More','zalora') ?></a>
                            </div>
                        </div>
                        
    				</div>
                </div>
            </div>
            <?php endif; ?>
            <?php if ( $query -> have_posts() ) {?>	 
                <div class="small-posts post-list">   
    			<?php while ( $query -> have_posts() ) : $query -> the_post(); $post_id = get_the_ID();?>	
                    <div class="one-col">
						<div class="item-post clear-fix">
							
							<div class="thumb hide-thumb">
								<a href="<?php the_permalink() ?>">
                                    <?php echo (zalora_get_thumbnail($post_id, 'zalora_110_80'));?>
                                </a>
                                <?php 
                                    echo zalora_review_score($post_id);
                                ?>
							</div>
													
							<div class="sub-post content-type-2 clear-fix">
								<h4 class="post-title post-title-sub-post">
                                    <a href="<?php the_permalink() ?>">
                                        <?php $shadowfiend_title = get_the_title();
										     echo zalora_the_excerpt_limit($shadowfiend_title, 10); 
                                        ?>
                                    </a>
                                </h4>
							</div>
						</div>
					</div>
    			<?php endwhile; ?>
                </div><!-- End Post List -->
            <?php }?>					
		</div><!-- module post four wrap -->
	<!-- End category -->
	<?php	
		/* After widget (defined by themes). */
		echo $after_widget;
	}
	/**
	 * update widget settings
	 */
	function update($new_instance, $old_instance){
		$instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
		$instance['category'] = $new_instance['category'];
		return $instance;
	}
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */	
	function form($instance){
        $widget_cat_id = $this->get_field_id( 'category' );
		$defaults = array('title' => '', 'category' => 'feat');
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