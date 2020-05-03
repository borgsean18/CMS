<?php
add_action('wp_head','custom_css',20);
if ( ! function_exists( 'custom_css' ) ) {
    function custom_css() {
        $zalora_option = zalora_global_var_declare('shadowfiend_option');
        if ( isset($zalora_option)):
            $primary_color = $zalora_option['shadowfiend-primary-color'];
            $dark_color = $zalora_option['shadowfiend-dark-color'];
            $bg_switch = $zalora_option['shadowfiend-site-layout'];
            $meta_review = $zalora_option['shadowfiend-meta-review-sw'];
            $meta_author = $zalora_option['shadowfiend-meta-author-sw'];
            $meta_date = $zalora_option['shadowfiend-meta-date-sw'];
            $meta_comments = $zalora_option['shadowfiend-meta-comments-sw'];
            $meta_readmore = $zalora_option['shadowfiend-meta-readmore-sw'];
            $custom_css = $zalora_option['shadowfiend-css-code'];
            $sb_responsive_sw = $zalora_option['shadowfiend-sb-responsive-sw'];
            $single_feat_img = $zalora_option['shadowfiend-single-featimg'];
            ?>
            <style type='text/css' media="all">
            <?php
            if ( ($meta_review) == 0) echo ('.rating-wrap {display: none !important;}'); 
            if ( ($meta_author) == 0) echo ('.post-author, .post-meta .post-author {display: none !important;}'); 
            if ( ($meta_date) == 0) echo ('.post-meta .date {display: none !important;}'); 
            if ( ($meta_comments) == 0) echo ('.post-meta .meta-comment {display: none !important;}'); 
            if ( ($meta_readmore) == 0) echo ('.read-more {display: none !important;}'); 
            if ( ($single_feat_img) == 0) echo ('.single-page .feature-thumb {display: none !important;}'); 
    
            if ( (esc_attr($primary_color)) != null) {?> 

                
                #shadowfiend-gallery-slider .flex-control-paging li a.flex-active, .main-nav #main-menu .menu > li > a:hover, 
                .module-main-slider .slider-wrap .slides .post-info .post-cat a, .main-nav #main-menu .menu > li.current-menu-item > a,
                .grid-1-type .post-cat a, .shadowfiend-carousel-wrap .slides .post-cat a,
                .classic-blog-style .post-cat a, 
                .large-blog-style .post-cat a, 
                .module-main-grid .post-cat a,
                .module-post-two .large-post .post-cat a,
                .module-post-three .large-post .post-cat a,
                .type-in .post-cat a,
                .shadowfiend-carousel-large-wrap .slides .post-cat a, .rating-wrap,
                .singletop .post-cat a, h3.ticker-header, .post-cat-main-slider, .module-main-slider .carousel-ctrl .slides li.flex-active-slide,
                .ajax-load-btn span, .loadmore-button .ajax-load-btn, .s-tags a:hover,
                .post-page-links > span, .post-page-links a span:hover, #comment-submit, .shadowfiend-review-box .shadowfiend-overlay span,
                .shadowfiend-score-box, #pagination .current, .widget_archive ul li:hover, .widget_categories ul li:hover,
                .widget_tag_cloud a:hover, .widget .searchform-wrap .search-icon,
                .footer .shadowfiend-header .main-title h3, input[type="submit"], .article-content input[type="submit"],
                .meta-bottom .read-more a:hover
                {background-color: <?php echo esc_attr(esc_attr($primary_color)); ?>}
                
                
                .shadowfiend-author-box .author-info .shadowfiend-author-page-contact a:hover, .error-number h1, #shadowfiend-404-wrap .shadowfiend-error-title,
                .page-404-wrap .redirect-home, .article-content p a, .read-more:hover, .sticky-post-mark
                    {color: <?php echo esc_attr($primary_color); ?>}
                
                ::selection
                {background-color: <?php echo esc_attr($primary_color); ?>}
                ::-moz-selection 
                {background-color: <?php echo esc_attr($primary_color); ?>}
                
                body::-webkit-scrollbar-thumb
                {background-color: <?php echo esc_attr($primary_color); ?>}
                
                .article-content blockquote, .textwidget blockquote, #shadowfiend-gallery-slider .flex-control-paging li a.flex-active,
                .loadmore-button .ajax-load-btn, .widget_flickr li a:hover img, .post-page-links > span, .post-page-links a span:hover,
                #comment-submit, #pagination .current, .widget_archive ul li:hover, .widget_categories ul li:hover,
                .widget_tag_cloud a:hover, input[type="submit"], .article-content input[type="submit"]
                {border-color: <?php echo esc_attr($primary_color); ?>}
                 
                
        
            <?php }
            if ( isset($dark_color)) {?>
                    .footer, .footer .shadowfiend-header .main-title h3, .footer .shadowfiend-header .main-title
                    {background-color: <?php echo esc_attr($dark_color); ?>}
                    
                               
                    {color: <?php echo esc_attr($dark_color); ?>}
                    
                    .footer .widget-posts-list ul li.type-in
                    {border-color: <?php echo esc_attr($dark_color); ?>}
                
            <?php }
            if ( $bg_switch == 1) {?>
                body {background: none !important}
            <?php };
            if ( $sb_responsive_sw == 0) {?>
            @media screen and (max-width: 1079px) {
                .sidebar {display: none !important}
            }
            <?php };
            if ($custom_css != '') echo esc_attr($custom_css);
            ?>
            </style>
            <?php
        endif;
    }
}