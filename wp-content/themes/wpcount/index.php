<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
	            <form id="category-select" class="category-select" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
					<span class="archive" ><?php _e( 'Archive', 'wpcount' ); ?></span>
		            <select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
		                <option value=""><?php echo esc_attr( __( 'Select Month', 'wpcount' ) ); ?></option> 
		                <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
		            </select>

					<span class="category" ><?php _e( 'Category', 'wpcount' ); ?></span>
					<?php wp_dropdown_categories( 'show_count=1&hierarchical=1' ); ?>
					<input type="submit" class="category-submit" name="submit" value="view" />
					
				</form><br>

				<span class="style">
					<button class="btn" onclick="listView()"><i class="fa fa-bars"></i></button> 
					<button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i></button>
				</span>
	        				
            <div class="clearfix"></div>
       
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>


				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			?>

				<div class="clearfix"></div><br>

				<br><p align="center"> <?php echo paginate_links(); ?></p>
			
			<?php

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
