<?php

/**
	ReduxFramework Config File
	For full documentation, please visit: https://github.com/ReduxFramework/ReduxFramework/wiki
**/

if ( !class_exists( "ReduxFramework" ) ) {
	return;
} 
if ( !class_exists( "Redux_Framework_config" ) ) {
	class Redux_Framework_config {

		public $args = array();
		public $sections = array();
		public $theme;
		public $ReduxFramework;

		public function __construct( ) {

			// Just for demo purposes. Not needed per say.
			$this->theme = wp_get_theme();

			// Set the default arguments
			$this->setArguments();
			
			// Set a few help tabs so you can see how it's done
			$this->setHelpTabs();

			// Create the sections and fields
			$this->setSections();
			
			if ( !isset( $this->args['opt_name'] ) ) { // No errors please
				return;
			}
			
			$this->ReduxFramework = new ReduxFramework($this->sections, $this->args);
			

			// If Redux is running as a plugin, this will remove the demo notice and links
			//add_action( 'redux/plugin/hooks', array( $this, 'remove_demo' ) );
			
			// Function to test the compiler hook and demo CSS output.
			//add_filter('redux/options/'.$this->args['opt_name'].'/compiler', array( $this, 'compiler_action' ), 10, 2); 
			// Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.

			// Change the arguments after they've been declared, but before the panel is created
			//add_filter('redux/options/'.$this->args['opt_name'].'/args', array( $this, 'change_arguments' ) );
			
			// Change the default value of a field after it's been set, but before it's been used
			//add_filter('redux/options/'.$this->args['opt_name'].'/defaults', array( $this,'change_defaults' ) );

			// Dynamically add a section. Can be also used to modify sections/fields
			add_filter('redux/options/'.$this->args['opt_name'].'/sections', array( $this, 'dynamic_section' ) );

		}


		/**

			This is a test function that will let you see when the compiler hook occurs. 
			It only runs if a field	set with compiler=>true is changed.

		**/

		function compiler_action($options, $css) {

		}



		/**
		 
		 	Custom function for filtering the sections array. Good for child themes to override or add to the sections.
		 	Simply include this function in the child themes functions.php file.
		 
		 	NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
		 	so you must use get_template_directory_uri() if you want to use any of the built in icons
		 
		 **/

		function dynamic_section($sections){
		    /*//$sections = array();
		    $sections[] = array(
		        'title' => esc_html__('Section via hook', 'redux-framework-demo'),
		        'desc' => esc_html__('<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'redux-framework-demo'),
				'icon' => 'el-icon-paper-clip',
				    // Leave this as a blank section, no options just some intro text set above.
		        'fields' => array()
		    );*/

		    return $sections;
		}
		
		
		/**

			Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.

		**/
		
		function change_arguments($args){
		    //$args['dev_mode'] = true;
		    
		    return $args;
		}
			
		
		/**

			Filter hook for filtering the default value of any given field. Very useful in development mode.

		**/

		function change_defaults($defaults){
		    $defaults['str_replace'] = "Testing filter hook!";
		    
		    return $defaults;
		}


		// Remove the demo link and the notice of integrated demo from the redux-framework plugin
		function remove_demo() {
			
			// Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
			if ( class_exists('ReduxFrameworkPlugin') ) {
				remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_meta_demo_mode_link'), null, 2 );
			}

			// Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
			remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );	

		}


		public function setSections() {

			/**
			 	Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
			 **/


			// Background Patterns Reader
			$sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
			$sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
			$sample_patterns      = array();

			ob_start();

			$ct = wp_get_theme();
			$this->theme = $ct;
			$item_name = $this->theme->get('Name'); 
			$tags = $this->theme->Tags;
			$screenshot = $this->theme->get_screenshot();
			$class = $screenshot ? 'has-screenshot' : '';

			$customize_title = sprintf( esc_html__( 'Customize &#8220;%s&#8221;','zalora'), $this->theme->display('Name') );

			?>
			<div id="current-theme" class="<?php echo esc_attr( $class ); ?>">
				<?php if ( $screenshot ) : ?>
					<?php if ( current_user_can( 'edit_theme_options' ) ) : ?>
					<a href="<?php echo esc_url(wp_customize_url()); ?>" class="load-customize hide-if-no-customize" title="<?php echo esc_attr( $customize_title ); ?>">
						<img src="<?php echo esc_url( $screenshot ); ?>" alt="<?php esc_attr_e( 'Current theme preview', 'zalora'); ?>" />
					</a>
					<?php endif; ?>
					<img class="hide-if-customize" src="<?php echo esc_url( $screenshot ); ?>" alt="<?php esc_attr_e( 'Current theme preview', 'zalora'); ?>" />
				<?php endif; ?>

				<h4>
					<?php echo (esc_attr($this->theme->display('Name'))); ?>
				</h4>

				<div>
					<ul class="theme-info">
						<li><?php printf( esc_html__('By %s','zalora'), $this->theme->display('Author') ); ?></li>
						<li><?php printf( esc_html__('Version %s','zalora'), $this->theme->display('Version') ); ?></li>
						<li><?php echo '<strong>'.esc_html__('Tags', 'zalora').':</strong> '; ?><?php printf( $this->theme->display('Tags') ); ?></li>
					</ul>
					<p class="theme-description"><?php echo esc_attr($this->theme->display('Description')); ?></p>
					<?php if ( $this->theme->parent() ) {
						printf( ' <p class="howto">' . esc_html__( 'This <a href="%1$s">child theme</a> requires its parent theme, %2$s.', 'zalora') . '</p>',
							esc_html__( 'http://codex.wordpress.org/Child_Themes','zalora'),
							$this->theme->parent()->display( 'Name' ) );
					} ?>
					
				</div>

			</div>

			<?php
			$item_info = ob_get_contents();
			    
			ob_end_clean();

			$sampleHTML = '';

			// ACTUAL DECLARATION OF SECTIONS
            
                $this->sections[] = array(
    				'icon' => 'el-icon-wrench',
    				'title' => esc_html__('General Settings', 'zalora'),
    				'fields' => array(
    					array(
    						'id'=>'shadowfiend-primary-color',
    						'type' => 'color',
    						'title' => esc_html__('Primary color', 'zalora'), 
    						'subtitle' => esc_html__('Pick a primary color for the theme.', 'zalora'),
    						'default' => '#FFCC0D',
    						'validate' => 'color',
						),
                        array(
    						'id'=>'shadowfiend-dark-color',
    						'type' => 'color',
    						'title' => esc_html__('Dark color', 'zalora'), 
    						'subtitle' => esc_html__('Pick dark color for the theme.', 'zalora'),
    						'default' => '#19232d',
    						'validate' => 'color',
						),	
    				)
    			);
                $this->sections[] = array(
    				'icon' => 'el-icon-tasks',
    				'title' => esc_html__('Site Layout', 'zalora'),
    				'fields' => array(
                        array(
    						'id'=>'shadowfiend-site-layout',
    						'type' => 'button_set',
    						'title' => esc_html__('Site layout', 'zalora'),
    						'subtitle'=> esc_html__('Choose between wide and boxed layout', 'zalora'),
    						'options' => array('1' => esc_html__('Wide', 'zalora'),'2' => esc_html__('Boxed', 'zalora')),
    						'default' => '1'
						),
                        array(
    						'id'=>'shadowfiend-body-bg',
    						'type' => 'background',
                            'required' => array('shadowfiend-site-layout','=','2'),
    						'output' => array('body'),
    						'title' => esc_html__('Site background', 'zalora'), 
    						'subtitle' => esc_html__('Choose background image or background color for boxed layout', 'zalora'),
						),
                        array(
    						'id'=>'shadowfiend-responsive-switch',
    						'type' => 'switch', 
    						'title' => esc_html__('Enable responsive', 'zalora'),
    						'subtitle'=> esc_html__('Enable responsive layout', 'zalora'),
    						'default' 		=> 1,
    						'on' => esc_html__('Enabled', 'zalora'),
    						'off' => esc_html__('Disabled', 'zalora'),
						),
                        array(
    						'id'=>'shadowfiend-sb-responsive-sw',
    						'type' => 'switch', 
    						'title' => esc_html__('Enable sidebar in responsive layout', 'zalora'),
    						'subtitle' => esc_html__('Choose to display or hide sidebar in responsive layout', 'zalora'),
    						"default" => 1,
    						'on' => esc_html__('Enabled', 'zalora'),
    						'off' => esc_html__('Disabled', 'zalora'),
						),
                        array(
    						'id'=>'shadowfiend-sb-sticky-sw',
    						'type' => 'switch', 
    						'title' => esc_html__('Enable sidebar sticky function', 'zalora'),
    						'subtitle' => esc_html__('Choose to Enable or Disable Sticky Sidebar function', 'zalora'),
    						"default" => 1,
    						'on' => esc_html__('Enabled', 'zalora'),
    						'off' => esc_html__('Disabled', 'zalora'),
						),
    				)
    			);
                $this->sections[] = array(
    				'icon' => 'el-icon-credit-card',
    				'title' => esc_html__('Header Settings', 'zalora'),
    				'fields' => array(
                        array(
    						'id'=>'shadowfiend-logo',
    						'type' => 'media', 
    						'url'=> true,
    						'title' => esc_html__('Site logo', 'zalora'),
    						'subtitle' => esc_html__('Upload logo of your site that is displayed in header', 'zalora'),
                            'placeholder' => esc_html__('No media selected','zalora')
						),
                        array(
    						'id'=>'shadowfiend-header-social-switch',
    						'type' => 'switch', 
    						'title' => esc_html__('Enable top-bar social', 'zalora'),
    						'subtitle' => esc_html__('Enable social icons in top-bar', 'zalora'),
    						"default" => 0,
    						'on' => esc_html__('Enabled', 'zalora'),
    						'off' => esc_html__('Disabled', 'zalora'),
						),	
                        array(
    						'id'=>'shadowfiend-social-header',
    						'type' => 'text',
                            'required' => array('shadowfiend-header-social-switch','=','1'),
    						'title' => esc_html__('Social media', 'zalora'),
    						'subtitle' => esc_html__('Set up social links for site', 'zalora'),
    						'options' => array('fb'=>'Facebook Url', 'twitter'=>'Twitter Url', 'gplus'=>'GPlus Url', 'linkedin'=>'Linkedin Url',
                                               'pinterest'=>'Pinterest Url', 'instagram'=>'Instagram Url', 'dribbble'=>'Dribbble Url', 
                                               'youtube'=>'Youtube Url', 'vimeo'=>'Vimeo Url', 'vk'=>'VK Url', 'rss'=>'RSS Url'),
    						'default' => array('fb'=>'', 'twitter'=>'', 'gplus'=>'', 'linkedin'=>'', 'pinterest'=>'', 'instagram'=>'', 'dribbble'=>'', 
                                                'youtube'=>'', 'vimeo'=>'', 'vk'=>'', 'rss'=>'')
						),
                        array(
    						'id'=>'shadowfiend-header-bg',
    						'type' => 'background',
    						'output' => array('.header-wrap'),
    						'title' => esc_html__('Header background', 'zalora'), 
    						'subtitle' => esc_html__('Choose background image or background color for site header', 'zalora'),
						),
                        array(
            				'id'=>'shadowfiend-header-layout',
            				'type' => 'select',
                            'title' => esc_html__('Header layout', 'zalora'), 
                            'subtitle' => esc_html__('Choose site header layout', 'zalora'),
                            'options' => array('left' => esc_html__('Left', 'zalora'),'center'=>esc_html__('Center', 'zalora')),                            
    						'default' => 'left',
        				),
                        array(
    						'id'=>'shadowfiend-fixed-nav-switch',
    						'type' => 'button_set', 
    						'title' => esc_html__('Enable fixed header menu', 'zalora'),
    						'subtitle'=> esc_html__('Choose between fixed and static header navigation', 'zalora'),
                            'options' => array('1' => esc_html__('Static', 'zalora'),'2' => esc_html__('Fixed', 'zalora')),
    						'default' => '1',
						),
                        array(
    						'id'=>'shadowfiend-header-banner-switch',
    						'type' => 'switch', 
    						'title' => esc_html__('Enable header banner', 'zalora'),
    						'subtitle' => esc_html__('Enable banner in header', 'zalora'),
    						"default" => 0,
    						'on' => esc_html__('Enabled', 'zalora'),
    						'off' => esc_html__('Disabled', 'zalora'),
						),
                        array(
    						'id'=>'shadowfiend-header-banner',
    						'type' => 'text',
                            'required' => array('shadowfiend-header-banner-switch','=','1'),
    						'title' => esc_html__('Header banner', 'zalora'),
    						'subtitle' => esc_html__('Set up banner displays in header', 'zalora'),
    						'options' => array('imgurl'=> esc_html__('Image URL', 'zalora'), 'linkurl'=> esc_html__('Link URL', 'zalora')),
    						'default' => array('imgurl'=>'http://', 'linkurl'=>'http://')
						),
                        array(
                            'id'=>'shadowfiend-banner-script',
                            'type' => 'textarea',
                            'title' => esc_html__('Google Adsense Code', 'zalora'),
                            'required' => array('shadowfiend-header-banner-switch','=','1'),
                            'default' => '',
                        ),
    				)
    			);
                $this->sections[] = array(
    				'icon' => 'el-icon-credit-card',
    				'title' => esc_html__('Footer Settings', 'zalora'),
    				'fields' => array(
                        array(
    						'id'=>'shadowfiend-footer-instagram',
    						'type' => 'switch',
    						'title' => esc_html__('Footer Instagram', 'zalora'),
    						'default' 	=> 0,
    						'on' => esc_html__('Enabled', 'zalora'),
    						'off' => esc_html__('Disabled', 'zalora'),
						),
                        array(
                            'id' => 'section-instagram-header-start',
                            'title' => esc_html__('Footer Instagram Setting', 'zalora'),
                            'subtitle' => '',
                            'required' => array('shadowfiend-footer-instagram','=','1'),
                            'type' => 'section',                             
                            'indent' => true // Indent all options below until the next 'section' option is set.
                        ),
                        array(
    						'id'=>'shadowfiend-footer-instagram-title',
    						'title' => esc_html__('Instagram Section Title', 'zalora'),
                            'type' => 'text',                            
						),
                        array(
    						'id'=>'shadowfiend-footer-instagram-username',
    						'title' => esc_html__('Instagram Username', 'zalora'),
                            'type' => 'text',                            
						),
                        array(
                            'id' => 'section-instagram-header-end',
                            'type' => 'section',                             
                            'indent' => false // Indent all options below until the next 'section' option is set.
                        ),
                        array(
    						'id'=>'shadowfiend-backtop-switch',
    						'type' => 'switch', 
    						'title' => esc_html__('Scroll top button', 'zalora'),
    						'subtitle'=> esc_html__('Show scroll to top button in right lower corner of window', 'zalora'),
    						'default' 		=> 1,
    						'on' => esc_html__('Enabled', 'zalora'),
    						'off' => esc_html__('Disabled', 'zalora'),
						),
                        array(
    						'id'=>'cr-text',
    						'type' => 'textarea',
    						'title' => esc_html__('Copyright text - HTML Validated', 'zalora'), 
    						'subtitle' => esc_html__('HTML Allowed (wp_kses)', 'zalora'),
    						'validate' => 'html', //see http://codex.wordpress.org/Function_Reference/wp_kses_post
    						'default' => '',
						),
    				)
    			);
                $this->sections[] = array(
            		'icon'    => ' el-icon-font',
            		'title'   => esc_html__('Typography', 'zalora'),
            		'fields'  => array(
                        array(
            				'id'=>'shadowfiend-header-font',
            				'type' => 'typography', 
                            'output' => array('.main-nav #main-menu .menu > li > a, .top-nav ul.menu > li, .shadowfiend-mega-menu .shadowfiend-sub-menu > li > a,
                            .shadowfiend-dropdown-menu .shadowfiend-sub-menu > li > a'),
            				'title' => esc_html__('Navigation font', 'zalora'),
            				//'compiler'=>true, // Use if you want to hook in your own CSS compiler
            				'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
            				//'font-style'=>false, // Includes font-style and weight. Can use font-style or font-weight to declare
            				//'subsets'=>false, // Only appears if google is true and subsets not set to false
            				'font-size'=>false,
            				'line-height'=>false,
            				//'word-spacing'=>true, // Defaults to false
            				//'letter-spacing'=>true, // Defaults to false
            				'color'=>false,
            				//'preview'=>false, // Disable the previewer
            				'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
            				'units'=>'px', // Defaults to px
                            'text-align' => false,
            				'subtitle'=> esc_html__('Font options for menu, category title and module title', 'zalora'),
            				'default'=> array( 
            					'font-weight'=>'700', 
            					'font-family'=>'Roboto', 
            					'google' => true,
            				    ),
                        ),
                        array(
            				'id'=>'shadowfiend-meta-font',
            				'type' => 'typography', 
                            'output' => array('.post-meta, .post-cat, .meta-bottom .post-author, .rating-wrap'),
            				'title' => esc_html__('Post Meta font', 'zalora'),
            				//'compiler'=>true, // Use if you want to hook in your own CSS compiler
            				'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
            				//'font-style'=>false, // Includes font-style and weight. Can use font-style or font-weight to declare
            				//'subsets'=>false, // Only appears if google is true and subsets not set to false
            				'font-size'=>false,
            				'line-height'=>false,
            				//'word-spacing'=>true, // Defaults to false
            				//'letter-spacing'=>true, // Defaults to false
            				'color'=>false,
            				//'preview'=>false, // Disable the previewer
            				'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
            				'units'=>'px', // Defaults to px
                            'text-align' => false,
            				'subtitle'=> esc_html__('Font options for title of posts', 'zalora'),
            				'default'=> array( 
            					'font-weight'=>'400', 
            					'font-family'=>'Lato', 
            					'google' => true,
            				    ),
                        ),
                        array(
            				'id'=>'shadowfiend-title-font',
            				'type' => 'typography', 
                            'output' => array('h1, h2, h3, h4, h5, h5, h6, .post-title , .grid-container .post-info .post-title , .post-title.post-title-masonry, .post-nav-link-title h3,
                            .recentcomments a:last-child, ul.ticker li h2 a, .header .logo.logo-text h1, .widget_recent_entries a, .loadmore-button .ajax-load-btn, .widget_nav_menu > div > ul > li'),
            				'title' => esc_html__('Post title font', 'zalora'),
            				//'compiler'=>true, // Use if you want to hook in your own CSS compiler
            				'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
            				//'font-style'=>false, // Includes font-style and weight. Can use font-style or font-weight to declare
            				//'subsets'=>false, // Only appears if google is true and subsets not set to false
            				'font-size'=>false,
            				'line-height'=>false,
            				//'word-spacing'=>true, // Defaults to false
            				//'letter-spacing'=>true, // Defaults to false
            				'color'=>false,
            				//'preview'=>false, // Disable the previewer
            				'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
            				'units'=>'px', // Defaults to px
                            'text-align' => false,
            				'subtitle'=> esc_html__('Font options for title of posts', 'zalora'),
            				'default'=> array( 
            					'font-weight'=>'700', 
            					'font-family'=>'Playfair Display', 
            					'google' => true,
            				    ),
                        ),
                        array(
            				'id'=>'shadowfiend-module-title-font',
            				'type' => 'typography', 
                            'output' => array('.shadowfiend-header .shadowfiend-title h3, .shadowfiend-header .main-title h3, .footer .shadowfiend-header .main-title h3'),
            				'title' => esc_html__('Module title font', 'zalora'),
            				//'compiler'=>true, // Use if you want to hook in your own CSS compiler
            				'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
            				//'font-style'=>false, // Includes font-style and weight. Can use font-style or font-weight to declare
            				//'subsets'=>false, // Only appears if google is true and subsets not set to false
            				'font-size'=>false,
            				'line-height'=>false,
            				//'word-spacing'=>true, // Defaults to false
            				//'letter-spacing'=>true, // Defaults to false
            				'color'=>false,
            				//'preview'=>false, // Disable the previewer
            				'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
            				'units'=>'px', // Defaults to px
                            'text-align' => false,
            				'subtitle'=> esc_html__('Font options for title of Modules', 'zalora'),
            				'default'=> array( 
            					'font-weight'=>'700', 
            					'font-family'=>'Playfair Display', 
            					'google' => true,
            				    ),
                        ),
                        array(
            				'id'=>'shadowfiend-body-font',
            				'type' => 'typography',
                            'output' => array('body, textarea, input, p, 
                            .entry-excerpt, .comment-text, .comment-author, .article-content,
                            .comments-area, .tag-list, .shadowfiend-author-meta h3 '), 
            				'title' => esc_html__('Text font', 'zalora'),
            				//'compiler'=>true, // Use if you want to hook in your own CSS compiler
            				'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
            				//'font-style'=>false, // Includes font-style and weight. Can use font-style or font-weight to declare
            				//'subsets'=>false, // Only appears if google is true and subsets not set to false
            				'font-fsize'=>false,
            				'line-height'=>false,
            				//'word-spacing'=>true, // Defaults to false
            				//'letter-spacing'=>true, // Defaults to false
            				'color'=>false,
            				//'preview'=>false, // Disable the previewer
            				'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
            				'units'=>'px', // Defaults to px
                            'text-align' => false,
            				'subtitle'=> esc_html__('Font options for text body', 'zalora'),
            				'default'=> array(
            					'font-weight'=>'400', 
            					'font-family'=>'Lato', 
            					'google' => true,
                            ),
            			),
                    ),
                );
                $this->sections[] = array(
    				'icon' => 'el-icon-file-edit',
    				'title' => esc_html__('Post Settings', 'zalora'),
    				'fields' => array(
                        array(
                            'id' => 'section-postmeta-start',
                            'title' => esc_html__('Post meta', 'zalora'),
                            'subtitle' => esc_html__('Options for displaying post meta in modules and widgets','zalora'),
                            'type' => 'section',                             
                            'indent' => true // Indent all options below until the next 'section' option is set.
                        ),
                        array(
                            'id'=>'shadowfiend-meta-review-sw',
                            'type' => 'switch',
                            'title' => esc_html__('Enable post meta review score', 'zalora'),
                            "default" => 1,
    						'on' => esc_html__('Enabled', 'zalora'),
    						'off' => esc_html__('Disabled', 'zalora'),
                        ),
                        array(
                            'id'=>'shadowfiend-meta-author-sw',
                            'type' => 'switch',
                            'title' => esc_html__('Enable post meta author', 'zalora'),
                            "default" => 1,
    						'on' => esc_html__('Enabled', 'zalora'),
    						'off' => esc_html__('Disabled', 'zalora'),
                        ),
                        array(
                            'id'=>'shadowfiend-meta-date-sw',
                            'type' => 'switch',
                            'title' => esc_html__('Enable post meta date', 'zalora'),
                            "default" => 1,
    						'on' => esc_html__('Enabled', 'zalora'),
    						'off' => esc_html__('Disabled', 'zalora'),
                        ),
                        array(
                            'id'=>'shadowfiend-meta-comments-sw',
                            'type' => 'switch',
                            'title' => esc_html__('Enable post meta comments', 'zalora'),
                            "default" => 1,
    						'on' => esc_html__('Enabled', 'zalora'),
    						'off' => esc_html__('Disabled', 'zalora'),
                        ),
                        array(
                            'id'=>'shadowfiend-meta-readmore-sw',
                            'type' => 'switch',
                            'title' => esc_html__('Enable post readmore button', 'zalora'),
                            "default" => 1,
    						'on' => esc_html__('Enabled', 'zalora'),
    						'off' => esc_html__('Disabled', 'zalora'),
                        ),
                        array(
                            'id' => 'section-postmeta-end',
                            'type' => 'section',                             
                            'indent' => false // Indent all options below until the next 'section' option is set.
                        ),
                        
    				)
    			);
                $this->sections[] = array(
            		'icon'    => 'el-icon-book',
            		'title'   => esc_html__('Pages Setting', 'zalora'),
            		'heading' => esc_html__('Pages Setting','zalora'),
            		'desc'    => esc_html__('Setting layout for pages', 'zalora'),
            		'fields'  => array(
                        array(
                            'id'=>'shadowfiend-sidebar-sticky',
                            'type' => 'switch',
                            'title' => esc_html__('Enable Sticky Sidebar', 'zalora'),
                            "default" => 1,
    						'on' => esc_html__('Enabled', 'zalora'),
    						'off' => esc_html__('Disabled', 'zalora'),
                        ),
                        array(
            				'id'=>'shadowfiend-blog-layout',
            				'type' => 'select',
                            'title' => esc_html__('Blog page layout', 'zalora'), 
    						'options' => array('grid-2' => esc_html__('Grid 2 columns','zalora'), 'grid-3' => esc_html__('Grid 3 columns','zalora'), 'masonry-2'=>esc_html__('Masonry 2 columns', 'zalora'), 'masonry-3'=>esc_html__('Masonry 3 columns', 'zalora'), 'classic-big'=>esc_html__('Classic big thumbnail', 'zalora'), 'classic-small'=>esc_html__('Classic small thumbnail', 'zalora'), 'large-blog'=>esc_html__('Large Blog', 'zalora')),
    						'default' => 'masonry-2',
            			),
                        array(
            				'id'=>'shadowfiend-author-layout',
            				'type' => 'select',
                            'title' => esc_html__('Author page layout', 'zalora'), 
    						'options' => array('grid-2' => esc_html__('Grid 2 columns','zalora'), 'grid-3' => esc_html__('Grid 3 columns','zalora'), 'masonry-2'=>esc_html__('Masonry 2 columns', 'zalora'), 'masonry-3'=>esc_html__('Masonry 3 columns', 'zalora'), 'classic-big'=>esc_html__('Classic big thumbnail', 'zalora'), 'classic-small'=>esc_html__('Classic small thumbnail', 'zalora'), 'large-blog'=>esc_html__('Large Blog', 'zalora')),
    						'default' => 'masonry-2',
            			),
                        array(
            				'id'=>'shadowfiend-category-layout',
            				'type' => 'select',
                            'title' => esc_html__('Category page layout', 'zalora'),
                            'subtitle' => esc_html__('Global setting for layout of category archive page, will be overridden by layout option in category edit page.', 'zalora'), 
    						'options' => array('grid-2' => esc_html__('Grid 2 columns','zalora'), 'grid-3' => esc_html__('Grid 3 columns','zalora'), 'masonry-2'=>esc_html__('Masonry 2 columns', 'zalora'), 'masonry-3'=>esc_html__('Masonry 3 columns', 'zalora'), 'classic-big'=>esc_html__('Classic big thumbnail', 'zalora'), 'classic-small'=>esc_html__('Classic small thumbnail', 'zalora'), 'large-blog'=>esc_html__('Large Blog', 'zalora')),
    						'default' => 'masonry-2',
            			),
                        array(
            				'id'=>'shadowfiend-archive-layout',
            				'type' => 'select',
                            'title' => esc_html__('Archive page layout', 'zalora'), 
                            'subtitle' => esc_html__('Layout for Archive page and Tag archive.', 'zalora'),
    						'options' => array('grid-2' => esc_html__('Grid 2 columns','zalora'), 'grid-3' => esc_html__('Grid 3 columns','zalora'), 'masonry-2'=>esc_html__('Masonry 2 columns', 'zalora'), 'masonry-3'=>esc_html__('Masonry 3 columns', 'zalora'), 'classic-big'=>esc_html__('Classic big thumbnail', 'zalora'), 'classic-small'=>esc_html__('Classic small thumbnail', 'zalora'), 'large-blog'=>esc_html__('Large Blog', 'zalora')),
    						'default' => 'masonry-2',
            			),
                        array(
            				'id'=>'shadowfiend-search-layout',
            				'type' => 'select',
                            'title' => esc_html__('Search page layout', 'zalora'), 
                            'subtitle' => esc_html__('Layout for Search page', 'zalora'),
    						'options' => array('grid-2' => esc_html__('Grid 2 columns','zalora'), 'grid-3' => esc_html__('Grid 3 columns','zalora'), 'masonry-2'=>esc_html__('Masonry 2 columns', 'zalora'), 'masonry-3'=>esc_html__('Masonry 3 columns', 'zalora'), 'classic-big'=>esc_html__('Classic big thumbnail', 'zalora'), 'classic-small'=>esc_html__('Classic small thumbnail', 'zalora'), 'large-blog'=>esc_html__('Large Blog', 'zalora')),
    						'default' => 'masonry-2',
            			),
                        array(
            				'id'=>'shadowfiend-search-result',
            				'type' => 'select',
                            'title' => esc_html__('Remove Pages in Search Result', 'zalora'),
    						'options' => array('yes' => esc_html__('yes', 'zalora'), 'no' => esc_html__('no', 'zalora')),
    						'default' => 'yes',
            			),
                    ),
                );
                $this->sections[] = array(
    				'icon' => 'el-icon-list-alt',
    				'title' => esc_html__('Single Settings', 'zalora'),
    				'fields' => array(
                        array(
    						'id'=>'shadowfiend-single-featimg',
    						'type' => 'switch', 
    						'title' => esc_html__('Enable featured image', 'zalora'),
    						'subtitle' => esc_html__('Enable featured image in single post', 'zalora'),
    						"default" => 1,
    						'on' => esc_html__('Enabled', 'zalora'),
    						'off' => esc_html__('Disabled', 'zalora'),
						),
                        array(
    						'id'=>'shadowfiend-sharebox-sw',
    						'type' => 'switch', 
    						'title' => esc_html__('Enable share box', 'zalora'),
    						'subtitle' => esc_html__('Enable share links below single post', 'zalora'),
    						"default" => 1,
    						'on' => esc_html__('Enabled', 'zalora'),
    						'off' => esc_html__('Disabled', 'zalora'),
                            'indent' => true
						),
                        array(
                            'id'=>'section-sharebox-start',
                            'type' => 'section',                             
                            'indent' => true // Indent all options below until the next 'section' option is set.
                        ),
                        array(
                            'id'=>'shadowfiend-fb-sw',
                            'type' => 'switch',
                            'title' => esc_html__('Enable Facebook share link', 'zalora'),
                            "default" => 1,
    						'on' => esc_html__('Enabled', 'zalora'),
    						'off' => esc_html__('Disabled', 'zalora'),
                        ),
                        array(
                            'id'=>'shadowfiend-tw-sw',
                            'type' => 'switch',
                            'title' => esc_html__('Enable Twitter share link', 'zalora'),
                            "default" => 1,
    						'on' => esc_html__('Enabled', 'zalora'),
    						'off' => esc_html__('Disabled', 'zalora'),
                        ),
                        array(
                            'id'=>'shadowfiend-gp-sw',
                            'type' => 'switch',
                            'title' => esc_html__('Enable Google+ share link', 'zalora'),
                            "default" => 1,
    						'on' => esc_html__('Enabled', 'zalora'),
    						'off' => esc_html__('Disabled', 'zalora'),
                        ),
                        array(
                            'id'=>'shadowfiend-pi-sw',
                            'type' => 'switch',
                            'title' => esc_html__('Enable Pinterest share link', 'zalora'),
                            "default" => 1,
    						'on' => esc_html__('Enabled', 'zalora'),
    						'off' => esc_html__('Disabled', 'zalora'),
                        ),
                        array(
                            'id'=>'shadowfiend-li-sw',
                            'type' => 'switch',
                            'title' => esc_html__('Enable Linkedin share link', 'zalora'),
                            "default" => 1,
    						'on' => esc_html__('Enabled', 'zalora'),
    						'off' => esc_html__('Disabled', 'zalora'),
                        ),
                        array(
                            'id'=>'section-sharebox-end',
                            'type' => 'section', 
                            'indent' => false // Indent all options below until the next 'section' option is set.
                        ), 
                        array(
    						'id'=>'shadowfiend-authorbox-sw',
    						'type' => 'switch', 
    						'title' => esc_html__('Enable author box', 'zalora'),
    						'subtitle' => esc_html__('Enable author information below single post', 'zalora'),
    						"default" => 1,
    						'on' => esc_html__('Enabled', 'zalora'),
    						'off' => esc_html__('Disabled', 'zalora'),
						),
                        array(
    						'id'=>'shadowfiend-postnav-sw',
    						'type' => 'switch', 
    						'title' => esc_html__('Enable post navigation', 'zalora'),
    						'subtitle' => esc_html__('Enable post navigation below single post', 'zalora'),
    						"default" => 1,
    						'on' => esc_html__('Enabled', 'zalora'),
    						'off' => esc_html__('Disabled', 'zalora'),
						),
                        array(
    						'id'=>'shadowfiend-related-sw',
    						'type' => 'switch', 
    						'title' => esc_html__('Enable related posts', 'zalora'),
    						'subtitle' => esc_html__('Enable related posts below single post', 'zalora'),
    						"default" => 1,
    						'on' => esc_html__('Enabled', 'zalora'),
    						'off' => esc_html__('Disabled', 'zalora'),
						),  
                        array(
    						'id'=>'shadowfiend-comment-sw',
    						'type' => 'switch', 
    						'title' => esc_html__('Enable comment section', 'zalora'),
    						'subtitle' => esc_html__('Enable comment section below single post', 'zalora'),
    						"default" => 1,
    						'on' => esc_html__('Enabled', 'zalora'),
    						'off' => esc_html__('Disabled', 'zalora'),
						),    	
    				)
    			);
                $this->sections[] = array(
    				'icon' => 'el-icon-css',
    				'title' => esc_html__('Custom CSS', 'zalora'),
    				'fields' => array(
                        array(
    						'id'=>'shadowfiend-css-code',
    						'type' => 'ace_editor',
    						'title' => esc_html__('CSS Code', 'zalora'), 
    						'subtitle' => esc_html__('Paste your CSS code here.', 'zalora'),
    						'mode' => 'css',
    			            'theme' => 'chrome',
    						'desc' => esc_html__('Possible modes can be found at <a href="http://ace.c9.io" target="_blank">', 'zalora').'http://ace.c9.io/</a>.',
    			            'default' => "",
    					),                                           	
    				)
    			);				
					

			$theme_info = '<div class="redux-framework-section-desc">';
			$theme_info .= '<p class="redux-framework-theme-data description theme-uri">'.esc_html__('<strong>Theme URL:</strong> ', 'zalora').'<a href="'.$this->theme->get('ThemeURI').'" target="_blank">'.$this->theme->get('ThemeURI').'</a></p>';
			$theme_info .= '<p class="redux-framework-theme-data description theme-author">'.esc_html__('<strong>Author:</strong> ', 'zalora').$this->theme->get('Author').'</p>';
			$theme_info .= '<p class="redux-framework-theme-data description theme-version">'.esc_html__('<strong>Version:</strong> ', 'zalora').$this->theme->get('Version').'</p>';
			$theme_info .= '<p class="redux-framework-theme-data description theme-description">'.$this->theme->get('Description').'</p>';
			$tabs = $this->theme->get('Tags');
			if ( !empty( $tabs ) ) {
				$theme_info .= '<p class="redux-framework-theme-data description theme-tags">'.esc_html__('<strong>Tags:</strong> ', 'zalora').implode(', ', $tabs ).'</p>';	
			}
			$theme_info .= '</div>';

			$this->sections[] = array(
				'type' => 'divide',
			);

			$this->sections[] = array(
				'icon' => 'el-icon-info-sign',
				'title' => esc_html__('Theme Information', 'zalora'),
				'fields' => array(
					array(
						'id'=>'raw_new_info',
						'type' => 'raw',
						'content' => $item_info,
						)
					),   
				);
		}	

		public function setHelpTabs() {
		}


		/**
			
			All the possible arguments for Redux.
			For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments

		 **/
		public function setArguments() {
			
			$theme = wp_get_theme(); // For use with some settings. Not necessary.

			$this->args = array(
	            
	            // TYPICAL -> Change these values as you need/desire
				'opt_name'          	=> 'zalora_option', // This is where your data is stored in the database and also becomes your global variable name.
				'display_name'			=> $theme->get('Name'), // Name that appears at the top of your panel
				'display_version'		=> $theme->get('Version'), // Version that appears at the top of your panel
				'menu_type'          	=> 'menu', //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
				'allow_sub_menu'     	=> true, // Show the sections below the admin menu item or not
				'menu_title'			=> esc_html__( 'Theme Options', 'zalora'),
	            'page'		 	 		=> esc_html__( 'Theme Options', 'zalora'),
	            'google_api_key'   	 	=> 'AIzaSyBdxbxgVuwQcnN5xCZhFDSpouweO-yJtxw', // Must be defined to add google fonts to the typography module
	            'global_variable'    	=> '', // Set a different name for your global variable other than the opt_name
	            'dev_mode'           	=> false, // Show the time the page took to load, etc
	            'customizer'         	=> true, // Enable basic customizer support

	            // OPTIONAL -> Give you extra features
	            'page_priority'      	=> null, // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
	            'page_parent'        	=> 'themes.php', // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
	            'page_permissions'   	=> 'manage_options', // Permissions needed to access the options panel.
	            'menu_icon'          	=> '', // Specify a custom URL to an icon
	            'last_tab'           	=> '', // Force your panel to always open to a specific tab (by id)
	            'page_icon'          	=> 'icon-themes', // Icon displayed in the admin panel next to your menu_title
	            'page_slug'          	=> '_options', // Page slug used to denote the panel
	            'save_defaults'      	=> true, // On load save the defaults to DB before user clicks save or not
	            'default_show'       	=> false, // If true, shows the default value next to each field that is not the default value.
	            'default_mark'       	=> '', // What to print by the field's title if the value shown is default. Suggested: *


	            // CAREFUL -> These options are for advanced use only
	            'transient_time' 	 	=> 60 * MINUTE_IN_SECONDS,
	            'output'            	=> true, // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
	            'output_tag'            	=> true, // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
	            //'domain'             	=> 'redux-framework', // Translation domain key. Don't change this unless you want to retranslate all of Redux.
	            //'footer_credit'      	=> '', // Disable the footer credit of Redux. Please leave if you can help it.
	            

	            // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
	            'database'           	=> '', // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
	            
	        
	            'show_import_export' 	=> true, // REMOVE
	            'system_info'        	=> false, // REMOVE
	            
	            'help_tabs'          	=> array(),
	            'help_sidebar'       	=> '', // esc_html__( '', $this->args['domain'] );            
				);


			// SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.		
			$this->args['share_icons'][] = array(
			    'url' => 'https://github.com/ReduxFramework/ReduxFramework',
			    'title' => 'Visit us on GitHub', 
			    'icon' => 'el-icon-github'
			    // 'img' => '', // You can use icon OR img. IMG needs to be a full URL.
			);		
			$this->args['share_icons'][] = array(
			    'url' => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
			    'title' => 'Like us on Facebook', 
			    'icon' => 'el-icon-facebook'
			);
			$this->args['share_icons'][] = array(
			    'url' => 'http://twitter.com/reduxframework',
			    'title' => 'Follow us on Twitter', 
			    'icon' => 'el-icon-twitter'
			);
			$this->args['share_icons'][] = array(
			    'url' => 'http://www.linkedin.com/company/redux-framework',
			    'title' => 'Find us on LinkedIn', 
			    'icon' => 'el-icon-linkedin'
			);

			
	 
			// Panel Intro text -> before the form
			if (!isset($this->args['global_variable']) || $this->args['global_variable'] !== false ) {
				if (!empty($this->args['global_variable'])) {
					$v = $this->args['global_variable'];
				} else {
					$v = str_replace("-", "_", $this->args['opt_name']);
				}
				$this->args['intro_text'] = '';
			} else {
				$this->args['intro_text'] = '';
			}

			// Add content after the form.
			$this->args['footer_text'] = '' ;

		}
	}
	new Redux_Framework_config();

}


/** 

	Custom function for the callback referenced above

 */
if ( !function_exists( 'redux_my_custom_field' ) ):
	function redux_my_custom_field($field, $value) {
	    print_r($field);
	    print_r($value);
	}
endif;

/**
 
	Custom function for the callback validation referenced above

**/
if ( !function_exists( 'redux_validate_callback_function' ) ):
	function redux_validate_callback_function($field, $value, $existing_value) {
	    $error = false;
	    $value =  'just testing';
	    /*
	    do your validation
	    
	    if(something) {
	        $value = $value;
	    } elseif(something else) {
	        $error = true;
	        $value = $existing_value;
	        $field['msg'] = 'your custom error message';
	    }
	    */
	    
	    $return['value'] = $value;
	    if($error == true) {
	        $return['error'] = $field;
	    }
	    return $return;
	}
endif;
