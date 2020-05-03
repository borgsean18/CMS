<?php
$zalora_option_default = array (
    'shadowfiend-primary-color' => '#FFCC0D',
    'shadowfiend-dark-color' => '#19232d',
    'shadowfiend-site-layout' => '1',
    'shadowfiend-body-bg' => array
        (
            'background-color' => '',
            'background-repeat' => '',
            'background-size' => '',
            'background-attachment' => '',
            'background-position' => '',
            'background-image' => '',
            'media' => array
                (
                    'id' => '',
                    'height' => '',
                    'width' => '',
                    'thumbnail' => '',
                ),

        ),

    'shadowfiend-responsive-switch' => '1',
    'shadowfiend-sb-responsive-sw' => '1',
    'shadowfiend-sb-sticky-sw' => '1',
    'shadowfiend-logo' => array
        (
            'url' => '',
            'id' => '',
            'height' => '',
            'width' => '',
            'thumbnail' => '',
        ),

    'shadowfiend-header-social-switch' => '0',
    'shadowfiend-social-header' => array
        (
            'fb' => '',
            'twitter' => '',
            'gplus' => '',
            'linkedin' => '',
            'pinterest' => '',
            'instagram' => '',
            'dribbble' => '',
            'youtube' => '',
            'vimeo' => '',
            'vk' => '',
            'rss' => '',
        ),

    'shadowfiend-header-bg' => array
        (
            'background-color' => '',
            'background-repeat' => '',
            'background-size' => '',
            'background-attachment' => '',
            'background-position' => '',
            'background-image' => '',
            'media' => array
                (
                    'id' => '',
                    'height' => '',
                    'width' => '',
                    'thumbnail' => '',
                ),

        ),

    'shadowfiend-header-layout' => 'left',
    'shadowfiend-fixed-nav-switch' => '1',
    'shadowfiend-header-banner-switch' => '0',
    'shadowfiend-header-banner' => array
        (
            'imgurl' => '',
            'linkurl' => '',
        ),

    'shadowfiend-banner-script' => '',
    'shadowfiend-footer-instagram' => '0',
    'shadowfiend-footer-instagram-title' => '',
    'shadowfiend-footer-instagram-username' => '',
    'shadowfiend-backtop-switch' => '1',
    'cr-text' => '',
    'shadowfiend-header-font' => array
        (
            'font-family' => 'Roboto',
            'font-options' => '',
            'google' => '1',
            'font-weight' => '700',
            'font-style' => '',
            'subsets' => '',
        ),

    'shadowfiend-meta-font' => array
        (
            'font-family' => 'Lato',
            'font-options' => '',
            'google' => '1',
            'font-weight' => '400',
            'font-style' => '',
            'subsets' => '',
        ),

    'shadowfiend-title-font' => array
        (
            'font-family' => 'Playfair Display',
            'font-options' => '',
            'google' => '1',
            'font-weight' => '700',
            'font-style' => '',
            'subsets' => '',
        ),

    'shadowfiend-module-title-font' => array
        (
            'font-family' => 'Playfair Display',
            'font-options' => '',
            'google' => '1',
            'font-weight' => '700',
            'font-style' => '',
            'subsets' => '',
        ),

    'shadowfiend-body-font' => array
        (
            'font-family' => 'Lato',
            'font-options' => '',
            'google' => '1',
            'font-weight' => '400',
            'font-style' => '',
            'subsets' => '',
            'font-size' => '',
        ),

    'shadowfiend-meta-review-sw' => '1',
    'shadowfiend-meta-author-sw' => '1',
    'shadowfiend-meta-date-sw' => '1',
    'shadowfiend-meta-comments-sw' => '1',
    'shadowfiend-meta-readmore-sw' => '1',
    'shadowfiend-sidebar-sticky' => '1',
    'shadowfiend-blog-layout' => 'masonry-2',
    'shadowfiend-author-layout' => 'masonry-2',
    'shadowfiend-category-layout' => 'masonry-2',
    'shadowfiend-archive-layout' => 'masonry-2',
    'shadowfiend-search-layout' => 'masonry-2',
    'shadowfiend-search-result' => 'yes',
    'shadowfiend-single-featimg' => '1',
    'shadowfiend-sharebox-sw' => '1',
    'shadowfiend-fb-sw' => '1',
    'shadowfiend-tw-sw' => '1',
    'shadowfiend-gp-sw' => '1',
    'shadowfiend-pi-sw' => '1',
    'shadowfiend-li-sw' => '1',
    'shadowfiend-authorbox-sw' => '1',
    'shadowfiend-postnav-sw' => '1',
    'shadowfiend-related-sw' => '1',
    'shadowfiend-comment-sw' => '1',
    'shadowfiend-css-code' => '',
    'REDUX_last_saved' => '1477977356',
    'REDUX_LAST_SAVE' => '1477977356',
);
if ( ! function_exists('zalora_header_social')){ 
    function zalora_header_social(){?>
    <?php $zalora_option = zalora_global_var_declare('shadowfiend_option');?>
        <div class="header-social clear-fix">
			<ul>
				<?php if ($zalora_option['shadowfiend-social-header']['fb']){ ?>
					<li class="fb"><a href="<?php echo esc_url($zalora_option['shadowfiend-social-header']['fb']); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<?php } ?>
				
				<?php if ($zalora_option['shadowfiend-social-header']['twitter']){ ?>
					<li class="twitter"><a href="<?php echo esc_url($zalora_option['shadowfiend-social-header']['twitter']); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
				<?php } ?>
				
				<?php if ($zalora_option['shadowfiend-social-header']['gplus']){ ?>
					<li class="gplus"><a href="<?php echo esc_url($zalora_option['shadowfiend-social-header']['gplus']); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
				<?php } ?>
				
				<?php if ($zalora_option['shadowfiend-social-header']['linkedin']){ ?>
					<li class="linkedin"><a href="<?php echo esc_url($zalora_option['shadowfiend-social-header']['linkedin']); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
				<?php } ?>
				
				<?php if ($zalora_option['shadowfiend-social-header']['pinterest']){ ?>
					<li class="pinterest"><a href="<?php echo esc_url($zalora_option['shadowfiend-social-header']['pinterest']); ?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
				<?php } ?>
				
				<?php if ($zalora_option['shadowfiend-social-header']['instagram']){ ?>
					<li class="instagram"><a href="<?php echo esc_url($zalora_option['shadowfiend-social-header']['instagram']); ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
				<?php } ?>
				
				<?php if ($zalora_option['shadowfiend-social-header']['dribbble']){ ?>
					<li class="dribbble"><a href="<?php echo esc_url($zalora_option['shadowfiend-social-header']['dribbble']); ?>" target="_blank"><i class="fa fa-dribbble"></i></a></li>
				<?php } ?>
				
				<?php if ($zalora_option['shadowfiend-social-header']['youtube']){ ?>
					<li class="youtube"><a href="<?php echo esc_url($zalora_option['shadowfiend-social-header']['youtube']); ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
				<?php } ?>      							
				                                    
                <?php if ($zalora_option['shadowfiend-social-header']['vimeo']){ ?>
					<li class="vimeo"><a href="<?php echo esc_url($zalora_option['shadowfiend-social-header']['vimeo']); ?>" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
				<?php } ?>
                
                <?php if ($zalora_option['shadowfiend-social-header']['vk']){ ?>
					<li class="vk"><a href="<?php echo esc_url($zalora_option['shadowfiend-social-header']['vk']); ?>" target="_blank"><i class="fa fa-vk"></i></a></li>
				<?php } ?>
                
                <?php if ($zalora_option['shadowfiend-social-header']['rss']){ ?>
					<li class="rss"><a href="<?php echo esc_url($zalora_option['shadowfiend-social-header']['rss']); ?>" target="_blank"><i class="fa fa-rss"></i></a></li>
				<?php } ?>
				
			</ul>
		</div>
    <?php
    }
}
/**
* ************* Display post thumbnail *************
*---------------------------------------------------
*/
if ( ! function_exists('zalora_get_thumbnail')){ 
    function zalora_get_thumbnail($shadowfiend_postid, $size){
        if(has_post_thumbnail($shadowfiend_postid))	
            return get_the_post_thumbnail( $shadowfiend_postid, $size );
        else if(has_post_format('video'))
            return ('<div class="icon-thumb"><i class="fa fa-play-circle-o"></i></div>');
        else if(has_post_format('gallery'))
            return ('<div class="icon-thumb"><i class="fa fa-camera"></i></div>');
        else if(has_post_format('audio'))
            return ('<div class="icon-thumb"><i class="fa fa-music"></i></div>');
        else if(has_post_format('image'))
            return ('<div class="icon-thumb"><i class="fa fa-camera"></i></div>');
        else
            return ('<div class="icon-thumb"><i class="fa fa-pencil-square-o"></i></div>');
                
    }
}
if ( ! function_exists('zalora_initWpFilesystem')){ 
    function zalora_initWpFilesystem() {
        global $wp_filesystem;
    
        // Initialize the Wordpress filesystem, no more using file_put_contents function
        if ( empty( $wp_filesystem ) ) {
            require_once ABSPATH . '/wp-admin/includes/file.php';
            WP_Filesystem();
        }
    }
}
/**
* ************* Custom excerpt *****************
*-----------------------------------------------
*/
if ( ! function_exists('zalora_string_limit_words')){
    function zalora_string_limit_words($string, $word_limit)
    {
      $words = explode(' ', $string, ($word_limit + 1));
      if(count($words) > $word_limit)
      array_pop($words);
      return implode(' ', $words);
    }
}

if ( ! function_exists('zalora_the_excerpt_limit')){
    function zalora_the_excerpt_limit($string, $word_limit){
        $strout = zalora_string_limit_words($string,$word_limit);
        if (strlen($strout) < strlen($string))
            $strout .=" ...";
        return $strout;
    }
}

if ( ! function_exists('zalora_excerpt')){
    function zalora_excerpt($limit) {
          $excerpt = explode(' ', get_the_excerpt(), $limit);
          if (count($excerpt)>=$limit) {
            array_pop($excerpt);
            $excerpt = implode(" ",$excerpt).'...';
          } else {
            $excerpt = implode(" ",$excerpt);
          } 
          $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
          return $excerpt;
    }
}
/**
 * ************* Review Score *****************
 *---------------------------------------------------
 */
if ( ! function_exists( 'zalora_review_score' ) ) {
    function zalora_review_score ($post_id) {
        $ret = '';
        $shadowfiend_review_en = get_post_meta($post_id, 'shadowfiend_review_checkbox', true);
        if ($shadowfiend_review_en) {
            $shadowfiend_final_score = get_post_meta($post_id, 'shadowfiend_final_score', true);
            $arc_percent = $shadowfiend_final_score * 10;
            if (isset($shadowfiend_final_score) && ($shadowfiend_final_score != null)){
                $ret = '<div class="rating-wrap"><span><i class="fa fa-star-o"></i>'.$shadowfiend_final_score.'</span></div>';
            }
        }
        return $ret;
    }
}
if ( ! function_exists( 'zalora_excerpt_limit_by_word' ) ) {
    function zalora_excerpt_limit_by_word($string, $word_limit){
        $words = explode(' ', $string, ($word_limit + 1));
        if(count($words) > $word_limit)
        array_pop($words);
        $strout = implode(' ', $words);
        if (strlen($strout) < strlen($string))
            $strout .=" ...";
        return $strout;
    }
}
/** Post Grid **/
if ( ! function_exists('zalora_post_grid')) {
    function zalora_post_grid($post_id){?>
        <div class="one-col grid-1-type">
			<div class="thumb hide-thumb">
				<a href="<?php the_permalink() ?>">
                    <?php echo (zalora_get_thumbnail($post_id, 'zalora_690_395'));?>
                </a>
                <?php 
                    echo zalora_review_score($post_id);
                ?>
            </div>
            <div class="post-cat">
				<?php echo zalora_get_category_link($post_id);?>
			</div>
			<div class="post-details">
				<h3 class="post-title">
                    <?php 
                        if(is_sticky($post_id)) {
                            echo '<div class="sticky-post-mark"><i class="fa fa-bolt"></i></div>';
                        }
                    ?>
					<a href="<?php the_permalink() ?>">
						<?php 
							$title = get_the_title();
							echo zalora_the_excerpt_limit($title, 10);
						?>
					</a>
				</h3>                                
				<div class="entry-excerpt">
                <?php 
                $string = get_the_excerpt();
                echo zalora_the_excerpt_limit($string, 15); ?>
                </div>
                
                <div class="meta-bottom clear-fix">
                    <div class="read-more">
                        <a href="<?php the_permalink() ?>"><?php esc_html_e('Read More','zalora') ?></a>
                    </div>
                </div>
                
			</div>							
		</div>
    <?php	
    }
}
/* Render Masonry Content */
if ( ! function_exists( 'zalora_masonry_render')) {
    function zalora_masonry_render($post_id){?>
			<div class="one-col grid-1-type">
                <div class="post-wrapper">
					<div class="thumb hide-thumb">
						<a href="<?php the_permalink() ?>">
                            <?php echo (zalora_get_thumbnail($post_id, 'zalora_auto-size'));?>
                        </a>
                        <?php 
                            echo zalora_review_score($post_id);
                        ?>
                    </div>

					<div class="post-details opacity-zero">										
						<div class="post-cat">
							<?php echo zalora_get_category_link($post_id);?>
						</div>					
						<h3 class="post-title">
                            <?php 
                                if(is_sticky($post_id)) {
                                    echo '<div class="sticky-post-mark"><i class="fa fa-bolt"></i></div>';
                                }
                            ?>
							<a href="<?php the_permalink() ?>">
								<?php 
									$title = get_the_title();
									echo zalora_the_excerpt_limit($title, 10);
								?>
							</a>
						</h3>                                
						<div class="entry-excerpt">
                        <?php 
                        $string = get_the_excerpt();
                        echo zalora_the_excerpt_limit($string, 15); ?>
                        </div>
                        
                        <div class="meta-bottom clear-fix">
                            <div class="read-more">
                                <a href="<?php the_permalink() ?>"><?php esc_html_e('Read More','zalora') ?></a>
                            </div>
                        </div>
                        
					</div>	
                </div>						
			</div>	                            					
		<?php 
    }
}
/* Render Classic Blog Content */
if ( ! function_exists( 'zalora_classic_blog_render')) {
    function zalora_classic_blog_render($post_id, $excerpt_length){?>	                             
        <div class="classic-blog-style clear-fix">
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
                        <?php 
                            if(is_sticky($post_id)) {
                                echo '<div class="sticky-post-mark"><i class="fa fa-bolt"></i></div>';
                            }
                        ?>
						<a href="<?php the_permalink() ?>">
							<?php 
								$title = get_the_title();
								echo zalora_the_excerpt_limit($title, 10);
							?>
						</a>
					</h3>                                
					<div class="entry-excerpt">
                    <?php 
                    $string = get_the_excerpt();
                    echo zalora_the_excerpt_limit($string, $excerpt_length); ?>
                    </div>
                    
                    <div class="meta-bottom clear-fix">                        
                        <div class="read-more">
                            <a href="<?php the_permalink() ?>"><?php esc_html_e('Read More','zalora') ?></a>
                        </div>
                    </div>
                    
				</div>
            </div>
        </div>
    <?php 
    }
}

/* Render Large Blog Content */
if ( ! function_exists( 'zalora_large_blog_render')) {
    function zalora_large_blog_render($post_id, $excerpt_length){?>           
        <div class="large-blog-style clear-fix">
            <div class="thumb hide-thumb">
				<a href="<?php the_permalink() ?>">
                    <?php echo (zalora_get_thumbnail($post_id, 'zalora_690_395'));?>
                </a>
                <?php 
                    echo zalora_review_score($post_id);
                ?>
            </div>
            <div class="post-details table">

                <div class="table-cell">		
					<div class="post-cat">
						<?php echo zalora_get_category_link($post_id);?>
					</div>					
					<h3 class="post-title">
                        <?php 
                            if(is_sticky($post_id)) {
                                echo '<div class="sticky-post-mark"><i class="fa fa-bolt"></i></div>';
                            }
                        ?>
						<a href="<?php the_permalink() ?>">
							<?php 
								$title = get_the_title();
								echo zalora_the_excerpt_limit($title, 10);
							?>
						</a>
					</h3>                                
					<div class="entry-excerpt">
                    <?php 
                    $string = get_the_excerpt();
                    echo zalora_the_excerpt_limit($string, $excerpt_length); ?>
                    </div>
                    
                    <div class="meta-bottom clear-fix">
                        <div class="read-more">
                            <a href="<?php the_permalink() ?>"><?php esc_html_e('Read More','zalora') ?></a>
                        </div>
                    </div>
                    
				</div>
            </div>
        </div>
    <?php 
    }
}
    
/**
 * AJAX SECTION 
 * 
 * ==================================*/
// Masonry
add_action( 'wp_ajax_masonry_load', 'zalora_ajax_masonry_load' );
add_action('wp_ajax_nopriv_masonry_load', 'zalora_ajax_masonry_load');
if ( ! function_exists( 'zalora_ajax_masonry_load' ) ) {
    function zalora_ajax_masonry_load() {
        $post_offset = isset( $_POST['post_offset'] ) ? $_POST['post_offset'] : 0;
        $entries = isset( $_POST['entries'] ) ? $_POST['entries'] : 0;
        $args = isset( $_POST['args'] ) ? $_POST['args'] : null;    
        $args[ 'posts_per_page' ] = $entries;
        $args[ 'offset' ] = $post_offset;
        $shadowfiend_ajax_output = '';
                
        $the_query = new WP_Query( $args );
        while ( $the_query -> have_posts() ) : $the_query -> the_post();
            $shadowfiend_ajax_output .= zalora_masonry_render(get_the_ID());
        endwhile;
        echo ($shadowfiend_ajax_output);
        die();
    }
}
// Classic Blog
add_action( 'wp_ajax_classic_blog_load', 'zalora_ajax_classic_blog_load' );
add_action('wp_ajax_nopriv_classic_blog_load', 'zalora_ajax_classic_blog_load');
if ( ! function_exists( 'zalora_ajax_classic_blog_load' ) ) {
    function zalora_ajax_classic_blog_load() {
        $post_offset = isset( $_POST['post_offset'] ) ? $_POST['post_offset'] : 0;
        $entries = isset( $_POST['entries'] ) ? $_POST['entries'] : 0;
        $excerpt_length = isset( $_POST['excerpt_length'] ) ? $_POST['excerpt_length'] : 0;
        $args = isset( $_POST['args'] ) ? $_POST['args'] : null;    
        $args[ 'posts_per_page' ] = $entries;
        $args[ 'offset' ] = $post_offset;
        $shadowfiend_ajax_output = '';        
        $the_query = new WP_Query( $args );
        while ( $the_query -> have_posts() ) : $the_query -> the_post(); 
            $post_id = get_the_ID();
            $shadowfiend_ajax_output .= zalora_classic_blog_render($post_id, $excerpt_length);
        endwhile;
        echo ($shadowfiend_ajax_output);
        die();
    }
}
// Large Blog
add_action( 'wp_ajax_large_blog_load', 'zalora_ajax_large_blog_load' );
add_action('wp_ajax_nopriv_large_blog_load', 'zalora_ajax_large_blog_load');
if ( ! function_exists( 'zalora_ajax_large_blog_load' ) ) {
    function zalora_ajax_large_blog_load() {
        $post_offset = isset( $_POST['post_offset'] ) ? $_POST['post_offset'] : 0;
        $entries = isset( $_POST['entries'] ) ? $_POST['entries'] : 0;
        $excerpt_length = isset( $_POST['excerpt_length'] ) ? $_POST['excerpt_length'] : 0;
        $args = isset( $_POST['args'] ) ? $_POST['args'] : null;    
        $args[ 'posts_per_page' ] = $entries;
        $args[ 'offset' ] = $post_offset;
        $shadowfiend_ajax_output = '';        
        $the_query = new WP_Query( $args );
        $the_query = new WP_Query( $args );
        while ( $the_query -> have_posts() ) : $the_query -> the_post(); 
            $post_id = get_the_ID();
            $shadowfiend_ajax_output .= zalora_large_blog_render($post_id, $excerpt_length);
        endwhile;
        echo ($shadowfiend_ajax_output);
        die();
    }
}
if ( ! function_exists( 'zalora_get_article_info' ) ) { 
    function zalora_get_article_info($shadowfiendPostId, $shadowfiend_author_id){  
        $article_info = '';
        $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $shadowfiendPostId ), 'full' );
        $article_info .= '<meta itemprop="author" content="'.get_the_author_meta('display_name', $shadowfiend_author_id).'">';
        $article_info .= '<meta itemprop="headline " content="'.get_the_title($shadowfiendPostId).'">';
        $article_info .= '<meta itemprop="datePublished" content="'.date(DATE_W3C, get_the_time('U', $shadowfiendPostId)).'">';
        $article_info .= '<meta itemprop="image" content="'.esc_attr( $thumbnail_src[0] ).'">';
        $article_info .= '<meta itemprop="interactionCount" content="UserComments:' . get_comments_number($shadowfiendPostId) . '"/>';
        return $article_info;
    }
}
/**
 * BK WP Native Gallery
 */
