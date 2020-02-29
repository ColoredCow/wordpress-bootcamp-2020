<?php

function mytheme_setup() {
 	/*
 	 * Enable support for Post Thumbnails on posts and pages.
 	 */
 	add_theme_support( 'post-thumbnails' );

 	// This theme uses wp_nav_menu() in two locations.
 	register_nav_menus(
 		array(
 			'menu-1' => 'Primary',
 			'footer' => 'Footer Menu',
 			'social' => 'Social Links Menu',
 		)
 	);

 	/**
 	 * Add support for core custom logo.
 	 */
 	add_theme_support(
 		'custom-logo',
 		array(
 			'height'      => 190,
 			'width'       => 190,
 			'flex-width'  => false,
 			'flex-height' => false,
 		)
 	);
}
add_action( 'after_setup_theme', 'mytheme_setup' );