<?php
/**
 * Load the TGM Plugin Activator class to notify the user
 * to install the Envato WordPress Toolkit Plugin
 */
require_once( get_template_directory() . '/library/class-tgm-plugin-activation.php' );
function zalora_tgmpa_register_toolkit() {
    // Specify the Envato Toolkit plugin
    $plugins = array(
        array(
            'name' => esc_html__('Redux Framework', 'zalora'),
            'slug' => esc_html__('redux-framework', 'zalora'),
            'required' => false,
        ),
        array(
            'name' => esc_html__('Meta Box', 'zalora'),
            'slug' => esc_html__('meta-box', 'zalora'),
            'required' => false,
        ),
        array(
            'name' => esc_html__('Taxonomy Meta', 'zalora'),
            'slug' => esc_html__('taxonomy-meta', 'zalora'),
            'required' => false,
        ),
        array(
            'name' => esc_html__('oAuth Twitter Feed for Developers', 'zalora'),
            'slug' => esc_html__('oauth-twitter-feed-for-developers', 'zalora'),
            'required' => false,
        ),
        array(
            'name' => esc_html__('Gem User El', 'zalora'),
            'slug' => esc_html__('gem-user-el', 'zalora'),
            'source' => get_template_directory() . '/plugins/gem-user-el.zip',
            'required' => true,
            'version' => '1.0',
            'external_url' => '',
        ),
    );
     
    // Configuration of TGM
    $config = array(
        'domain'           => 'zalora',
        'default_path'     => '',
        'menu'             => 'install-required-plugins',
        'has_notices'      => true,
        'is_automatic'     => true,
        'message'          => '',
        'strings'          => array(
            'page_title'                      => esc_html__( 'Install Required Plugins', 'zalora' ),
            'menu_title'                      => esc_html__( 'Install Plugins', 'zalora' ),
            'installing'                      => esc_html__( 'Installing Plugin: %s', 'zalora' ),
            'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'zalora' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'zalora' ),
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'zalora' ),
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'zalora' ),
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'zalora' ),
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'zalora' ),
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'zalora' ),
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'zalora' ),
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'zalora' ),
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'zalora' ),
            'activate_link'                   => _n_noop( 'Activate installed plugin', 'Activate installed plugins', 'zalora' ),
            'return'                          => esc_html__( 'Return to Required Plugins Installer', 'zalora' ),
            'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'zalora' ),
            'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'zalora' ),
            'nag_type'                        => 'updated'
        )
    );
    tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'zalora_tgmpa_register_toolkit' );

function zalora_removeDemoModeLink() { // Be sure to rename this function to something more unique
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks'), null, 2 );
    }
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );    
    }
}
add_action('init', 'zalora_removeDemoModeLink');

/**-------------------------------------------------------------------------------------------------------------------------
 * remove redux admin page
 */
if ( ! function_exists( 'zalora_remove_redux_page' ) ) {
	function zalora_remove_redux_page() {
		remove_submenu_page( 'tools.php', 'redux-about' );
	}
	add_action( 'admin_menu', 'zalora_remove_redux_page', 12 );
}
/**-------------------------------------------------------------------------------------------------------------------------
 * register ajax
 */
if ( ! function_exists( 'zalora_enqueue_ajax_url' ) ) {
	function zalora_enqueue_ajax_url() {
		echo '<script type="application/javascript">var ajaxurl = "' . esc_url(admin_url( 'admin-ajax.php' )) . '"</script>';
	}

	add_action( 'wp_enqueue_scripts', 'zalora_enqueue_ajax_url' );
}
/**
 * http://codex.wordpress.org/Content_Width
 */
if ( ! isset($content_width)) {
	$content_width = 1050;
}
/**
 * Register scripts
 *---------------------------------------------------
 */
 
