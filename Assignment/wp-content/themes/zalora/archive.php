<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
?>
<?php
get_header(); 
$zalora_option = zalora_global_var_declare('shadowfiend_option');
if (isset($zalora_option) && ($zalora_option != '')): 
    $shadowfiend_layout = $zalora_option['shadowfiend-archive-layout'];
    $cur_tag_id = $wp_query->get_queried_object_id();
    $cat_opt = get_option('shadowfiend_cat_opt'); 
endif;
$shadowfiend_layout = 'classic-content';   
if (isset($cat_opt[$cur_tag_id]) && is_array($cat_opt[$cur_tag_id]) && array_key_exists('cat_layout',$cat_opt[$cur_tag_id])) { $shadowfiend_layout = $cat_opt[$cur_tag_id]['cat_layout'];};
?>
<div class="shadowfiend-archive-content-wrap <?php if (!(($shadowfiend_layout == 'classic-big') || ($shadowfiend_layout == 'masonry-3') || ($shadowfiend_layout == 'grid-3'))): echo 'content-sb-section clear-fix'; endif;?>">
    <div class="shadowfiend-archive-content <?php if (($shadowfiend_layout == 'classic-big') || ($shadowfiend_layout == 'masonry-3') || ($shadowfiend_layout == 'grid-3')): echo 'fullwidth-section'; else : echo 'content-section'; endif;?>">
    		<div class="shadowfiend-header">
                <div class="main-title">
                    <h3><?php
    
    				$var = get_query_var('post_format');
    				// POST FORMATS
    				if ($var == 'post-format-image') :
    					esc_html_e('Image ', 'zalora');
    				elseif ($var == 'post-format-gallery') :
    					esc_html_e('Gallery ', 'zalora');
    				elseif ($var == 'post-format-video') :
    					esc_html_e('Video ', 'zalora');
    				elseif ($var == 'post-format-audio') :
    					esc_html_e('Audio ', 'zalora');
    				endif;
    
    				if ( is_day() ) :
    					printf( esc_html__( 'Daily Archives: %s', 'zalora'), get_the_date() );
    				elseif ( is_month() ) :
    					printf( esc_html__( 'Monthly Archives: %s', 'zalora'), get_the_date( _x( 'F Y', 'monthly archives date format', 'zalora') ) );
    				elseif ( is_year() ) :
    					printf( esc_html__( 'Yearly Archives: %s', 'zalora'), get_the_date( _x( 'Y', 'yearly archives date format', 'zalora') ) );
    				elseif ( is_tag() ) :
                        printf( esc_html__( 'Tag: %s', 'zalora'), single_tag_title('',false) );
                    else :
    					esc_html_e( 'Archives', 'zalora');
    				endif;
    			?></h3>
                </div>
    		</div>
            <?php 
            if (have_posts()) { 
    
                if ($shadowfiend_layout == 'classic-small') {
                    echo '<div class="classic-blog-content-container">';
                        while (have_posts()): the_post();
                        echo zalora_classic_blog_render(get_the_ID(), 15);
                        endwhile;
                    echo '</div>';
                    if (function_exists("zalora_paginate")) {
                        echo '<div class="shadowfiend-page-pagination">';
                            zalora_paginate();
                        echo '</div>';
                    }
                } else if (($shadowfiend_layout == 'masonry-3') || ($shadowfiend_layout == 'masonry-2')) {
                    echo '<div class="module-masonry-wrapper clear-fix">';
                    echo '<div class="masonry-content-container">';
                        while (have_posts()): the_post();
                        echo zalora_masonry_render(get_the_ID());
                        endwhile;
                    echo '</div></div>';
                    if (function_exists("zalora_paginate")) {
                        echo '<div class="shadowfiend-page-pagination">';
                            zalora_paginate();
                        echo '</div>';
                    }
                } else if ($shadowfiend_layout == 'classic-big') {
                    echo '<div class="classic-blog-content-container">';
                        while (have_posts()): the_post();
                        echo zalora_classic_blog_render(get_the_ID(), 35);
                        endwhile;
                    echo '</div>';
                    if (function_exists("zalora_paginate")) {
                        echo '<div class="shadowfiend-page-pagination">';
                            zalora_paginate();
                        echo '</div>';
                    }
                }else if ($shadowfiend_layout == 'large-blog') {
                    echo '<div class="large-blog-content-container">';
                        while (have_posts()): the_post();
                        echo zalora_large_blog_render(get_the_ID(), 35);
                        endwhile;
                    echo '</div>';
                    if (function_exists("zalora_paginate")) {
                        echo '<div class="shadowfiend-page-pagination">';
                            zalora_paginate();
                        echo '</div>';
                    }
                } else if (($shadowfiend_layout == 'grid-2')||($shadowfiend_layout == 'grid-3')) {
                    echo '<div class="module-grid-content-wrap clear-fix">';
                        while (have_posts()): the_post();             				
        				    echo zalora_post_grid(get_the_ID());
                        endwhile;
                    echo '</div>';
                    if (function_exists("zalora_paginate")) {
                        echo '<div class="shadowfiend-page-pagination">';
                            zalora_paginate();
                        echo '</div>';
                    }
                }else {
                    echo '<div class="classic-blog-content-container">';
                        while (have_posts()): the_post();
                        echo zalora_classic_blog_render(get_the_ID(), 15);
                        endwhile;
                    echo '</div>';
                    if (function_exists("zalora_paginate")) {
                        echo '<div class="shadowfiend-page-pagination">';
                            zalora_paginate();
                        echo '</div>';
                    }
                }
            } else { esc_html_e('No post to display','zalora');} ?>
    </div>
    <?php
        if (!($shadowfiend_layout == 'classic-big') && !($shadowfiend_layout == 'masonry-3') && !($shadowfiend_layout == 'grid-3')) {
            get_sidebar();
        }
    ?>
</div>
<?php get_footer(); ?>