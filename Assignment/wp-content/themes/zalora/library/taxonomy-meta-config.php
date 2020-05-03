<?php
/**
 * Registering meta sections for taxonomies
 *
 * All the definitions of meta sections are listed below with comments, please read them carefully.
 * Note that each validation method of the Validation Class MUST return value.
 *
 * You also should read the changelog to know what has been changed
 *
 */

// Hook to 'admin_init' to make sure the class is loaded before
// (in case using the class in another plugin)
add_action( 'admin_init', 'shadowfiend_register_taxonomy_meta_boxes' );

/**
 * Register meta boxes
 *
 * @return void
 */
function shadowfiend_register_taxonomy_meta_boxes()
{
	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( !class_exists( 'RW_Taxonomy_Meta' ) )
		return;

	$meta_sections = array();

	// First meta section
	$meta_sections[] = array(
		'title'      => esc_html__('shadowfiend Category Options','zalora'),             // section title
		'taxonomies' => array('category', 'post_tag'), // list of taxonomies. Default is array('category', 'post_tag'). Optional
		'id'         => 'shadowfiend_cat_opt',                 // ID of each section, will be the option name

		'fields' => array(                             // List of meta fields
			// SELECT
			array(
				'name'    => esc_html__('Category layout','zalora'),
				'id'      => 'cat_layout',
				'type'    => 'select',
				'options' => array('global' => esc_html__('Global setting','zalora'),'grid-2' => esc_html__('Grid 2 columns','zalora'), 'grid-3' => esc_html__('Grid 3 columns','zalora'), 'masonry-2'=>esc_html__('Masonry 2 columns', 'zalora'), 'masonry-3'=>esc_html__('Masonry 3 columns', 'zalora'), 'classic-big'=>esc_html__('Classic big thumbnail', 'zalora'), 'classic-small'=>esc_html__('Classic small thumbnail', 'zalora'), 'large-blog'=>esc_html__('Large Blog', 'zalora')),
                'std' => 'global',
                'desc' => esc_html__('Global setting option is set in Theme Option panel','zalora')
			),
            // CHECKBOX
			array(
				'name' => esc_html__('Display featured slider','zalora'),
				'id'   => 'cat_feat',
				'type' => 'checkbox',
			),
		),
	);

	foreach ( $meta_sections as $meta_section )
	{
		new RW_Taxonomy_Meta( $meta_section );
	}
}