if ( ! function_exists( 'zalora_native_gallery' ) ) { 
     function zalora_native_gallery($shadowfiendPostId, $attachment_ids){
        global $justified_ids;
        $uid = rand();
        $justified_ids[]=$uid;
        wp_localize_script( 'zalora-customjs', 'justified_ids', $justified_ids );
        $ret = '';
        
        $ret .= '<div class="zoom-gallery justifiedgall_'.$uid.' justified-gallery" style="margin: 0px 0px 1.5em;">';
						if ($attachment_ids) :					
						foreach ($attachment_ids as $id) :
							$attachment_url = wp_get_attachment_image_src( $id, 'full' );
                            $attachment = get_post($id);
							$caption = apply_filters('the_title', $attachment->post_excerpt);
					
                            $ret .= '<a class="zoomer" title="'.$caption.'" data-source="'.$attachment_url[0].'" href="'.$attachment_url[0].'">'.wp_get_attachment_image($attachment->ID, 'full').'</a>';

						endforeach;
						endif;
			$ret .= '</div>';
            return $ret;
     }
}
/**
 *  Single Content
 */   
if ( ! function_exists( 'zalora_single_content' ) ) { 
    function zalora_single_content($shadowfiendPostId){
        $the_content = '';
        $the_content = apply_filters( 'the_content', get_the_content($shadowfiendPostId) );
        $the_content = str_replace( ']]>', ']]&gt;', $the_content );

        $post_content_str = get_the_content($shadowfiendPostId);
        $gallery_flag = 0;
        $i = 0;
        $ids = null;
        for ($i=0; $i < 10; $i++) {
            preg_match('/<style(.+(\n))+.*?<\/div>/', $the_content, $match);
                
            preg_match('/\[gallery.*ids=.(.*).\]/', $post_content_str, $ids);             
            
            if ($ids != null) {
                $the_content = str_replace($match[0], $ids[0] ,$the_content);          
                   
                $attachment_ids = explode(",", $ids[1]);
                $post_content_str = str_replace($ids[0], zalora_native_gallery ($shadowfiendPostId, $attachment_ids),$post_content_str);
                $the_content = str_replace($ids[0], zalora_native_gallery ($shadowfiendPostId, $attachment_ids),$the_content);
                $gallery_flag = 1;
            }
        }
        if($gallery_flag == 1) {
            return $the_content;
        }else {
            return the_content($shadowfiendPostId);
        }
    }
}
/**
 * Single Tags
 */
