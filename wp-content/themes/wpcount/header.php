<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="main-head">

	<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
	  
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<?php the_custom_logo(); ?>
		<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html(bloginfo( 'name' )); ?></a>

	        <?php
	        wp_nav_menu( array(
	            'theme_location'    => 'primary',
	            'depth'             => 9,
	            'container'         => 'div',
	            'container_class'   => 'collapse navbar-collapse',
	            'container_id'      => 'bs-example-navbar-collapse-1',
	            'menu_class'        => 'nav navbar-nav',
	            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
	            'walker'            => new WP_Bootstrap_Navwalker()
			) );
	        ?>

	</nav>

</div><!-- .main-head -->
</header><!-- #masthead -->
	
	<div id="content" class="site-content">

	<?php if(has_header_image()) : ?>
		<div id="masthead">
			<img class="banner" src="<?php echo esc_url(get_header_image()); ?>" >			
		</div>
	<?php endif; ?>
		