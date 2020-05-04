<?php
/**
 * The Footer for the theme.
 *
 */
?>
            </div>
    		<!-- MAIN BODY CLOSE -->
    		<!-- FOOTER OPEN -->
            <?php $zalora_option = zalora_global_var_declare('shadowfiend_option');?>            
    		<div class="footer <?php if ( $zalora_option ['shadowfiend-responsive-switch'] == 0 ){echo('shadowfiend-site-container');}?>">
                <?php zalora_get_footer_instagram()?>
                <?php zalora_get_footer_widgets()?>
                <?php zalora_get_footer_lower();?>
    		
    		</div>
    		<!-- FOOTER close -->
            
        </div>
        <!-- page-wrap close -->
        
      </div>
      <!-- site-container close-->
    <?php zalora_footer_localize()?>
    <?php wp_footer(); ?> 
</body>
</html>