if ( ! function_exists( 'zalora_single_tags' ) ) { 
    function zalora_single_tags($tags) {
        $single_tags = '';
        $single_tags .= '<div class="s-tags">';
        $single_tags .= '<span>Tags</span>';
    		foreach ($tags as $tag):
    			$single_tags .= '<a href="'. get_tag_link($tag->term_id) .'" title="'. esc_attr(sprintf(esc_html__("View all posts tagged %s",'zalora'), $tag->name)) .'">'. $tag->name.'</a>';
    		endforeach;
        $single_tags .= '</div>';
        return $single_tags;
    }
}
/**
 * Post Navigation
 */
if ( ! function_exists( 'zalora_single_post_nav' ) ) { 
    function zalora_single_post_nav($next_post, $prev_post){
        $post_nav = '';
        $post_nav .= '<div class="s-post-nav clear-fix">';  
        if (!empty($prev_post)):
            $post_nav .= '<div class="nav-btn nav-prev">';
    		$post_nav .= '<div class="nav-title clear-fix">';
            $post_nav .= '<span class="icon"><i class="fa fa-long-arrow-left"></i></span>';
            $post_nav .= '<span>'.esc_html__("Previous Article","zalora").'</span>';
            $post_nav .= '<h3>';
            $post_nav .= '<a href="'.get_permalink( $prev_post->ID ).'">'.zalora_excerpt_limit_by_word(get_the_title($prev_post->ID),7).'</a>';
            $post_nav .= '</h3>';
            $post_nav .= '</div></div>';
		endif;
        if (!empty($next_post)):
            $post_nav .= '<div class="nav-btn nav-next">';
            $post_nav .= '<div class="nav-title clear-fix">';
            $post_nav .= '<span class="icon"><i class="fa fa-long-arrow-right"></i></span>';
            $post_nav .= '<span>'.esc_html__("Next Article","zalora").'</span>';
            $post_nav .= '<h3>';
            $post_nav .= '<a href="'.get_permalink( $next_post->ID ).'">'.zalora_excerpt_limit_by_word(get_the_title($next_post->ID),7).'</a>';
            $post_nav .= '</h3>';
            $post_nav .= '</div></div>';
        endif;                
        $post_nav .= '</div>';
        return $post_nav;
    }     
}
/**
 * ************* Related Post *****************
 *---------------------------------------------------
 */     

if ( ! function_exists( 'zalora_related_posts' ) ) {        
    function zalora_related_posts($shadowfiend_number_related) {
        global $post;
        $shadowfiend_post_id = $post->ID;
        if (is_attachment() && ($post->post_parent)) { $shadowfiend_post_id = $post->post_parent; };
        $i = 1;
        $shadowfiend_related_posts = array();
        $shadowfiend_relate_tags = array();
        $shadowfiend_relate_categories = array();
        $excludeid = array();
        $shadowfiend_number_related_remain = 0;
        array_push($excludeid, $shadowfiend_post_id);

            $shadowfiend_tags = wp_get_post_tags($shadowfiend_post_id);   
            $tag_length = sizeof($shadowfiend_tags);                               
            $shadowfiend_tag_check = $shadowfiend_all_cats = NULL;
 
 // Get tag post
            if ($tag_length > 0){
                foreach ( $shadowfiend_tags as $shadowfiend_tag ) { $shadowfiend_tag_check .= $shadowfiend_tag->slug . ','; }             
                    $shadowfiend_related_args = array(   'numberposts' => $shadowfiend_number_related, 
                                                'tag' => $shadowfiend_tag_check, 
                                                'post__not_in' => $excludeid,
                                                'post_status' => 'publish',
                                                'orderby' => 'rand'  );
                $shadowfiend_relate_tags_posts = get_posts( $shadowfiend_related_args );
                $shadowfiend_number_related_remain = $shadowfiend_number_related - sizeof($shadowfiend_relate_tags_posts);
                if(sizeof($shadowfiend_relate_tags_posts) > 0){
                    foreach ( $shadowfiend_relate_tags_posts as $shadowfiend_relate_tags_post ) {
                        array_push($excludeid, $shadowfiend_relate_tags_post->ID);
                        array_push($shadowfiend_related_posts, $shadowfiend_relate_tags_post);
                    }
                }
            }
 // Get categories post
            $shadowfiend_categories = get_the_category($shadowfiend_post_id);  
            $category_length = sizeof($shadowfiend_categories);       
            if ($category_length > 0){       
                foreach ( $shadowfiend_categories as $shadowfiend_category ) { $shadowfiend_all_cats .= $shadowfiend_category->term_id  . ','; }
                    $shadowfiend_related_args = array(  'numberposts' => $shadowfiend_number_related_remain, 
                                            'category' => $shadowfiend_all_cats, 
                                            'post__not_in' => $excludeid, 
                                            'post_status' => 'publish', 
                                            'orderby' => 'rand'  );
                $shadowfiend_relate_categories = get_posts( $shadowfiend_related_args );
    
                if(sizeof($shadowfiend_relate_categories) > 0){
                    foreach ( $shadowfiend_relate_categories as $shadowfiend_relate_category ) {
                        array_push($shadowfiend_related_posts, $shadowfiend_relate_category);
                    }
                }
            }
            if ( $shadowfiend_related_posts != NULL ) {
                
                echo '<div id="shadowfiend-related-posts" class="clear-fix">
                        <h3 class="block-title">'.esc_html__('Related Posts', 'zalora').'</h3><ul>';
                foreach ( $shadowfiend_related_posts as $key => $post ) { //setup global post
                    if($key > ($shadowfiend_number_related - 1))
                        break;                                   
                    setup_postdata($post);  
?> 
                    <li class="type-in">
						<div class="thumb-wrap">
							<div class="thumb">
								<a href="<?php the_permalink() ?>">
                                    <?php echo (zalora_get_thumbnail(get_the_ID(), 'zalora_330_220'));?>
                                </a>
							</div>
						</div>
						<div class="post-info">
                            <?php 
        					$category = get_the_category(); 
                            if (array_key_exists(0,$category)){
            					if($category[0]){?>  										
            						<div class="post-cat post-cat-bg">
            							<?php echo '<a  href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'; ?>
            						</div>					
            			     <?php
            					}
                            }
        				    ?>
							<h3 class="post-title">
								<a href="<?php the_permalink() ?>">
									<?php
                                        $title = get_the_title();
                                        $short_title = zalora_the_excerpt_limit($title, 10);
										echo esc_attr($short_title); 
									?>
								</a>
							</h3>
							<div class="post-meta">
                                <div class="post-author">
                                    <span class="avatar">
                                        By
                                    </span>
                                    <?php the_author_posts_link();?>                            
                                </div>                                        
                                <div class="date">
                                    <span><i class="fa fa-clock-o"></i></span>
                    				<?php echo get_the_date(); ?>
                    			</div>
                                <div class="meta-comment">
                        			<span><i class="fa fa-comments-o"></i></span>
                        			<a href="<?php echo (get_permalink($shadowfiend_post_id).'#comments');?>"><?php echo get_comments_number($shadowfiend_post_id)?></a>
                        		</div>
                            </div>	
                            
						</div>							
					</li>
<?php 
                  } 
               echo '</ul></div>';
            wp_reset_postdata();    
            }    
    }
}
/**
 * ************* Social Share Box *****************
 *---------------------------------------------------
 */
