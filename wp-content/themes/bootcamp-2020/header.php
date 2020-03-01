<!doctype html>
<html lang="en">
  <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<title><?php  bloginfo( 'name' ); ?> - <?php echo get_the_title(); ?></title>
		<?php wp_head(); ?>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="#">
					<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					if ( has_custom_logo() ) { ?>
					        <img src="<?php echo esc_url( $logo[0] ); ?>" class="logo">
					        <?php 
					} else {
					        echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
					} ?>
				</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_class' => 'navbar-nav ml-auto',
					'container_class' => 'collapse navbar-collapse',
				) );
				?>
			</nav>
		</header>