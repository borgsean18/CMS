<?php 
/**
 * The template for displaying Category pages.
 *
 */

get_header(); 
$zalora_option = zalora_global_var_declare('shadowfiend_option');
if (isset($zalora_option) && ($zalora_option != '')):
    $shadowfiend_cat_layout = $zalora_option['shadowfiend-category-layout'];
endif;
$cat_id = $wp_query->get_queried_object_id();
$cat_layout = '';
$cat_feat = '';
$cat_opt = array();
$meta = array();
$meta = get_option('shadowfiend_cat_opt');
if (array_key_exists($cat_id,$meta)) {$cat_opt = $meta[$cat_id]; };
if (array_key_exists('cat_layout',$cat_opt)) { $cat_layout = $cat_opt['cat_layout'];};
if (array_key_exists('cat_feat',$cat_opt)) { $cat_feat = $cat_opt['cat_feat'];};

if (($cat_layout == '')||($cat_layout == 'global')) { $cat_layout = $shadowfiend_cat_layout;};
?>
<div class="shadowfiend-archive-content-wrap <?php if (!(($cat_layout == 'classic-big') || ($cat_layout == 'masonry-3') || ($cat_layout == 'grid-3'))): echo 'content-sb-section clear-fix'; endif;?>">
    <div class="shadowfiend-archive-content content <?php if (($cat_layout == 'classic-big') || ($cat_layout == 'masonry-3') || ($cat_layout == 'grid-3')): echo 'fullwidth-section'; else : echo 'content-section'; endif;?>">
    		<div class="shadowfiend-header-wrapper">
                <div class="shadowfiend-header">
                    <div class="main-title">
                        <h3>
                            <?php single_cat_title();?>
                        </h3>
                    </div>
        		</div>
                <?php if ( category_description() ) : // Show an optional category description ?>
    				<div class="sub-title"><p><?php echo category_description(); ?></p></div>
    			<?php endif;?>                
            </div>            
            <?php 
            if (have_posts()) {
                if ($cat_feat) {get_template_part('/library/cat_feat_slider');}
    
                if ($cat_layout == 'classic-small') {
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
                } else if (($cat_layout == 'masonry-3') || ($cat_layout == 'masonry-2')) {
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
                } else if ($cat_layout == 'classic-big') {
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
                }else if ($cat_layout == 'large-blog') {
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
                } else if (($cat_layout == 'grid-2')||($cat_layout == 'grid-3')) {
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
        if (!($cat_layout == 'classic-big') && !($cat_layout == 'masonry-3') && !($cat_layout == 'grid-3')) {
            get_sidebar();
        }
    ?>
</div>

<?php get_footer(); ?>