if ( ! function_exists( 'zalora_share_box' ) ) {          
    function zalora_share_box($shadowfiendPostId, $social_share) {
        $titleget = get_the_title($shadowfiendPostId);
        $fb_oc = "window.open('http://www.facebook.com/sharer.php?u=".urlencode(get_permalink())."','Facebook','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;";
        $tw_oc = "window.open('http://twitter.com/share?url=".urlencode(get_permalink())."&amp;text=".str_replace(" ", "%20", $titleget)."','Twitter share','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;";
        $gp_oc = "window.open('https://plus.google.com/share?url=".urlencode(get_permalink())."','Google plus','width=585,height=666,left='+(screen.availWidth/2-292)+',top='+(screen.availHeight/2-333)+''); return false;";
        $stu_oc = "window.open('http://www.stumbleupon.com/submit?url=".urlencode(get_permalink())."','Stumbleupon','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;";
        $li_oc = "window.open('http://www.linkedin.com/shareArticle?mini=true&amp;url=".urlencode(get_permalink())."','Linkedin','width=863,height=500,left='+(screen.availWidth/2-431)+',top='+(screen.availHeight/2-250)+''); return false;";
        $str_ret = '';
        $str_ret .= '<div class="shadowfiend-share-box">';
        $str_ret .= '<span>'.esc_html__("Share:", "zalora").'</span>';
        $str_ret .= '<div class="share-box-wrap">';
        $str_ret .= '<div class="share-box">';
        $str_ret .= '<ul class="social-share">';
        if (isset($social_share['fb']) && ($social_share['fb'])): 
            $str_ret .= '<li class="shadowfiend_facebook_share"><a onClick="'.$fb_oc.'" href="http://www.facebook.com/sharer.php?u='.urlencode(get_permalink()).'"><div class="share-item-icon"><i class="fa fa-facebook " title="Facebook"></i></div></a></li>';
        endif; 
        if (isset($social_share['tw']) && ($social_share['tw'])):
            $str_ret .= '<li class="shadowfiend_twitter_share"><a onClick="'.$tw_oc.'" href="http://twitter.com/share?url='.urlencode(get_permalink()).'&amp;text='.str_replace(" ", "%20", $titleget).'"><div class="share-item-icon"><i class="fa fa-twitter " title="Twitter"></i></div></a></li>';
        endif;
        if (isset($social_share['gp']) && ($social_share['gp'])):
            $str_ret .= '<li class="shadowfiend_gplus_share"><a onClick="'.$gp_oc.'" href="https://plus.google.com/share?url='.urlencode(get_permalink()).'"><div class="share-item-icon"><i class="fa fa-google-plus " title="Google Plus"></i></div></a></li>';
        endif;
        if (isset($social_share['pi']) && ($social_share['pi'])):
            $str_ret .= '<li class="shadowfiend_pinterest_share"><a href="javascript:void((function()%7Bvar%20e=document.createElement(&apos;script&apos;);e.setAttribute(&apos;type&apos;,&apos;text/javascript&apos;);e.setAttribute(&apos;charset&apos;,&apos;UTF-8&apos;);e.setAttribute(&apos;src&apos;,&apos;http://assets.pinterest.com/js/pinmarklet.js?r=&apos;+Math.random()*99999999);document.body.appendChild(e)%7D)());"><div class="share-item-icon"><i class="fa fa-pinterest " title="Pinterest"></i></div></a></li>';
        endif;
        if (isset($social_share['stu']) && ($social_share['stu'])):
            $str_ret .= '<li class="shadowfiend_stumbleupon_share"><a onClick="'.$stu_oc.'" href="http://www.stumbleupon.com/submit?url='.urlencode(get_permalink()).'"><div class="share-item-icon"><i class="fa fa-stumbleupon " title="Stumbleupon"></div></i></a></li>';
        endif;
        if (isset($social_share['li']) && ($social_share['li'])):
            $str_ret .= '<li class="shadowfiend_linkedin_share"><a onClick="'.$li_oc.'" href="http://www.linkedin.com/shareArticle?mini=true&amp;url='.urlencode(get_permalink()).'"><div class="share-item-icon"><i class="fa fa-linkedin " title="Linkedin"></i></div></a></li>';
        endif;      
        $str_ret .= '</ul>';
        $str_ret .= '</div>';
        $str_ret .= '</div>';
        $str_ret .= '</div>';
        return $str_ret;  
    }    
}
/**
* ************* Author box *****************
*---------------------------------------------------
*/ 
if ( ! function_exists( 'zalora_author_details' ) ) {   
    function zalora_author_details($shadowfiend_author_id, $shadowfiend_desc = true) {
        
        $shadowfiend_author_email = get_the_author_meta('publicemail', $shadowfiend_author_id);
        $shadowfiend_author_name = get_the_author_meta('display_name', $shadowfiend_author_id);
        $shadowfiend_author_tw = get_the_author_meta('twitter', $shadowfiend_author_id);
        $shadowfiend_author_go = get_the_author_meta('googleplus', $shadowfiend_author_id);
        $shadowfiend_author_fb = get_the_author_meta('facebook', $shadowfiend_author_id);
        $shadowfiend_author_yo = get_the_author_meta('youtube', $shadowfiend_author_id);
        $shadowfiend_author_www = get_the_author_meta('url', $shadowfiend_author_id);
        $shadowfiend_author_desc = get_the_author_meta('description', $shadowfiend_author_id);
        $shadowfiend_author_posts = count_user_posts( $shadowfiend_author_id ); 
        $shadowfiend_author = NULL;
        if(
               ($shadowfiend_author_desc != NULL) 
            || ($shadowfiend_author_email != NULL) 
            || ($shadowfiend_author_email != NULL) 
            || ($shadowfiend_author_www != NULL)
            || ($shadowfiend_author_tw != NULL)
            || ($shadowfiend_author_go != NULL)
            || ($shadowfiend_author_fb != NULL)
            || ($shadowfiend_author_yo != NULL)
            || ($shadowfiend_author_email != NULL)
        ){
            $shadowfiend_author .= '<div class="shadowfiend-author-box clear-fix"><div class="shadowfiend-author-avatar"><a href="'.get_author_posts_url($shadowfiend_author_id).'">'. get_avatar($shadowfiend_author_id, '75').'</a></div><div class="author-info" itemprop="author"><h3><a href="'.get_author_posts_url($shadowfiend_author_id).'">'.$shadowfiend_author_name.'</a></h3>';
                                
            if (($shadowfiend_author_desc != NULL) && ($shadowfiend_desc == true)) { $shadowfiend_author .= '<p class="shadowfiend-author-bio">'. $shadowfiend_author_desc .'</p>'; }                    
            if (($shadowfiend_author_email != NULL) || ($shadowfiend_author_www != NULL) || ($shadowfiend_author_tw != NULL) || ($shadowfiend_author_go != NULL) || ($shadowfiend_author_fb != NULL) ||($shadowfiend_author_yo != NULL)) {$shadowfiend_author .= '<div class="shadowfiend-author-page-contact">';}
            if ($shadowfiend_author_email != NULL) { $shadowfiend_author .= '<a class="shadowfiend-tipper-bottom" data-title="Email" href="mailto:'. $shadowfiend_author_email.'"><i class="fa fa-envelope " title="'.esc_html__('Email', 'zalora').'"></i></a>'; } 
            if ($shadowfiend_author_www != NULL) { $shadowfiend_author .= ' <a class="shadowfiend-tipper-bottom" data-title="Website" href="'. $shadowfiend_author_www .'" target="_blank"><i class="fa fa-globe " title="'.esc_html__('Website', 'zalora').'"></i></a> '; } 
            if ($shadowfiend_author_tw != NULL) { $shadowfiend_author .= ' <a class="shadowfiend-tipper-bottom" data-title="Twitter" href="//www.twitter.com/'. $shadowfiend_author_tw.'" target="_blank" ><i class="fa fa-twitter " title="'.esc_html__('Twitter','zalora').'"></i></a>'; } 
            if ($shadowfiend_author_go != NULL) { $shadowfiend_author .= ' <a class="shadowfiend-tipper-bottom" data-title="Google Plus" href="'. $shadowfiend_author_go .'" rel="publisher" target="_blank"><i title="'.esc_html__('Google+','zalora').'" class="fa fa-google-plus " ></i></a>'; }
            if ($shadowfiend_author_fb != NULL) { $shadowfiend_author .= ' <a class="shadowfiend-tipper-bottom" data-title="Facebook" href="'.$shadowfiend_author_fb. '" target="_blank" ><i class="fa fa-facebook " title="'.esc_html__('Facebook','zalora').'"></i></a>'; }
            if ($shadowfiend_author_yo != NULL) { $shadowfiend_author .= ' <a class="shadowfiend-tipper-bottom" data-title="Youtube" href="http://www.youtube.com/user/'.$shadowfiend_author_yo. '" target="_blank" ><i class="fa fa-youtube " title="'.esc_html__('Youtube','zalora').'"></i></a>'; }
            if (($shadowfiend_author_email != NULL) || ($shadowfiend_author_www != NULL) || ($shadowfiend_author_go != NULL) || ($shadowfiend_author_tw != NULL) || ($shadowfiend_author_fb != NULL) ||($shadowfiend_author_yo != NULL)) {$shadowfiend_author .= '</div>';}                          
            
            $shadowfiend_author .= '</div></div><!-- close author-infor-->';
        }
        return $shadowfiend_author;
    }
}/**
 * shadowfiend Comments
 */
