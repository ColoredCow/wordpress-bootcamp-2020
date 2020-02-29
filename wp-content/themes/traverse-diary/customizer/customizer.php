<?php
/**
 * Traverse Diary functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP Diary
 * @subpackage Traverse Diary
 * @since 1.0.0
 */


/**----------------------------------------------------------------------------------------------------------------------*/

add_action( 'init', 'traverse_diray_custom_fields' );

function traverse_diray_custom_fields() {

	/**
	 * Change theme default color
	 * Color Picker field for Primary Color
	 *
	 */ 
	Kirki::add_field( 
		'wp_diary_config', array(
			'type'        => 'color',
			'settings'    => 'wp_diary_primary_color',
			'label'       => __( 'Primary Color', 'traverse-diary' ),
			'section'     => 'colors',
			'default'     => '#3cbbcc',
		)
	);

	/**
	 * Featured Section
	 */
	Kirki::add_section( 'traverse_diary_section_featured_items', array(
		'title'    => esc_html__( 'Featured Section', 'traverse-diary' ),
		'priority' => 15,
	) );

	// Repeater field for featured items
	Kirki::add_field( 
		'wp_diary_config', array(
			'type'        	=> 'repeater',
			'label'       	=> esc_html__( 'Featured Items', 'traverse-diary' ),
			'description' 	=> esc_html__( 'Drag & Drop items to re-arrange the order', 'traverse-diary' ),
			'section'     	=> 'traverse_diary_section_featured_items',
			'priority'		=> 15,
			'row_label'   	=> array(
				'value' => esc_html__( 'Item', 'traverse-diary' ),
			),
			'button_label' => esc_attr__( 'Add new item', 'traverse-diary' ),
			'settings'    => 'traverse_diary_featured_items',
			'default'     => array(
				array(
					'item_image' 	 => '',
					'item_title'	 => '',
					'item_link' 	 => '',
				)
			),
			'fields'      => array(
				'item_image' 	=> array(
					'type'		=> 'image',
					'label'   	=> esc_html__( 'Item Image', 'traverse-diary' )
				),
				'item_title' => array(
					'type'    => 'text',
					'label'   => esc_html__( 'Item Title', 'traverse-diary' )
				),
				'item_link'	=> array(
					'type'			=> 'link',
					'label'   		=> esc_html__( 'Item Link', 'traverse-diary' )
				),
			),
		)
	);

}