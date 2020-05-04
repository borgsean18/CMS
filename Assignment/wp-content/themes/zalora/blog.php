<?php
/*
Template Name: Blog
*/
?>
<?php
get_header(); 
$zalora_option = zalora_global_var_declare('shadowfiend_option');
if (isset($zalora_option) && ($zalora_option != '')):
    $shadowfiend_layout = $zalora_option['shadowfiend-blog-layout'];
endif;
if ($shadowfiend_layout == 'grid-2') {
    $col = 2;    
} else if ($shadowfiend_layout == 'grid-3') {
    $col = 3;
}
?>
<div class="shadowfiend-archive-content-wrap <?php if (!(($shadowfiend_layout == 'classic-big') || ($shadowfiend_layout == 'masonry-3') || ($shadowfiend_layout == 'grid-3'))): echo 'content-sb-section clear-fix'; endif;?>">
    <div class="shadowfiend-archive-content <?php if (($shadowfiend_layout == 'classic-big') || ($shadowfiend_layout == 'masonry-3') || ($shadowfiend_layout == 'grid-3')): echo 'fullwidth-section'; else : echo 'content-section'; endif;?>">
        <?php 
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts('post_type=post&post_status=publish&paged=' . $paged);
        ?>
            <div class="shadowfiend-header">
                <div class="main-title">
                    <h3>
                        <?php esc_html_e( 'Blog', 'zalora');?>
                    </h3>
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