/**
 * BK Comments
 */
if ( ! function_exists( 'zalora_comments') ) {
    function zalora_comments($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment; ?>
		<li <?php comment_class(); ?>>
			<article id="comment-<?php comment_ID(); ?>" class="comment-article  media">
                <header class="comment-author clear-fix">
                    <div class="comment-avatar">
                        <?php echo get_avatar( get_comment_author_email(), 60 ); ?>  
                    </div>
                        <?php printf('<span class="comment-author-name">%s</span>', get_comment_author_link()) ?>
    					          <span class="comment-time" datetime="<?php comment_time('c'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>" class="comment-timestamp"><?php comment_time(esc_html__('j F, Y \a\t H:i', 'zalora')); ?> </a></span>
                        <span class="comment-links">
                            <?php
                                edit_comment_link(esc_html__('Edit', 'zalora'),'  ','');
                                comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'])));
                            ?>
                        </span>
                    </header><!-- .comment-meta -->
                
                <div class="comment-text">
                    				
    				<?php if ($comment->comment_approved == '0') : ?>
    				<div class="alert info">
    					<p><?php esc_html_e('Your comment is awaiting moderation.', 'zalora') ?></p>
    				</div>
    				<?php endif; ?>
    				<section class="comment-content">
    					<?php comment_text() ?>
    				</section>
                </div>
			</article>
		<!-- </li> is added by WordPress automatically -->
		<?php
    }
}
/**
 * Canvas box 
 */
