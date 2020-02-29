<?php
/**
 * WP Count functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

if ( ! function_exists( 'wpcount_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wpcount_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Icon Arena, use a find and replace
		 * to change 'wpcount' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'wpcount', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size('wpcount-full-thumb', 940, 0, true);
		add_image_size('wpcount-small-thumb', 396, 0, true );

		// Register Navigation Walker
		require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'wpcount' ),
		) );

		
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'wpcount_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

	}
endif;
add_action( 'after_setup_theme', 'wpcount_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */


//add menu

//add_theme_support('menus'); 

register_sidebar(array(

        'name' => __( 'Menu widget', 'wpcount' ),

        'id' => 'menuwidget',

        'description' => __( 'Widgets in this area will be shown on menu.', 'wpcount' ),

        'before_title' => '<h4 class="sidebar-title">',

        'after_title' => '</h4>',
        
        'before_widget' => '<div class="widget-item">',

        'after_widget' => '</div><!-- widget end -->',

    ) );
register_sidebar(array(

        'name' => __( 'Footer Area 1', 'wpcount' ),

        'id' => 'footer1',

        'description' => __( 'Widgets in this area will be shown on footer1.', 'wpcount' ),

        'before_title' => '<h4 class="sidebar-title">',

        'after_title' => '</h4>',
        
        'before_widget' => '<div class="widget-item">',

        'after_widget' => '</div><!-- widget end -->',

    ) );
register_sidebar(array(

        'name' => __( 'Footer Area 2', 'wpcount' ),

        'id' => 'footer2',

        'description' => __( 'Widgets in this area will be shown on footer2.', 'wpcount' ),

        'before_title' => '<h4 class="sidebar-title">',

        'after_title' => '</h4>',
        
        'before_widget' => '<div class="widget-item">',

        'after_widget' => '</div><!-- widget end -->',
    ) );
register_sidebar(array(

        'name' => __( 'Footer Area 3', 'wpcount' ),

        'id' => 'footer3',

        'description' => __( 'Widgets in this area will be shown on footer3.' , 'wpcount'),

        'before_title' => '<h4 class="sidebar-title">',

        'after_title' => '</h4>',
        
        'before_widget' => '<div class="widget-item">',

        'after_widget' => '</div><!-- widget end -->',
    ) );
register_sidebar(array(

        'name' => __( 'Footer Area 4', 'wpcount' ),

        'id' => 'footer4',

        'description' => __( 'Widgets in this area will be shown on footer4.', 'wpcount' ),

        'before_title' => '<h4 class="sidebar-title">',

        'after_title' => '</h4>',
        
        'before_widget' => '<div class="widget-item">',

        'after_widget' => '</div><!-- widget end -->',
    ) ); 




function wpcount_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wpcount_content_width', 640 );
}
add_action( 'after_setup_theme', 'wpcount_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wpcount_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wpcount' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wpcount' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wpcount_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wpcount_scripts() {
	
	wp_enqueue_style( 'wpcount-style', get_stylesheet_uri() );
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');	
	wp_enqueue_style('google-font', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' );

	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wpcount_scripts' );


/**
 * Excerpt.
 */
function wpcount_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wpcount' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' ;  
}
add_filter( 'excerpt_more', 'wpcount_excerpt_more' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
