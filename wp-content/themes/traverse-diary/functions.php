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

if ( ! function_exists( 'traverse_diary_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function traverse_diary_setup() {
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_image_size( 'traverse-diary-featured-post', 600, 400, true );

	}
endif;
add_action( 'after_setup_theme', 'traverse_diary_setup' );

/*----------------------------------------------------------------------------------------------------------------------------------------------*/

if ( ! function_exists( 'traverse_diary_fonts_url' ) ) :
	/**
	 * Register Google fonts for Traverse Diary.
	 *
	 * @return string Google fonts URL for the theme.
	 * @since 1.0.0
	 */
    function traverse_diary_fonts_url() {
        $fonts_url = '';
        $font_families = array();
        /*
         * Translators: If there are characters in your language that are not supported
         * by Lora translate this to 'off'. Do not translate into your own language.
         */
        if ( 'off' !== _x( 'on', 'Great Vibes: on or off', 'traverse-diary' ) ) {
            $font_families[] = 'Great Vibes:400';
        }
        if( $font_families ) {
            $query_args = array(
                'family' => urlencode( implode( '|', $font_families ) ),
                'subset' => urlencode( 'latin,latin-ext' ),
            );
            $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
        }
        return $fonts_url;
    }
endif;


/*--------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Enqueue scripts and styles.
 */

function traverse_diary_scripts() {
    $traverse_diary_version = '1.0.1';
    
    wp_enqueue_style( 'traverse-diary-fonts', traverse_diary_fonts_url(), array(), null );

    wp_dequeue_style( 'wp-diary-style' );
    
    wp_dequeue_style( 'wp-diary-responsive-style' );

    wp_enqueue_style( 'traverse-diary-parent-style', get_template_directory_uri() . '/style.css', array(), esc_attr( $traverse_diary_version ) );

    wp_enqueue_style( 'traverse-diary-parent-responsive-style', get_template_directory_uri() . '/assets/css/mt-responsive.css', array(), esc_attr( $traverse_diary_version ) );

    wp_enqueue_style( 'traverse-diary-style', get_stylesheet_uri(), array(), esc_attr( $traverse_diary_version ) );
    
    wp_enqueue_style( 'traverse-diary-responsive-style', get_stylesheet_directory_uri() . '/responsive.css', array(), esc_attr( $traverse_diary_version ) );

    	$traverse_diary_primary_color = get_theme_mod( 'wp_diary_primary_color', '#3cbbcc' );

    	$output_css = '';

        $output_css .= ".edit-link .post-edit-link,.reply .comment-reply-link,.widget_search .search-submit,.widget_search .search-submit,.widget_search .search-submit:hover,.mt-menu-search .mt-form-wrap .search-form .search-submit:hover,.menu-toggle:hover,.slider-btn,.entry-footer .mt-readmore-btn,article.sticky::before,.post-format-media--quote,.mt-gallery-slider .slick-prev.slick-arrow:hover,.mt-gallery-slider .slick-arrow.slick-next:hover,.wp_diary_social_media a:hover{ background: ". esc_attr( $traverse_diary_primary_color ) ."}\n";

        $output_css .= "a,a:hover,a:focus,a:active,.entry-footer a:hover ,.comment-author .fn .url:hover,.commentmetadata .comment-edit-link,#cancel-comment-reply-link,#cancel-comment-reply-link:before,.logged-in-as a,.widget a:hover,.widget a:hover::before,.widget li:hover::before,.mt-social-icon-wrap li a:hover,.site-title a:hover,.mt-sidebar-menu-toggle:hover,.mt-menu-search:hover,.sticky-header-sidebar-menu li a:hover,.slide-title a:hover,.entry-title a:hover,.cat-links a,.entry-title a:hover,.cat-links a:hover,.navigation.pagination .nav-links .page-numbers.current,.navigation.pagination .nav-links a.page-numbers:hover,#top-footer .widget-title ,#footer-menu li a:hover,.wp_diary_latest_posts .mt-post-title a:hover,#mt-scrollup:hover,.mt-featured-single-item .item-title a:hover{ color: ". esc_attr( $traverse_diary_primary_color ) ."}\n";
        
        $output_css .= ".widget_search .search-submit,.widget_search .search-submit:hover,.no-thumbnail,.navigation.pagination .nav-links .page-numbers.current,.navigation.pagination .nav-links a.page-numbers:hover ,#secondary .widget .widget-title,.mt-related-post-title,.error-404.not-found,.wp_diary_social_media a:hover{ border-color: ". esc_attr( $traverse_diary_primary_color ) ."}\n";

        $refine_output_css = wp_diary_css_strip_whitespace( $output_css );

        wp_add_inline_style( 'traverse-diary-style', $refine_output_css );
}
add_action( 'wp_enqueue_scripts', 'traverse_diary_scripts', 99 );

/*--------------------------------------------------------------------------------------------------------------------------------------*/
if( !function_exists( 'frontpage_featured_section' ) ):
	/**
	 * 
	 * Function for featured posts section
	 *
	 */
	function frontpage_featured_section(){
		if( !is_front_page() ) {
			return;
		}
		get_template_part( 'template-parts/featured', 'posts' );
	}
endif;
add_action( 'wp_diary_after_header', 'frontpage_featured_section', 20 );

/*---------------------------------------------------------------------------------------------------------------------*/

/**
 * Customizer file 
 *
 */
require get_stylesheet_directory() . '/customizer/customizer.php';