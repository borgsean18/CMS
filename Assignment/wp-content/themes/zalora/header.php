<?php
/**
 * The Header for the theme.
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>
    <?php
    	wp_head();
    ?>
</head>
<?php 
    $zalora_option = zalora_global_var_declare('shadowfiend_option');
    $logo = array();
    if (isset($zalora_option)):
        $backtop = $zalora_option['shadowfiend-backtop-switch'];
        $site_layout = $zalora_option['shadowfiend-site-layout'];
    endif;
?>
<body <?php body_class(); ?> >
    <div class="site-container <?php if ($site_layout == 1) echo 'wide'; else echo 'boxed';?>">
    	<!-- page-wrap open-->
    	<div class="page-wrap clear-fix">
    
    		<!-- header-wrap open -->
  		    <?php zalora_get_header();?>
            <!-- header-wrap close -->
    		
    		<!-- backtop open -->
    		<?php if ($backtop) { ?>
                <div id="back-top"><i class="fa fa-angle-up"></i></div>
            <?php } ?>
    		<!-- backtop close -->
    		
    		<!-- MAIN BODY OPEN -->
    		<div class="main-body shadowfiend-site-container clear-fix">