if ( ! function_exists( 'zalora_scripts_method' ) ) {
    function zalora_scripts_method() {
         
        $zalora_option = zalora_global_var_declare('shadowfiend_option');
        
        wp_enqueue_style('flexslider', get_template_directory_uri() . '/css/flexslider.css'); 
        
        wp_enqueue_style('justifiedgallery', get_template_directory_uri() . '/css/justifiedGallery.css');
        
        wp_enqueue_style('justifiedlightbox', get_template_directory_uri() . '/css/magnific-popup.css');
        
        wp_enqueue_style('zalora-style', get_template_directory_uri() . '/css/main_style.css');
        
        if ($zalora_option['shadowfiend-responsive-switch']) {wp_enqueue_style('zalora_responsive', get_template_directory_uri() . '/css/responsive.css');};  
        
        wp_enqueue_style('fa', get_template_directory_uri() . '/css/fonts/awesome-fonts/css/font-awesome.min.css');
        
        if ( is_active_widget('','','shadowfiend_googlebadge')) {
            wp_enqueue_script('googlebadge', "https://apis.google.com/js/plusone.js", array('jquery'),false,true);
        }  
        
        wp_enqueue_script('imagesloaded-plugin', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array('jquery'),'', true); 
        
        wp_enqueue_script( 'fitvids', get_template_directory_uri().'/js/jquery.fitvids.js', array( 'jquery' ), false, true );  
        
        wp_enqueue_script( 'justifiedGallery-js', get_template_directory_uri().'/js/justifiedGallery.js', array( 'jquery' ), false, true );
        
        wp_enqueue_script( 'justifiedlightbox-js', get_template_directory_uri().'/js/jquery.magnific-popup.min.js', array( 'jquery' ), false, true );
        
        wp_enqueue_script('zalora-jsmasonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array('jquery'),false,true);
        
        wp_enqueue_script('zalora-ticker-js', get_template_directory_uri() . '/js/ticker.js', array('jquery'),false,true);
        
        wp_enqueue_script('flexslider-js', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'),false,true);
        
        wp_enqueue_script('zalora-module-load-post', get_template_directory_uri() . '/js/module-load-post.js', array('jquery'),false,true); 
        
        wp_enqueue_script('zalora-classic-blog-load-post', get_template_directory_uri() . '/js/classic-blog-load-post.js', array('jquery'),false,true); 
        
        wp_enqueue_script('zalora-large-blog-load-post', get_template_directory_uri() . '/js/large-blog-load-post.js', array('jquery'),false,true); 
        
        wp_enqueue_script( 'zalora-post-review', get_template_directory_uri().'/js/shadowfiend_post_review.js', array( 'jquery' ), false, true );  
        
        wp_enqueue_script( 'zalora-customjs', get_template_directory_uri().'/js/customjs.js', array( 'jquery' ), false, true );  
        
    }
}
// enqueue base scripts and styles
add_action('wp_enqueue_scripts', 'zalora_scripts_method');

// enqueue admin scripts and styles    
if ( ! function_exists( 'zalora_post_admin_scripts_and_styles' ) ) {
    function zalora_post_admin_scripts_and_styles($hook) {
        wp_register_style( 'zalora-admin',  get_template_directory_uri(). '/css/admin.css', array(), '' );
        add_editor_style('css/editorstyle.css');
        wp_enqueue_style('zalora-admin'); // enqueue it	
        wp_enqueue_script( 'zalora-admin-js', get_template_directory_uri().'/js/admin.js', array('jquery-ui-sortable'), '', true );
    	// loading admin styles only on edit + posts + new posts
    	if( $hook == 'post.php' || $hook == 'post-new.php' ) {
    			wp_register_script( 'zalora-post-review-admin',  get_template_directory_uri() . '/js/post-review-admin.js', array(), '', true);
    			wp_enqueue_script( 'zalora-post-review-admin' ); // enqueue it
   		}
    }
}
add_action('admin_enqueue_scripts', 'zalora_post_admin_scripts_and_styles');

if ( ! function_exists( 'zalora_theme_setup' ) ){

    function zalora_theme_setup() {
        add_image_size( 'zalora_200_200', 200, 200, true );			// Post Jaro ------------------------USED
        add_image_size( 'zalora_110_80', 110, 80, true );			// Post Jaro ------------------------USED
        add_image_size( 'zalora_690_395', 690, 395, true );        
        add_image_size( 'zalora_330_220', 330, 220, true );          // main post thumb  ---------------- USED (Megamenu)
       	add_image_size( 'zalora_630_400', 630, 400, true );			//  ----------------------------------USED (Classic Blog)
    	add_image_size( 'zalora_568_460', 568, 460, true );          // ----------------------------------USED
        add_image_size( 'zalora_569_259', 569, 259, true );          // ----------------------------------USED
        add_image_size( 'zalora_283_198', 283, 198, true );          // ----------------------------------USED
        add_image_size( 'zalora_900_500', 900, 500, true );        // main slider  -----------------------USED (Main Slider)
        add_image_size( 'zalora_750_375', 750, 375, true );          // Single page =------------------------USED
        add_image_size( 'zalora_auto-size', 400, 99999, false );        // Masonry  -----------------------USED (Masonry)
        add_image_size( 'zalora_400_550', 400, 550, true );          // Carousel  -----------------------USED (Carousel Slider)
        add_image_size( 'zalora_690_530', 690, 530, true ); // Jaro
        add_image_size( 'zalora_400_400', 400, 400, true );          // Carousel  -----------------------USED (Carousel Slider)
    }
}
add_action( 'after_setup_theme', 'zalora_theme_setup' );
 
/**
 * Register sidebars and widgetized areas.
 *---------------------------------------------------
 */
 if ( ! function_exists( 'zalora_widgets_init' ) ) {
    function zalora_widgets_init() {
        register_sidebar( array(
    		'name' => esc_html__('Home Full-width Section Top', 'zalora'),
    		'id' => 'fullwidth_section_top',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget' => '</div>',
    		'before_title' => '<div class="shadowfiend-header">',
    		'after_title' => '</div>',
            'description'   => esc_html__('Full-width section under main navigation of Homepage template. Drag [Full-width module] here like Module Grid etc.', 'zalora'),
    	) );
        
        register_sidebar( array(
    		'name' => esc_html__('Home Content Section', 'zalora'),
    		'id' => 'content_section',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget' => '</div>',
    		'before_title' => '<div class="shadowfiend-header">',
    		'after_title' => '</div>',
            'description'   => esc_html__('Content section of Homepage template. Drag [Content module] here like Module Posts One etc.', 'zalora'),
    	) );
        
        register_sidebar( array(
    		'name' => esc_html__('Home Sidebar', 'zalora'),
    		'id' => 'home_sidebar',
    		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    		'after_widget' => '</aside>',
    		'before_title' => '<div class="shadowfiend-header"><div class="main-title"><h3>',
    		'after_title' => '</h3></div></div>',
            'description'   => esc_html__('Sidebar of Homepage template. Drag [Sidebar widget] here like Widget Tabs etc.', 'zalora'),
    	) );
            
        register_sidebar( array(
    		'name' => esc_html__('Home Full-width Section Bottom', 'zalora'),
    		'id' => 'fullwidth_section_bottom',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget' => '</div>',
    		'before_title' => '<div class="shadowfiend-header">',
    		'after_title' => '</div>',
            'description'   => esc_html__('Full-width section above footer of Homepage template. Drag [Full-width module] here like Module Grid etc.', 'zalora'),
    	) );        
        
        register_sidebar( array(
    		'name' => esc_html__('Page Sidebar', 'zalora'),
    		'id' => 'page_sidebar',
    		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    		'after_widget' => '</aside>',
    		'before_title' => '<div class="shadowfiend-header"><div class="main-title"><h3>',
    		'after_title' => '</h3></div></div>',
            'description'   => esc_html__('Sidebar of all other pages excluding Homepage template.', 'zalora'),
    	) );
    
        register_sidebar( array(
    		'name' => esc_html__('Footer Sidebar 1', 'zalora'),
    		'id' => 'footer_sidebar_1',
    		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    		'after_widget' => '</aside>',
    		'before_title' => '<div class="shadowfiend-header"><div class="main-title"><h3>',
    		'after_title' => '</h3></div></div>',
    	) );
        
        register_sidebar( array(
    		'name' => esc_html__('Footer Sidebar 2', 'zalora'),
    		'id' => 'footer_sidebar_2',
    		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    		'after_widget' => '</aside>',
    		'before_title' => '<div class="shadowfiend-header"><div class="main-title"><h3>',
    		'after_title' => '</h3></div></div>',
    	) );
        
        register_sidebar( array(
    		'name' => esc_html__('Footer Sidebar 3', 'zalora'),
    		'id' => 'footer_sidebar_3',
    		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    		'after_widget' => '</aside>',
    		'before_title' => '<div class="shadowfiend-header"><div class="main-title"><h3>',
    		'after_title' => '</h3></div></div>',
    	) );
    }
}
add_action( 'widgets_init', 'zalora_widgets_init' );

require_once(get_template_directory()."/widgets/module_ticker.php");
require_once(get_template_directory()."/widgets/module_grid.php");
require_once(get_template_directory()."/widgets/module_main_slider.php");
require_once(get_template_directory()."/widgets/module_post_jaro.php");
require_once(get_template_directory()."/widgets/module_post_grid.php");
require_once(get_template_directory()."/widgets/module_carousel.php");
require_once(get_template_directory()."/widgets/module_carousel_large.php");
require_once(get_template_directory()."/widgets/module_masonry.php");
require_once(get_template_directory()."/widgets/module_classic_blog.php");
require_once(get_template_directory()."/widgets/module_large_blog.php");
require_once(get_template_directory()."/widgets/module_post_one.php");
require_once(get_template_directory()."/widgets/module_post_two.php");
require_once(get_template_directory()."/widgets/module_post_three.php");
require_once(get_template_directory()."/widgets/module_post_four.php");

require_once(get_template_directory()."/widgets/widget_social_counter.php");
require_once(get_template_directory()."/widgets/widget_slider.php");
require_once(get_template_directory()."/widgets/widget_posts_list.php");
require_once(get_template_directory()."/widgets/widget_flickr.php");
require_once(get_template_directory()."/widgets/widget_twitter.php");
require_once(get_template_directory()."/widgets/widget_google_badge.php");
require_once(get_template_directory()."/widgets/widget_latest_review.php");
require_once(get_template_directory()."/widgets/widget_top_review.php");
require_once(get_template_directory()."/widgets/widget_facebook.php");
require_once(get_template_directory()."/widgets/widget_ads.php");

require_once(get_template_directory()."/library/mega_menu.php");
require_once(get_template_directory()."/library/core.php");
require_once(get_template_directory()."/library/load_post.php");
require_once(get_template_directory()."/library/custom_css.php");
require_once(get_template_directory()."/library/translation.php");

/** Init WP file system **/
zalora_initWpFilesystem();

/**
 * Meta box & Taxonomy
 */
require_once(get_template_directory().'/library/meta_box_config.php');
require_once(get_template_directory().'/library/taxonomy-meta-config.php');

add_theme_support('title-tag');

/**
 * Register menu locations
 *---------------------------------------------------
 */
if ( ! function_exists( 'zalora_register_menu' ) ) {
    function zalora_register_menu() {
        
        register_nav_menu('menu-main',esc_html__( 'Main Menu', 'zalora'));
        register_nav_menu('menu-top',esc_html__( 'Top Menu', 'zalora'));
        
    }
}
add_action( 'init', 'zalora_register_menu' );


/**
 * Add support for the featured images (also known as post thumbnails).
 */
if ( function_exists( 'add_theme_support' ) ) { 
	add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
}

if ( !function_exists( 'zalora_add_theme_format' ) ) { 
    function zalora_add_theme_format() {
        if ( function_exists( 'add_theme_support' ) ) {
        add_theme_support( 'post-formats', array( 'gallery', 'video', 'image', 'audio' ) );
        }
    }
}
add_action('after_setup_theme', 'zalora_add_theme_format');

/**
 * Theme Options
 */
require_once( get_template_directory() . '/library/theme-option.php' );
/**
 * Tag cloud
 */
//Register tag cloud filter callback
add_filter('widget_tag_cloud_args', 'zalora_tag_widget_limit');

//Limit number of tags inside widget
function zalora_tag_widget_limit($args){

    //Check if taxonomy option inside widget is set to tags
    if(isset($args['taxonomy']) && $args['taxonomy'] == 'post_tag'){
        $args['number'] = 16; //Limit number of tags
        $args['orderby'] = 'count'; //Order by counts
        $args['order'] = 'DESC';
    }
    
    return $args;
}

function zalora_custom_excerpt_length( $length ) {
	return 999;
}
add_filter( 'excerpt_length', 'zalora_custom_excerpt_length', 999 );

$shadowfiend_option = zalora_global_var_declare('shadowfiend_option');
if(($shadowfiend_option != null) && ($shadowfiend_option['shadowfiend-search-result'] == 'yes')) {
        
    function zalora_remove_pages_from_search() {
        global $wp_post_types;
        $wp_post_types['page']->exclude_from_search = true;
        $wp_post_types['attachment']->exclude_from_search = true;
    }
    add_action('init', 'zalora_remove_pages_from_search');
}