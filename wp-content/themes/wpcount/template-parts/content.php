<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

?>
<article class="column post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	

	<?php if(has_post_thumbnail()): ?>

		<?php $defalt_arg =array('class' => "img-responsive mini"); ?>
		<?php the_post_thumbnail('', $defalt_arg); ?>
			        
	<?php else: ?> 

		<img class="default" src="<?php echo get_template_directory_uri().'/images/default.png'; ?>">	
	
	<?php endif; ?>

	<div class="post-content">

	<header class="entry-header" >
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		
		<?php
		endif; ?>		
	</header><!-- .entry-header -->

	<?php  wpcount_posted_on(); ?>

	<div class="entry-content">

		<?php if (is_search() || is_archive() || is_home() ) { ?>
				<P>
				<?php echo get_the_excerpt(''); ?>

				</p>
			<?php } else {

			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wpcount' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				esc_html(get_the_title())
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wpcount' ),
				'after'  => '</div>',
			) );	}
		?>
	</div><!-- .entry-content -->

	</div>

</article><!-- #post-<?php the_ID(); ?> -->