if ( ! function_exists( 'zalora_canvas_box') ) {
     function zalora_canvas_box($shadowfiend_final_score){
        $zalora_option = zalora_global_var_declare('shadowfiend_option');
        $shadowfiend_best_rating = '10';
        $shadowfiend_review_final_score = floatval($shadowfiend_final_score);  
        $arc_percent = $shadowfiend_final_score*10;
        $shadowfiend_canvas_ret = '';                                       
        $score_circle = '<canvas class="rating-canvas" data-rating="'.$arc_percent.'"></canvas>';           
        $shadowfiend_canvas_ret .= '<div class="shadowfiend-score-box" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">'.$score_circle.'<meta itemprop="worstRating" content="1"><meta itemprop="bestRating" content="'. $shadowfiend_best_rating .'"><span class="score" itemprop="ratingValue">'.$shadowfiend_review_final_score.'</span></div><!--close canvas-->';
        return $shadowfiend_canvas_ret;
    }
}
/**
* ************* Display post review box ********
*---------------------------------------------------
*/
if ( ! function_exists( 'zalora_post_review_boxes') ) {
    function zalora_post_review_boxes($shadowfiend_post_id, $reviewPos){
        $zalora_option = zalora_global_var_declare('shadowfiend_option');
        if (isset($zalora_option)){
            $primary_color = $zalora_option['shadowfiend-primary-color'];
        }
        $shadowfiend_custom_fields = get_post_custom();
        $shadowfiend_review_checkbox = get_post_meta($shadowfiend_post_id, 'shadowfiend_review_checkbox', true );
        $shadowfiend_best_rating = '10';
        if ( $shadowfiend_review_checkbox == '1' ) {
             $shadowfiend_review_checkbox = 'on'; 
        } else {
             $shadowfiend_review_checkbox = 'off';
        }
        if ($shadowfiend_review_checkbox == 'on') {
            $shadowfiend_summary = get_post_meta($shadowfiend_post_id, 'shadowfiend_summary', true );                
            $shadowfiend_final_score = get_post_meta($shadowfiend_post_id, 'shadowfiend_final_score', true );        
            
            if ( isset ( $shadowfiend_custom_fields['shadowfiend_ct1'][0] ) ) { $shadowfiend_rating_1_title = $shadowfiend_custom_fields['shadowfiend_ct1'][0]; }
            if ( isset ( $shadowfiend_custom_fields['shadowfiend_cs1'][0] ) ) { $shadowfiend_rating_1_score = $shadowfiend_custom_fields['shadowfiend_cs1'][0]; }
            if ( isset ( $shadowfiend_custom_fields['shadowfiend_ct2'][0] ) ) { $shadowfiend_rating_2_title = $shadowfiend_custom_fields['shadowfiend_ct2'][0]; }
            if ( isset ( $shadowfiend_custom_fields['shadowfiend_cs2'][0] ) ) { $shadowfiend_rating_2_score = $shadowfiend_custom_fields['shadowfiend_cs2'][0]; }
            if ( isset ( $shadowfiend_custom_fields['shadowfiend_ct3'][0] ) ) { $shadowfiend_rating_3_title = $shadowfiend_custom_fields['shadowfiend_ct3'][0]; }
            if ( isset ( $shadowfiend_custom_fields['shadowfiend_cs3'][0] ) ) { $shadowfiend_rating_3_score = $shadowfiend_custom_fields['shadowfiend_cs3'][0]; }
            if ( isset ( $shadowfiend_custom_fields['shadowfiend_ct4'][0] ) ) { $shadowfiend_rating_4_title = $shadowfiend_custom_fields['shadowfiend_ct4'][0]; }
            if ( isset ( $shadowfiend_custom_fields['shadowfiend_cs4'][0] ) ) { $shadowfiend_rating_4_score = $shadowfiend_custom_fields['shadowfiend_cs4'][0]; }
            if ( isset ( $shadowfiend_custom_fields['shadowfiend_ct5'][0] ) ) { $shadowfiend_rating_5_title = $shadowfiend_custom_fields['shadowfiend_ct5'][0]; }
            if ( isset ( $shadowfiend_custom_fields['shadowfiend_cs5'][0] ) ) { $shadowfiend_rating_5_score = $shadowfiend_custom_fields['shadowfiend_cs5'][0]; }
            if ( isset ( $shadowfiend_custom_fields['shadowfiend_ct6'][0] ) ) { $shadowfiend_rating_6_title = $shadowfiend_custom_fields['shadowfiend_ct6'][0]; }
            if ( isset ( $shadowfiend_custom_fields['shadowfiend_cs6'][0] ) ) { $shadowfiend_rating_6_score = $shadowfiend_custom_fields['shadowfiend_cs6'][0]; }
            
            $shadowfiend_ratings = array();  
        
            for( $i = 1; $i < 7; $i++ ) {
                 if ( isset(${"shadowfiend_rating_".$i."_score"}) ) { $shadowfiend_ratings[] =  ${"shadowfiend_rating_".$i."_score"};}
            }
            $shadowfiend_review_ret = '<div class="shadowfiend-review-box '.$reviewPos.' clear-fix"><div class="shadowfiend-detail-rating clear-fix">'; 
            for( $j = 1; $j < 7; $j++ ) {
                
                 $k = ($j - 1);
            
                 if ((isset(${"shadowfiend_rating_".$j."_title"})) && (isset(${"shadowfiend_rating_".$j."_score"})) ) {                       
                        $shadowfiend_review_ret .= '<div class="shadowfiend-criteria-wrap"><span class="shadowfiend-criteria">'. ${"shadowfiend_rating_".$j."_title"}.'</span><span class="shadowfiend-criteria-score">'. $shadowfiend_ratings[$k].'</span>';                                     
                        $shadowfiend_review_ret .= '<div class="shadowfiend-bar clear-fix"><span class="shadowfiend-overlay"><span class="shadowfiend-zero-trigger" style="width:'. ( ${"shadowfiend_rating_".$j."_score"}*10).'%"></span></span></div></div>';
                 }
            }
            $shadowfiend_review_ret .= '</div>';
            $shadowfiend_review_ret .= '<div class="summary-wrap clear-fix">';
            $shadowfiend_review_ret .= '<div class="shadowfiend-score-box" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating"><meta itemprop="worstRating" content="1"><meta itemprop="bestRating" content="'. $shadowfiend_best_rating .'"><span class="score" itemprop="ratingValue">'.$shadowfiend_final_score.'</span><span class="score-title">'.esc_html__('Overall Score', 'zalora').'</span></div>';
            if ( $shadowfiend_summary != NULL ) { $shadowfiend_review_ret .= '<div class="shadowfiend-summary"><div id="shadowfiend-conclusion" itemprop="description">'.$shadowfiend_summary.'</div></div>'; }                                    
            $shadowfiend_review_ret .= '</div><!-- /shadowfiend-author-review-box -->';
            $shadowfiend_review_ret .= '</div> <!--shadowfiend-review-box close-->';
            return $shadowfiend_review_ret;
        }
    }
}
/**
* ************* Get youtube ID  *****************
*---------------------------------------------------
*/ 
if ( ! function_exists( 'zalora_parse_youtube') ) { 
    function zalora_parse_youtube($link){
     
        $regexstr = '~
            # Match Youtube link and embed code
            (?:                             # Group to match embed codes
                (?:<iframe [^>]*src=")?       # If iframe match up to first quote of src
                |(?:                        # Group to match if older embed
                    (?:<object .*>)?      # Match opening Object tag
                    (?:<param .*</param>)*  # Match all param tags
                    (?:<embed [^>]*src=")?  # Match embed tag to the first quote of src
                )?                          # End older embed code group
            )?                              # End embed code groups
            (?:                             # Group youtube url
                https?:\/\/                 # Either http or https
                (?:[\w]+\.)*                # Optional subdomains
                (?:                         # Group host alternatives.
                youtu\.be/                  # Either youtu.be,
                | youtube\.com              # or youtube.com
                | youtube-nocookie\.com     # or youtube-nocookie.com
                )                           # End Host Group
                (?:\S*[^\w\-\s])?           # Extra stuff up to VIDEO_ID
                ([\w\-]{11})                # $1: VIDEO_ID is numeric
                [^\s]*                      # Not a space
            )                               # End group
            "?                              # Match end quote if part of src
            (?:[^>]*>)?                       # Match any extra stuff up to close brace
            (?:                             # Group to match last embed code
                </iframe>                 # Match the end of the iframe
                |</embed></object>          # or Match the end of the older embed
            )?                              # End Group of last bit of embed code
            ~ix';
    
        preg_match($regexstr, $link, $matches);
    
        return $matches[1];
    
    }
}
/**
 * ************* Get vimeo ID *****************
 *---------------------------------------------------
 */  
if ( ! function_exists( 'zalora_parse_vimeo') ) { 
    function zalora_parse_vimeo($link){
     
        $regexstr = '~
            # Match Vimeo link and embed code
            (?:<iframe [^>]*src=")?       # If iframe match up to first quote of src
            (?:                         # Group vimeo url
                https?:\/\/             # Either http or https
                (?:[\w]+\.)*            # Optional subdomains
                vimeo\.com              # Match vimeo.com
                (?:[\/\w]*\/videos?)?   # Optional video sub directory this handles groups links also
                \/                      # Slash before Id
                ([0-9]+)                # $1: VIDEO_ID is numeric
                [^\s]*                  # Not a space
            )                           # End group
            "?                          # Match end quote if part of src
            (?:[^>]*></iframe>)?        # Match the end of the iframe
            (?:<p>.*</p>)?              # Match any title information stuff
            ~ix';
    
        preg_match($regexstr, $link, $matches);
    
        return $matches[1];
    }
}
/**
 * Video Post Format
 */
if ( ! function_exists( 'zalora_get_video_postFormat') ) {
    function zalora_get_video_postFormat($postFormat) { 
        $videoFormat = '';
        if ($postFormat['url'] != null) {
            $videoFormat .= '<div class="shadowfiend-embed-video">';
            $videoFormat .= $postFormat['iframe'];
            $videoFormat .= '</div> <!-- End embed-video -->';
        }else {
            $videoFormat .= '';
        }
        return $videoFormat;
    }
}
/**
 * Audio Post Format
 */
if ( ! function_exists( 'zalora_get_audio_postFormat') ) {
    function zalora_get_audio_postFormat($shadowfiendPostId, $postFormat, $audioType) { 
        $audioFormat = '';
        if ($postFormat['url'] != null) {
            preg_match('/src="([^"]+)"/', wp_oembed_get( $postFormat['url'] ), $match);
            
            if(isset($match[1])) {
                $bkNewURL = $match[1];
            }else {
                return null;
            }

            $audioFormat .= '<div class="shadowfiend-embed-audio"><div class="shadowfiend-frame-wrap">';
            $audioFormat .= wp_oembed_get( $postFormat['url'] );
            $audioFormat .= '</div></div>';
        }else {
            $audioFormat .= '';
        }
        return $audioFormat;
    }
}
 /**
 * Gallery Post Format
 */
if ( ! function_exists( 'zalora_get_gallery_postFormat') ) {
    function zalora_get_gallery_postFormat($galleryImages, $shadowfiend_layout) { 
        if(($shadowfiend_layout == 'feat-fw') || ($shadowfiend_layout == 'no-sidebar')) {
            $thumb_size = 'zalora_900_500';
        }else {
            $thumb_size = 'zalora_630_400';
        }
        $galleryFormat = '';
        $galleryFormat .= '<div class="gallery-wrap">';
        $galleryFormat .= '<div id="shadowfiend-gallery-slider" class="flexslider">';
        $galleryFormat .= '<ul class="slides">';
        foreach ( $galleryImages as $image ){
            $attachment_url = wp_get_attachment_image_src($image['ID'], 'full', true);
            $attachment = get_post($image['ID']);
            $caption = apply_filters('the_title', $attachment->post_excerpt);
            $galleryFormat .= '<li class="shadowfiend-gallery-item">';
                $galleryFormat .= '<a class="zoomer" title="'.$caption.'" data-source="'.$attachment_url[0].'" href="'.$attachment_url[0].'">'.wp_get_attachment_image($attachment->ID, $thumb_size).'</a>';
                if (strlen($caption) > 0) {
                    $galleryFormat .= '<div class="caption">'.$caption.'</div>';
                }
            $galleryFormat .= '</li>';
        }
        $galleryFormat .= '</ul></div></div><!-- Close gallery-wrap -->';
        return $galleryFormat; 
    }
}
/**
 * ********* Get Post Category ************
 *---------------------------------------------------
 */ 
if ( ! function_exists('zalora_get_category_link')){
    function zalora_get_category_link($postid){ 
        $html = '';
        $category = get_the_category($postid); 
        if(isset($category[0]) && $category[0]){
            foreach ($category as $key => $value) {
                $html.= '<a href="'.get_category_link($value->term_id ).'">'.$value->cat_name.'</a>';  
            }
        						
        }
        return $html;
    }
}
/**
 * Standard Post Format
 */
if ( ! function_exists( 'zalora_get_standard_postFormat') ) {
    function zalora_get_standard_postFormat($shadowfiendPostId, $shadowfiend_layout) { 
        if($shadowfiend_layout == 'feat-fw') {
            $thumb_size = 'zalora_900_500';
        }else {
            $thumb_size = 'zalora_750_375';
        }
        $imageFormat = '';
        $imageFormat .= '<div class="feature-thumb">'.get_the_post_thumbnail($shadowfiendPostId, $thumb_size).'</div>';
        return $imageFormat;        
    }
}
/**
 * Post Format Detect
 */
if ( ! function_exists( 'zalora_post_format_detect') ) {
    function zalora_post_format_detect($shadowfiendPostId) { 
        $shadowfiend_format = array();
/** Video Post Format **/
        if(function_exists('has_post_format') && ( get_post_format( $shadowfiendPostId ) == 'video')){
            $bkURL = get_post_meta($shadowfiendPostId, 'shadowfiend_media_embed_code_post', true);
            $bkUrlParse = parse_url($bkURL);
            $shadowfiend_format['format'] = 'video';
            if (isset($bkUrlParse['host']) && (($bkUrlParse['host'] == 'www.youtube.com')||($bkUrlParse['host'] == 'youtube.com'))) { 
                $video_id = zalora_parse_youtube($bkURL);
                $shadowfiend_format['iframe'] = '<iframe width="1050" height="591" src="http://www.youtube.com/embed/'.$video_id.'" allowFullScreen ></iframe>';
                $shadowfiend_format['url'] = $bkURL;
            }else if (isset($bkUrlParse['host']) && (($bkUrlParse['host'] == 'www.vimeo.com')||($bkUrlParse['host'] == 'vimeo.com'))) {
                $video_id = zalora_parse_vimeo($bkURL);
                $shadowfiend_format['iframe'] = '<iframe src="//player.vimeo.com/video/'.$video_id.'?api=1&amp;title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff"></iframe>';
                $shadowfiend_format['url'] = $bkURL;
            }else {
                $shadowfiend_format['iframe'] = null;
                $shadowfiend_format['url'] = null;
                $shadowfiend_format['notice'] = esc_html__('please put youtube or vimeo video link to the video post format section', 'zalora');
            }
        }
/** Audio Post Format **/        
        else if(function_exists('has_post_format') && (has_post_format('audio'))) {
            $bkURL = get_post_meta($shadowfiendPostId, 'shadowfiend_media_embed_code_post', true);
            $bkUrlParse = parse_url($bkURL);
            $shadowfiend_format['format'] = 'audio';
            if (isset($bkUrlParse['host']) && (($bkUrlParse['host'] == 'www.soundcloud.com')||($bkUrlParse['host'] == 'soundcloud.com'))) { 
                $shadowfiend_format['url'] = $bkURL;
            }else {
                $shadowfiend_format['url'] = null;
            }
        }
/** Gallery post format **/
        else if( function_exists('has_post_format') && has_post_format( 'gallery') ) {
            $shadowfiend_format['format'] = 'gallery';
        }
/** Image Post Format **/
        else if( function_exists('has_post_format') && has_post_format( 'image') ) {
            $shadowfiend_format['format'] = 'image';
        }
/** Standard Post **/
        else {
            $shadowfiend_format['format'] = 'standard';
        }
        return $shadowfiend_format;
        
    }
}

/**
 * ************* Display Post format *****************
 *---------------------------------------------------
 */ 
if ( ! function_exists( 'zalora_post_format_display') ) {
    function zalora_post_format_display($shadowfiendPostId, $shadowfiend_layout) { 
        $zalora_option = zalora_global_var_declare('shadowfiend_option');
        $postFormat = array();
        $postFormat = zalora_post_format_detect($shadowfiendPostId);
        $postFormatOut = '';
/** Video **/
        if($postFormat['format'] == 'video') {
            $postFormatOut .= zalora_get_video_postFormat($postFormat);
        }
/** Audio **/
        else if($postFormat['format'] == 'audio') {
            $postFormatOut .= zalora_get_audio_postFormat($shadowfiendPostId, $postFormat, null);
        }
/** Gallery **/
        else if($postFormat['format'] == 'gallery') {
            $galleryImages = rwmb_meta( 'shadowfiend_gallery_content', $args = array('type' => 'image'), $shadowfiendPostId );
            $galleryLength = count($galleryImages); 
            if ($galleryLength == 0) {
                return null;
            }else {
                $postFormatOut .= zalora_get_gallery_postFormat($galleryImages, $shadowfiend_layout);
            }
        }
/** Image **/
        else if($postFormat['format'] == 'image') {
            $attachmentID = get_post_meta($shadowfiendPostId, 'shadowfiend_image_upload', true );
            $thumb_url = wp_get_attachment_image_src($attachmentID, true);
            if(isset($thumb_url[0])) {
                $postFormatOut .=  '<div class="feature-thumb">';
                $postFormatOut .= '<img src="'.$thumb_url[0].'" class="attachment-full wp-post-image" alt="'.esc_attr_e( 'Post format Image', 'zalora').'">';
                $postFormatOut .=  '</div> <!-- End Thumb -->';
            }
        }
/** Standard **/
        else if($postFormat['format'] == 'standard') {
            $postFormatOut .= zalora_get_standard_postFormat($shadowfiendPostId, $shadowfiend_layout);
        }else {
            $postFormatOut .= '';
        }
        return $postFormatOut;
        
    }
}

/**
 * ************* Pagination *****************
 *---------------------------------------------------
 */ 
if ( ! function_exists( 'zalora_paginate') ) {
    function zalora_paginate(){  
        global $wp_query, $wp_rewrite;
        $zalora_option = zalora_global_var_declare('shadowfiend_option'); 
        if ( $wp_query->max_num_pages > 1 ) : ?>
        <div id="pagination" class="clear-fix">
        	<?php
        		$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

        		$pagination = array(
        			'base' => esc_url(add_query_arg( 'paged','%#%' )),
        			'format' => '',
        			'total' => $wp_query->max_num_pages,
        			'current' => $current,
        			'prev_text' => '<i class="fa fa-long-arrow-left"></i>',
            		'next_text' => '<i class="fa fa-long-arrow-right"></i>',
        			'type' => 'plain'
        		);
        		
        		if( $wp_rewrite->using_permalinks() )
        			$pagination['base'] = user_trailingslashit( trailingslashit( esc_url(remove_query_arg( 's', get_pagenum_link( 1 ) )) ) . 'page/%#%/', 'paged' );
        
        		if( !empty( $wp_query->query_vars['s'] ) )
        			$pagination['add_args'] = array( 's' => get_query_var( 's' ) );
        
        		echo paginate_links( $pagination );

        	?>
        </div>
<?php
    endif;
    }
}
/**
 * ************* Get Images Instagram *****************
 *---------------------------------------------------
 */
if ( ! function_exists( 'zalora_get_instagram') ) {  
    function zalora_get_instagram( $search_for, $cache_hours, $nr_images, $attachment ) {
		
    	if ( isset( $search_for['username'] ) && !empty( $search_for['username'] ) ) {
    		$search = 'user';
    		$search_string = $search_for['username'];
    	} else {
    		return esc_html__( 'Nothing to search for', 'zalora');
    	}
    	
    	
    	$opt_name  = 'jr_insta_' . md5( $search . '_' . $search_string );
    	$instaData = get_transient( $opt_name );
    	$user_opt  = (array) get_option( $opt_name );
    
    	if ( false === $instaData || $user_opt['search_string'] != $search_string || $user_opt['search'] != $search || $user_opt['cache_hours'] != $cache_hours || $user_opt['nr_images'] != $nr_images || $user_opt['attachment'] != $attachment ) {
    		
    		$instaData = array();
    		$user_opt['search']        = $search;
    		$user_opt['search_string'] = $search_string;
    		$user_opt['cache_hours']   = $cache_hours;
    		$user_opt['nr_images']     = $nr_images;
    		$user_opt['attachment']    = $attachment;
    
    		if ( 'user' == $search ) {
    			$response = wp_remote_get( 'https://www.instagram.com/' . trim( $search_string ), array( 'sslverify' => false, 'timeout' => 60 ) );
    		} 
    		if ( is_wp_error( $response ) ) {
    
    			return $response->get_error_message();
    		}
    		if ( $response['response']['code'] == 200 ) {
    			
    			$json = str_replace( 'window._sharedData = ', '', strstr( $response['body'], 'window._sharedData = ' ) );
    			
    			// Compatibility for version of php where strstr() doesnt accept third parameter
    			if ( version_compare( PHP_VERSION, '5.3.0', '>=' ) ) {
    				$json = strstr( $json, '</script>', true );
    			} else {
    				$json = substr( $json, 0, strpos( $json, '</script>' ) );
    			}
    			
    			$json = rtrim( $json, ';' );
    			// Function json_last_error() is not available before PHP * 5.3.0 version
    			if ( function_exists( 'json_last_error' ) ) {
    				
    				( $results = json_decode( $json, true ) ) && json_last_error() == JSON_ERROR_NONE;
    				
    			} else {
    				
    				$results = json_decode( $json, true );
    			}
    			
    			if ( $results && is_array( $results ) ) {
    
    				if ( 'user' == $search ) {
    					$entry_data = isset( $results['entry_data']['ProfilePage'][0]['user']['media']['nodes'] ) ? $results['entry_data']['ProfilePage'][0]['user']['media']['nodes'] : array();
    				} else {
    					$entry_data = isset( $results['entry_data']['TagPage'][0]['tag']['media']['nodes'] ) ? $results['entry_data']['TagPage'][0]['tag']['media']['nodes'] : array();
    				}
    				
    				if ( empty( $entry_data ) ) {
    					return esc_html__( 'No images found', 'zalora');
    				}
    
    				foreach ( $entry_data as $current => $result ) {
    
    					if ( $result['is_video'] == true ) {
    						$nr_images++;
    						continue;
    					}
    
    					if ( $current >= $nr_images ) {
    						break;
    					}
    
    					$image_data['code']       = $result['code'];
    					$image_data['username']   = 'user' == $search ? $search_string : false;
    					$image_data['user_id']    = $result['owner']['id'];
    					$image_data['caption']    = '';
    					$image_data['id']         = $result['id'];
    					$image_data['link']       = 'https://www.instagram.com/p/'. $result['code'] . '/';
    					$image_data['popularity'] = (int) ( $result['comments']['count'] ) + ( $result['likes']['count'] );
    					$image_data['timestamp']  = (float) $result['date'];
    					$image_data['url']        = $result['display_src'];
    					$image_data['url_thumbnail'] = $result['thumbnail_src'];
    
    						
    					$instaData[] = $image_data;
    
    					
    				} // end -> foreach
    				
    			} // end -> ( $results ) && is_array( $results ) )
    			
    		} else { 
    
    			return $response['response']['message'];
    
    		} // end -> $response['response']['code'] === 200 )
            //print_R($instaData);
    		update_option( $opt_name, $user_opt );
    		
    		if ( is_array( $instaData ) && !empty( $instaData )  ) {
    
    			//set_transient( $opt_name, $instaData, $cache_hours * 60 * 60 );
    		}
    		
    	} // end -> false === $instaData
    
    	return $instaData;
    } 
}
if ( ! function_exists( 'zalora_global_var_declare' ) ) {
    function zalora_global_var_declare($shadowfiend_var) {
        if($shadowfiend_var == 'shadowfiend_option') {
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                global $zalora_option;
                return $zalora_option;
            }else {
                global $zalora_option_default;
                return $zalora_option_default;
            }
        }
        elseif($shadowfiend_var == 'shadowfiend_loadbutton_string') {
            global $zalora_loadbutton_string;
            return $zalora_loadbutton_string;
        }
        elseif($shadowfiend_var == 'shadowfiend_flex_el') {
            global $zalora_flex_el;
            return $zalora_flex_el;
        }
        elseif($shadowfiend_var == 'shadowfiend_megamenu_carousel_el') {
            global $zalora_megamenu_carousel_el;
            return $zalora_megamenu_carousel_el;
        }
        elseif($shadowfiend_var == 'shadowfiend_ticker') {
            global $zalora_ticker;
            return $zalora_ticker;
        }
        elseif($shadowfiend_var == 'meta_boxes') {
            global $shadowfiend_meta_boxes;
            return $shadowfiend_meta_boxes;
        }
    }
}

if ( ! function_exists( 'zalora_count_twitter' ) ) {
    function zalora_count_twitter( $user ) {
		//check options
		if ( empty( $user ) ) {
			return false;
		}

		$params = array(
			'timeout'   => 120,
			'sslverify' => false
		);

		$filter   = array(
			'start_1' => 'ProfileNav-item--followers',
			'start_2' => 'title',
			'end'     => '>'
		);
		$response = wp_remote_get( 'https://twitter.com/' . $user, $params );

		//check & return
		if ( is_wp_error( $response ) || empty( $response['response']['code'] ) || '200' != $response['response']['code'] ) {
			return false;
		}
		//get content
		$response = wp_remote_retrieve_body( $response );

		if ( ! empty( $response ) && $response !== false ) {
			foreach ( $filter as $key => $value ) {

				$key = explode( '_', $key );
				$key = $key[0];

				if ( $key == 'start' ) {
					$key = false;
				} else if ( $value == 'end' ) {
					$key = true;
				}
				$key = (bool) $key;

				$index = strpos( $response, $value );
				if ( $index === false ) {
					return false;
				}
				if ( $key ) {
					$response = substr( $response, 0, $index );
				} else {
					$response = substr( $response, $index + strlen( $value ) );
				}
			}

			if ( strlen( $response ) > 100 ) {
				return false;
			}

			$count = zalora_extract_one_number( $response );

			if ( ! is_numeric( $count ) || strlen( number_format( $count ) ) > 15 ) {
				return false;
			}

			$count = intval( $count );

			return $count;
		} else {
			return false;
		}

	}
}
if ( ! function_exists( 'zalora_extract_one_number' ) ) {
    function zalora_extract_one_number( $str ) {
    	return intval( preg_replace( '/[^0-9]+/', '', $str ), 10 );
    }
}
if ( ! function_exists( 'zalora_get_header' ) ) {
    function zalora_get_header() {
        $zalora_option = zalora_global_var_declare('shadowfiend_option');
        $logo = '';
        $header_layout= '';
        $ga_script = '';
        $header_banner = '';
        $imgurl = '';
        $linkurl = '';
        if (isset($zalora_option)){
            if ((isset($zalora_option['shadowfiend-logo'])) && (($zalora_option['shadowfiend-logo']) != NULL)){ 
                $logo = $zalora_option['shadowfiend-logo'];
            }else {
                $logo = '';
            }
            $header_layout = $zalora_option['shadowfiend-header-layout'];
            $ga_script = $zalora_option['shadowfiend-banner-script'];
            $header_banner = $zalora_option['shadowfiend-header-banner-switch'];
            if ($header_banner){ 
                    $imgurl = $zalora_option['shadowfiend-header-banner']['imgurl'];
                    $linkurl = $zalora_option['shadowfiend-header-banner']['linkurl'];
            }; 
        }
        ?>
        <div class="header-wrap header-<?php echo esc_attr($header_layout);?> header-black">
        
            <?php if (( has_nav_menu('menu-top')) || ( $zalora_option ['shadowfiend-header-social-switch'] == 1 )) {?> 
                <div class="top-bar <?php if ( $zalora_option ['shadowfiend-responsive-switch'] == 0 ){echo('shadowfiend-site-container');}?> clear-fix">
                    <div class="header-inner shadowfiend-site-container clear-fix">
    				
        					<?php if ( has_nav_menu('menu-top') ) {?> 
                        <nav class="top-nav">
                            <div class="mobile">
                                <i class="fa fa-bars"></i>
                            </div>
                            <?php wp_nav_menu(array('theme_location' => 'menu-top','container_id' => 'top-menu'));?> 
                                   
                        </nav><!--top-nav--> <?php }?>
                        
        				<?php if ( $zalora_option ['shadowfiend-header-social-switch'] == 1 ){ ?>		
        				    <?php zalora_header_social()?>
        				<?php } ?>
                    </div>
                </div><!--top-bar-->
            <?php } ?>
            <!-- header open -->
            <div class="header">
                <div class="header-inner shadowfiend-site-container">
        			<!-- logo open -->
                    <?php if (($logo != null) && (array_key_exists('url',$logo))) {
                            if ($logo['url'] != '') {
                        ?>
        			<div class="logo">
                        <h1>
                            <a href="<?php echo esc_url(get_home_url('/'));?>">
                                <img src="<?php echo esc_url($logo['url']);?>" alt="<?php esc_attr_e( 'logo', 'zalora'); ?>"/>
                            </a>
                        </h1>
        			</div>
        			<!-- logo close -->
                    <?php } else {?> 
                    <div class="logo logo-text">
                        <h1>
                            <a href="<?php echo esc_url(get_home_url('/'));?>">
                                <?php echo bloginfo( 'name' );?>
                            </a>
                        </h1>
        			</div>
                    <?php }
                    } else {?> 
                    <div class="logo logo-text">
                        <h1>
                            <a href="<?php echo esc_url(get_home_url('/'));?>">
                                <?php echo bloginfo( 'name' );?>
                            </a>
                        </h1>
        			</div>
                    <?php } ?>
                    <?php if ( $header_banner ) : ?>
                        <!-- header-banner open -->                             
            			<div class="header-banner">
                        <?php
                            if ($ga_script != ''){
                                echo esc_js($ga_script);
                            } else { ?>
                                <a class="ads-banner-link" target="_blank" href="<?php echo esc_attr( $linkurl ); ?>">
                				    <img class="ads-banner" src="<?php echo esc_attr( $imgurl ); ?>" alt="<?php esc_attr_e( 'Header Banner', 'zalora'); ?>"/>
                                </a>
                            <?php }
                        ?> 
            			</div>                            
            			<!-- header-banner close -->
                    <?php endif; ?>
                </div>   			
            </div>
            <!-- header close -->
            
			<!-- nav open -->
			<nav class="main-nav">
                <div class="shadowfiend-site-container">
                    <div class="header-inner clear-fix">
                        <div class="mobile">
                            <i class="fa fa-bars"></i>
                        </div>
                        <?php if ( has_nav_menu( 'menu-main' ) ) { 
                            wp_nav_menu( array( 
                                'theme_location' => 'menu-main',
                                'container_id' => 'main-menu',
                                'walker' => new shadowfiend_Walker,
                                'depth' => '3' ) );
                            wp_nav_menu( array( 
                                'theme_location' => 'menu-main',
                                'depth' => '2',
                                'container_id' => 'main-mobile-menu' ) );
                            } ?>
                            
                        <div id="main-search">
    				        <form action="<?php echo esc_url(home_url('/')); ?>" id="searchform" method="get">
                                <div class="searchform-wrap">
                                    <input type="text" name="s" id="s" value="<?php esc_html_e( 'Search', 'zalora'); ?>" onfocus='if (this.value == "<?php esc_html_e( 'Search', 'zalora'); ?>") { this.value = ""; }' onblur='if (this.value == "") { this.value = "<?php esc_html_e( 'Search', 'zalora'); ?>"; }'/>
                                <div class="search-icon">
                                    <i class="fa fa-search"></i>
                                    <i class="fa fa-times"></i>
                                </div>
                                </div>
                            </form>
                        </div><!--main-search-->
                    </div>
                </div><!-- main-nav-inner -->
            
			</nav>
			<!-- nav close -->

        </div>
    <?php
    }
}
if ( ! function_exists( 'zalora_get_footer_instagram' ) ) {
    function zalora_get_footer_instagram() {
        $zalora_option = zalora_global_var_declare('shadowfiend_option');
    ?>
        <?php if (isset ($zalora_option['shadowfiend-footer-instagram']) && ($zalora_option['shadowfiend-footer-instagram'] == 1)) {
            $photos_arr = array();
            $photostream_title = '';
            
            $pp_instagram_username = $zalora_option['shadowfiend-footer-instagram-username'];
			$search_for['username'] = $pp_instagram_username;
        	$photos_arr = zalora_get_instagram( $search_for, 5, 5, false );
			$photostream_title = $zalora_option['shadowfiend-footer-instagram-title'];
        ?>
       <div class="footer_photostream_wrapper">
        	<h3><span><?php echo esc_html($photostream_title); ?></span></h3>
        	<ul class="footer_photostream clear-fix">
        		<?php
        			foreach($photos_arr as $photo)
        			{
        		?>
        			<li><a target="_blank" href="<?php echo esc_url($photo['link']); ?>"><img src="<?php echo esc_url($photo['url_thumbnail']); ?>" alt="<?php echo esc_attr($photo['id']); ?>" /></a></li>
        		<?php
        			}
        		?>
        	</ul>
        </div>
        <?php }?>
    <?php
    }
}
if ( ! function_exists( 'zalora_get_footer_widgets' ) ) {
    function zalora_get_footer_widgets() {
        if (is_active_sidebar('footer_sidebar_1') 
            || is_active_sidebar('footer_sidebar_2')
            || is_active_sidebar('footer_sidebar_3')) { ?>
        <div class="footer-content shadowfiend-site-container clear-fix">
            <?php  if ( is_active_sidebar( 'footer_sidebar_1' ) ):?>
                <div class="footer-sidebar">
                    <?php dynamic_sidebar( 'footer_sidebar_1' ); ?>
                </div>
            <?php endif; ?>
            <?php  if ( is_active_sidebar( 'footer_sidebar_2' ) ):?>
                <div class="footer-sidebar">
                    <?php dynamic_sidebar( 'footer_sidebar_2' ); ?>
                </div>
            <?php endif; ?>
            <?php  if ( is_active_sidebar( 'footer_sidebar_3' ) ):?>
                <div class="footer-sidebar">
                    <?php dynamic_sidebar( 'footer_sidebar_3' ); ?>
                </div>
            <?php endif; ?>
        </div>
    <?php }
    }
}

if ( ! function_exists( 'zalora_get_footer_lower' ) ) {
    function zalora_get_footer_lower() {
        $zalora_option = zalora_global_var_declare('shadowfiend_option');
        $bk_allow_html = '';
        $cr_text = '';
        if (isset($zalora_option)):
            $bk_allow_html = array(
                'a' => array(
                    'href' => array(),
                    'title' => array()
                ),
                'br' => array(),
                'em' => array(),
                'strong' => array(),
            );
            $cr_text = $zalora_option['cr-text'];
        endif;
    ?>
    <div class="footer-lower">
        <div class="footer-inner shadowfiend-site-container">
            <?php if ( has_nav_menu('menu-footer') ) {?> 
                <?php wp_nav_menu(array('theme_location' => 'menu-footer', 'depth' => '1', 'container_id' => 'footer-menu'));?>  
            <?php }?>
            <div class="shadowfiend-copyright"><?php echo wp_kses($cr_text, $bk_allow_html);?></div>
        </div>
    </div>
    <?php
    }
}
if ( ! function_exists( 'zalora_footer_localize' ) ) {
    function zalora_footer_localize() {
        $zalora_option = zalora_global_var_declare('shadowfiend_option');
        $zalora_loadbutton_string = zalora_global_var_declare('shadowfiend_loadbutton_string');
        $zalora_flex_el = zalora_global_var_declare('shadowfiend_flex_el');
        $zalora_megamenu_carousel_el = zalora_global_var_declare('shadowfiend_megamenu_carousel_el');
        $zalora_ticker = zalora_global_var_declare('shadowfiend_ticker');

        $shadowfiend_ajax_btnstr = array();
        $shadowfiend_ajax_btnstr['loadmore'] = esc_html__('Load More', 'zalora');
        $shadowfiend_ajax_btnstr['nomore'] = esc_html__('No More Posts', 'zalora');
        wp_localize_script( 'zalora-module-load-post', 'ajax_btn_str', $shadowfiend_ajax_btnstr );

            
        if ( is_active_widget('','','shadowfiend_masonry')) {
            wp_localize_script( 'zalora-module-load-post', 'loadbuttonstring', $zalora_loadbutton_string );
        }
        if ( is_active_widget('','','shadowfiend_classic_blog')) {
            wp_localize_script( 'zalora-classic-blog-load-post', 'loadbuttonstring', $zalora_loadbutton_string );
        }
        if (isset($zalora_option)):
            $shadowfiend_fixed_nav = $zalora_option['shadowfiend-fixed-nav-switch'];            
        endif;
        wp_localize_script( 'zalora-customjs', 'fixed_nav', $shadowfiend_fixed_nav );
        wp_localize_script( 'zalora-customjs', 'shadowfiend_flex_el', $zalora_flex_el ); 
        wp_localize_script( 'zalora-customjs', 'megamenu_carousel_el', $zalora_megamenu_carousel_el );
        wp_localize_script( 'zalora-customjs', 'ticker', $zalora_ticker );
    }
}