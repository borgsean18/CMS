<?php get_header();?>
<?php 
    $social_share = array();
    $zalora_option = zalora_global_var_declare('shadowfiend_option');
    $share_box = $zalora_option['shadowfiend-sharebox-sw'];
    if ($share_box){
        $social_share['fb'] = $zalora_option['shadowfiend-fb-sw'];
        $social_share['tw'] = $zalora_option['shadowfiend-tw-sw'];
        $social_share['gp'] = $zalora_option['shadowfiend-gp-sw'];
        $social_share['pi'] = $zalora_option['shadowfiend-pi-sw'];
        $social_share['li'] = $zalora_option['shadowfiend-li-sw'];
    }
    $authorbox_sw = $zalora_option['shadowfiend-authorbox-sw'];
    $postnav_sw = $zalora_option['shadowfiend-postnav-sw'];
    $related_sw = $zalora_option['shadowfiend-related-sw'];
    $comment_sw = $zalora_option['shadowfiend-comment-sw'];
?>
    
<?php if (have_posts()) : while (have_posts()) : the_post();?>
        <?php 
            $bkPostID = get_the_ID();
            $bkReviewSW = get_post_meta($bkPostID,'shadowfiend_review_checkbox',true);
            if($bkReviewSW == '1') {
                $reviewPos = get_post_meta($bkPostID,'shadowfiend_review_box_position',true);
            }
            $shadowfiend_layout = get_post_meta($bkPostID,'shadowfiend_post_layout',true);
        ?>
        <div class="single-page clear-fix">
            <div class="article-content-wrap">
                <?php 
                    if(($shadowfiend_layout == 'feat-fw') || ($shadowfiend_layout == 'no-sidebar')) {
                        echo zalora_post_format_display($bkPostID, $shadowfiend_layout);
                    }
                ?>  
                <div class="<?php if ($shadowfiend_layout != 'no-sidebar') { echo 'content-sb-section clear-fix'; } else {echo 'content-wrap';}?>">
                    <div class="main <?php if($shadowfiend_layout == 'no-sidebar') {echo 'post-without-sidebar';}?>">
                        <div class="singletop">
    						<div class="post-cat">
    							<?php echo zalora_get_category_link($bkPostID);?>
    						</div>					
                            <h3 class="post-title">
    							<?php 
    								echo get_the_title();
    							?>
        					</h3>     
                            <div class="post-meta clear-fix">      
                                <div class="post-author">
                                    <span class="avatar">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    <?php the_author_posts_link();?>                            
                                </div>                                                
                                <div class="date">
                                    <span><i class="fa fa-clock-o"></i></span>
                    				<?php echo get_the_date(); ?>
                    			</div>		
                                <div class="meta-comment">
                        			<span><i class="fa fa-comments-o"></i></span>
                        			<a href="<?php echo (get_permalink($bkPostID).'#comments');?>"><?php echo get_comments_number($bkPostID)?></a>
                        		</div>				   
                    		</div>   
                        </div>
                        <?php if(($shadowfiend_layout != 'feat-fw') && ($shadowfiend_layout != 'no-sidebar')) {?>
                        <?php echo zalora_post_format_display($bkPostID, $shadowfiend_layout);?>
                        <?php }?>
                        <div class="article-content">
                            <?php if(isset($reviewPos) && ($reviewPos != 'below')) {?>
                            <?php echo zalora_post_review_boxes($bkPostID, $reviewPos);?>
                            <?php }?>
                            <?php echo zalora_single_content($bkPostID);?>
                            <?php if(isset($reviewPos) && ($reviewPos == 'below')) {?>
                            <?php echo zalora_post_review_boxes($bkPostID, $reviewPos);?>
                            <?php }?>
                        </div>
                        <?php 
                            wp_link_pages( array(
    							'before' => '<div class="post-page-links">',
    							'pagelink' => '<span>%</span>',
    							'after' => '</div>',
    						)
    					 );?>
    <!-- TAGS -->
                        <?php
                			$tags = get_the_tags();
                            if ($tags): 
                                echo zalora_single_tags($tags);
                            endif; 
                        ?>
    <!-- SHARE BOX -->
                        <?php if ($share_box) {?>                                                                    
                            <?php echo zalora_share_box($bkPostID, $social_share);?>
                        <?php }?>
    <!-- NAV -->
                        <?php
                        if($postnav_sw) {   
                            $next_post = get_next_post();
                            $prev_post = get_previous_post();
                            if (!empty($prev_post) || !empty($next_post)): ?> 
                                <?php echo zalora_single_post_nav($next_post, $prev_post);?>
                            <?php endif; ?>
                        <?php }?>
    <!-- AUTHOR BOX -->
                        <?php $shadowfiend_author_id = $post->post_author;?>
                        <?php if ($authorbox_sw) {?>
                        <?php
                            echo zalora_author_details($shadowfiend_author_id);
                        ?>
                        <?php }?>
                        <?php echo zalora_get_article_info(get_the_ID(), $shadowfiend_author_id);?>
    <!-- RELATED POST -->
                        <?php if ($related_sw){?>  
                            <div class="related-box">
                                <?php $shadowfiend_related_num = 2; echo (zalora_related_posts($shadowfiend_related_num));?>
                            </div>
                        <?php }?>
    <!-- COMMENT BOX -->
                        <?php if($comment_sw  && (comments_open())) {?>
                            <div class="comment-box clear-fix">
                                <?php comments_template(); ?>
                            </div> <!-- End Comment Box -->
                        <?php }?>
                    </div>
                    <!-- Sidebar -->
                    <?php if ($shadowfiend_layout != 'no-sidebar') {?>
                        <?php get_sidebar(); ?>        
                    <?php }?>
                </div>
            </div>
        </div>
<?php endwhile; endif; ?>    
        

<?php get_footer();?>